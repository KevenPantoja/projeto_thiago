<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthenticatedSessionController extends Controller
{
    /**
     * Exibe o formulário de login.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login'); // Redireciona para o formulário de login
    }

    /**
     * Handle the incoming request to login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validar os dados do formulário
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Tentar autenticar o usuário
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Se a autenticação for bem-sucedida, regenera a sessão
            $request->session()->regenerate();
            
            // Redireciona para a página principal ou para a página desejada após login
            return redirect()->intended('/'); // Você pode personalizar o destino se necessário
        }

        // Caso a autenticação falhe, redireciona de volta com erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    /**
     * Handle user logout.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        // Faz o logout do usuário
        Auth::logout();

        // Regenera a sessão para evitar ataque de fixação de sessão
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redireciona para a página inicial após logout
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Validação dos dados do formulário
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'endereco' => 'required|string|max:255',
            'email' => 'required|email',
            'cidade' => 'required|string|max:255',
            'mensagem' => 'required|string|max:500',
        ]);

        // Lógica para enviar e-mail ou armazenar os dados
        // Exemplo: Enviar e-mail (configuração de Mail necessária)
        // Mail::to('email@destino.com')->send(new ContatoEmail($validated));

        // Retornar resposta para o usuário
        return back()->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}

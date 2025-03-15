@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section style="padding: 50px 20px;">
    <h2 style="text-align: center;">Login</h2>
    
    <!-- Formulário de Login -->
    <div style="max-width: 500px; margin: 0 auto; text-align: left;">
        <h3>Faça seu Login</h3>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="email" style="font-weight: bold;">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="password" style="font-weight: bold;">Senha:</label>
                <input type="password" id="password" name="password" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <button type="submit" 
                style="background-color: #333; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-weight: bold;">
                Entrar
            </button>
        </form>
        <p style="text-align: center; margin-top: 10px;">Ainda não tem uma conta? <a href="{{ route('register') }}">Cadastre-se</a></p>
    </div>

</section>
@endsection

@extends('layouts.app')

@section('title', 'Fale Conosco')

@section('content')
    <section style="background-color: #f4f4f4; padding: 50px 20px; text-align: center;">
        <h2>Entre em Contato</h2>
        <p>Se você quer saber mais sobre como podemos ajudar o seu negócio, entre em contato conosco!</p>

        @if(session('success'))
            <div style="background-color: #4CAF50; color: white; padding: 10px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contato.enviar') }}" method="POST" style="max-width: 600px; margin: 0 auto; text-align: left;">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="nome" style="font-weight: bold;">Nome:</label>
                <input type="text" id="nome" name="nome" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="telefone" style="font-weight: bold;">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="endereco" style="font-weight: bold;">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email" style="font-weight: bold;">E-mail:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="cidade" style="font-weight: bold;">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="mensagem" style="font-weight: bold;">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            </div>
            <button type="submit" style="background-color: #333; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-weight: bold;">Enviar</button>
        </form>
    </section>
@endsection

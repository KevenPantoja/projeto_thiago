@extends('layouts.app')

@section('title', 'Página Principal')

@section('content')
    <header style="background-color: #333; color: white; padding: 50px 20px; text-align: center;">
        <h1>Consultoria de Marketing e Serviços Web</h1>
        <p>Ajudando o seu negócio a crescer na era digital</p>

        <!-- Saudação ao usuário autenticado -->
        @auth
            <p>Bem-vindo, {{ Auth::user()->name }}! Você está logado.</p>
        @else
            <p>Por favor, <a href="{{ route('login') }}">faça login</a> para acessar todas as funcionalidades.</p>
        @endauth
    </header>

    <main>
        <section style="padding: 50px 20px;">
            <h2 style="text-align: center;">Nossos Serviços</h2>
            <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                <div style="width: 30%; padding: 20px; box-sizing: border-box; text-align: center;">
                    <h3>Marketing Digital</h3>
                    <p>Estratégias para aumentar a visibilidade do seu negócio.</p>
                </div>
                <div style="width: 30%; padding: 20px; box-sizing: border-box; text-align: center;">
                    <h3>Consultoria Web</h3>
                    <p>Otimização do seu site e presença online.</p>
                </div>
                <div style="width: 30%; padding: 20px; box-sizing: border-box; text-align: center;">
                    <h3>Gestão de Mídias Sociais</h3>
                    <p>Criação de conteúdo e gerenciamento de redes sociais.</p>
                </div>
            </div>
        </section>
    </main>

    <footer style="background-color: #333; color: white; padding: 20px 0; text-align: center;">
        <p>&copy; 2025 Consultoria de Marketing e Serviços Web. Todos os direitos reservados.</p>
        <p>&copy; Thrivex Agência e consultoria.</p>
    </footer>
@endsection

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Consultoria de Marketing e Serviços Web')</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        /* Barra de navegação horizontal */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar .logo img {
            max-height: 80px; /* Ajusta a altura da logo */
            width: auto;
        }

        .navbar .nav-links {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar .nav-links li {
            margin-left: 20px;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            display: block;
        }

        .navbar .nav-links a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        /* Estilo para o conteúdo principal (ajustado para a navbar fixa) */
        .main-content {
            margin-top: 100px; /* Dá um espaço para não sobrepor a navbar fixa */
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Barra de Navegação Horizontal -->
    <div class="navbar">
        <div class="logo">
            <a href="{{ url('/') }}" style="text-decoration: none; color: white;">
                <img src="{{ asset('logo.png') }}" alt="Logo"/>
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Página Principal</a></li>
            <li><a href="{{ route('sobre') }}">Sobre</a></li>
            <li><a href="{{ route('portfolio') }}">Portfólio</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('contato') }}">Fale Conosco</a></li>
            <li><a href="{{ route('area-cliente') }}">Área do Cliente</a></li>
        </ul>
    </div>

    <!-- Conteúdo principal -->
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>

@extends('layouts.app')

@section('title', 'Nossos Serviços')

@section('content')
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

@endsection

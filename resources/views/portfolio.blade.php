{{-- resources/views/portfolio.blade.php --}}
@extends('layouts.app')

@section('title', 'Portfólio')

@section('content')
    <div style="padding: 50px 20px;">
        <h2 style="text-align: center;">Nosso Portfólio</h2>
        <p style="text-align: center;">Confira alguns dos nossos projetos realizados.</p>
        
        <!-- Adicione o conteúdo do seu portfólio aqui -->
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
            <div style="width: 30%; padding: 20px; box-sizing: border-box; text-align: center;">
                <h3>Projeto 1</h3>
                <p>Descrição do projeto 1.</p>
            </div>
            <div style="width: 30%; padding: 20px; box-sizing: border-box; text-align: center;">
                <h3>Projeto 2</h3>
                <p>Descrição do projeto 2.</p>
            </div>
            <div style="width: 30%; padding: 20px; box-sizing: border-box; text-align: center;">
                <h3>Projeto 3</h3>
                <p>Descrição do projeto 3.</p>
            </div>
        </div>
    </div>
@endsection

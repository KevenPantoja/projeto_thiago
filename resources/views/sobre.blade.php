@extends('layouts.app')

@section('title', 'Sobre')

@section('content')
    <section style="padding: 50px 20px;">
        <h2 style="text-align: center;">Sobre Nós</h2>
        <p style="text-align: center;">Somos uma consultoria especializada em marketing digital e serviços web. Ajudamos empresas a crescerem na era digital com estratégias inovadoras.</p>
        <div style="text-align: center;">
            <img src="{{ asset('images/sobre.jpg') }}" alt="Sobre Nós" style="max-width: 100%; height: auto;">
        </div>
    </section>
@endsection

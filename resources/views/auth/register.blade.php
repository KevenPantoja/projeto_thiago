@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<section style="padding: 50px 20px;">
    <h2 style="text-align: center;">Cadastro de Novo Usuário</h2>
    
    <!-- Formulário de Cadastro -->
    <div style="max-width: 500px; margin: 0 auto; text-align: left;">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="name" style="font-weight: bold;">Nome Completo:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email" style="font-weight: bold;">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="phone" style="font-weight: bold;">Telefone:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="city" style="font-weight: bold;">Cidade / Estado:</label>
                <input type="text" id="city" name="city" value="{{ old('city') }}" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="type" style="font-weight: bold;">Tipo de Cadastro:</label>
                <select class="form-control" id="type" name="type" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="individual">Microempreendedor Individual</option>
                    <option value="company">Empresa Privada</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="password" style="font-weight: bold;">Senha:</label>
                <input type="password" id="password" name="password" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="password_confirmation" style="font-weight: bold;">Confirmar Senha:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                    style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <button type="submit" 
                style="background-color: #333; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-weight: bold;">
                Cadastrar
            </button>
        </form>
    </div>
</section>
@endsection

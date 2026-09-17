@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email">

        <br><br>

        <label>Curso:</label>
        <input type="text" name="curso">

        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
@endsection
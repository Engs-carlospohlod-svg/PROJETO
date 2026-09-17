@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    @if(true)
        <p>Preencha os dados do aluno:</p>
    @endif

    @foreach(['Nome', 'E-mail', 'Curso'] as $campo)
        <label>{{ $campo }}</label><br>
        <input type="text"><br><br>
    @endforeach
@endsection
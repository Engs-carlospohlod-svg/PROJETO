@extends('layouts.app')

@section('title', 'Aluno')

@section('content')
    <h1>Detalhes do Aluno</h1>

    @if(true)
        <p>Dados do aluno:</p>
    @endif

    @foreach(['Nome', 'Curso', 'Período'] as $informacao)
        <p>{{ $informacao }}</p>
    @endforeach
@endsection
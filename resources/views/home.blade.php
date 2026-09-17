@extends('layouts.app')

@section('title', 'Início')

@section('content')
    <h1>Página Inicial</h1>

    @if(true)
        <p>Bem-vindo ao sistema de alunos.</p>
    @endif

    @foreach(['João', 'Maria', 'Carlos'] as $aluno)
        <p>{{ $aluno }}</p>
    @endforeach
@endsection
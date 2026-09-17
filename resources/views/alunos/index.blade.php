@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
    <h1>Lista de Alunos</h1>

    @if(true)
        <p>Alunos cadastrados:</p>
    @endif

    @foreach(['João', 'Maria', 'Carlos'] as $aluno)
        <p>{{ $aluno }}</p>
    @endforeach
@endsection
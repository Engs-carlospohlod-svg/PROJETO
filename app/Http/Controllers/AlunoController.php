<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
}

public function consultas()
{
    $porCurso = Aluno::where('curso', 'Engenharia de Software')->get();

    $porNome = Aluno::where('nome', 'like', '%João%')->get();

    $recentes = Aluno::latest()->get();

    $total = Aluno::count();

    return compact('porCurso', 'porNome', 'recentes', 'total');
}
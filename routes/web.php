?php

use Illuminate\Support\Facades\Route;

Route::get('/sobre', function () {
    return 'Página Sobre';
});

Route::get('/alunos', function () {
    return 'Página de Alunos';
});

Route::get('/contato', function () {
    return 'Página de Contato';
});
Route::get('/contato', function () {
    return 'Página de Contato';
});

// ATV 2
Route::get('/produto/{id}', function ($id) {
    return 'Produto: ' . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return 'Categoria: ' . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return 'Usuario: ' . $id;
});
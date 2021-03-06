<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $notas = [
        'Primera Nota',
        'Segunda Nota',
        'Terceta Nota',
        'Cuarta Nota',
    ];
    return view('notas', ['notas' => $notas]);
})->name('listar');

Route::get('notas/{id}', function(){
    return view('Aqui veremos el detalle de las notas' .$id);
});

Route::get('agregar', function(){
    return view('agregar');
})->name('nuevanota');

Route::get('editar', function(){
    return view('editar');
});
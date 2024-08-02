<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/livros', [LivroController::class, 'retornaLivros']);
Route::get('/livro/{id}', [LivroController::class, 'mostrarLivro']);
Route::post('/livro', [LivroController::class, 'criarLivro']);
Route::put('/livro/{id}', [LivroController::class, 'atualizarLivro']);
Route::delete('/livro/{id}', [LivroController::class, 'excluirLivro']);

Route::get('/autores', [AutorController::class, 'retornaAutores']);
Route::get('/autor/{id}', [AutorController::class, 'mostrarAutor']);
Route::post('/autor', [AutorController::class, 'criarAutor']);
Route::put('/autor/{id}', [AutorController::class, 'atualizarAutor']);
Route::delete('/autor/{id}', [AutorController::class, 'excluirAutor']);

Route::get('/generos', [GeneroController::class, 'retornaGeneros']);
Route::get('/genero/{id}', [GeneroController::class, 'mostrarGenero']);
Route::post('/genero', [GeneroController::class, 'criarGenero']);
Route::put('/genero/{id}', [GeneroController::class, 'atualizarGenero']);
Route::delete('/genero/{id}', [GeneroController::class, 'excluirGenero']);

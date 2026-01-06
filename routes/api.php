<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;


Route::get('/livros', [LivroController::class, 'findAll']);
Route::get('/livro/{id}', [LivroController::class, 'find']);
Route::post('/livro', [LivroController::class, 'create']);
Route::put('/livro/{id}', [LivroController::class, 'update']);
Route::delete('/livro/{id}', [LivroController::class, 'delete']);

Route::get('/autores', [AutorController::class, 'findAll']);
Route::get('/autor/{id}', [AutorController::class, 'find']);
Route::post('/autor', [AutorController::class, 'create']);

Route::get('/generos', [GeneroController::class, 'findAll']);
Route::get('/genero/{id}', [GeneroController::class, 'find']);
Route::post('/genero', [GeneroController::class, 'create']);

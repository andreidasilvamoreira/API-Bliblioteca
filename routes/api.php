<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;


Route::get('/livros', [LivroController::class, 'findAll']);
Route::get('/livros/{id}', [LivroController::class, 'find']);
Route::post('/livros', [LivroController::class, 'create']);
Route::put('/livros/{id}', [LivroController::class, 'update']);
Route::delete('/livros/{id}', [LivroController::class, 'delete']);

Route::get('/autores', [AutorController::class, 'findAll']);
Route::get('/autores/{id}', [AutorController::class, 'find']);
Route::post('/autores', [AutorController::class, 'create']);

Route::get('/generos', [GeneroController::class, 'findAll']);
Route::get('/generos/{id}', [GeneroController::class, 'find']);
Route::post('/generos', [GeneroController::class, 'create']);

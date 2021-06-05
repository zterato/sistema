<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;


//chamar home
Route::get('/',[NoticiaController::class, 'home']);
Route::get('/home',[NoticiaController::class, 'home']);
Route::post('/home',[NoticiaController::class, 'home']);
Route::post('/',[NoticiaController::class, 'home']);

//chamar exibir
Route::get('/exibir',[NoticiaController::class, 'noticia']);
Route::post('/exibir',[NoticiaController::class, 'noticia']);

//chamar Cadastrar
Route::get('/cadastro',[NoticiaController::class, 'red']);
Route::post('/cadastro',[NoticiaController::class, 'red']);
Route::post('/adicionar',[NoticiaController::class, 'criar']);

//chamar consultar com redirecionamento
Route::post('/pesquisar',[NoticiaController::class, 'consultar']);
Route::get('/pesquisar',[NoticiaController::class, 'consultar']);




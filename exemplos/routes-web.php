<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));
Route::get('/sobre', fn () => 'PÃ¡gina de estudos Laravel');
Route::get('/saudacao/{nome}', fn (string $nome) => "OlÃ¡, {$nome}!");
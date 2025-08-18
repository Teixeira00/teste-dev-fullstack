<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutoController;

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/', function () {
    return 'API LARAVEL DE PRODUTOS RODANDO!';  
});
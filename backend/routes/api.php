<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutoController;


Route::get('/produtos', [ProdutoController::class, 'index']);        // Listar todos produtos
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);    // filtrar 1 produto

//parte com autenticação

Route::middleware('verifica.api')->group(function () {
Route::post('/produtos', [ProdutoController::class, 'store']);       // Criar produto
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);  // Atualizar 
Route::patch('/produtos/{id}', [ProdutoController::class, 'update']);  // Atualizar parcialmente
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']); // Apagar
});

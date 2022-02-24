<?php

use App\Http\Controllers\Api\ApiCategoriaControllher;
use App\Http\Controllers\Api\ApiTarefaControllher;

use Illuminate\Support\Facades\Route;


Route::get('categoria', [ApiCategoriaControllher::class, 'index']);
Route::post('categoria', [ApiCategoriaControllher::class, 'store']);
Route::put('categoria/{id}', [ApiCategoriaControllher::class, 'update']);
Route::delete('categoria/{id}', [ApiCategoriaControllher::class, 'destroy']);


Route::get('tarefa', [ApiTarefaControllher::class, 'index']);
Route::post('tarefa', [ApiTarefaControllher::class, 'store']);
Route::put('tarefa/{id}', [ApiTarefaControllher::class, 'update']);
Route::delete('tarefa/{id}',[ApiTarefaControllher::class, 'destroy']);







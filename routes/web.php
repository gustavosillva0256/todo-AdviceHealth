<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');
Route::post('painel', [UsuarioController::class, 'login'])->name('usuarios.login');


Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::post('categorias', [CategoriaController::class, 'insert'])->name('categorias.insert');
Route::get('categorias/inserir', [CategoriaController::class, 'create'])->name('categorias.inserir');
Route::get('categorias/{item}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('categorias/{item}', [CategoriaController::class, 'editar'])->name('categorias.editar');
Route::delete('categorias/{item}', [CategoriaController::class, 'delete'])->name('categorias.delete');
Route::get('categorias/{item}/delete', [CategoriaController::class, 'modal'])->name('categorias.modal');

Route::get('tarefas', [TarefaController::class, 'index'])->name('tarefas.index');
Route::post('tarefas', [TarefaController::class, 'insert'])->name('tarefas.insert');
Route::get('tarefas/inserir', [TarefaController::class, 'create'])->name('tarefas.inserir');
Route::get('tarefas/{item}/edit', [TarefaController::class, 'edit'])->name('tarefas.edit');
Route::put('tarefas/{item}', [TarefaController::class, 'editar'])->name('tarefas.editar');
Route::delete('tarefas/{item}', [TarefaController::class, 'delete'])->name('tarefas.delete');
Route::get('tarefas/{item}/delete', [TarefaController::class, 'modal'])->name('tarefas.modal');




Route::get('home-admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/', [UsuarioController::class, 'logout'])->name('usuarios.logout');
Route::put('admin/{usuario}', [AdminController::class, 'editar'])->name('admin.editar');





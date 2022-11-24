<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return 'Bem vindo ao TodoList, por gentileza, acesse /index na url.';
});

Route::get('/index',
 [TodoController::class, 'index']);
Route::get('/create',
 [TodoController::class, 'create']);
Route::get('/upload',
 [TodoController::class, 'upload']);
Route::get('/{id}/edit',
 [TodoController::class, 'edit']);
Route::patch('/update',
 [TodoController::class, 'update']);
Route::get('/{id}/completed',
 [TodoController::class, 'completed']);
Route::get('/{id}/delete',
 [TodoController::class, 'delete']);
<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [ProjectsController::class, 'index']);
Route::post('/projects', [ProjectsController::class, 'store']);

Route::get('/todos/{todo}', [TodosController::class, 'show']);
Route::patch('/todos/{todo}', [TodosController::class, 'update']);
Route::delete('/todos/{todo}', [TodosController::class, 'destroy']);
Route::post('/todos', [TodosController::class, 'store']);
Route::get('/todos', [TodosController::class, 'index']);


<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;


Route::get('project', [ProjectsController::class, 'index'])->name('project.index');

Route::get('todos', [TodosController::class, 'index'])->name('todos.index');
Route::get('todos/{id}', [TodosController::class, 'show'])->name('todos.show');
Route::post('todos/{id}', [TodosController::class, 'store'])->name('todos.store');
Route::patch('todos/{id}', [TodosController::class, 'update'])->name('todos.update');
Route::delete('todos/{id}', [TodosController::class, 'destroy'])->name('todos.destroy');



<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('projects', [ProjectsController::class, 'index'])->name('project.index');
Route::post('projects', [ProjectsController::class, 'store'])->name('project.store');

Route::get('todos', [TodosController::class, 'index'])->name('todos.index');
Route::post('todos', [TodosController::class, 'store'])->name('todos.store');
Route::get('todos/{id}', [TodosController::class, 'show'])->name('todos.show');
Route::patch('todos/{id}', [TodosController::class, 'update'])->name('todos.update');
Route::delete('todos/{id}', [TodosController::class, 'destroy'])->name('todos.destroy');



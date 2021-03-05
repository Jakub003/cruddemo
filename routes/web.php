<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;
  
Route::get('/ka', [KanbanController::class, 'index'])->name('kanban');
// Route::get('/test', [KanbanController::class, 'index'])->name('kanban');


// Route::get('kanbans/{kanban}', [KanbanController::class, 'destroy']);
Route::resource('kanbans', KanbanController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');
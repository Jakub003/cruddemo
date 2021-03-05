<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;

// Kanban
Route::get('kanban', [KanbanController::class, 'index'])->name('kanban');
Route::get('kanban/create', [KanbanController::class, 'create'])->name('kanban.create');
Route::post('kanban/store', [KanbanController::class, 'store'])->name('kanban.store');
Route::get('kanban/{kanban}/edit', [KanbanController::class, 'edit'])->name('kanban.edit');
Route::put('kanban/{kanban}/update', [KanbanController::class, 'update'])->name('kanban.update');

Route::put('kanban/{kanban}/show', [KanbanController::class, 'show'])->name('kanban.show');

Route::delete('kanban/{kanban}', [KanbanController::class, 'destroy'])->name('kanban.destroy');

// Route::resource('kanbans', KanbanController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');
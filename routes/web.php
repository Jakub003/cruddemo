<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\KanbanPageController;
use App\Http\Controllers\KanbanTagController;
use App\Http\Controllers\KanbanColumnController;

// Kanbans
Route::get('kanbans', [KanbanController::class, 'index'])->name('kanban');
Route::get('kanban/create', [KanbanController::class, 'create'])->name('kanban.create');
Route::post('kanban/store', [KanbanController::class, 'store'])->name('kanban.store');
Route::get('kanban/{kanban}/edit', [KanbanController::class, 'edit'])->name('kanban.edit');
Route::put('kanban/{kanban}/update', [KanbanController::class, 'update'])->name('kanban.update');
Route::get('kanban/{kanban}/show_all', [KanbanController::class, 'showAll'])->name('kanban.show');
Route::delete('kanban/{kanban}', [KanbanController::class, 'destroy'])->name('kanban.destroy');

// Kanban Pages
Route::get('kanban/{kanban}/{page}/show', [KanbanPageController::class, 'show'])->name('kanban.page.show');

// Kanban Tags
// Route::post('kanban/store', [KanbanTagController::class, 'store'])->name('kanban.tag.store');
// Route::put('kanban/{kanban}/update', [KanbanTagController::class, 'update'])->name('kanban.tag.update');
// Route::delete('kanban/{kanban}', [KanbanTagController::class, 'destroy'])->name('kanban.tag.destroy');


Route::get('/', function () {
    return view('welcome');
})->name('home');
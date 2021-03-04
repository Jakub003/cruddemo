<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;
  

Route::get('kanbans', [KanbanController::class, 'index']);

Route::resource('kanbans', KanbanController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');
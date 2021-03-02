<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;
  

Route::get('kanbans', [KanbanController::class, 'index']);



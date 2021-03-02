<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KanbanController extends Controller
{
    public function index()
    {
        $kanbans = Kanban::get();
    
        return view('kanbans.index',compact('kanbans'));
        
    }
}

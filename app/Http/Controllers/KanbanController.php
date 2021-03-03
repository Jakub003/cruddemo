<?php

namespace App\Http\Controllers;
use App\Models\Kanban; 

use Illuminate\Http\Request;

class KanbanController extends Controller
{
    public function index()
    {
        $kanbans = Kanban::get();
    
        return view('kanbans.index',compact('kanbans'));
        
    }
}

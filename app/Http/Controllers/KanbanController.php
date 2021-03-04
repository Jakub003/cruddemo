<?php

namespace App\Http\Controllers;
use App\Models\Kanban; 

use Illuminate\Http\Request;

class KanbanController extends Controller
{
    // Display Content - Only on a specific page that is specified 
    public function index()
    {
        $kanbans = Kanban::get();
    
        return view('kanbans.index',compact('kanbans'));
        
    }

    // Delete Content - When button is clicked on a specific page
    public function destroy(Kanban $kanban)
    {
        $kanban->delete();
    
        return redirect()->route('kanbans.index')
                        ->with('success','Item deleted successfully');
    }








}

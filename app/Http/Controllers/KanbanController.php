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

    // Display Individual Kanban Projects
    public function showAll(Kanban $kanban)
    {
        return view('kanbans.show_all',compact('kanban'));
    } 

    // Adding Content and Saving It
    public function create()
    {
        return view('kanbans.create');
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'kanban_color' => 'required',
            'kanban_icon' => 'required',
            'kanban_title' => 'required',
        ]);
    
        Kanban::create($request->all());
     
        return redirect()->route('kanban')
                        ->with('success','Title created successfully.');
    }

    // Update or Edit Items
    public function edit(Kanban $kanban)
    {
        return view('kanbans.edit',compact('kanban'));
    }

    public function update(Request $request, Kanban $kanban)
    {
        $request->validate([
            'kanban_color' => 'required',
            'kanban_icon' => 'required',
            'kanban_title' => 'required',
        ]);
    
        $kanban->update($request->all());
    
        return redirect()->route('kanban')
                        ->with('success','Title updated successfully');
    }

    // Delete Content - When button is clicked on a specific page
    public function destroy(Kanban $kanban)
    {
        $kanban->delete();
    
        return redirect()->route('kanban')
                        ->with('success','Item deleted successfully');
    }








}

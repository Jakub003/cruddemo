<?php

namespace App\Http\Controllers;

use App\Models\KanbanTask;
use Illuminate\Http\Request;

class KanbanTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KanbanTask  $kanbanTask
     * @return \Illuminate\Http\Response
     */
    public function show(KanbanTask $kanbanTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KanbanTask  $kanbanTask
     * @return \Illuminate\Http\Response
     */
    public function edit(KanbanTask $kanbanTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KanbanTask  $kanbanTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KanbanTask $kanbanTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KanbanTask  $kanbanTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(KanbanTask $kanban_task)
    {
        $kanban_task->delete();
    
        return redirect()->route('kanban')
                        ->with('success','Item deleted successfully');
    }
}

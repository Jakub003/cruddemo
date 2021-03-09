<?php

namespace App\Http\Controllers;

use App\Models\Kanban; 
use App\Models\KanbanPage;

use Illuminate\Http\Request;

class KanbanPageController extends Controller
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
     * @param  \App\Models\KanbanPage  $kanbanPage
     * @return \Illuminate\Http\Response
     */
    public function show(Kanban $kanban)
    {
        return view('kanbans.show_page',compact('kanban'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KanbanPage  $kanbanPage
     * @return \Illuminate\Http\Response
     */
    public function edit(KanbanPage $kanbanPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KanbanPage  $kanbanPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KanbanPage $kanbanPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KanbanPage  $kanbanPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(KanbanPage $kanbanPage)
    {
        //
    }
}

@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection

@section('content')

{{-- Header --}}
<div class="flex h-16 border-b border-gray-200"> 
    <div class="p-4 flex space-x-4">
        <h2 class="font-semibold text-xl">Create New Kanban Project</h2>
        <a class="h-8 py-1 px-3 bg-red-400 rounded text-white" href="{{ route('kanban') }}"> Cancel</a>
        <button type="submit" class="bg-blue-400 rounded py-1 px-3 text-gray-100 h-8 focus:outline-none hover:bg-blue-500 text-sm "> Save </button>
    </div>
</div>

{{-- Kanban Title --}}
<div class="flex flex-col border-b border-gray-200">
    <h2 class="font-semibold text-lg pl-4 pt-4">Kanban Icon and Title</h2>
    <form method="POST" action="{{ route('kanban.store') }}" class="flex space-x-4 p-4 items-center">
    @csrf 
        <div class="flex-col">
            <h2 class="font-semibold">Color</h2>
            <select name="kanban_color" id="kanban__color" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none ">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
                <option value="text-green-500 bg-green-300">Green</option>
                <option value="text-yellow-500 bg-yellow-300">Yellow</option>
                <option value="text-gray-500 bg-gray-300">Gray</option>
            </select>
        </div>

        <div class="flex-col">
            <h2 class="font-semibold">Icon</h2>
            <select name="kanban_icon" id="kanban_icon" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none ">
                <option value="bi bi-alarm-fill">Alarm</option>
                <option value="bi bi-award-fill">Award</option>
                <option value="bi bi-bar-chart-fill">Bars</option>
                <option value="bi bi-basket-fill">Basket</option>
                <option value="bi bi-bookmark-fill">Bookmark</option>
            </select>
        </div>

        <div class="flex-col">
            <h2 class="font-semibold">Project Name</h2>
            <input type="text" name="kanban_title" placeholder="project name" class="border-2 rounded px-2 py-1 focus:outline-none">
        </div>

        {{-- <button type="submit" class="bg-blue-400 rounded py-1 px-3 text-gray-100 h-8 focus:outline-none hover:bg-blue-500 text-sm mt-6 "> Save </button> --}}

    </form>

</div>

{{-- Kanban Tags --}}
<div class="flex flex-col border-b border-gray-200">
    <h2 class="font-semibold text-lg pl-4 pt-4">Create Kanban Tags</h2>
    <form method="POST" action="{{ route('kanban.store') }}" class="flex space-x-4 p-4 items-center">
    @csrf 
        <div class="flex-col">
            <h2 class="font-semibold">Color</h2>
            <select name="tag_color" id="tag__color" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none ">
                <option value="text-blue-500 bg-blue-300">Blue</option>
                <option value="text-red-500 bg-red-300">Red</option>
                <option value="text-green-500 bg-green-300">Green</option>
                <option value="text-yellow-500 bg-yellow-300">Yellow</option>
                <option value="text-gray-500 bg-gray-300">Gray</option>
            </select>
        </div>

        <div class="flex-col">
            <h2 class="font-semibold">Icon</h2>
            <select name="tag_icon" id="tag_icon" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none ">
                <option value="bi bi-alarm-fill">Alarm</option>
                <option value="bi bi-award-fill">Award</option>
                <option value="bi bi-bar-chart-fill">Bars</option>
                <option value="bi bi-basket-fill">Basket</option>
                <option value="bi bi-bookmark-fill">Bookmark</option>
            </select>
        </div>

        <div class="flex-col">
            <h2 class="font-semibold">Project Name</h2>
            <input type="text" name="tag_name" placeholder="Tag Name" class="border-2 rounded px-2 py-1 focus:outline-none">
        </div>

        <button type="submit" class="bg-gray-800 rounded py-1 px-3 text-gray-100 h-8 focus:outline-none hover:bg-blue-500 text-sm mt-6 "> Add Tag </button>

    </form>

</div>
        
@endsection

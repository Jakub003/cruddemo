@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')

<div class="flex space-x-4">
 
    <h2>Edit Title</h2>
    <a class="btn btn-primary h-8" href="{{ route('kanbans.index') }}"> Back</a>

</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('kanbans.update',$kanban->id) }}" method="POST" class="flex space-x-4">
    @csrf
    @method('PUT')

    <div class="flex-col">
        <h2 class="font-semibold">Color</h2>
        <select name="color" id="icon_color" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none" value="{{ $kanban->color }}" class="form-control">
            <option value="text-blue-500 bg-blue-300">Blue</option>
            <option value="text-red-500 bg-red-300">Red</option>
            <option value="text-green-500 bg-green-300">Green</option>
            <option value="text-yellow-500 bg-yellow-300">Yellow</option>
            <option value="text-gray-500 bg-gray-300">Gray</option>
        </select>
    </div>

    <div class="flex-col">
        <h2 class="font-semibold">Icon</h2>
        <select name="icon" id="icon" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none ">
            <option value="bi bi-alarm-fill">Alarm</option>
            <option value="bi bi-award-fill">Award</option>
            <option value="bi bi-bar-chart-fill">Bars</option>
            <option value="bi bi-basket-fill">Basket</option>
            <option value="bi bi-bookmark-fill">Bookmark</option>
        </select>
    </div>

    <div class="flex-col">
        <h2 class="font-semibold">Project Name</h2>
        <input type="text" name="title" placeholder="project name" value="{{ $kanban->title }}" class="border-2 rounded px-2 py-1 focus:outline-none">
    </div>

    <button type="submit" class="bg-blue-400 rounded py-1 px-3 mt-10 text-gray-100 h-10 focus:outline-none hover:bg-blue-500 text-sm "> Save </button>
     

</form>
        
@endsection

@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')

<div class="flex space-x-4">
 
    <h2>Edit Title</h2>
    <a class="btn btn-primary h-8" href="{{ route('kanban') }}"> Back</a>

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

<div class="flex space-x-4">
    {{-- Preview --}}   
    <div class="flex p-4 space-x-4 mt-6">
        <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->kanban_color }}">
            <i class="text-base {{ $kanban->kanban_icon }}"></i>
        </div>
        <h2 class="h-8 text-base font-semibold mt-1">{{ $kanban->kanban_title }}</h2>
    </div>

    <form action="{{ route('kanban.update',$kanban->id) }}" method="POST" class="flex space-x-4">
        @csrf
        @method('PUT')

        <div class="flex-col">
            <h2 class="font-semibold">Color</h2>
            <select name="color" id="icon_color" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none" class="form-control">
                <option value="text-blue-500 bg-blue-300" @if ($kanban->kanban_color == 'text-blue-500 bg-blue-300') selected @endif>Blue</option>
                <option value="text-red-500 bg-red-300" @if ($kanban->kanban_color == 'text-red-500 bg-red-300') selected @endif>Red</option>
                <option value="text-green-500 bg-green-300" @if ($kanban->kanban_color == 'text-green-500 bg-green-300') selected @endif>Green</option>
                <option value="text-yellow-500 bg-yellow-300" @if ($kanban->kanban_color == 'text-yellow-500 bg-yellow-300') selected @endif>Yellow</option>
                <option value="text-gray-500 bg-gray-300" @if ($kanban->kanban_color == 'text-gray-500 bg-gray-300') selected @endif>Gray</option>
            </select>
        </div>

        <div class="flex-col">
            <h2 class="font-semibold">Icon</h2>
            <select name="icon" id="icon" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none " class="form-control">
                <option value="bi bi-alarm-fill" @if ($kanban->kanban_icon == 'bi bi-alarm-fill') selected @endif >Alarm</option>
                <option value="bi bi-award-fill @if ($kanban->kanban_icon == 'bi bi-award-fill') selected @endif">Award</option>
                <option value="bi bi-bar-chart-fill @if ($kanban->kanban_icon == 'bi bi-bar-chart-fill') selected @endif">Bars</option>
                <option value="bi bi-basket-fill @if ($kanban->kanban_icon == 'bi bi-basket-fill') selected @endif">Basket</option>
                <option value="bi bi-bookmark-fill @if ($kanban->kanban_icon == 'bi bi-bookmark-fill') selected @endif">Bookmark</option>
            </select>
        </div>

        <div class="flex-col">
            <h2 class="font-semibold">Project Name</h2>
            <input type="text" name="title" placeholder="project name" value="{{ $kanban->kanban_title }}" class="border-2 rounded px-2 py-1 focus:outline-none">
        </div>

        <button type="submit" class="bg-blue-400 rounded py-1 px-3 mt-10 text-gray-100 h-10 focus:outline-none hover:bg-blue-500 text-sm "> Save </button>
        

    </form>
</div>




        
@endsection

@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')
{{-- Title --}}
<div class="flex h-16 border-b border-gray-200"> 
    <div class="flex space-x-4">
        <div class="flex p-4 space-x-4 items-center">
            <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->kanban_color }}">
                <i class="text-base {{ $kanban->kanban_icon }}"></i>
            </div>
            <h2 class="h-8 text-base font-semibold mt-2">{{ $kanban->kanban_title }} Settings</h2>
            <a class="bg-red-400 py-1 px-2 rounded text-white " href="{{ route('kanban') }}"> Cancel </a>
            <a class="bg-blue-400 py-1 px-2 rounded text-white " href="{{ route('kanban') }}"> Save </a>
        </div>
    </div>

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

{{-- Edit Title --}}
<div class="flex flex-col border-b border-gray-200">
    <h3 class="px-4 pt-4 text-lg font-semibold">Title</h3>
    <div class="flex p-4">
        {{-- Preview --}}   
        <div class="flex space-x-4 mt-7">
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
                <select name="kanban_color" id="kanban_color" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none" class="form-control">
                    <option value="text-blue-500 bg-blue-300" @if ($kanban->kanban_color == 'text-blue-500 bg-blue-300') selected @endif>Blue</option>
                    <option value="text-red-500 bg-red-300" @if ($kanban->kanban_color == 'text-red-500 bg-red-300') selected @endif>Red</option>
                    <option value="text-green-500 bg-green-300" @if ($kanban->kanban_color == 'text-green-500 bg-green-300') selected @endif>Green</option>
                    <option value="text-yellow-500 bg-yellow-300" @if ($kanban->kanban_color == 'text-yellow-500 bg-yellow-300') selected @endif>Yellow</option>
                    <option value="text-gray-500 bg-gray-300" @if ($kanban->kanban_color == 'text-gray-500 bg-gray-300') selected @endif>Gray</option>
                </select>
            </div>
    
            <div class="flex-col">
                <h2 class="font-semibold">Icon</h2>
                <select name="kanban_icon" id="kanban_icon" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none " class="form-control">
                    <option value="bi bi-alarm-fill" @if ($kanban->kanban_icon == 'bi bi-alarm-fill') selected @endif >Alarm</option>
                    <option value="bi bi-award-fill @if ($kanban->kanban_icon == 'bi bi-award-fill') selected @endif">Award</option>
                    <option value="bi bi-bar-chart-fill @if ($kanban->kanban_icon == 'bi bi-bar-chart-fill') selected @endif">Bars</option>
                    <option value="bi bi-basket-fill @if ($kanban->kanban_icon == 'bi bi-basket-fill') selected @endif">Basket</option>
                    <option value="bi bi-bookmark-fill @if ($kanban->kanban_icon == 'bi bi-bookmark-fill') selected @endif">Bookmark</option>
                </select>
            </div>
    
            <div class="flex-col">
                <h2 class="font-semibold">Project Name</h2>
                <input type="text" name="kanban_title" placeholder="project name" value="{{ $kanban->kanban_title }}" class="border-2 rounded px-2 py-1 focus:outline-none">
            </div>
    
            <button type="submit" class="bg-blue-400 py-1 px-2 h-8 rounded text-white mt-6" href="{{ route('kanban') }}"> Save </button>
            
    
        </form>
    </div>
</div>

{{-- Edit Title END --}}

{{-- Edit Columns --}}
<div class="flex flex-col border-b border-gray-200">
    <h3 class="px-4 pt-4 text-lg font-semibold">Columns</h3>
    <div class="flex flex-col p-4 space-y-4 ">
        {{-- Form for Each Column --}}
        <form action="{{ route('kanban.update',$kanban->id) }}" method="POST" class="flex flex-col space-y-4 ">
            @foreach($kanban->columns as $kanban_column)
                <div class="flex space-x-4">
                    <i class="bi bi-grip-vertical text-3xl pb-1 cursor-pointer text-gray-700"></i>
                    
                    <select name="column_color" id="column_color" class="border-2 rounded pl-2 pr-10 py-1 focus:outline-none" class="form-control">
                        <option value="border-blue-400" @if ($kanban_column->column_color == 'border-blue-400') selected @endif>Blue</option>
                        <option value="border-red-400" @if ($kanban_column->column_color == 'border-red-400') selected @endif>Red</option>
                        <option value="border-green-400" @if ($kanban_column->column_color == 'border-green-400') selected @endif>Green</option>
                        <option value="border-purple-400" @if ($kanban_column->column_color == 'border-purple-400') selected @endif>Yellow</option>
                        <option value="border-yellow-400" @if ($kanban_column->column_color == 'border-yellow-400') selected @endif>Gray</option>
                    </select>
                
                    <input type="text" name="kanban_title" placeholder="project name" value="{{ $kanban_column->column_name}}" class="border-2 rounded px-2 py-1 focus:outline-none">
                     {{-- Delete --}}
                    <form action="{{ route('kanban.column.destroy',$kanban_column->id) }}" method="POST" class="h-8 w-8">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" text-base focus:outline-none">
                            <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 cursor-pointer"></i>
                        </button>    
                    </form>
                    
                </div>
            @endforeach
            <button type="submit" class="bg-blue-400 py-1 px-2 h-8 w-12 rounded text-white" href="{{ route('kanban') }}"> Save </button>
        </form>
        
        {{-- Display Preview of Columns --}}
        <div class="flex space-x-4">
            @foreach($kanban->columns as $kanban_column)
            <div class="flex flex-row justify-between items-center w-64 py-3 px-2 border-b-2 {{ $kanban_column->column_color }}">
                <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                    <h2 class="">{{ $kanban_column->column_name }}</h2>
                    <h2 class="text-gray-400 text-xs">15</h2>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>

{{-- Edit Columns END --}}


        
@endsection

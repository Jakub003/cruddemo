@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')
{{-- Title --}}
<div class="flex h-16 border-b border-gray-200"> 
    <div class="flex space-x-4">
        <div class="flex p-4 space-x-4">
            <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->kanban_color }}">
                <i class="text-base {{ $kanban->kanban_icon }}"></i>
            </div>
            <h2 class="h-8 text-base font-semibold mt-1">{{ $kanban->kanban_title }}</h2>
        </div>
    </div>

</div>

{{-- Toggle Buttons --}}
<div class="flex flex-row justify-between h-16 border-b border-gray-200 pl-4 items-center">
    <div class="flex flex-wrap space-x-4 items-center">
        @foreach ($kanban->tags as $kanban_tag)
        <button class="flex flex-row my-2 focus:outline-none rounded text-sm p-1 {{ $kanban_tag->tag_color }} items-center"> 
            <i class="{{ $kanban_tag->tag_icon }} transform -translate-y-0.5"></i>
            <h2 class="px-1">{{ $kanban_tag->tag_name }}</h2>
        </button>
        @endforeach
        

    </div>
    <a href="{{ route('kanban.edit',$kanban->id) }}" class="h-8 w-8 rounded bg-gray-200 text-lg mr-6 focus:outline-none hover:bg-blue-500 text-blue-500 hover:text-white ">
        <i class="bi bi-gear-fill  text-base pl-2"></i>
    </a>
</div>

{{-- Kanban Columns --}}
<div class="flex space-x-4 p-4">
    @foreach ($kanban->columns as $kanban_column)
    <div class="flex flex-col w-72 flex-shrink-0 space-y-4">
        {{-- Title --}}
        <div class="flex flex-row justify-between items-center py-3 px-2 border-b-2 {{ $kanban_column->column_color }}">
            <div class="flex flex-row  text-base font-semibold space-x-3 items-center"> 
                <h2 class="">{{ $kanban_column->column_name }}</h2>
                <h2 class="text-gray-400 text-xs">15</h2>
            </div>
            
            <button class="h-7 w-7 pb-0.5 rounded-md text-base bg-Gray-200 bg-gray-200 hover:bg-blue-500 hover:text-white focus:outline-none">
                <i class="bi bi-plus text-base"></i>
            </button>
        </div>
    </div>
    @endforeach
</div>
        
@endsection

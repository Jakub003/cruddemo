@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')
    <div class="p-4 flex space-x-4">
        <h2 class="text-2xl font-semibold">Kanban Dashboard View</h2>
    </div>  

    @if ($message = Session::get('success'))
        <div class="alert alert-success" x-data = '{show: true}' x-show='show' x-init='setTimeOut(()=> show = false, 5)' >
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach ($kanbans as $kanban)
    <div class="px-4 flex space-x-4">
        {{-- Display --}}
        <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->kanban_color }} ">
            <i class=" text-base {{ $kanban->kanban_icon }} "></i>
        </div>     
        <h3 class="h-8 text-base font-semibold mt-1">{{ $kanban->kanban_title }}</h3>   
        
        {{-- Edit --}}
        <a class="h-8 w-8 text-yellow-500 rounded" href="{{ route('kanban.edit',$kanban->id) }}"><i class=" bi bi-pencil-square "></i></a>
    
        {{-- Delete --}}
        <form action="{{ route('kanban.destroy',$kanban->id) }}" method="POST" class="h-8 w-8">
            @csrf
            @method('DELETE')
            <button type="submit" class="  text-red-200 hover:text-red-500 text-base focus:outline-none">
                <i class=" bi bi-exclamation-circle-fill "></i>
            </button>    
        </form>


          
    </div>
    @endforeach

@endsection

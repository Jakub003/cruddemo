@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')
    <div class="flex space-x-4">
        <h2 class="text-2xl font-semibold">All Projects at kanbans/index</h2>
        <a href="#">
            <div class="bg-green-300 hover:bg-green-400 font-semibold rounded h-8 py-1 px-3 text-white cursor-pointer">
                <p>Create</p>
            </div>
        </a>
        
    </div>
    {{-- {{ route('products.create') }} --}}
    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach ($kanbans as $kanban)
    
    <div class="flex space-x-4">
        {{-- Display --}}
        <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->color }} ">
            <i class=" text-base {{ $kanban->icon }} "></i>
        </div>     
        <h3 class="h-8 text-base font-semibold mt-1">{{ $kanban->title }}</h3>   
        
        {{-- Edit --}}
        {{-- <a class="p-2 bg-green-500 text-white rounded" href="{{ route('products.edit',$kanban->id) }}"><i class=" bi bi-pencil-square "></i></a> --}}
    
        {{-- Delete --}}
        <form action="{{ route('kanbans.destroy',$kanban->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="h-8 w-8 px-2 py-1 text-red-200 hover:text-red-500 text-base focus:outline-none">
                <i class=" bi bi-exclamation-circle-fill "></i>
            </button>    
        </form>

          
    </div>
   
        
    @endforeach

@endsection

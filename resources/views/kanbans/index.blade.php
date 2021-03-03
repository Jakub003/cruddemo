@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')

    <h2 class="text-2xl font-semibold">All Projects at kanbans/index</h2>

    @foreach ($kanbans as $kanban)
        <div class="flex space-x-4">    
            <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->color }} ">
                <i class=" text-base {{ $kanban->icon }} "></i>
            </div>     
            <h3 class="h-8 text-base font-semibold mt-1">{{ $kanban->title }}</h3>         
        </div>
    @endforeach

@endsection

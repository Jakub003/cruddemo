@extends('layouts.app')

@section('content')

<div class="flex flex-col space-y-4">
    @foreach ($kanbans as $kanban)
    <div class="flex space-x-4">    
        <div class="h-10 w-10 {{ $kanban->color }} ">
            <i class=" {{ $kanban->icon }} "></i>
        </div>     

        <h3 class="div">{{ $kanban->title }}</h3>         
    </div>
    @endforeach
</div>


@endsection

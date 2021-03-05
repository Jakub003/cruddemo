@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')

<div class="flex space-x-4">
 
    <div class="flex p-4 space-x-4 mt-6">
        <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->color }}">
            <i class="text-base {{ $kanban->icon }}"></i>
        </div>
        <h2 class="h-8 text-base font-semibold mt-1">{{ $kanban->title }}</h2>
    </div>
    <a class="btn btn-primary h-8" href="{{ route('kanban') }}"> Back</a>

</div>

        
@endsection

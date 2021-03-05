@extends('layouts.app')

@section('sidebar')
    @include('components/titles')
@endsection


@section('content')
<div class="flex h-16 border-b border-gray-200"> 
    <div class="flex space-x-4">
        <div class="flex p-4 space-x-4">
            <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->color }}">
                <i class="text-base {{ $kanban->icon }}"></i>
            </div>
            <h2 class="h-8 text-base font-semibold mt-1">{{ $kanban->title }}</h2>
        </div>
    </div>

</div>



        
@endsection

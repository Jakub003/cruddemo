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
<div class="flex flex-row justify-between h-16 border-b border-gray-200 pl-4 items-center flex-shrink-0">
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
<div class="flex space-x-4 p-4 overflow-hidden">

    @foreach ($kanban->columns as $kanban_column)
        <div class="flex flex-col w-72 flex-shrink-0 space-y-4 ">
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

            {{-- Tasks Start --}}
            <div class="space-y-4 overflow-y-auto no-scrollbar">
                @foreach($kanban_column->tasks as $kanban_task)
                    {{-- @if($kanban_column->id == $kanban_task->kanban_column_id ) --}}
                        <div class="group flex flex-col mx-1.5 bg-white rounded-md shadow hover:shadow-lg">

                            <!-- Task Tags -->
                            <div class="flex space-x-4 py-1 m-4 items-center">
                                @foreach ($kanban->pages as $kanban_page)
                                    @if($kanban_page->id == $kanban_task->kanban_page_id )
                                        <div class="flex flex-row bg-gray-100 rounded space-x-2 text-sm text-gray-700 px-2 py-1  items-center"> 
                                            <i class="bi bi-hash transform -translate-y-0.5"></i>
                                            <h2> {{ $kanban_page->page_name }} </h2>
                                        </div>
                                    @endif
                                @endforeach

                                {{-- @foreach($kanban_task->tag as $kanban_tag) --}}
                                @foreach ($kanban->tags as $kanban_tag)
                                    @if($kanban_tag->id == $kanban_task->kanban_tag_id )
                                        <button class="flex flex-row my-2 focus:outline-none rounded text-sm p-1 {{ $kanban_tag->tag_color }} items-center"> 
                                            <i class="{{ $kanban_tag->tag_icon }} transform -translate-y-0.5"></i>
                                            <h2 class="px-1">{{ $kanban_tag->tag_name }}</h2>
                                        </button>
                                    @endif
                                @endforeach

                                
                            </div>

                            <!-- Task Title -->
                            <div class="flex flex-row space-x-2 px-4 items-center space-x-2"> 
                                {{-- <i class="bi bi-diamond-fill text-xs text-green-500 transform -translate-y-0.5"></i> --}}
                                <a href="#">   
                                    <h2 class="text-sm transnform -translate-y-1 hover:text-blue-500 ">{{ $kanban_task->task_title }}</h2> 
                                </a>          
                            </div>

                            <!-- Task Divider -->
                            <div class="border-b border-gray-200 py-2"></div>

                            <!-- Task Features -->
                            <div class="flex flex-row px-4 py-2 justify-between items-center"> 
                                <div class="flex flex-row text-xs text-gray-400 space-x-3 "> 
                                    <div class="flex flex-row space-x-1 px-2 py-1 rounded hover:bg-gray-100 hover:text-black  "> 
                                        <i class="bi bi-chat-square transform -translate-y-0.5 "></i>
                                        <h2 class="">18</h2>
                                    </div>
                                    <div class="flex flex-row space-x-1 px-2 py-1 rounded hover:bg-gray-100 hover:text-black "> 
                                        <i class="bi bi-paperclip transform -translate-y-0.5 "></i>
                                        <h2>7</h2>
                                    </div>
                                    <div class="flex flex-row space-x-1  px-2 py-1 rounded hover:bg-gray-100 hover:text-black "> 
                                        <i class="bi bi-check-square transform -translate-y-0.5"></i>
                                        <h2>3 / 14</h2>
                                    </div>
                                </div>
                                <form action="{{ route('kanban.task.destroy',$kanban_task->id) }}" method="POST" class="h-8 w-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" text-base focus:outline-none">
                                        <i class="bi bi-x-circle-fill text-red-200 hover:text-red-500 cursor-pointer"></i>
                                    </button>    
                                </form>
                                <div class="flex flex-row"> 
                                    <div> 
                                        <img src="https://demos.creative-tim.com/tailwindcss-starter-project/_next/static/images/team-4-470x470-4ef82ef45a9598d24c4c951ead4d626a.png" 
                                            class="shadow rounded-full max-w-full h-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                   
                    
                @endforeach
                {{-- Tasks End --}}
            </div>

        </div>
    @endforeach
</div>
        
@endsection

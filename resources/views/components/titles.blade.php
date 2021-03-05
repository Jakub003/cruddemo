
<div class="h-16 py-4 mb-4 flex flex-row justify-between items-center flex-shrink-0 border-b border-gray-200">
    <h3 class="font-semibold text-lg p-4 pt-6">Projects</h3>

    <a href="{{ route('kanban.create') }}" class="h-8 w-8 rounded bg-blueGray-100 text-lg text-gray-900 mr-6 focus:outline-none hover:text-white hover:bg-blue-500 ">
        <i class="bi bi-plus pl-1.5"></i>
    </a>
</div>

@foreach ($kanbans as $kanban)
<a href="{{ route('kanban.show',$kanban->id) }}" class="flex space-x-4 px-4">    
    <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->color }} ">
        <i class=" text-base {{ $kanban->icon }} "></i>
    </div>     
    <h3 class="h-8 text-base font-semibold mt-1">{{ $kanban->title }}</h3>         
</a>
@endforeach


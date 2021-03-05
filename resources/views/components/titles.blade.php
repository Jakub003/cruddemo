
<p>this is found in /components/titles</p>

@foreach ($kanbans as $kanban)
<a href="{{ route('kanban.show',$kanban->id) }}" class="flex space-x-4">    
    <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->color }} ">
        <i class=" text-base {{ $kanban->icon }} "></i>
    </div>     
    <h3 class="h-8 text-base font-semibold mt-1">{{ $kanban->title }}</h3>         
</a>
@endforeach


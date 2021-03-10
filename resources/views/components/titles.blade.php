
<div class="h-16 py-4 mb-4 flex flex-row justify-between items-center flex-shrink-0 border-b border-gray-200">
    <h3 class="font-semibold text-lg p-4 pt-6">Kanbans</h3>

    <a href="{{ route('kanban.create') }}" class="h-8 w-8 rounded bg-blueGray-100 text-lg text-gray-900 mr-6 focus:outline-none hover:text-white hover:bg-blue-500 ">
        <i class="bi bi-plus pl-1.5"></i>
    </a>
</div>

<div class="flex flex-col space-y-4">
    {{-- Title --}}
    @foreach ($kanbans as $kanban)
    <div class=" flex flex-col space-y-2 px-4">
        <a href="{{ route('kanban.show',$kanban->id) }}" class="flex space-x-4 ">    
            <div class="h-8 w-8 px-2 py-1 rounded {{ $kanban->kanban_color }} ">
                <i class=" text-base {{ $kanban->kanban_icon }} "></i>
            </div>     
            <h3 class="h-8 text-base font-semibold mt-1">{{ $kanban->kanban_title }}</h3>         
        </a>

        {{-- Pages --}}
        <div class="p-2 rounded-lg bg-blueGray-100 ">
            <a href="{{ route('kanban.show',$kanban->id) }}">
                <div class="flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                    <div class="flex flex-row text-sm ">All Tasks</div>
                    <div class="h-4 w-4 rounded text-xs text-white "> 15 </div>
                </div>
            </a>
                
            @foreach ($kanban->pages as $kanban_page)
                <a href="{{ route('kanban.page.show',$kanban->id, $kanban_page->id) }}">
                    
                    <div class="flex flex-row justify-between items-center w-full border border-white rounded  px-2 py-1 mt-1.5 bg-white hover:bg-blue-500 hover:text-white hover:border-blue-500">
                        <div class="flex flex-row items-center space-x-1">
                            <i class="text-xs bi bi-hash mb-1"></i>
                            <div class="flex flex-row text-sm "> {{ $kanban_page->page_name }} ID: {{ $kanban_page->id }} </div>
                        </div>
                        <div class="h-4 w-4 rounded text-xs "> 25 </div>
                    </div>
                </a>
                    
            @endforeach
            
        </div>
    </div>

    @endforeach
</div>


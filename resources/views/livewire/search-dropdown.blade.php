
<div>
    <input 
    class="header__search-input"
    type="text" 
    id="input"
    placeholder="Search Movies"
    wire:model.debounce.500ms="search"
    >
 <br>
    <div wire:loading class="mt-1" style="position: fixed; color: white">Searching.... </div>
    @if (strlen($search) >= 2)
    @if ($searchResults->count() > 0)
    <div class="list-item mt-3" style="position: absolute; background-color: #1a191f; border-radius: 3px">
            @foreach ($searchResults as $result)
               <ul>
                <li class="show py-2" style="border-bottom: 1px solid gray">
                    <a
                        href="{{ route('movies.show', $result['id']) }}" class="">
                    @if ($result['poster_path'])
                        <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" style="width: 14%" class="py-2 pl-3">
                    @else
                        <img src="https://via.placeholder.com/27x35" alt="poster" class="py-2 pl-3">
                    @endif
                    <span class="ml-4" style="text-align: left; color: white">{{ $result['title'] }}</span>
                </a>
                </li>
               </ul>
            @endforeach
        @else
        <div class="list-item" style="color: white">No results for "{{ $search }}"</div>
    @endif
    </div>
    
@endif
</div>

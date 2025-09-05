@forelse ($pets as $pet)
    <tr>
        <td>
        <div class="flex items-center gap-3">
            <div class="avatar">
            <div class="mask mask-squircle h-12 w-12">
                <img
                src="{{ asset('images/pets/'.$pet->image) }}"
                alt="Photo" />
            </div>
            </div>
            <div>
            <div class="font-bold">{{ $pet->name }}</div>
            <div class="text-sm opacity-50">{{ $pet->location }}</div>
            </div>
        </div>
        </td>
        <td class="hidden sm:table-cell">
        <span class="badge badge-ghost badge-sm">{{ $pet->kind }}</span>
        </td>
        <td class="hidden md:table-cell">{{ $pet->breed }}</td>
        <td class="hidden lg:table-cell">{{ $pet->age }} years</td>
        <td>
            <span class="badge {{ $pet->status == 'available' ? 'badge-success' : ($pet->status == 'adopted' ? 'badge-warning' : 'badge-info') }} badge-sm">
                {{ $pet->status }}
            </span>
        </td>
        <th>
            <a href="{{ url('pets/'.$pet->id) }}" class="btn btn-ghost hover:bg-[transparent] btn-xs">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="#fff" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
            </a>
            <a href="{{ url('pets/'.$pet->id.'/edit') }}" class="btn btn-ghost hover:bg-[transparent] btn-xs">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="#fff" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path></svg>
            </a>
            <a href="javascript:;" class="btn btn-ghost hover:bg-[transparent] btn-xs btn-delete" data-name="{{ $pet->name }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="#fa627a" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg>
            </a>
            <form class="hidden" method="post" action="{{ url('pets/'.$pet->id) }}">
                @csrf
                @method('delete')
            </form>
        </th>
    </tr>
    
@empty
    <tr>
        <td colspan="6" class="text-center font-bold text-lg my-4">
            No results found!
        </td>
    </tr>
@endforelse
<div class="datalist flex flex-col justify-center items-center mt-0 w-full">
    @forelse ($adoptions as $adoption)
        <div class="bg-[#0006] rounded-lg p-6 mb-6 w-full max-w-2xl">
            <!-- Avatares User con Pet -->
            <div class="avatar-group -space-x-6 mb-4 flex justify-center">
                <div class="avatar">
                    <div class="w-24 rounded-full">
                        <img src="{{ asset('images/'.$adoption->user->photo) }}" alt="User Photo" />
                    </div>
                </div>
                <div class="avatar">
                    <div class="w-24 rounded-full">
                        <img src="{{ asset('images/pets/'.$adoption->pet->image) }}" alt="Pet Photo" />
                    </div>
                </div>
            </div>

            <div class="text-center">
                <!-- Texto Adoptado -->
                <h4 class="text-lg font-semibold">
                    <span class="underline font-bold">{{ $adoption->pet->name }}</span>
                    was adopted by 
                    <span class="underline font-bold">{{ $adoption->user->fullname }}</span>
                </h4>
                <p class="text-sm opacity-75 mt-2">{{ $adoption->created_at->diffForHumans() }}</p>

                <!-- Botón lupa -->
                <a href="{{ url('adoptions/'.$adoption->id) }}" class="mt-4 btn btn-outline btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                    </svg>
                    View Details
                </a>
            </div>
        </div>
    @empty
        <div class="text-center font-bold text-lg my-4 w-full">
            No results found for "{{ $q }}"!
        </div>
    @endforelse
</div>

@if($adoptions->hasPages())
    <div class="mt-4">
        {{ $adoptions->links('layouts.paginator') }}
    </div>
@endif
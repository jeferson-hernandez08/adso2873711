@extends('layouts.app')
@section('title', 'Adoptions Module')

@section('content')
    @include('layouts.navbar')
    <main class="bg-purple-900 pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z"></path></svg>
                Adoptions Module:
            </h1>
            <div class="join mt-4">
                <a href="{{ url('export/adoptions/pdf') }}" class="btn join-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z"></path></svg>
                    Export
                </a>
                <a href="{{ url('export/adoptions/excel') }}" class="btn join-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M156,208a8,8,0,0,1-8,8H120a8,8,0,0,1-8-8V152a8,8,0,0,1,16,0v48h20A8,8,0,0,1,156,208ZM92.65,145.49a8,8,0,0,0-11.16,1.86L68,166.24,54.51,147.35a8,8,0,1,0-13,9.3L58.17,180,41.49,203.35a8,8,0,0,0,13,9.3L68,193.76l13.49,18.89a8,8,0,0,0,13-9.3L77.83,180l16.68-23.35A8,8,0,0,0,92.65,145.49Zm98.94,25.82c-4-1.16-8.14-2.35-10.45-3.84-1.25-.82-1.23-1-1.12-1.9a4.54,4.54,0,0,1,2-3.67c4.6-3.12,15.34-1.72,19.82-.56a8,8,0,0,0,4.07-15.48c-2.11-.55-21-5.22-32.83,2.76a20.58,20.58,0,0,0-8.95,14.95c-2,15.88,13.65,20.41,23,23.11,12.06,3.49,13.12,4.92,12.78,7.59-.31,2.41-1.26,3.33-2.15,3.93-4.6,3.06-15.16,1.55-19.54.35A8,8,0,0,0,173.93,214a60.63,60.63,0,0,0,15.19,2c5.82,0,12.3-1,17.49-4.46a20.81,20.81,0,0,0,9.18-15.23C218,179,201.48,174.17,191.59,171.31ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,1,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.68L160,51.31Z"></path></svg>
                    Export
                </a>
                <input class="outline-0 rounded-tr-sm rounded-br-sm indent-2 bg-white/10" type="search" name="qsearch"  id="qsearch" placeholder="Search..." />
            </div>
                <div class="datalist flex flex-col justify-center items-center" >
                    @foreach ($adopts as $adopt)
                        <div class="avatar-group -space-x-6 mt-8 mb-2">
                            <div class="avatar">
                                <div class="w-28">
                                <img src="{{ asset('images/'.$adopt->user->photo) }}" />
                                </div>
                            </div>
                            <div class="avatar">
                                <div class="w-28">
                                <img src="{{ asset('images/pets/'.$adopt->pet->image) }}" />
                                </div>
                            </div>
                        </div>
                        <h4>
                            <span class="underline font-bold">{{ $adopt->pet->name }}</span>
                            Was Adopted By 
                            <span class="underline font-bold">{{ $adopt->user->fullname }}</span>
                            {{ $adopt->created_at->diffforhumans()}}
                        </h4>
                        <a href="{{ url('adoptions/'.$adopt->id) }}" class="mt-2 btn btn-outline btn-default hover:text-purple-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-8" fill="currentColor" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                        </a>
                    @endforeach
                </div>
            
            <div class="mt-4">
                {{ $adopts->links('layouts.paginator') }}
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
           $(document).ready(function() {
            // Search
            $('body').on('input', '#qsearch', function(event) {
                event.preventDefault()
                $query = $(this).val()
                $token = $('input[name=_token]').val()
                $('.datalist').empty()
                $('.datalist').html(`<div class="w-full text-center py-12"><span class="loading loading-spinner loading-xl"></span></div>`)
                
                setTimeout(() => {
                    $.get("{{ route('adoptions.search') }}", {'q': $query, '_token': $token},
                        function (data) {
                            $('.datalist').html($(data).find('.datalist').html()).hide().fadeIn('1000')
                        }
                    )
                }, 1000);
            })
        });

    </script>
@endsection
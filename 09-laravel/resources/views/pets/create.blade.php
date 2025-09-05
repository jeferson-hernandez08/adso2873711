@extends('layouts.app')
@section('title', 'Create Pet')

@section('content')
    @include('layouts.navbar')
    <main class="bg-[#154869] pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path></svg>
                Add Pet
            </h1>

            {{-- Breadcrumbs --}}
            <div class="breadcrumbs text-sm mt-6">
                <ul>
                    <li>
                        <a href="{{ url('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256"><path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path></svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pets') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256"><path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path></svg>
                            Pets Module
                        </a>
                    </li>
                    <li>
                        <span class="inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z"></path></svg>
                            Add Pet
                        </span>
                    </li>
                </ul>
            </div>

            {{-- Form --}}
            <form action="{{ url('pets') }}" class="my-4 flex flex-col gap-2" method="post" enctype="multipart/form-data" >

                @csrf
                <div class="avatar mt-6 flex flex-col items-center gap-2">
                    <div id="upload" class="mask mask-squircle w-48 cursor-pointer hover:scale-110 transition-transform">
                        <img id="preview" src="{{ asset("images/pets/no-pet.webp") }}" />
                    </div>
                    <small class="font-bold text-gray-500 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M168,136a8,8,0,0,1-8,8H136v24a8,8,0,0,1-16,0V144H96a8,8,0,0,1,0-16h24V104a8,8,0,0,1,16,0v24h24A8,8,0,0,1,168,136Zm64-56V192a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V80A24,24,0,0,1,48,56H75.72L87,39.12A16,16,0,0,1,100.28,32h55.44A16,16,0,0,1,169,39.12L180.28,56H208A24,24,0,0,1,232,80Zm-16,0a8,8,0,0,0-8-8H176a8,8,0,0,1-6.66-3.56L155.72,48H100.28L86.66,68.44A8,8,0,0,1,80,72H48a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8Z"></path></svg>
                        Upload Photo
                    </small>
                </div>
                <input type="file" name="photo" id="photo" class="hidden" accept="image/*" />

                <div>
                    <label class="mt-4" for="">Name:</label>
                    <input type="text" name="name" placeholder="Max" class="w-full input bg-[transparent] border-white" value="{{ old('name') }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Kind:</label>
                    <select name="kind" class="w-full select bg-[#154869] border-white">
                        <option value="">Select Kind...</option>
                        <option value="Dog" @if (old('kind') == 'Dog' ) selected @endif>Dog</option>
                        <option value="Cat" @if (old('kind') == 'Cat' ) selected @endif>Cat</option>
                        <option value="Bird" @if (old('kind') == 'Bird' ) selected @endif>Bird</option>
                        <option value="Other" @if (old('kind') == 'Other' ) selected @endif>Other</option>
                    </select>
                </div>
                <div>
                    <label class="mt-4" for="">Weight (kg):</label>
                    <input type="number" step="0.1" name="weight" placeholder="5.2" class="w-full input bg-[transparent] border-white" value="{{ old('weight') }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Age (years):</label>
                    <input type="number" name="age" placeholder="3" class="w-full input bg-[transparent] border-white" value="{{ old('age') }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Breed:</label>
                    <input type="text" name="breed" placeholder="Golden Retriever" class="w-full input bg-[transparent] border-white" value="{{ old('breed') }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Location:</label>
                    <input type="text" name="location" placeholder="Bogotá, Colombia" class="w-full input bg-[transparent] border-white" value="{{ old('location') }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Description:</label>
                    <textarea name="description" placeholder="Friendly and playful pet" class="w-full textarea bg-[transparent] border-white">{{ old('description') }}</textarea>
                </div>
                <div>
                    <label class="mt-4" for="">Status:</label>
                    <select name="status" class="w-full select bg-[#154869] border-white">
                        <option value="available" @if (old('status') == 'available' ) selected @endif>Available</option>
                        <option value="adopted" @if (old('status') == 'adopted' ) selected @endif>Adopted</option>
                        <option value="pending" @if (old('status') == 'pending' ) selected @endif>Pending</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-outline w-full mt-6">
                        Create Pet
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div> 
            </form>

        </div>   
    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            $('#upload').click(function() {
                $('#photo').click();
            });

            $('#photo').change(function() {
                $('#preview').attr('src', window.URL.createObjectURL($(this).prop('files')[0]));
            });

            @if (count($errors->all()) > 0)
                @php $content = '<ul class="flex flex-col gap-1">' @endphp
                @foreach ($errors->all() as $msg)
                    @php $content .= '<li class="badge badge-error text-xs w-full">'.$msg.'</li>' @endphp
                @endforeach
                @php $content .= '</ul>' @endphp
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Something went wrong!",
                    html: `@php echo $content @endphp`,
                    showConfirmButton: true,
                    confirmButtoncColor: "#154869",
                });
            @endif

        });
    </script>
@endsection
@extends('layouts.app')
@section('title', 'Edit Pet')

@section('content')
    @include('layouts.navbar')
    <main class="bg-amber-900 pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path></svg>
                Edit Pet
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path></svg>
                            Edit Pet
                        </span>
                    </li>
                </ul>
            </div>

            {{-- Form --}}
            <form action="{{ url('pets/'.$pet->id) }}" class="my-4 flex flex-col gap-2" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="avatar mt-6 flex flex-col items-center gap-2">
                    <div id="upload" class="mask mask-squircle w-48 cursor-pointer hover:scale-110 transition-transform">
                        <img id="preview" src="{{ asset('images/pets/'.$pet->image) }}" />
                    </div>
                    <small class="font-bold text-gray-500 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M168,136a8,8,0,0,1-8,8H136v24a8,8,0,0,1-16,0V144H96a8,8,0,0,1,0-16h24V104a8,8,0,0,1,16,0v24h24A8,8,0,0,1,168,136Zm64-56V192a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V80A24,24,0,0,1,48,56H75.72L87,39.12A16,16,0,0,1,100.28,32h55.44A16,16,0,0,1,169,39.12L180.28,56H208A24,24,0,0,1,232,80Zm-16,0a8,8,0,0,0-8-8H176a8,8,0,0,1-6.66-3.56L155.72,48H100.28L86.66,68.44A8,8,0,0,1,80,72H48a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H208a8,8,0,0,0,8-8Z"></path></svg>
                        Upload Photo
                    </small>
                </div>
                <input type="file" name="image" id="image" class="hidden" accept="image/*" />
                <input type="hidden" name="originimage" value="{{ $pet->image }}"> 

                <div>
                    <label class="mt-4" for="">Name:</label>
                    <input type="text" name="name" placeholder="Max" class="w-full input bg-[transparent] border-white" value="{{ old('name', $pet->name) }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Kind:</label>
                    <select name="kind" class="w-full select bg-amber-900 border-white">
                        <option value="">Select Kind...</option>
                        <option value="Dog" @if (old('kind', $pet->kind) == 'Dog' ) selected @endif>Dog</option>
                        <option value="Cat" @if (old('kind', $pet->kind) == 'Cat' ) selected @endif>Cat</option>
                        <option value="Pig" @if (old('kind', $pet->kind) == 'Pig' ) selected @endif>Pig</option>
                        <option value="Bird" @if (old('kind', $pet->kind) == 'Bird' ) selected @endif>Bird</option>
                        <option value="Other" @if (old('kind', $pet->kind) == 'Other' ) selected @endif>Other</option>
                    </select>
                </div>
                <div>
                    <label class="mt-4" for="">Weight (kg):</label>
                    <input type="number" step="0.1" name="weight" placeholder="5.2" class="w-full input bg-[transparent] border-white" value="{{ old('weight', $pet->weight) }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Age (years):</label>
                    <input type="number" name="age" placeholder="3" class="w-full input bg-[transparent] border-white" value="{{ old('age', $pet->age) }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Breed:</label>
                    <input type="text" name="breed" placeholder="Golden Retriever" class="w-full input bg-[transparent] border-white" value="{{ old('breed', $pet->breed) }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Location:</label>
                    <input type="text" name="location" placeholder="Bogotá, Colombia" class="w-full input bg-[transparent] border-white" value="{{ old('location', $pet->location) }}"/>
                </div>
                <div>
                    <label class="mt-4" for="">Description:</label>
                    <textarea name="description" placeholder="Friendly and playful pet" class="w-full textarea bg-[transparent] border-white">{{ old('description', $pet->description) }}</textarea>
                </div>
                <div>
                    <label class="mt-4" for="">Active:</label>
                    <select name="active" class="w-full select bg-amber-900 border-white">
                        <option value="">Select Status...</option>
                        <option value="0" @if (old('active', $pet->active) == 0 ) selected @endif>Inactive</option>
                        <option value="1" @if (old('active', $pet->active) == 1 ) selected @endif>Active</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-outline w-full mt-6">
                        Update Pet
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
                $('#image').click();
            });

            $('#image').change(function() {
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
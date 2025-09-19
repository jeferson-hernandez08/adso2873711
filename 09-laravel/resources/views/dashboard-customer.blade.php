@extends('layouts.app')
@section('title', 'Dashboard - Customer')
@section('content')
    @include('layouts.navbar')
    <main class="bg-[url(images/bg-welcome.webp)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] md:w-10/12 w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                </svg>
                Dashboard: {{ Auth::user()->role }}
            </h1>

            <div class="gap-2 flex flex-col md:flex-row mt-8">
                {{-- Card Edit My Info --}}
                <div class="card bg-base-100 image-full w-74 shadow-sm">
                    <figure>
                        <img style="filter: brightness(60%) !important"
                             src="{{ asset('images/bg-users.webp') }}" alt="Profile" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Edit My Info</h2>
                        <p>Update your personal profile and account details.</p>
                        <div class="card-actions justify-end">
                            <a href="{{ url('profile/edit') }}" class="btn text-white bg-sky-900">
                                Edit my info
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card My Adoption --}}
                <div class="card bg-base-100 image-full w-74 shadow-sm">
                    <figure>
                        <img style="filter: brightness(60%) !important"
                             src="{{ asset('images/bg-adoptions.webp') }}" alt="My Adoptions" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">My Adoption</h2>
                        <p>See the pets you have adopted and their details.</p>
                        <div class="card-actions justify-end">
                            <a href="{{ url('my-adoptions') }}" class="btn text-white bg-purple-900">
                                View my adoption
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card Make Adoption --}}
                <div class="card bg-base-100 image-full w-74 shadow-sm">
                    <figure>
                        <img style="filter: brightness(60%) !important"
                             src="{{ asset('images/bg-pets.webp') }}" alt="Make Adoption" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Make Adoption</h2>
                        <p>Choose a pet and start the adoption process.</p>
                        <div class="card-actions justify-end">
                            <a href="{{ url('pets') }}" class="btn text-white bg-amber-900">
                                Adopt Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

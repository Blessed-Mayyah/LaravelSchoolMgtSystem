@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-white-700 uppercase font-bold">Profile</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('profile') }}" class="bg-black-600 text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
        
            </div>
        </div>
        <!-- Log on to besten.com for more projects -->
        <div class="mt-8 bg-white rounded">
            <form action="{{ route('profile.update') }}" method="POST" class="w-full max-w-2xl mx-auto px-6 py-12 flex flex-wrap justify-between" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="w-full sm:w-auto order-last sm:order-first">
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-1/3">
                            <label class="block text-white-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Name : 
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="name" class="bg-black-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-white-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ auth()->user()->name }}">
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-1/3">
                            <label class="block text-white-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Email :
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="email" class="bg-black-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-white-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="email" value="{{ auth()->user()->email }}">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-4">
                        <div class="md:w-1/3">
                            <label class="block text-white-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                                Picture :
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <input name="profile_picture" class="bg-black-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-white-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="file">
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="w-full shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                Submit Changes
                            </button>
                        </div>
                    </div>
                </div>        
                <div class="order-first sm:order-last mb-4">
                    <div>
                        <img class="w-32 h-32 rounded" src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}" alt="avatar">    
                    </div>        
                </div>
            </form>        
        </div>
    </div>
@endsection
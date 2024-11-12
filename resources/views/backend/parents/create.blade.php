@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">

        <div class="w-full max-w-xl bg-white p-6 rounded shadow-md">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-gray-700 uppercase font-bold">Add New Parents</h2>
                </div>
                <div class="flex flex-wrap items-center">
                    <a href="{{ route('parents.index') }}" class="bg-black-700 text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                        <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                        <span class="ml-2 text-xs font-semibold">Back</span>
                    </a>
                </div>
            </div>

            <form action="{{ route('parents.store') }}" method="POST" class="w-full" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    
                    <!-- Name Field (Left Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1" for="name">Name</label>
                        <input name="name" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field (Right Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1" for="email">Email</label>
                        <input name="email" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field (Left Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1" for="password">Password</label>
                        <input name="password" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="password">
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Field (Right Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1" for="phone">Phone</label>
                        <input name="phone" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gender Field (Left Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1">Gender</label>
                        <div class="flex items-center">
                            <label class="block text-gray-700 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio" value="male">
                                <span class="text-sm">Male</span>
                            </label>
                            <label class="ml-4 block text-gray-700 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio" value="female">
                                <span class="text-sm">Female</span>
                            </label>
                            <label class="ml-4 block text-gray-700 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio" value="other">
                                <span class="text-sm">Other</span>
                            </label>
                        </div>
                        @error('gender')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Current Address Field (Right Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1" for="current_address">Current Address</label>
                        <input name="current_address" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ old('current_address') }}">
                        @error('current_address')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Permanent Address Field (Left Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1" for="permanent_address">Permanent Address</label>
                        <input name="permanent_address" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" value="{{ old('permanent_address') }}">
                        @error('permanent_address')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Profile Picture Field (Right Column) -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-1">Profile Picture</label>
                        <input name="profile_picture" class="bg-gray-200 appearance-none border-2 border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="file">
                    </div>

                </div>

                <div class="md:flex md:items-center mt-6">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>        
        </div>

    </div>
@endsection

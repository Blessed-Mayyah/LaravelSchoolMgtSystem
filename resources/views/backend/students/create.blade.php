@extends('layouts.app')

@section('content')
    <div class="roles flex justify-center items-center min-h-screen">
        <div class="w-full max-w-2xl bg-white rounded shadow-lg p-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-black uppercase font-bold">Add New Student</h2>
                <a href="{{ route('student.index') }}" class="bg-black text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path>
                    </svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>

            <form action="{{ route('student.store') }}" method="POST" class="w-full" enctype="multipart/form-data">
                @csrf
                
                <!-- Name -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Name</label>
                    <input name="name" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="text" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Email</label>
                    <input name="email" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Password</label>
                    <input name="password" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="password">
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Roll Number -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Reg Number</label>
                    <input name="roll_number" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="number" value="{{ old('roll_number') }}">
                    @error('roll_number')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Phone</label>
                    <input name="phone" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="text" value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Gender</label>
                    <div class="flex">
                        <label class="text-black mr-4">
                            <input name="gender" type="radio" value="male" class="mr-2"> Male
                        </label>
                        <label class="text-black mr-4">
                            <input name="gender" type="radio" value="female" class="mr-2"> Female
                        </label>
                        <label class="text-black">
                            <input name="gender" type="radio" value="other" class="mr-2"> Other
                        </label>
                    </div>
                    @error('gender')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Date of Birth -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Date of Birth</label>
                    <input name="dateofbirth" id="datepicker-sc" autocomplete="off" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="text" value="{{ old('dateofbirth') }}">
                    @error('dateofbirth')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Current Address -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Current Address</label>
                    <input name="current_address" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="text" value="{{ old('current_address') }}">
                    @error('current_address')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Permanent Address -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Permanent Address</label>
                    <input name="permanent_address" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500" type="text" value="{{ old('permanent_address') }}">
                    @error('permanent_address')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Class -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Class</label>
                    <select name="class_id" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500">
                        <option value="">Select Class</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>{{ $class->name }}</option>
                        @endforeach
                    </select>
                    @error('class_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Parent -->
                <div class="mb-4">
                    <label class="block text-black font-bold mb-1">Parent</label>
                    <select name="parent_id" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:border-blue-500">
                        <option value="">Select Parent</option>
                        @foreach ($parents as $parent)
                            <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>{{ $parent->name }}</option>
                        @endforeach
                    </select>
                    @error('parent_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mt-8 text-center">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md">Create Student</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="roles flex justify-center items-center min-h-screen">
        <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg p-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-black uppercase font-bold">Add New Class</h2>
                </div>
                <div class="flex flex-wrap items-center">
                    <a href="{{ route('classes.index') }}" class="bg-gray-700 text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                        <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                        <span class="ml-2 text-xs font-semibold">Back</span>
                    </a>
                </div>
            </div>

            <div class="mt-8">
                <form action="{{ route('classes.store') }}" method="POST" class="w-full px-6 py-12">
                    @csrf
                    <div class="mb-6">
                        <label class="block text-black font-bold mb-2">Class Name</label>
                        <input name="class_name" class="bg-white border-2 border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-gray-100 focus:border-blue-500" type="text" value="{{ old('class_name') }}">
                        @error('class_name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-black font-bold mb-2">Class Numeric</label>
                        <input name="class_numeric" class="bg-white border-2 border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-gray-100 focus:border-blue-500" type="number" value="{{ old('class_numeric') }}">
                        @error('class_numeric')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-black font-bold mb-2">Assign Teacher</label>
                        <div class="relative">
                            <select name="teacher_id" class="block appearance-none w-full bg-white border border-gray-300 text-black py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-gray-100 focus:border-blue-500">
                                <option value="">--Select Teacher--</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-black">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                        @error('teacher_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-black font-bold mb-2">Class Description</label>
                        <input name="class_description" class="bg-white border-2 border-gray-300 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-gray-100 focus:border-blue-500" type="text" value="{{ old('class_description') }}">
                        @error('class_description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Submit
                        </button>
                    </div>
                </form>        
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="roles flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-xl bg-white rounded shadow-md p-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-gray-800 uppercase font-bold">Add New Subject</h2>
                <a href="{{ route('subject.index') }}" class="bg-black text-white text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path>
                    </svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>

            <form action="{{ route('subject.store') }}" method="POST" class="w-full">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-1">
                        Subject Name
                    </label>
                    <input name="name" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" type="text" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-1">
                        Subject Code
                    </label>
                    <input name="subject_code" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" type="number" value="{{ old('subject_code') }}">
                    @error('subject_code')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-1">
                        Subject Description
                    </label>
                    <input name="description" class="bg-white border border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" type="text" value="{{ old('description') }}">
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-1">
                        Assign Teacher
                    </label>
                    <div class="relative">
                        <select name="teacher_id" class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:border-blue-500">
                            <option value="">--Select Teacher--</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    @error('teacher_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="text-center">
                    <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

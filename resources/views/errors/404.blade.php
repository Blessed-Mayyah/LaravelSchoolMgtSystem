@extends('layouts.app')

@section('content')

<div class="403">
    <div class="my-12 text-center">
        <h1 class="text-5xl font-bold">404</h1>
        <p class="font-bold text-white-600 mb-6">Not Found.</p>
        <a href="{{ route('home') }}" class="text-sm text-white-600 border border-gray-400 px-4 py-2 rounded">Back to Home.</a>
    </div>
</div>

@endsection
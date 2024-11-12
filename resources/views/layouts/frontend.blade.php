<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white font-sans antialiased">
    <div id="app-2">
        @include('layouts.navbar')
        
        <!-- Wrapper to hold sidebar and content with appropriate margins and spacing -->
        <div class="flex flex-row mt-16">

            <!-- Sidebar with fixed width on larger screens -->
            {{-- <div class="hidden sm:block sm:w-1/5 lg:w-1/6 bg-black-800 text-white h-screen fixed top-0 left-0 overflow-y-auto">
                @include('layouts.sidebar')
            </div> --}}

            <!-- Main content area with responsive left margin to offset sidebar -->
            <div class="ml-0 sm:ml-[20%] lg:ml-[16%] w-full sm:w-4/5 lg:w-5/6 px-4 sm:px-8 lg:px-12">
                <div class="container mx-auto p-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>

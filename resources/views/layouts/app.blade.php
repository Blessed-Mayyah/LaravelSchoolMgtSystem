<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Besten School Management System') }}</title>

    <!-- Link to Tailwind CSS and any other custom styles in app.css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white-500 font-sans antialiased"> <!-- Updated background color to blue -->
    <div id="app">
        <!-- Navbar -->
        @include('layouts.navbar')
        
        <!-- Main Content Area with Sidebar -->
        <div class="main flex mt-20 px-4 lg:px-8">
            <!-- Sidebar -->
            {{-- @include('layouts.sidebar') --}}

            <!-- Content Section -->
            <div class="content w-full sm:w-5/6 p-6 bg-white-100"> <!-- Light blue background for content -->
                <div class="container mx-auto">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Toggle Dropdown Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("opennavdropdown").addEventListener("click", function() {
                document.getElementById("navdropdown").classList.toggle("hidden");
            });
        });
    </script>

    @stack('scripts')
</body>
</html>

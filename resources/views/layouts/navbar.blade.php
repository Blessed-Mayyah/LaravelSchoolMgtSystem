<div class="bg-black px-4 py-2 flex items-center justify-between shadow-lg fixed top-0 left-0 right-0 z-50 h-16">
    <!-- Logo and System Title -->
    <div class="flex items-center text-white space-x-3">
        <img class="w-8 h-8 rounded-full" src="{{ asset('images/logo.png') }}" alt="Logo">
        <span class="font-bold text-lg tracking-wide">BESTEN SCHOOL MANAGEMENT SYSTEM</span>
    </div>

    <!-- Card-style Navigation Links with Spacing, Black Background, White Text, and Blue Hover -->
    <div class="flex space-x-4">
        <!-- Each link is in a card with background, spacing, and hover effect -->
        <a href="{{ route('home') }}" class="flex items-center justify-center p-4 bg-black rounded-lg shadow-lg hover:bg-blue-600 text-white transition ease-in-out duration-200">
            <span class="text-lg font-semibold">Dashboard</span>
        </a>
        @role('Admin')
        <a href="{{ route('student.index') }}" class="flex items-center justify-center p-4 bg-black rounded-lg shadow-lg hover:bg-blue-600 text-white transition ease-in-out duration-200">
            <span class="text-lg font-semibold">Students</span>
        </a>
        <a href="{{ route('teacher.index') }}" class="flex items-center justify-center p-4 bg-black rounded-lg shadow-lg hover:bg-blue-600 text-white transition ease-in-out duration-200">
            <span class="text-lg font-semibold">Teachers</span>
        </a>
        <a href="{{ route('subject.index') }}" class="flex items-center justify-center p-4 bg-black rounded-lg shadow-lg hover:bg-blue-600 text-white transition ease-in-out duration-200">
            <span class="text-lg font-semibold">Subjects</span>
        </a>
        <a href="{{ route('classes.index') }}" class="flex items-center justify-center p-4 bg-black rounded-lg shadow-lg hover:bg-blue-600 text-white transition ease-in-out duration-200">
            <span class="text-lg font-semibold">Classes</span>
        </a>
        <a href="{{ route('parents.index') }}" class="flex items-center justify-center p-4 bg-black rounded-lg shadow-lg hover:bg-blue-600 text-white transition ease-in-out duration-200">
            <span class="text-lg font-semibold">Parents</span>
        </a>
        @endrole
    </div>

    <!-- User Profile and Navigation -->
    <div class="relative">
        @auth
            <div class="flex items-center cursor-pointer" id="opennavdropdown">
                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}" alt="Avatar">
                <p class="text-sm font-bold text-white">{{ auth()->user()->name }}</p>
                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
            <!-- Dropdown Menu -->
            <div class="bg-blue-700 absolute right-0 mt-2 w-48 rounded-md shadow-lg hidden" id="navdropdown">
                <a href="{{ route('profile') }}" class="block px-4 py-2 font-semibold text-white hover:bg-blue-600">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="w-full px-4 py-2 font-semibold text-white hover:bg-blue-600 text-left">Logout</button>
                </form>
            </div>
        @else
            <a href="{{ route('login') }}" class="font-bold text-white hover:text-white-300">Login</a>
        @endauth
    </div>
</div>

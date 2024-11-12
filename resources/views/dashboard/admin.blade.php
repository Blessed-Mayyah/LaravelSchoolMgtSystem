<div class="grid grid-cols-2 gap-4">
    <!-- Students Card -->
    <div class="bg-black p-4 rounded shadow hover:bg-blue-500 transition-all">
        <a href="{{ route('student.index') }}">
            <h3 class="text-xl font-semibold text-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-10 mx-auto mb-2 text-white">
                    <!-- Icon for Students -->
                    <path d="M120 128c13.3 0 24-10.7 24-24v-72c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v72c0 13.3 10.7 24 24 24h96z"/>
                </svg>
                <span class="text-4xl">{{ sprintf("%02d", count($students)) }}</span>
                <span class="leading-tight">Students</span>
            </h3>
        </a>
    </div>
    <br>

    <!-- Teachers Card -->
    <div class="bg-black p-4 rounded shadow hover:bg-blue-500 transition-all">
        <a href="{{ route('teacher.index') }}">
            <h3 class="text-xl font-semibold text-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-10 mx-auto mb-2 text-white">
                    <!-- Icon for Teachers -->
                    <path d="M120 0c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h72c8.8 0 16-7.2 16-16V16c0-8.8-7.2-16-16-16H120zm64 160c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h96c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24H184zM512 72c0-13.3-10.7-24-24-24H304c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h184c13.3 0 24-10.7 24-24V72z"/>
                </svg>
                <span class="text-4xl">{{ sprintf("%02d", count($teachers)) }}</span>
                <span class="leading-tight">Teachers</span>
            </h3>
        </a>
    </div>
<br>

 
    <!-- Subjects Card -->
    <div class="bg-black p-4 rounded shadow hover:bg-blue-500 transition-all">
        <a href="{{ route('subject.index') }}">
            <h3 class="text-xl font-semibold text-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-10 mx-auto mb-2 text-white">
                    <!-- Icon for Subjects -->
                    <path d="M0 80C0 35.8 35.8 0 80 0h352c44.2 0 80 35.8 80 80v352c0 44.2-35.8 80-80 80H80c-44.2 0-80-35.8-80-80V80z"/>
                </svg>
                <span class="text-4xl">{{ sprintf("%02d", count($subjects)) }}</span>
                <span class="leading-tight">Subjects</span>
            </h3>
        </a>
    </div>
<br>
    <!-- Classes Card -->
    <div class="bg-black p-4 rounded shadow hover:bg-blue-500 transition-all">
        <a href="{{ route('classes.index') }}">
            <h3 class="text-xl font-semibold text-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-10 mx-auto mb-2 text-white">
                    <!-- Icon for Classes -->
                    <path d="M120 0c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h72c8.8 0 16-7.2 16-16V16c0-8.8-7.2-16-16-16H120zm64 160c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h96c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24H184zM512 72c0-13.3-10.7-24-24-24H304c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h184c13.3 0 24-10.7 24-24V72z"/>
                </svg>
                <span class="text-4xl">{{ sprintf("%02d", count($classes)) }}</span>
                <span class="leading-tight">Classes</span>
            </h3>
        </a>
    </div>
</div>



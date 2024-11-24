<!-- resources/views/components/navbar.blade.php -->

<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex flex-wrap justify-between items-center py-4 px-6">
        <div class="flex items-center">
            <img alt="Logo" class="mr-3 h-12 w-12 object-cover" height="48" src="{{ asset('images/logo if.png') }}"
                width="48" />
            <div>
                <h1 class="text-lg md:text-xl font-bold">Tracer Study</h1>
                <p class="text-sm">Teknik Informatika</p>
            </div>
        </div>
        <a href="{{ route('login') }}"
            class="bg-yellow-400 text-black py-2 px-4 rounded shadow-md hover:bg-yellow-500 transition">
            Login
        </a>
    </div>
</header>

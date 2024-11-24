<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Tracer Study</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts for Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>

<body class="bg-yellow-50 font-roboto flex">

    <!-- Sidebar -->
    <div id="sidebar"
        class="bg-white w-64 h-screen shadow-lg flex flex-col fixed top-0 left-0 z-20 transition-transform transform -translate-x-full sm:translate-x-0 overflow-y-auto">
        <div class="flex items-center py-4  px-2 border-b-2 justify-center">
            <img alt="Logo" class="h-12 w-12 object-cover mr-3" src="{{ asset('images/logo if.png') }}" />
            <div>
                <h1 class="text-lg font-bold text-black">Tracer Study</h1>
                <p class="text-sm text-black">Teknik Informatika</p>
            </div>
        </div>
        <nav class="mt-6 flex-1">
            <a href="{{ route('login') }}" class="block py-2.5 px-4 rounded transition hover:bg-yellow-100 hover:text-yellow-500">
                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
            </a>
            <a href="#" class="block py-2.5 px-4 rounded transition hover:bg-yellow-100 hover:text-yellow-500">
                <i class="fas fa-box mr-3"></i> Edit Survey
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="w-full flex flex-col ml-0 sm:ml-64">
        <!-- Desktop Header -->
        <header class="w-full bg-yellow-50 shadow-md py-4 px-6 flex justify-between">
            <button id="toggleSidebar" class="text-black text-3xl focus:outline-none sm:hidden">
                <i class="fas fa-bars"></i>
            </button>

            <div class="flex items-center">
                <h1 class="text-lg font-bold text-black">Dashboard</h1>
            </div>
            <div class="relative">
                <button id="avatarButton"
                    class="relative z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-yellow-300 hover:border-yellow-200 focus:outline-none">
                    <img src="{{ asset('images/profile.jpg') }}" alt="User Avatar"
                        class="w-full h-full object-cover rounded-full">
                </button>
                <div id="avatarDropdown"
                    class="absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg py-2 hidden transition duration-200 z-50">
                    <a href="#" class="block px-4 py-2 text-black hover:bg-yellow-200">Profile</a>
                    <a href="#" class="block px-4 py-2 text-black hover:bg-yellow-200">Settings</a>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-black hover:bg-yellow-200"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </header>

        <!-- Main Section -->
        <main class="w-full flex-grow p-6 overflow-y-auto">

            <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md m-10">
                <div
                    class="relative mx-4 mt-4 flex flex-col gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none md:flex-row md:items-center">
                    <div class="w-max rounded-lg bg-gray-900 p-5 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h6
                            class="block font-sans text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                            Employment Status Chart
                        </h6>
                        <p
                            class="block max-w-sm font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
                            A bar chart visualizing the distribution of post-graduate statuses.
                        </p>
                    </div>
                </div>
                <div class="pt-6 px-2 pb-0">
                    <div id="employment-chart"></div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <div class="bg-white p-6 rounded-lg shadow-md w-full">
                <form action="#" method="POST" class="h-full flex flex-col justify-between">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" value="John Doe"
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" value="johndoe@example.com"
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" id="phone" name="phone" value="123-456-7890"
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password"
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>

                    <div class="mb-4">
                        <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 focus:outline-none">Save
                            Changes</button>
                    </div>
                </form>
            </div>

        </main>

        @include('components.footer')
    </div>

</body>

</html>

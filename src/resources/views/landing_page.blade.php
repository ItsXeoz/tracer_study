<html>

<head>
    <title>Tracer Study Teknik Informatika</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .float-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .float-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-yellow-50">
    <!-- Include Navbar -->
    @include('components.navbar')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Main Content -->
    <main class="container mx-auto py-10 px-5">
        <div class="flex flex-wrap md:flex-nowrap justify-between md:mx-10 items-center mb-10">
            <div class="max-w-lg mb-6 md:mb-0">
                <h2 class="text-2xl font-bold mb-4">Tracer Study Teknik Informatika</h2>
                <p class="mb-6 text-gray-700">
                    Tracer Study merupakan kegiatan pendataan yang ditujukan kepada mahasiswa yang telah lulus. Dalam
                    kegiatan ini, alumni diminta memberikan informasi mengenai aktivitas atau kegiatan yang mereka
                    lakukan setelah menyelesaikan pendidikan di perguruan tinggi.
                </p>
                <button class="bg-yellow-400 text-black py-2 px-4 rounded shadow-md hover:bg-yellow-500 transition">
                    Isi Survey
                </button>
            </div>
            <img alt="Illustration of data analysis and technology"
                class="rounded-lg shadow-md w-full  md:max-w-xs lg:max-w-md object-cover" height="300"
                src="https://storage.googleapis.com/a1aa/image/AaaIruC4Z279Chif7WwpAhE6jjFgmMkF7z4ZdAbTX0NS1v5JA.jpg"
                width="400" />
        </div>
    </main>

    <!-- Statistics Section -->
    <section class="bg-yellow-400 py-10 px-6 shadow-md " data-aos="fade-up" >
        <h3 class="text-center text-2xl font-bold mb-6">Lulusan Teknik Informatika</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div  data-aos="fade-down"
                class="bg-white p-6 rounded-lg shadow-md border-b-4 border-transparent  hover:border-yellow-500 transition-all duration-300 transform float-in">
                <p class="text-3xl font-bold text-black-500 counter" data-target="3712">0</p>
                <p>Total</p>
            </div>
            <div  data-aos="fade-down"
                class="bg-white p-6 rounded-lg shadow-md border-b-4 border-transparent hover:border-yellow-500 transition-all duration-300 transform float-in">
                <p class="text-3xl font-bold text-black-500 counter" data-target="1872">0</p>
                <p>Pekerjaan Sesuai Dengan Jurusan</p>
            </div>
            <div  data-aos="fade-down"
                class="bg-white p-6 rounded-lg shadow-md border-b-4 border-transparent hover:border-yellow-500 transition-all duration-300 transform float-in">
                <p class="text-3xl font-bold text-black-500 counter" data-target="1341">0</p>
                <p>Pekerjaan Tidak Sesuai Dengan Jurusan</p>
            </div>
            <div
                class="bg-white p-6 rounded-lg shadow-md border-b-4 border-transparent hover:border-yellow-500 transition-all duration-300 transform float-in">
                <p class="text-3xl font-bold text-black-500 counter" data-target="499">0</p>
                <p>Melanjutkan Pendidikan</p>
            </div>
        </div>
    </section>

    <!-- Chart Section -->
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
                <p class="block max-w-sm font-sans text-sm font-normal leading-normal text-gray-700 antialiased">
                    A bar chart visualizing the distribution of post-graduate statuses.
                </p>
            </div>
        </div>
        <div class="pt-6 px-2 pb-0">
            <div id="employment-chart"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Include Footer -->
    @include('components.footer')


</body>


</html>

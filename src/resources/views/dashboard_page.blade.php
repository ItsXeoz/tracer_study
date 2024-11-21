<!DOCTYPE html>
<html>

<head>
    <title>Tracer Study Teknik Informatika</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-yellow-50">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex flex-wrap justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="Logo" class="mr-3 h-12 w-12 object-cover" src="{{ asset('images/logo if.png') }}" />
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
                class="rounded-lg shadow-md w-full md:max-w-sm lg:max-w-md object-cover"
                src="https://storage.googleapis.com/a1aa/image/8eEZRYCleEjpeJpXKadwJpSbIC7EPe47kuWlfNDADAGOMJZeE.jpg" />
        </div>
    </main>

    <!-- Statistics Section -->
    <section class="bg-yellow-400 py-10 px-6 shadow-md">
        <h3 class="text-center text-2xl font-bold mb-6">Lulusan Teknik Informatika</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold text-black-500">3712</p>
                <p>Total</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold text-black-500">1872</p>
                <p>Pekerjaan Sesuai Dengan Jurusan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold text-black-500">1341</p>
                <p>Pekerjaan Tidak Sesuai Dengan Jurusan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold text-black-500">499</p>
                <p>Melanjutkan Pendidikan</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="w-full py-8 bg-yellow-400 text-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap md:flex-nowrap gap-8">
                <!-- Left Section -->
                <div class="flex flex-col md:w-1/3">
                    <div class="flex items-center mb-4">
                        <img alt="Logo of UIN Sunan Gunung Djati" class="h-12 mr-4"
                            src="{{ asset('images/blu.png') }}" />
                        <img alt="Logo of Teknik Informatika" class="h-12" src="{{ asset('images/logo if.png') }}" />
                    </div>
                    <p class="text-sm font-bold mb-1">Teknik Informatika</p>
                    <p class="text-sm">
                        Universitas Islam Negeri Sunan Gunung Djati<br />
                        Jalan A.H Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614
                    </p>
                </div>

                <!-- Middle Section -->
                <div class="flex flex-col md:w-1/3 border-l-2 border-gray-600 border-opacity-60 pl-4">
                    <p class="font-bold mb-3">Layanan Akademik</p>
                    <ul class="space-y-2">
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">Sistem Informasi Layanan Akademik
                                (SALAM)</a></li>
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">Learning Management Sistem
                                (LMS)</a></li>
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">E-Library UIN Sunan Gunung
                                Djati</a></li>
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">E-Library Teknik Informatika</a>
                        </li>
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">Jurnal Online Informatika</a></li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="flex flex-col md:w-1/3 border-l-2 border-gray-600 border-opacity-60 pl-4">
                    <p class="font-bold mb-3">Akses Cepat</p>
                    <ul class="space-y-2">
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">Fakultas Sains Dan Teknologi</a>
                        </li>
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">UIN Sunan Gunung Djati</a></li>
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">SINTA Dikti Kemdikbud RI</a></li>
                        <li><a class="text-sm text-gray-800 hover:underline" href="#">Pangkalan Data DIKTI Kemdikbud
                                RI</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 border-gray-600" />
            <div class="text-center">
                <p class="text-sm">
                    © Copyrights. All rights reserved.
                    <a class="text-gray-800 hover:underline" href="#">Created by Abidzar</a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
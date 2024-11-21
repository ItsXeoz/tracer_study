<html>

<head>
    <title>
        Tracer Study Teknik Informatika
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-yellow-50">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="Logo" class="mr-3" height="50" src="{{ asset('images/logo if.png') }}" width="50" />
                <div>
                    <h1 class="text-xl font-bold">
                        Tracer Study
                    </h1>
                    <p class="text-sm">
                        Teknik Informatika
                    </p>
                </div>
            </div>
            <button class="bg-yellow-400 text-black py-2 px-4 rounded shadow-md">
                Login
            </button>
        </div>
    </header>
    <main class="container mx-auto  py-10 ">
        <div class="flex justify-between items-center mb-10">
            <div class="max-w-lg">
                <h2 class="text-2xl font-bold mb-4">
                    Tracer Study Teknik Informatika
                </h2>
                <p class="mb-6">
                    Tracer Study merupakan kegiatan pendataan yang ditujukan kepada mahasiswa yang telah lulus. Dalam
                    kegiatan ini, alumni diminta memberikan informasi mengenai aktivitas atau kegiatan yang mereka
                    lakukan setelah menyelesaikan pendidikan di perguruan tinggi.
                </p>
                <button class="bg-yellow-400 shadow-md text-black py-2 px-4 rounded">
                    Isi Survey
                </button>
            </div>
            <img alt="Illustration of data analysis and technology" class="rounded-lg shadow-md" height="250"
                src="https://storage.googleapis.com/a1aa/image/8eEZRYCleEjpeJpXKadwJpSbIC7EPe47kuWlfNDADAGOMJZeE.jpg"
                width="400" />
        </div>
    </main>
    <section class="bg-yellow-400 py-10 px-10 items-center  mb-10 shadow-md  ">
        <h3 class="text-center text-2xl font-bold mb-6">
            Lulusan Teknik Informatika
        </h3>
        <div class="grid grid-cols-4 gap-4 text-center">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold">
                    3712
                </p>
                <p>
                    Total
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold">
                    1872
                </p>
                <p>
                    Pekerjaan Sesuai Dengan Jurusan
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold">
                    1341
                </p>
                <p>
                    Pekerjaan Tidak Sesuai Dengan Jurusan
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-3xl font-bold">
                    499
                </p>
                <p>
                    Melanjutkan Pendidikan
                </p>
            </div>
        </div>
    </section>
    <footer class="w-full py-4 flex-shrink-0 bg-yellow-400 text-gray-800">
        <div class="container mx-auto pt-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/3 md:w-1/2 mb-4">
                    <div class="flex pb-3">
                        <div class="w-1/2 flex ">
                            <img alt="Logo of UIN Sunan Gunung Djati" class="h-12"
                                src="{{ asset('images/blu.png') }}" />
                            <div class="w-1/2 pl-10 flex">
                                <img alt="Logo of Teknik Informatika" class="h-12" height="50"
                                    src="{{ asset('images/logo if.png') }}" width="50" />
                            </div>
                        </div>

                    </div>
                    <p class="text-sm font-bold mb-0">
                        Teknik Informatika
                        <br />
                        Universitas Islam Negeri Sunan Gunung Djati
                    </p>
                    <p class="text-sm">
                        Jalan A.H Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614
                    </p>
                </div>
                <div class="w-full lg:w-1/3 md:w-1/2 mb-4 border-l-2 border-gray-600 pl-4 ">
                    <hr class="block md:hidden" />
                    <div class="flex flex-col h-full">
                        <p class="font-bold mb-3">
                            Layanan Akademik
                        </p>
                        <ul class="list-none space-y-2">
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    Sistem Informasi Layanan Akademik (SALAM)
                                </a>
                            </li>
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    Learning Management Sistem (LMS)
                                </a>
                            </li>
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    E-Library UIN Sunan Gunung Djati
                                </a>
                            </li>
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    E-Library Teknik Informatika
                                </a>
                            </li>
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    Jurnal Online Informatika
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 md:w-1/2 mb-4 border-l-2 pl-4 border-gray-600">
                    <hr class="block md:hidden" />
                    <div class="flex flex-col h-full">
                        <p class="font-bold mb-3">
                            Akses Cepat
                        </p>
                        <ul class="list-none space-y-2">
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    Fakultas Sains Dan Teknologi
                                </a>
                            </li>
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    UIN Sunan Gunung Djati
                                </a>
                            </li>
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    SINTA Dikti Kemdikbud RI
                                </a>
                            </li>
                            <li>
                                <a class="text-sm text-gray-800 hover:underline" href="#">
                                    Pangkalan Data DIKTI Kemdikbud RI
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-4 border-gray-600" />
            <div class="text-center mt-2 mb-3">
                <p class="text-sm">
                    © Copyrights. All rights reserved.
                    <a class="text-gray-800 hover:underline" href="#">
                        Created by Abidzar
                    </a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
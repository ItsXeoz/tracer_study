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

<body class="bg-yellow-50 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row w-full max-w-4xl ">
        <div class="w-full md:w-1/2 p-10 mt-11">
            <div class="text-center">
                <h1 class="text-2xl font-bold mb-2">
                    LOGIN
                </h1>
                <p class="text-gray-600 mb-8">
                    Tracer Study Teknik Informatika
                </p>
            </div>
            <form>
                <div class="mb-4">
                    <div class="flex items-center border-b border-gray-300 py-2">
                        <i class="fas fa-user text-gray-400 mr-3"></i>
                        <input aria-label="NIM"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            placeholder="NIM" type="text" />
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex items-center border-b border-gray-300 py-2">
                        <i class="fas fa-lock text-gray-400 mr-3"></i>
                        <input aria-label="Password"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            placeholder="Password" type="password" />
                    </div>
                </div>
                <div class="text-center mb-11">
                    <button
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full shadow-lg focus:outline-none focus:shadow-outline"
                        type="button">
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div
            class="w-full md:w-1/2 bg-gradient-to-bl from-yellow-400 to-yellow-50 rounded-b-lg md:rounded-r-lg md:rounded-bl-none flex items-center justify-center relative p-10">
            <img alt="Logo" class="absolute top-4 left-4 w-12 h-12" height="300"
                src="{{ asset('images/logo if.png') }}"
                width="300" />
            <img alt="Illustration of a hand interacting with a web interface" class="w-3/4" height="400"
                src="{{ asset('images/login.png') }}"
                width="400" />
        </div>
    </div>
</body>

</html>
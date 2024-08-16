<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src=" {{ asset('js/script.js') }} "></script>

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 overflow-x-hidden">
    <header class="bg-white shadow-lg">
        <div class="flex items-center justify-between">
            <div id="logo" class="flex items-center p-5 bg-customRed rounded-br-lg">
                <p id="plogo" class="text-white font-itim text-5xl">Meu Perfil</p>
            </div>
            <nav id="navbar" class="hidden md:flex items-center space-x-12 gap-14">
                <a href="/ong/account" class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Meus Dados</a>
                <a href="/ong/mural" class="text-customBlue text-2xl font-itim hover:text-customRed hover:underline hover:pb-3">Mural</a>
                <a href="/ong/courses" class="text-customRed text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Cursos</a>
                <a href="/ong/volunteer" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Voluntários</a>
                <a href="/" class="text-customBlue text-2xl font-itim hover:text-red-700 hover:underline hover:pb-3">Matriculas</a>
            </nav>
            <div id="userAction" class="hidden md:flex items-center space-x-2 mr-3">
                <a href="#" class="text-gray-600 hover:text-customRed">
                    <img id="userImg" class="h-10 mr-2" src="{{ asset('images/icons/userIconRed.png') }}" alt="">
                </a>
            </div>
            <div id="mobile-nav" class="md:hidden mr-5">
                <button id="mobile-menu-toggle" class="focus:outline-none">
                    <img class="h-10" src="{{ asset('images/icons/taskbarRed.png') }}" alt="">
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden bg-white py-2 px-4">
            <a href="/ong/account" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Meus Dados</a>
            <a href="/ong/mural" class="text-customBlue text-lg font-itim hover:text-customRed">Mural</a>
            <a href="/ong/courses" class="block text-customRed text-lg font-itim py-2 hover:text-customRed">Cursos</a>
            <a href="/ong/volunteer" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Voluntários</a>
            <a href="/" class="block text-customBlue text-lg font-itim py-2 hover:text-customRed">Matriculas</a>
        </div>
    </header>
</body>

</html>
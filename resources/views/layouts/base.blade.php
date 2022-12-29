<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') :: Объявления</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="icon" type="image/x-icon" href="/images/icon.png">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>
<body class="bg-[#FCF2DB] font-['Montserrat']">
<header>
    <div class="container">
        <nav class="bg-[#9B816E] px-6 sm:px-4 py-8 fixed w-full top-0 left-0">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="{{ route('index') }}" class="flex items-center">
                    <img src="/images/logo.svg" class="mr-3 h-16 sm:h-16" alt="AUTOCFG Logo">
                </a>
                <div class="flex md:order-2">
                    @guest
                            @if (Route::has('login'))
                                <a class="flex items-center text-white bg-[#836F6F] hover:bg-[#F7D3B2] hover:text-black font-black rounded-2xl text-lg px-8 py-2.5 text-center md:mr-0" href="{{ route('login') }}">ВХОД</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="flex items-center text-white bg-[#836F6F] hover:bg-[#F7D3B2] hover:text-black font-black rounded-2xl text-lg px-8 ml-5 py-2.5 text-center md:mr-0" href="{{ route('register') }}">РЕГИСТРАЦИЯ</a>
                            @endif
                        @else
                            <div class="flex">
                                <a class="flex uppercase items-center text-black bg-[#F7D3B2] hover:text-black font-black rounded-2xl text-lg px-8 py-2 text-center md:mr-0 shadow-lg shadow-[#F7D3B2] " href="{{ route('home') }}" role="button">{{ Auth::user()->name }}</a>
                                    <a class="flex uppercase items-center text-white bg-[#836F6F] hover:bg-[#F7D3B2] hover:text-black font-black rounded-2xl ml-5 text-lg px-8 py-2.5 text-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();
                                    ">ВЫХОД</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                            </div>
                        @endguest
                </div>
                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 text-sm font-bold ">
                        <li>
                            <a href="{{ route('index') }}" class="block text-lg font-bold md:bg-transparent hover:text-[#F7D3B2] md:text-white md:p-0 dark:text-white">КАТАЛОГ</a>
                        </li>
                        <li>
                            <a href="/about" class="block text-lg font-bold md:bg-transparent hover:text-[#F7D3B2] md:text-white md:p-0 dark:text-white">О НАС</a>
                        </li>
                        <li>
                            <a href="#" class="block text-lg font-bold md:bg-transparent hover:text-[#F7D3B2] md:text-white md:p-0 dark:text-white">ГДЕ НАС НАЙТИ ?</a>
                        </li>
                    </ul>
                </div>
            </div> 
        </nav>
    </div>
</header>
<main class="mt-32">
     @yield('main')
</main>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="py-3 text-center">
            <p>
                4 Answers Quiz 4択クイズ&クイズ徹底解説
            </p>
            <h1 class="text-2xl font-bold my-3"><a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></h1>
        </div>
        <nav class="flex items-center justify-between flex-wrap bg-gray-500 p-6 w-full">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                    <span class="text-lg pl-2"><a href="{{ url('/') }}">ホーム</a></span>
                </a>
            </div>

            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    @guest
                    <li class="mr-3">
                        <a class="inline-block text-white no-underline py-2 px-4" href="{{ route('login') }}">ログイン</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-white no-underline py-2 px-4" href="{{ route('register') }}">ユーザー登録</a>
                    </li>
                    @else
                    <li class="mr-3">
                        <a class="inline-block text-white no-underline py-2 px-4" href="#">{{ Auth::user()->name }}&nbsp;さん</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main class="py-4 w-11/12 mx-auto my-5">
            @yield('content')
        </main>

        <footer>
            <div class="bg-gray-500 py-2">
                <footer class="flex flex-wrap items-center justify-between p-3 m-auto">
                    <div class="container mx-auto flex flex-col flex-wrap items-center justify-between">
                        <div class="flex mx-auto text-white text-center">
                            Copyright PaiQuiz © 2022
                        </div>
                    </div>
                    <div></div>
                </footer>
                @auth
                <a href="#" class="block text-right mr-5 mb-3 text-white font-bold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form action="{{ route('logout') }}" method="post" id="logout-form">
                    @csrf
                </form>
                @endauth
            </div>
        </footer>
    </div>

    <script>
        'use strict';

        let navToggle = document.getElementById('nav-toggle');
        let navContent = document.getElementById('nav-content');

        navToggle.addEventListener('click', function () {
            navContent.classList.toggle('hidden');
        })

    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting App</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans text-gray-900 text-sm bg-gray-100">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#">
        <img src="{{asset('img/logo.svg')}}">
    </a>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4 sm:block">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{route('logout')}}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp"
                 alt="avatar" class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>
<main class="container mx-auto flex" style="max-width: 1000px">
    <div class="bg-white border-2 border-blue rounded-xl mt-16" style="max-width: 280px; margin-right: 20px;">
        <div class="text-center px-6 py-2 pt-6">
            <h3 class="font-semibold text-base">Add an idea</h3>
            @auth
            <p class="text-xs mt-4">Let us know what you would like and we'll take a look over! </p>
            @else
            <p class="text-xs mt-4">Please login in to create an idea. </p>
            @endauth
        </div>
        @auth
        <livewire:create-idea/>
        @else
            <div class="my-6 text-center">
                <a  href="{{ route('login') }}"
                    class="py-2 inline-block w-1/2 text-xs bg-blue-200 font-semibold rounded-xl border border-blue-200 hover:border-blue-400 ">
                    Login
                </a>
                <a
                    href="{{ route('register') }}"
                    class="inline-block mt-4 justify-center w-1/2 py-2 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 ">
                    Sign Up
                </a>
            </div>
        @endauth
    </div>
    <div style="max-width: 700px;">
        <nav class="flex items-center justify-between text-sm">
            <ul class="flex uppercase font-semibold space-x-10 pb-3">
                <li><a href="#" class="border-b-4 pb-3 border-blue-400">All Ideas (87)</a></li>
                <li><a href="#"
                       class="text-gray-400 transition duration-300 transform border-b-4 hover:border-blue-400 pb-3">Considering
                        (6)</a></li>
                <li><a href="#"
                       class="text-gray-400 transition duration-300 transform border-b-4 hover:border-blue-400 pb-3">In
                        Progress (1)</a></li>

            </ul>
            <ul class="flex uppercase font-semibold space-x-10 pb-3">
                <li><a href="#"
                       class="text-gray-400 transition duration-300 transform border-b-4 hover:border-blue-400 pb-3">Implemented
                        (10)</a></li>
                <li><a href="#"
                       class="text-gray-400 transition duration-300 transform border-b-4 hover:border-blue-400 pb-3">Closed
                        (55)</a></li>
            </ul>
        </nav>
        <div class="mt-8">
            {{$slot}}
        </div>
    </div>
</main>
<livewire:scripts />
</body>
</html>

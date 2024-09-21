<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Red social - @yield('titulo')</title>
        @vite('resources/css/app.css')
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-900 text-white">
        <header class="p-5 border-b shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    RedSocial
                </h1>

                @auth
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold text-sm" href="#">
                            Hola: 
                            <span class="font-normal"> {{ auth()->user()->username }} </span>
                        </a>


                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-sm" href="/crear-cuenta">
                                Cerrar Sesión
                            </button>
                        </form>
                    </nav>
                @endauth

                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-sm" href="/">Login</a>
                        <a class="font-bold uppercase text-sm" href="/crear-cuenta">
                            Crear cuenta
                        </a>
                    </nav>
                @endguest
            </div>
        </header>

        <main class="container mx-auto">
            {{-- <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2> --}}
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 border-t font-bold uppercase">
            RedSocial - Todos los derechos reservados {{ now()->year }}
        </footer>

    </body>
</html>
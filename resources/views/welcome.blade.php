<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
        <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    </head>
    <body class="">
        <div class="bg-info py-2 shadow">
            <header class="">

                @if (Route::has('login'))
                    <nav >
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class=" "
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                            class="text-decoration-none text-dark"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                class="text-decoration-none text-dark"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>




        </div>
    </body>
</html>

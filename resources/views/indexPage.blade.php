@extends('layouts.indexPageLayout')
{{-- @section() --}}
@section('content')
    <nav class="navbar bg-body-tertiary shadow">
        <div class="container-fluid d-flex">
            <a class="navbar-brand" href="#">
                EduCheck
            </a>
            <div class="d-flex align-items-center gap-2">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class=" ">
                            Dashboard
                        </a>
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-decoration-none text-dark">
                                Register
                            </a>
                        @endif
                        <button class="btn btn-success">
                            <a href="{{ route('login') }}" class="text-decoration-none text-light">
                                <p class="m-0">Log in</p>
                            </a>
                        </button>

                    @endauth
                @endif
            </div>
        </div>

    </nav>
@endsection

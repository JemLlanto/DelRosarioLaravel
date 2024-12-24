@extends('layouts.indexPageLayout')
@section('title', 'Login')
@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="border rounded shadow p-3">
            <h2 class="text-center m-0 pb-3">Login </h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="email">Email</span>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Email"
                        aria-label="email" aria-describedby="email">
                </div>

                <!-- Password -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="password">Email</span>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Password"
                        aria-label="password" aria-describedby="password">
                </div>


                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button class="btn btn-info" type="submit">Log in</button>
                </div>
            </form>
        </div>

    </div>

@endsection

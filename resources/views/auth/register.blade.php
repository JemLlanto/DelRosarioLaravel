@extends('layouts.indexPageLayout')
@section('title', 'Register')
@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="border rounded shadow p-3">
            <h2 class="text-center m-0 pb-3">Register </h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="name">Name</span>
                    <input name="name" type="text" class="form-control" placeholder="name" aria-label="name"
                        aria-describedby="name">
                    @if ($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                </div>
                {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> --}}

                <!-- Email Address -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="email">Email</span>
                    <input name="email" type="email" class="form-control" placeholder="email" aria-label="email"
                        aria-describedby="email">
                    @if ($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </div>
                {{-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div> --}}

                <!-- Password -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="password">Password</span>
                    <input name="password" type="password" class="form-control" placeholder="password" aria-label="password"
                        aria-describedby="password">
                    @if ($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                </div>
                {{-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div> --}}

                <!-- Confirm Password -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="password_confirmation">Name</span>
                    <input name="password_confirmation" type="password" class="form-control"
                        placeholder="password_confirmation" aria-label="password_confirmation"
                        aria-describedby="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span>{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                {{-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div> --}}

                <div class="flex items-center justify-end mt-4">
                    <a class="" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button type="submit" class="btn btn-success">Register</button>

                </div>
            </form>
        </div>

    </div>

@endsection

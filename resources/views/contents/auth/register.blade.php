@extends('layouts.auth')

@section('auth-content')
    {{-- content --}}
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            @include('contents.auth.partials.logo')
            <!-- /Logo -->
            <h4 class="mb-2">Create Your account?</h4>
            <p class="mb-4"></p>

            <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" :value="old('email')" placeholder="Enter your email" autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" placeholder="Enter your name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Confirm Password</label>
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password_confirmation" required />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required />
                        <label class="form-check-label" for="terms-conditions">
                            I agree to
                            <a href="javascript:void(0);">privacy policy & terms</a>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid w-100">Sign up</button>
            </form>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md">
                        <a class="btn btn-outline-dark w-100 strom-bg" href="{{ route('auth.google') }}">
                            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                                src="{{ asset('assets/img/icons/google-96.png') }}" />
                            Signup with Google
                        </a>
                    </div>
                </div>
            </div>

            <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('login') }}">
                    <span>Sign in instead</span>
                </a>
            </p>
        </div>
    </div>

    {{-- !content --}}
@endsection

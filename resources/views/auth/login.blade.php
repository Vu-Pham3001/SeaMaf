@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="login mt-4 mb-4">
        <div class="container d-flex" style="border: solid 1px; border-radius: 10px; padding: 0;">
            <div class="img-login-left"></div>

            <div class="card-body-login">
                <form action="{{route ('login') }}" method="POST" class="form-box d-flex flex-column justify-content-center align-items-center">
                    @csrf
                    <div class="title-login">Login to your account</div>
                    @include('auth.alert')
                    <div class="form-input">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-input">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="remember">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Remember me</label>
                    </div>

                    <input type="submit" value="Login" class="btn-login" >
                    <!-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif -->

                    <div class="forgot-pass mt-3">Forgot Password?</div>
                    <div class="">or login with</div>
                    <div class="d-flex justify-content-around mt-3 mb-5" style="width: 85%;">
                        <input type="submit" value="Facebook" style="width: 45%; background-color: #4866a8; color: #fff; cursor: pointer; border-radius: 5px; height: 37px;">
                        <input type="submit" name="" id="" value="google" style="width: 45%; background-color: #da3f34; color: #fff; cursor: pointer; border-radius: 5px; height: 37px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
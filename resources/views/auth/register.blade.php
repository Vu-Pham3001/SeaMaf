@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="register mt-4 mb-4">
        <div class="container d-flex" style="border: solid 1px; border-radius: 10px; padding: 0;">
            <div class="img-login-left"></div>

            <div class="card-body-login">
                <form action="{{ route('register') }}" method="POST" class="form-box d-flex flex-column justify-content-center align-items-center" id="register">
                    @csrf
                    <div class="title-login">Create an account</div>
                    <div class="form-input">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" required autocomplete="new-name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-input">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-input">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-input">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>

                    <input type="submit" value="Register" class="btn-login">

                    <div class="mt-3">or register with</div>
                    <div class="d-flex justify-content-around mt-3 mb-5" style="width: 85%;">
                        <input type="submit" value="Facebook" style="width: 45%; background-color: #4866a8; color: #fff; cursor: pointer; border-radius: 5px; height: 37px;">
                        <input type="submit" name="" id="" value="google" style="width: 45%; background-color: #da3f34; color: #fff; cursor: pointer; border-radius: 5px; height: 37px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
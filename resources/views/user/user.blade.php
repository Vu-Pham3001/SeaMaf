@extends('layouts.app')

@section('title', 'Trang cá nhân')

@section('content')
    @include('admin.menu.alert')
    <div class="card-body-login container mt-5 mb-5">
        <form action="{{ route('update-user', [$info_user->id])}}" method="POST" class="form-box d-flex flex-column justify-content-center align-items-center" id="register">
            <div class="title-login">Edit your account</div>
            <div class="form-input">
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$info_user->name}}" name="name" placeholder="Name" required autocomplete="new-name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-input">
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$info_user->email}}" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">

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

            <input type="submit" value="Submit Profile Changes" class="btn-login">
            @csrf
        </form>
    </div>
@endsection
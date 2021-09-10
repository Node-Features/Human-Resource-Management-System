@extends('layouts.auth')
@section('page-title')
    {{__('Login')}}
@endsection
@php
    use App\Utility;
    $logo=asset(Storage::url('uploads/logo/'));
@endphp
@section('content')
    <div class="login-contain">
        <div class="login-inner-contain">
            
            <div class="login-form">
                <div class="page-title"><h5>{{__('Login')}}</h5></div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-control-label">{{__('Email')}}</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password" class="form-control-label">{{__('Password')}}</label>
                        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="custom-control custom-checkbox remember-me-text">
                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">{{__('Remember Me')}}</label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs text-primary">{{ __('Forgot Your Password?') }}</a>
                    @endif
                    <button type="submit" class="btn-login">{{__('Login')}}</button>
                </form>
            </div>

           
           
        </div>
    </div>
@endsection

@extends('planet::auth.layout')

@section('title', __('Sign in'))

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">
        <h5 class="text-uppercase">{{ __('Sign in') }}</h5>
        <br>
        <form class="form-type-material" action="{{ route('planet.login') }}" method="post">
            @csrf
            <div class="form-group">
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       type="email" name="email" placeholder="{{ __('Email') }}"
                       value="{{ old('email') }}"/>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group">
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       type="password" name="password" placeholder="{{ __('Password') }}"/>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group flexbox">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox"
                           name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label">{{ __('Remember me') }}</label>
                </div>
                <a class="text-muted hover-info fs-13"
                   href="{{ route('planet.password.request') }}">{{ __('Forgot Password?') }}</a>
            </div>

            <div class="form-group">
                <button class="btn btn-bold btn-block btn-info" type="submit">{{ __('Sign in') }}</button>
            </div>
        </form>

        <div class="divider">Or Sign In With</div>
        <div class="text-center">
            <a class="btn btn-square btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-square btn-google" href="#"><i class="fa fa-google"></i></a>
            <a class="btn btn-square btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <br>
        <p class="text-center text-muted fs-13 mt-20">{{ __('Still no account? Please go to') }}
            <a class="text-info fw-500" href="{{ route('planet.register') }}">{{ __('Sign up') }}</a>
        </p>
    </div>
@endSection

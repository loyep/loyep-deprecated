@extends('planet::auth.layout')

@section('title', __('Sign up'))

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%;">
        <h5 class="text-uppercase">{{ __('Sign up') }}</h5>
        <br>
        <form class="form-type-material" method="post" action="{{ route('planet.register') }}">
            @csrf
            <div class="form-group">
                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                       type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}"/>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}"/>
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

            <div class="form-group">
                <input class="form-control" type="password" name="password_confirmation"
                       placeholder="{{ __('Confirm Password') }}"/>
            </div>

            <br>
            <button class="btn btn-bold btn-block btn-info" type="submit">{{ __('Sign up') }}</button>
        </form>
        <br>
        <p class="text-center text-muted fs-13 mt-20">{{ __('Have account already? Please go to') }}
            <a class="text-info fw-500" href="{{ route('planet.login') }}">{{ __('Sign in') }}</a>
        </p>
    </div>
@endSection

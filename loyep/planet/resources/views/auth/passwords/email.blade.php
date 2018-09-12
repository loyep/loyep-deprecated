@extends('planet::auth.layout')

@section('title', __('Reset Password'))

@section('content')
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">
        <h5 class="text-uppercase">{{ __('Reset Password') }}</h5>
        <br>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form class="form-type-material" method="POST" action="{{ route('planet.password.email') }}">
            @csrf
            <div class="form-group">
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}"/>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <br>
            <button class="btn btn-bold btn-block btn-info" type="submit">{{ __('Send Password Reset Link') }}</button>
        </form>
    </div>
@endSection

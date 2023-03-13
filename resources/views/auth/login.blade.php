@extends('layouts.appfront')

@section('content')


<div class="" >
    <div class="login-page">
        <div class="form rounded__basic">
            <div class="login">
            <div class="login-header animate__animated animate__flip">
                <img src="{{ asset('images/logo.png') }}" class="size__icon animate__animated animate__flip" alt="icon login">
            </div>
            </div>
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                <div class="bloque__1">
                    {{-- Inicio input email --}}
                    <input id="email" type="email" class="rounded__basic  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" autofocus required>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- Fin input email --}}

                    {{-- Inicio input contraseña --}}

                    <div class="input-group">
                        
                        <input  ID="txtPassword" id="password" type="password" class="rounded__basic with_basic  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password" required>
                        
                        <div class="input-group-append">
                                <a id="show_password" class="btn__password" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </a>
                        </div>
                        
                        </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- Fin input contraseña --}}
                </div>
                <div class="bloque__2">
                    {{-- Incio recordar contraseña --}}
                    <div style="text-align: left;margin-left:10px;">
                        <div class="min__text">
                            <div class="form-check">
                                <input style="width:15px; height:15px;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" style="margin-left:5px" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- Fin recordar contraseña --}}
                    
                    {{-- Inicio Btn login --}}
                        <button type="submit" class="push rounded__basic push__button">
                            {{ __('Login') }}
                        </button>
                    {{-- Fin Btn login --}}


                        @if (Route::has('password.request'))
                            <a class="btn btn-link message" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif                               
                </div>
            </form>

        </div>
    </div>

</div>
@endsection
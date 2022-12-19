<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

            <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('resources.js') }}"></script>
        <link href="{{ asset('bootstrap-5.2.2-dist/js/bootstrap.min.js') }}" rel="stylesheet">

        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap-5.2.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        
    

      
    </head>
    <body class="">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
        <p id='head1' class='header'><img  width="410px" height="320px" src="{{ asset('images/logo.png') }}" alt="login__body image"/></p>
        <p id='head2' class='header'>Bienvenido</p>
        <p id='head3' style="font-size:18px" class='header'>
           <b  style="font-size: 35px">Misión</b></br>
            "Fomentar el desarrollo económico y social integral de nuestros clientes y <br/>
            colaboradores a través de servicios financieros <br/>
            creados a la medida de sus necesidades".
        </p>
        <p id='head4' style="font-size:18px" class='header'>
            <b  style="font-size: 35px">Visión</b></br>
            "Ser una empresa sólida y sustentable que permita el desarrollo integral de </br>
            nuestros colaboradores y socios otorgando servicios financieros basados en </br>
            la calidad y valores siendo la mejor opción en el país".
        </p>
        <p id='head5' class='header'><img   width="410px" height="320px" src="{{ asset('images/logo.png') }}" alt="login__body image"/></p>

        @if (Route::has('login'))
            <div class="position-relative">
                <div class="position-absolute top-0 end-0" style="text-aling:right;">
                    <div class="navbar navbar-expand-md">
                        <button class="navbar-toggler position-absolute top-0 end-0 nav__button"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav__responsive" id="navbarSupportedContent">
                             @auth
                                <a href="{{ url('/home') }}" class="nav-link text-light">Principal</a>
                            @else
                                <a href="{{ route('login') }}" class="link__nav ">Incio de sesión</a>

                                @if (Route::has('register'))
                                    <a class="btn__letter">|</a>
                                    <a href="{{ route('register') }}" class="link__nav">Registrar</a>
                                @endif
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
            @endif

        @auth
        @else
        <button style="" class=""><a href="{{ route('login') }}" class="btn__letter">COMENCEMOS</a></button>
        @endauth

        <div class='light x1'></div>
        <div class='light x2'></div>
        <div class='light x3'></div>
        <div class='light x4'></div>
        <div class='light x5'></div>
        <div class='light x6'></div>
        <div class='light x7'></div>
        <div class='light x8'></div>
        <div class='light x9'></div>
        {{-- <div>
            @if (Route::has('login'))
            <div class="position-relative">
                <div class="position-absolute top-0 end-0" style="text-aling:right;">
                    <div class="navbar navbar-expand-md">
                        <button class="navbar-toggler position-absolute top-0 end-0 nav__button"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse nav__responsive" id="navbarSupportedContent">
                             @auth
                                <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="link__nav ">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="link__nav">Register</a>
                                @endif
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
            @endif
            
            <div class="circle__push">

            </div>

        </div> --}}
    </body>
</html>

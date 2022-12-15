<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FincreRP') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}"></script>
         <script src="{{ asset('resources.js') }}"></script>
         <link href="{{ asset('bootstrap-5.2.2-dist/js/bootstrap.min.js') }}" rel="stylesheet">
         <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
 
         {{-- Styles --}}
         {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
         <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
         {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
         {{-- <link href="{{ asset('scss/app.scss') }}" rel="stylesheet"> --}}
         <link href="{{ asset('bootstrap-5.2.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
         

         <!-- Icocnos -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script type="text/javascript">
        function mostrarPassword(){
                var cambio = document.getElementById("txtPassword");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            } 
            
            $(document).ready(function () {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function () {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
    </script>
</head>
<style>
:root {
    --bg: rgb(228, 228, 228);
    --navBg:#FFF;
    --menuBag:rgb(1, 163, 237);
    --etiquetaSBprincipal:rgb(0, 109, 160);   
    --etiquetaSBdegradado:linear-gradient(270deg, #0bc8cb 0, #1fbae1 25%, #53bcf2 50%, #539dca 75%, #4f81a4 100%);
    --etiquetaSBsecundario:rgba(101, 101, 101, 0.123);
    --scrollColor:#05597d;
    --font: Montserrat, Roboto, Helvetica, Arial, sans-serif;
    --text-etiquetaP:rgb(0, 0, 0);
    --text-etiquetaS:rgb(51, 51, 51);
    --text-etiquetaPHover:#fff;
    --text-etiquetaSHover:rgb(85, 85, 85);

    /* background: var(--color); */
}
    .nv__style{
        background-color: var(--navBg);
        height:6%;
        width: 100%;
        margin-bottom: 20px;
        position: fixed;
        border-bottom-left-radius:10px;
        border-bottom-right-radius:10px;
        box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);

    }

    .e__sidebar {
        float: none;
        border-radius: 30px;
        font-size: 13px;
        -webkit-transition: all 0.3s ease;
        color: var(--text-etiquetaP);
        transition: all 0.3s ease;
        border-radius: 20px;
      }
    
       /* Add a background color on hover */
       .e__sidebar:hover {
        background-color: var(--etiquetaSBprincipal);   
        color: var(--text-etiquetaPHover);
        -webkit-transform: scale(1.1) !important;
         transform: scale(1.04) !important;
      }
    
      .e__sidebar1 {
        float: none;
        border-radius: 30px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size:13px;
        border-radius: 20px;
        color: var(--text-etiquetaP);
        padding: 20px;
        padding-bottom: 16px;
        padding-top: 16px;
        text-decoration: none;
        display: block;
      }
    
      .e__sidebar1:hover {
        background-color: var(--etiquetaSBprincipal);   
        /* background-color: rgb(1, 163, 237);    */
        color: var(--text-etiquetaPHover);
        -webkit-transform: scale(1.1) !important;
         transform: scale(1.04) !important;
      }
      .e__sidebar2 {
        float: none;
        border-radius: 30px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size: 11px;
        border-radius: 20px;
        color: var(--text-etiquetaS);
        text-decoration: none;
        display: block;
      }
    
      .e__sidebar2:hover {
        background-color: var(--etiquetaSBsecundario);   
        -webkit-transform: scale(1.1) !important;
        color: var(--text-etiquetaSHover);
         transform: scale(1.04) !important;
      }
    
    
      .a__state{
        border-radius:20px;margin-top:5px;
      }
    
    
      .icon{
        margin-right:10px;
      }
    
      .b__lateral{
        border-top-right-radius:20px;
        border-bottom-right-radius:10px;
        box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);
      }
      .contenedorPrincipal{
        padding-left:20px;
        padding-left:20px;
      }
      
    </style>


<body class="contenedor">
    <div id="app">

    {{-- MENU DINAMICO INICIO --}}
    <main>
        <nav class="navbar navbar nv__style" >
            <div class="container-fluid" style="margin-top:-5px;">
                <a class="navbar-brand">  
                     <button type="button" class="hamburger animated fadeInLeft is-closed" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                      </button>
                </a>
            </div>
          </nav>


          <div class="col-auto px-0 ">
            <div class=" offcanvas  offcanvas-start b__lateral " data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                

                <div class="offcanvas-header">
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                </div>
                <div class="offcanvas-body contenedor-light">
                    <div class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                        <nav class="nav flex-column">
                            <a class="nav-link active " aria-current="page" href="#">
                                <img src="{{ asset('Images/logo.png') }}" width="110px"  style="position: relative; margin-top: -28px;margin-left: 100px;margin-bottom: 30px;">
                            </a>
                            @php($varRecursostmp='')
                            @php($VAR='')
                            <a class="nav-link e__sidebar1 d-inline-block text-truncate" data-bs-parent="#sidebar" href="#"> <i class="fas fa-home icon"></i>Home</a>
                            @php($varcontador=1)
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    @foreach($varpantallas as $vis)
                                  <h2 class="accordion-header" id="{{$varcontador}}">
                                    @if(strpos($vis->nombre, ' '))
                                  @php( $varRecursostmp = $vis->nombre)
                                  @php($VAR = str_replace(' ','',$varRecursostmp))
                                  @else
                                  @php( $VAR = $vis->nombre)
                                  @endif
                                    <button style="border-radius:20px;margin-top:5px;" class=" accordion-button collapsed e__sidebar" type="button"  data-bs-toggle="collapse" data-bs-target="#{{$VAR}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <i class="fas fa-folder-open icon"></i>{{$vis->nombre}}
                                    </button>
                                  </h2>
                                  <div id="{{$VAR}}" class="accordion-collapse collapse" aria-labelledby="{{$varcontador}}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                  
                                        @foreach($varsubmenus as $submenus)
                                       
                                        @if($vis->nombre == $submenus->nombre)
                                        <a class="nav-link e__sidebar2 d-inline-block text-truncate" data-bs-parent="#sidebar" href="{{ route('verempleados') }}">{{$submenus->nom}}</a><br/>
                                        @else
                                        @endif
                                        @php($varcontador++)
                                        @endforeach
                                    </div>
                                  </div>
                                  @endforeach
                                </div>
                            </div>
                        @guest
                        @else
                                
                                    <a class="nav-link e__sidebar1 d-inline-block text-truncat" data-bs-parent="#sidebar" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-solid fa-arrow-right icon"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                             
                        @endguest
                      
                        </nav>
                    </div>
                </div>
              </div>
        </div>
    

          


          <div class="contenedorPrincipal" >
            @yield('content')
          </div>
        
        
    </main>

    {{-- MENU DINAMICO FIN --}}

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>
</body>
</html>

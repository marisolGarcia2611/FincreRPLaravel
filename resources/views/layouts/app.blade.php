<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FincreRP') }} | </title>
    <link rel="icon" type="image/png" href="{{ asset('Images/logo.png') }}">

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
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

         <!-- Alerts -->
         
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         

         <!-- Icocnos -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
         <!-- animate -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


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
      --etiquetaSBsecundario:rgba(101, 101, 101, 0.281);
      --scrollColor:#05597d;
      --font: Montserrat, Roboto, Helvetica, Arial, sans-serif;
      --text-etiquetaP:#32394B;
      --text-etiquetaS:#32394B;
      --text-etiquetaPHover:#fff;
      --text-etiquetaSHover:#32394B;
  }
  body{
    background-color: #f6f6f6;
    /* background-color: #557284;background-image: linear-gradient(341deg, #557284 0%, #e9f7fe 100%);background-repeat: no-repeat;background-attachment: fixed;background-size: cover; */
  }
   /* -------------------Navbar style y medias------------------ */

  .nv__style{height:35px;width: 100%;z-index: 2;top: 0vh;position: fixed;margin-top: -3px;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);background-color: #2B86C5;}
  /* @media screen and (max-width:450px) {
    .nv__style{height:2.5vh; width: 100%; z-index: 2; top: 0vh; margin-top: -6px; position: fixed !important;  box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132); background-color: #2B86C5;}  
  }
  @media screen and (max-width:600px) {
    .nv__style{height:4.5vh; width: 100%; z-index: 2; top: 0vh; position: fixed !important; box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132); background-color: #2B86C5;}
    .font__cub{font-size:50px;color: beige;margin: 50px;}
    .cub__size{height: 300px;}
  }
  @media screen and (max-width:1900px) {
    .nv__style{height:5.5vh; width: 100%; z-index: 2; margin-top: -3px; top: 0vh; position: fixed; box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132); background-color: #2B86C5;}
  }
  @media screen and (max-width:1200px) {
    .nv__style{height:3.5vh; width: 100%; z-index: 2; margin-top: -3px; top: 0vh; position: fixed; box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132); background-color: #2B86C5;}
  }
  @media screen and (max-height:600px) {
  .nv__style{height:9.5vh;width: 100%;z-index: 2;margin-top: -3px;top: 0vh;position: fixed;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);background-color: #2B86C5;}
  }
  @media screen and (min-height:700px) {
    .nv__style{height:4.5vh;width: 100%;z-index: 2;margin-top: -3px;top: 0vh;position: fixed;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);background-color: #2B86C5;}
  } */
  /* -------------------Etiquetas de sidebar------------------ */

  .e__sidebar {float: none;border-radius: 30px;font-size: 13px;-webkit-transition: all 0.3s ease;color: var(--text-etiquetaP);transition: all 0.3s ease;border-radius: 20px;}
  .e__sidebar:hover {background-color: #2E3192;background-image: linear-gradient(45deg,#2E3192,#0095D9);color: var(--text-etiquetaPHover);-webkit-transform: scale(1.1) !important;transform: scale(1.04) !important;}
  .e__sidebar1 {float: none;border-radius: 30px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;font-size:13px;border-radius: 20px;color: var(--text-etiquetaP);padding: 20px;padding-bottom: 16px;padding-top: 16px;}
  .e__sidebar1:hover {background-color: #2E3192;background-image: linear-gradient(45deg,#2E3192,#0095D9);color: var(--text-etiquetaPHover);-webkit-transform: scale(1.1) !important;transform: scale(1.04) !important;}
  .e__sidebar2 {float: none;border-radius: 30px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;font-size: 12px;border-radius: 20px;color: var(--text-etiquetaS);text-decoration: none;display: block;}
  .e__sidebar2:hover {background-color: var(--etiquetaSBsecundario);-webkit-transform: scale(1.1) !important;color: var(--text-etiquetaSHover);transform: scale(1.04) !important;}
  .a__state{border-radius:20px;margin-top:5px;}
  .icon{margin-right:10px;}
  .b__lateral{border-top-right-radius:50px;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);}
  /* -------------------Letras y tamaños------------------ */

  .font_little{font-size: 11px;}
  .cont_1{margin-top: 100px;}
  .p__little{font-size: 11px;}
  .middle__font{font-size: 14px;}

  /* -------------------Animaciones------------------ */
  
  .push{-webkit-transition: all 0.3s ease;transition: all 0.3s ease;}
  .push:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.04) !important;}
  .push2{-webkit-transition: all 0.3s ease;transition: all 0.3s ease;}   
  .push2:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.06) !important;}

  .zoom{-webkit-transition: all 0.3s ease;transition: all 0.3s ease;}
  .zoom:hover {-webkit-transform: scale(1.1) !important;transform: scale(3.05) !important;border-radius: 3px;}
  /* -------------------Formularios con estylo rouded------------------ */
  
  .offcanvas-body input{border-radius: 40px;background-color: #eaeaea;border:.5px solid #fff;font-size: 11px;color: #686868;}
  .offcanvas-body textarea{border-radius: 10px;background-color: #eaeaea;border:.5px solid #fff;font-size: 11px;color: #686868;}
  .offcanvas-body select{border-radius: 40px;background-color: #eaeaea;border:.5px solid #fff;font-size: 11px;color: #686868;}
  .offcanvas-body label{color: #575656;margin-top: 5px;font-size: 12px;}
  /* -------------------Botnes de Herramientas------------------ */
  
  .card-flat{color:rgb(32, 48, 85);background-color:#fff;border-radius:30px;padding:40px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);margin:20px;width:50vh;}
  .footer__size{height:400px;padding-top: 50px;}
  .bt__flat{background-color: #fff;border-radius:40px;color:rgb(95, 94, 94);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.24);}
  .bt__flat:hover{background-color: #fff;border-radius:40px;color:rgb(95, 94, 94);box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
  /* ------------------TABLE--------------------------- */
 
  #tblempleados tfoot input{width: 100% !important;border-radius: 30px;background-color: #f4f3f3a0;}
  #tblempleados tfoot {display: table-header-group !important;}
  #mydatatable-container input{border-radius: 30px;background-color: #e5e5e5a0;border: 0px solid rgb(111, 110, 110);margin-bottom: 20px!important;border:0!important;outline: none;}
  #mydatatable-container label{color: #8d8a8a;}
  #mydatatable-container select{border-radius: 100px;background-color: #e5e5e5a0;border: 0px solid rgb(111, 110, 110);border:0!important;outline: none;}
  #mydatatable-container{border-radius:40px; text-align: center;}
  .fs-9{font-size: 10px;}
  .fs-8{font-size: 12px;}
  .fs-7{font-size: 18px;}
  .fs-6{font-size: 15px;}
     /* -------------------------------------------------Scroll ----------------------------------------------*/
 
  #tblempleados.cont{overflow-y: scroll;box-sizing: border-box;}
  #tblempleados .cont::-webkit-scrollbar { -webkit-appearance: none;}
  #tblempleados.cont::-webkit-scrollbar:vertical {width:8px;height: 5px;}
  #tblempleados.cont::-webkit-scrollbar-button:increment,#tblempleados.cont::-webkit-scrollbar-button {display: none;} 
  #tblempleados.cont::-webkit-scrollbar:horizontal {height: 10px;}
  #tblempleados .cont::-webkit-scrollbar-thumb {background-color: var(--bg);border-radius: 20px;border: 1px solid var(--bg);} 
  #tblempleados.cont::-webkit-scrollbar-track {border-radius: 10px;  }

    /* -------------------------------------------------Scroll All----------------------------------------------*/
  .contenedor{overflow-y: scroll;box-sizing: border-box; }
  .contenedor::-webkit-scrollbar {-webkit-appearance: none;}
  .contenedor::-webkit-scrollbar:vertical {width:10px;} 
  .contenedor::-webkit-scrollbar-button:increment,.contenedor-light::-webkit-scrollbar-button {display: none;} 
  .contenedor::-webkit-scrollbar:horizontal {height: 10px;} 
  .contenedor::-webkit-scrollbar-thumb {background-color: #1d1d1d80;border-radius: 20px;border: 1px solid #ffffff00;}
  .contenedor::-webkit-scrollbar-track {border-radius: 10px;}

   /* -------------------Graficas------------------ */
  #grafica{ margin-top:8vh; }
  .default{margin : 0;padding : 0;}
  .b-1{position : absolute;width : 100%;height : 100%;background-color: #ffff;margin: 0 auto;}
  .position-g{width : 60%;height : 80%;transform: translateX(30%) !important;}
  
  /* -------------------Editar empleado------------------ */
  .cartaForm{border-radius: 30px;box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
  .step{ border-radius: 50px;width:30px;height:30px;color:#ffff;}
  .stepNav{border-radius: 50px;width:60px;height:30px;padding-top:4px;}
  .nav-float{border-top-left-radius:30px;border-bottom-left-radius:30px;z-index: 2;margin-top:0px;top: 10vh;position: fixed;right: 0;margin-right: -25px;}
 
  /* -------------------Cabecera de editar------------------ */
  .swal-overlay {background-color: rgba(70, 71, 95, 0.45);}
  .bor{border: none;-webkit-transition: all 0.3s ease; transition: all 0.3s ease;}
  .bor:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.09) !important;}
  .nav-it:hover{background-image: linear-gradient(45deg,#2E3192,#0095D9);border-radius:20px!important;color: #fff!important;}
  .cartaForm{border-radius: 30px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
  .bg-p{color: #32394B;}
  .mar-l{margin-left: 40px;}
   /* -------------------Tabla Principal------------------ */

   .pad-table{padding:30px!important;padding-bottom:10px!important;}
   .border-table{border:0px solid rgba(255, 255, 255, 0)!important;}
   .pImage{border-radius: 50px;width:80px;height:80px;object-fit: cover;}
   .tr-table{background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #2B86C5 100%)!important;color:#fff!important;}
   .td-tools{background-color:#2B86C5!important ;color:#fff!important;border: 0px solid rgba(255, 255, 255, 0)!important;}
  .bg-table{background-color:  #32394B;border-radius:18px;color:#fff; width:95%;}
  .bg-1{background-color: #dfe3f0!important;border:0px solid rgba(255, 255, 255, 0)!important;}
  .bg-2{background-color: #9ba9e2!important;border:0px solid rgba(255, 255, 255, 0)!important;}
  .bg-3{background-color: #a0b2ec!important;border:0px solid rgba(255, 255, 255, 0)!important;}
  .bg-4{background-color: #419443!important;border:0px solid rgba(255, 255, 255, 0);margin-left: 5px;}
  .bg-5{background-color: #d63757!important;border:0px solid rgba(255, 255, 255, 0);margin-left: 8px;}
  .bg-6{background-color: #f3f3f3;border:0px solid rgba(255, 255, 255, 0);}
  .circle{border-radius: 100px;width:25px;height:25px;}
  @media screen and (max-width:900px) { .mar-l{ margin-left: 0px;}}
  
  /* -------------------Modal de subir archivos------------------ */
  .input-file-container {position: relative;width: 100%;} 
  .js .input-file-trigger {display: block;padding: 14px 45px;background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #2B86C5 100%)!important;color:#fff!important;color: #fff;font-size: 1em;transition: all .4s;cursor: pointer;}
  .js .input-file {position: absolute;top: 0; left: 0;width: 100%;opacity: 0;padding: 14px 0;cursor: pointer;}
  .js .input-file:hover + .input-file-trigger,
  .js .input-file:focus + .input-file-trigger,
  .js .input-file-trigger:hover,
  .js .input-file-trigger:focus {background-color: #FF3CAC;background-image: linear-gradient(225deg, #2B86C5 0%, #784BA0 30%,  #FF3CAC 100%)!important;color:#fff!important; }
  .file-return {margin: 0;}
  .file-return:not(:empty) {margin: 1em 0;}
  .js .file-return {font-style: italic;font-size: .9em;font-weight: bold;}
  .js .file-return:not(:empty):before {content: "Selected file: ";font-style: normal;font-weight: normal;}
  .sudmit { font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif; color: #7F8C9A;background: #FCFDFD;}
  .sudmit h1, .sudmit h2 {margin-bottom: 5px;font-weight: normal;text-align: center;color:#aaa; }
  .sudmit h2 {margin: 5px 0 2em;color: #2B86C5;}
  .sudmit form {width: 225px;margin: 0 auto;text-align:center;}
  .sudmit h2 + P {text-align: center;}
  .txtcenter {margin-top: 1em;font-size: .9em;text-align: center;color: #aaa;}
  .copy {margin-top: .5em;}
  .copy a {text-decoration: none;color: #32394B;}

  /* -------------------Modal de subir archivos 2------------------ */
  .input-file-container {position: relative;width: 100%px;} 
  .js .input-filee-trigger {display: block;padding: 14px 45px;background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #2B86C5 100%)!important;color:#fff!important;color: #fff;font-size: 1em;transition: all .4s;cursor: pointer;}
  .js .input-filee {position: absolute;top: 0; left: 0;width: 225px;opacity: 0;padding: 14px 0;cursor: pointer;}
  .js .input-filee:hover + .input-filee-trigger,
  .js .input-filee:focus + .input-filee-trigger,
  .js .input-filee-trigger:hover,
  .js .input-filee-trigger:focus {background-color: #FF3CAC;background-image: linear-gradient(225deg, #2B86C5 0%, #784BA0 30%,  #FF3CAC 100%)!important;color:#fff!important; }
  .filee-return {margin: 0;}
  .filee-return:not(:empty) {margin: 1em 0;}
  .js .filee-return {font-style: italic;font-size: .9em;font-weight: bold;}
  .js .filee-return:not(:empty):before {content: "Selected file: ";font-style: normal;font-weight: normal;}
  .sudmit { font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif; color: #7F8C9A;background: #FCFDFD;}
  .sudmit h1, .sudmit h2 {margin-bottom: 5px;font-weight: normal;text-align: center;color:#aaa; }
  .sudmit h2 {margin: 5px 0 2em;color: #2B86C5;}
  .sudmit form {width: 225px;margin: 0 auto;text-align:center;}
  .sudmit h2 + P {text-align: center;}
  .txtcenter {margin-top: 1em;font-size: .9em;text-align: center;color: #aaa;}
  .copy {margin-top: .5em;}
  .copy a {text-decoration: none;color: #32394B;}

   /* -------------------Modal de subir archivos 3------------------ */
   .input-files-container {position: relative;width: 100%;} 
  .js .input-files-trigger {display: block;padding: 14px 45px;background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #2B86C5 100%)!important;color:#fff!important;color: #fff;font-size: 1em;transition: all .4s;cursor: pointer;}
  .js .input-files {position: absolute;top: 0; left: 0;width: 100%;opacity: 0;padding: 14px 0;cursor: pointer;}
  .js .input-files:hover + .input-files-trigger,
  .js .input-files:focus + .input-files-trigger,
  .js .input-files-trigger:hover,
  .js .input-files-trigger:focus {background-color: #FF3CAC;background-image: linear-gradient(225deg, #2B86C5 0%, #784BA0 30%,  #FF3CAC 100%)!important;color:#fff!important; }
  .files-return {margin: 0;}
  .files-return:not(:empty) {margin: 1em 0;}
  .js .files-return {font-style: italic;font-size: .9em;font-weight: bold;}
  .js .files-return:not(:empty):before {content: "Selected file: ";font-style: normal;font-weight: normal;}
  .sudmit { font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif; color: #7F8C9A;background: #FCFDFD;}
  .sudmit h1, .sudmit h2 {margin-bottom: 5px;font-weight: normal;text-align: center;color:#aaa; }
  .sudmit h2 {margin: 5px 0 2em;color: #2B86C5;}
  .sudmit form {width: 225px;margin: 0 auto;text-align:center;}
  .sudmit h2 + P {text-align: center;}
  .txtcenter {margin-top: 1em;font-size: .9em;text-align: center;color: #aaa;}
  .copy {margin-top: .5em;}
  .copy a {text-decoration: none;color: #32394B;}
  /* -------------------------Botones----------------------------------------- */
  .btn-blue{background-color: #2B86C5;color:#fff;}
  .btn-blue:hover{background-color: #185988;color:#fff;}
  .btn-gradient{background-image: linear-gradient(45deg,#2E3192,#0095D9);color:#fff;}
  .btn-gradient:hover{background-image: linear-gradient(45deg,#2E3192,#0095D9);color:#fff;}

  /* -------------------------Home Area----------------------------------------- */
  .footer-color{background-color: #2b86c5;background-image: linear-gradient(180deg, #2a628a 0%, #2f3292 100%);}
  .cub__color{background-color: #2B86C5;border-radius:10px;}
  .text-darkBlue{color: #32394B;}
  .text-blue{color: #2B86C5;}

  /* -------------------------Panel Area----------------------------------------- */
  .bg-gradient-pink{background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 30%, #2B86C5 100%)!important;color:#fff!important;}
  .btn-send{border:1px solid #2B86C5;border-radius:45px;width:100%;padding:18px;padding-bottom:15px;color: #2B86C5;}
  .btn-send:hover{background-color: #2b86c5;border:1px solid #2B86C5;border-radius:45px;width:100%;padding:18px;padding-bottom:15px;color: #fff!important;}
  .b-blue{background-color: #2B86C5;}
  .text-lightGray{color:#b2b0b0;}
  .ocultar {display: none; }
  .mostrar { display: block;}
  .bImage{z-index: 2;background-color:#00000037;color:#676464;border-radius:50px;width:80px;height:80px;border: none;}
/* 
  @media screen and (max-width:1400px) {  .orientatioInp{margin-left: 50px}}
  @media screen and (max-width:950px) {  .orientatioInp{margin-left: 0}} */


</style>



<body class="contenedor">
    <div id="app">

    {{-- MENU DINAMICO INICIO --}}
    <main>
        <nav class="navbar  nv__style" >
            <div class="container-fluid" style="margin-top:-5px;">
                <a class="navbar-brand">  
                     <button type="button" class="hamburger animated fadeInLeft is-closed" style=" background-color:#2B86C5" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
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
                          <div class="text-center">
                            <img  src="Images/Perfil/{{ Auth::user()->idempleado}}.jpg" style="width: 150px;height:150px;object-fit:cover;margin-bottom:40px;" class="rounded mx-auto d-block" alt="...">
                            <p class="fw-light">{{ Auth::user()->name }}</p>
                          </div>
                          
                            @php($varRecursostmp='')
                            @php($VAR='')
                            <a class="nav-link e__sidebar1 d-inline-block text-truncate" data-bs-parent="#sidebar" href="/home"> <i class="fas fa-home icon"></i>Principal</a>
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
                                        <a class="nav-link e__sidebar2 d-inline-block text-truncate" data-bs-parent="#sidebar" href="/{{$submenus->nom}}">{{$submenus->nom}}</a><br/>
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
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                             
                        @endguest
                      
                        </nav>
                    </div>
                </div>
                <div class="offcanvas-footer">
                  <img src="{{ asset('Images/diamod-logo.png') }}" width="50px" class="mb-5 rounded mx-auto d-block " alt="...">
                </div>
              </div>
        </div>
    

        <div>
   
          </div>

      
   </div>
          <div>
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

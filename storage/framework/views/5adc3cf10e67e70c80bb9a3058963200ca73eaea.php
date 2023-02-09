<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'FincreRP')); ?> | </title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/logo.png')); ?>">

         <!-- Scripts -->
         <script src="<?php echo e(asset('js/app.js')); ?>"></script>
         <script src="<?php echo e(asset('resources.js')); ?>"></script>
         <link href="<?php echo e(asset('bootstrap-5.2.2-dist/js/bootstrap.min.js')); ?>" rel="stylesheet">
         <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  
 
         
         
         <link href="<?php echo e(asset('css/menu.css')); ?>" rel="stylesheet">
         
         
         <link href="<?php echo e(asset('bootstrap-5.2.2-dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
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
  body{background-color: #557284;background-image: linear-gradient(341deg, #557284 0%, #e9f7fe 100%);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;}
   /* -------------------Navbar style y medias------------------ */

  .nv__style{height:5vh;width: 100%;z-index: 2;top: 0vh;position: fixed;margin-top: -3px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);background-color: #32394B;}
  @media  screen and (max-width:450px) {
    .nv__style{height:2vh; width: 100%; z-index: 2; top: 0vh; margin-top: -6px; position: fixed !important; border-bottom-left-radius:10px; border-bottom-right-radius:10px; box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132); background-color: #32394B;}  
  }
  @media  screen and (max-width:600px) {
    .nv__style{height:5vh; width: 100%; z-index: 2; top: 0vh; position: fixed !important; border-bottom-left-radius:10px; border-bottom-right-radius:10px; box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132); background-color: #32394B;}
    .font__cub{font-size:50px;color: beige;margin: 50px;}
    .cub__size{height: 300px;}
  }
  @media  screen and (max-width:1900px) {
    .nv__style{background-color: nar(--navBg);height:6vh; width: 100%; z-index: 2; margin-top: -3px; top: 0vh; position: fixed; border-bottom-left-radius:10px; border-bottom-right-radius:10px; box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132); background-color: #32394B;}
  }
  @media  screen and (max-height:600px) {
  .nv__style{background-color: nar(--navBg);height:10vh;width: 100%;z-index: 2;margin-top: -3px;top: 0vh;position: fixed;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);background-color: #32394B;}
  }
  @media  screen and (min-height:700px) {
    .nv__style{background-color: nar(--navBg);height:5vh;width: 100%;z-index: 2;margin-top: -3px;top: 0vh;position: fixed;border-bottom-left-radius:10px;border-bottom-right-radius:10px;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);background-color: #32394B;}
  }
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
  #mydatatable-container input{border-radius: 30px;background-color: #e5e5e5a0;border: 0px solid rgb(111, 110, 110);}
  #mydatatable-container label{color: #8d8a8a;}
  #mydatatable-container select{border-radius: 100px;background-color: #e5e5e5a0;border: 0px solid rgb(111, 110, 110);}
  #mydatatable-container{border-radius:40px; text-align: center;}
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
  .contenedor::-webkit-scrollbar-thumb {background-color: #212529;border-radius: 20px;border: 1px solid #ffffff00;}
  .contenedor::-webkit-scrollbar-track {border-radius: 10px;}

   /* -------------------Graficas------------------ */
  #grafica{ margin-top:8vh; }
  .default{margin : 0;padding : 0;}
  .b-1{position : absolute;width : 100%;height : 100%;background-color: #ffff;margin: 0 auto;}
  .position-g{width : 60%;height : 80%;transform: translateX(30%) !important;}
  
  /* -------------------Editar empleado------------------ */
  .cartaForm{border-radius: 30px;box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
  .step{ border-radius: 50px;width:30px;height:30px;color:#ffff;}
  .stepNav{border-radius: 50px;width:30px;height:30px;padding-top:4px;}
  .nav-float{position: fixed;border-top-right-radius:30px;border-bottom-right-radius:30px;z-index:2;}
 
  /* -------------------Cabecera de editar------------------ */
  .swal-overlay {background-color: rgba(70, 71, 95, 0.45);}
  .bor{border: none;-webkit-transition: all 0.3s ease; transition: all 0.3s ease;}
  .bor:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.09) !important;}
  .nav-float{position: fixed;border-top-right-radius:30px;border-bottom-right-radius:30px;z-index:2;}
  .nav-it:hover{background-color: #33acce;border-radius:20px;color: #fff;}
  .cartaForm{border-radius: 30px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
  .bg-p{color: #32394B;}
  .mar-l{margin-left: 40px;}
   /* -------------------Tabla Principal------------------ */

   .pad-table{padding:30px!important;padding-bottom:10px!important;}
   .border-table{border:0px solid rgba(255, 255, 255, 0)!important;}
   .tr-table{background-color: #32394B!important;color:#fff!important;border:0px solid rgba(255, 255, 255, 0)!important;}
   .td-tools{background-color: #32394B!important;border: 0px solid rgba(255, 255, 255, 0)!important;}
  .bg-table{background-color:  #32394B;border-radius:18px;color:#fff; width:95%;}
  .bg-1{background-color: #bfc6d4!important;border:0px solid rgba(255, 255, 255, 0)!important;}
  .bg-2{background-color: #9ba9e2!important;border:0px solid rgba(255, 255, 255, 0)!important;}
  .bg-3{background-color: #a0b2ec!important;border:0px solid rgba(255, 255, 255, 0)!important;}
  .bg-4{background-color: #33ce64;border:0px solid rgba(255, 255, 255, 0);}
  .bg-5{background-color: #ffa200;border:0px solid rgba(255, 255, 255, 0);}
  .bg-6{background-color: #aab6dd;border:0px solid rgba(255, 255, 255, 0);}
 
 @media  screen and (max-width:900px) { .mar-l{ margin-left: 0px;}}
</style>


<body class="contenedor">
    <div id="app">

    
    <main>
        <nav class="navbar  nv__style" >
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
                          <img src="<?php echo e(asset('Images/1.png')); ?>" style="width: 150px;height:150px;object-fit:cover;margin-bottom:40px;" class="rounded mx-auto d-block" alt="...">
                            <?php ($varRecursostmp=''); ?>
                            <?php ($VAR=''); ?>
                            <a class="nav-link e__sidebar1 d-inline-block text-truncate" data-bs-parent="#sidebar" href="/home"> <i class="fas fa-home icon"></i>Principal</a>
                            <?php ($varcontador=1); ?>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <?php $__currentLoopData = $varpantallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <h2 class="accordion-header" id="<?php echo e($varcontador); ?>">
                                    <?php if(strpos($vis->nombre, ' ')): ?>
                                  <?php ( $varRecursostmp = $vis->nombre); ?>
                                  <?php ($VAR = str_replace(' ','',$varRecursostmp)); ?>
                                  <?php else: ?>
                                  <?php ( $VAR = $vis->nombre); ?>
                                  <?php endif; ?>
                                    <button style="border-radius:20px;margin-top:5px;" class=" accordion-button collapsed e__sidebar" type="button"  data-bs-toggle="collapse" data-bs-target="#<?php echo e($VAR); ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <i class="fas fa-folder-open icon"></i><?php echo e($vis->nombre); ?>

                                    </button>
                                  </h2>
                                  <div id="<?php echo e($VAR); ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo e($varcontador); ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                  
                                        <?php $__currentLoopData = $varsubmenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                        <?php if($vis->nombre == $submenus->nombre): ?>
                                        <a class="nav-link e__sidebar2 d-inline-block text-truncate" data-bs-parent="#sidebar" href="<?php echo e($submenus->nom); ?>"><?php echo e($submenus->nom); ?></a><br/>
                                        <?php else: ?>
                                        <?php endif; ?>
                                        <?php ($varcontador++); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                  </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                                
                                    <a class="nav-link e__sidebar1 d-inline-block text-truncat" data-bs-parent="#sidebar" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-solid fa-arrow-right icon"></i>
                                        Salir
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                             
                        <?php endif; ?>
                      
                        </nav>
                    </div>
                </div>
                <div class="offcanvas-footer">
                  <img src="<?php echo e(asset('Images/diamod-logo.png')); ?>" width="80px" class="mb-5 rounded mx-auto d-block" alt="...">
                </div>
              </div>
        </div>
    

        <div>
   
          </div>

      
   </div>
          <div>
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        
        
    </main>

    

        
    </div>
</body>
</html>
<?php /**PATH C:\Codigo Fuente laravel\fincreerplaravel\FincreRPLaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>
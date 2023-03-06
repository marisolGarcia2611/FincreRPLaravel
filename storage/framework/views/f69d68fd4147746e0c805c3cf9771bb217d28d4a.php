

<?php $__env->startSection('content'); ?>



<?php if($mensaje = Session::get('success')): ?>
  <?php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Usuario agregado correctamente","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  ?>

<?php elseif($mensaje = Session::get('warning')): ?>
  <?php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Recuerde llenar todos los campos y que formato permitido de imagen en .jpg","warning", {buttons: false,timer: 1500});';
          echo '</script>';  
  ?>

<?php endif; ?>


<!--INICIO BUTON AREA-->
<div class="pos__btnBack">
    <div class="wrapper"> 
        <h5 class="btnBack" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
    </div>
        <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                    <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                </filter>
            </defs>
        </svg>
    </div>
<!--FIN BUTON AREA--> 

<div class="mt-5 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mt-5 bg-body rounded  border-0">
                <div class="card-header text-center bg-gradient-pink mb-3">
                    <h4 class="fw-light">Registrar usuario</h4>
                </div>

                <div class="card-body offcanvas-body small" style="padding-left: 30px;padding-right:30px;">
                    <form method="POST" action="<?php echo e(route('createUser')); ?>" method="POST" class="g-3 needs-validation" enctype="multipart/form-data"  id="frm" novalidate>
                        <?php echo csrf_field(); ?>
                        <div>                        
                            <div class="row mb-3">
                                    <div class="form-outline">
                                        <label class="form-label">Empleados</label>
                                        <select name="idempleado" id="idempleado" class="form-select" required>
                                            <option value="">Seleccionar empleado... </option>
                                            <?php $__currentLoopData = $varlistaempleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($vis->idempleado); ?>"><?php echo e($vis->primer_nombre." ".$vis->segundo_nombre." ".$vis->apellido_paterno." ".$vis->apellido_materno); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor, completa la información requerida.
                                        </div>
                                    </div>
                            </div>
                        
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-outline">
                                    <label class="form-label">Nombre de Usuario</label>
                                    <input type="text" id="name"  name="name" class="form-control" minlength="3" maxlength="20" placeholder="user123"  required />
                                    <div class="valid-feedback">
                                        ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, completa la información requerida.
                                    </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-outline">
                                    <label class="form-label">Correo</label>
                                    <input type="text" id="email"  name="email" class="form-control" minlength="3" maxlength="100" placeholder="user@example.com"  required />
                                    <div class="valid-feedback">
                                        ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, completa la información requerida.
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                              
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass1">Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" ID="txtPassword"  name="contrasena" class="form-control" id="contrasena" placeholder="Ingrese su contraseña..." style="border-radius: 40px;" required>
                                            <div class="input-group-append">
                                                <a id="show_password" class="btn__password" type="button" onclick="mostrarPassword()" style="margin-top: 4px;margin-left:5px;color:#a6a6a6;"> <span class="fa fa-eye-slash icon"></span> </a>
                                            </div>
                                        </div>


                                        <div class="valid-feedback">¡Se ve bien!</div>
                                        <div class="invalid-feedback">*Minimo 8 caracteres, usa Mayusculas, minusculas, numeros y caracteres especiales.</div>
                                    </div> 
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass2">Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" ID="inputPassword"  name="recontrasena" class="form-control" id="recontrasena" placeholder="Ingrese su contraseña..." style="border-radius: 40px;" required>
                                            <div class="input-group-append">
                                                <a id="show_password" class="btn__password" type="button" onclick="showPassword()" style="margin-top: 4px;margin-left:5px;color:#a6a6a6;"> <span class="fa fa-eye-slash icon"></span> </a>
                                            </div>
                                        </div>


                                        <div class="valid-feedback">¡Se ve bien!</div>
                                        <div class="invalid-feedback">*Minimo 8 caracteres, usa Mayusculas, minusculas, numeros y caracteres especiales.</div>
                                    </div> 
                                </div>
                                
                                
                            </div>

                            
                            <div id="msg"></div>

                            <div id="error" class="alert alert-danger ocultar" role="alert">
                                Las Contraseñas no coinciden, vuelve a intentar !
                            </div> 


                            <div class="row mb-4">
                                <div class="col-md-4 d-md-block d-none"></div>
                                <div class="col-md-4 text-center">
                                    <label class="form-label">Foto de perfil</label>
                                    <div>
                                        <div class="input-file-container text-center">  
                                        <input class="input-file" id="my-file" type="file" name="urlpdf" required>
                                        <div class="valid-feedback fs-8">
                                         ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback fs-8">
                                         ¡Por favor, sube el nuevo contrato!
                                        </div>
                                            <label for="my-file"name="my-file" style="border-radius:100px;" class="input-file-trigger"><h1 class="text-light"><i class="fas fa-file-upload"></i></h1></label>
                                            <p class="file-return"></p>
                                        </div>
                                    </div>
                                    <p class="txtcenter">Recuerde que solo se admite el formato ".jpg"</p> 
                                </div>
                                <div class="col-md-4 d-md-block d-none"></div>
                            </div>

                            
                        </div>                      

                        <div class="row text-center mb-0">
                            <div>
                                <button type="submit" value="Registrar" onclick="validarPasswords()" style="width: 50%;"  class="btn btn-blue rounded-5">
                                    <i class="fas fa-user-plus"></i>&nbsp;&nbsp;Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
  (function () {
    'use strict'
  
    // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
    var forms = document.querySelectorAll('.needs-validation')
    // Bucle sobre ellos y evitar el envío
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>
<script type="text/javascript">
    function validarPasswords(){
  var pass = document.getElementById("contrasena").value;
  var repass = document.getElementById("recontrasena").value;

    if (pass!=repass) 
    {
        document.getElementById("error").classList.add("mostrar");
    }
    else
    {
        document.getElementById("frm").submit();
    }
}
</script>

<script>
    document.querySelector("html").classList.add('js');
  
      var fileInput  = document.querySelector( ".input-file" ),  
          button     = document.querySelector( ".input-file-trigger" ),
          the_return = document.querySelector(".file-return");
            
      button.addEventListener( "keydown", function( event ) {  
          if ( event.keyCode == 13 || event.keyCode == 32 ) {  
              fileInput.focus();  
          }  
      });
      button.addEventListener( "click", function( event ) {
        fileInput.focus();
        return false;
      });  
      fileInput.addEventListener( "change", function( event ) {  
          the_return.innerHTML = this.value;  
      });  
  </script>
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

<script type="text/javascript">
    function showPassword(){
            var cambio = document.getElementById("inputPassword");
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aux sistemas\Desktop\FincreRPLaravel\resources\views/sistemas/registro.blade.php ENDPATH**/ ?>
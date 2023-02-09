@extends('layouts.app')

@section('content')


{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Usuario agregado correctamente","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 1500});';
          echo '</script>';  
  @endphp

@endif
{{-- ALERTAS --}}

<div class="mt-5 container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mt-5 bg-body rounded  border-0">
                <div class="card-header text-center bg-gradient-pink mb-3">
                    <h4 class="fw-light">Registrar usuario</h4>
                </div>

                <div class="card-body offcanvas-body small" style="padding-left: 30px;padding-right:30px;">
                    <form method="POST" action="{{ route('createUser') }}" method="POST" class="g-3 needs-validation"  id="frm" novalidate>
                        @csrf
                        <div>                        
                            <div class="row mb-3">
                                    <div class="form-outline">
                                        <label class="form-label">Empleados</label>
                                        <select name="idempleado" id="idempleado" class="form-select" required>
                                            <option value="">Seleccionar empleado... </option>
                                            @foreach($varlistaempleados as $vis)
                                            <option value="{{$vis->idempleado}}">{{$vis->primer_nombre." ".$vis->segundo_nombre." ".$vis->apellido_paterno." ".$vis->apellido_materno}}</option>
                                            @endforeach
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
                                        <input type="password" name="contrasena" class="form-control" id="contrasena" value="" placeholder="Ingrese su contraseña..." required>
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            *Minimo 8 caracteres, usa Mayusculas, minusculas, numeros y caracteres especiales.
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass2">Confirme Contraseña</label>
                                        <input type="password" class="form-control" name="recontrasena" id="recontrasena" value="" placeholder="Confirme su contraseña..." required>
                                        <div class="valid-feedback">
                                                ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            *Minimo 8 caracteres, usa Mayusculas, minusculas, numeros y caracteres especiales.
                                        </div>               
                                    </div> 
                                </div>
                                
                                
                            </div>

                            {{-- Menaje de contreseña --}}
                            <div id="msg"></div>

                            <div id="error" class="alert alert-danger ocultar" role="alert">
                                Las Contraseñas no coinciden, vuelve a intentar !
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

@endsection

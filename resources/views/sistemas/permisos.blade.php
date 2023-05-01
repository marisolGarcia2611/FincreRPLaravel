@extends('layouts.app')

@section('content')


{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Permiso otorgado correctamente","success", {buttons: false,timer: 1500});';
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!--INICIO BUTON AREA-->
<div class="pos__btnBack">
    <div class="wrapper"> 
       <a href="/Panel"><h5 class="btnBack"><i class="fas fa-solid fa-arrow-left"></i></h5></a>
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
                    <h4 class="fw-light">Asignar permisos a usuarios</h4>
                </div>

                <div class="card-body offcanvas-body small" style="padding-left: 30px;padding-right:30px;">
                    <form method="POST" action="{{ route('asignarPermiso') }}"class="g-3 needs-validation"  id="frm" novalidate>
                        @csrf

                        <div>

                            <div class="row mb-3">
                                <div class="form-outline">
                                    <label class="form-label">Usuarios</label>
                                    <select name="idusuario" id="idusuario" class="form-select" required>
                                        <option value="">Seleccionar empleado... </option>
                                        @foreach($varlistausers as $usuario)
                                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
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
                                <div class="form-outline">
                                    <label class="form-label">Departamento</label>
                                    <select name="iddepartamento" id="iddepartamento" class="form-select" required>
                                        <option value="">Seleccionar departamento... </option>
                                        @foreach($varlistadepas as $depas)
                                        <option value="{{$depas->id}}">{{$depas->nombre}}</option>
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
                                <div class="form-outline">
                                    <label class="form-label">Vistas</label>
                                    <select name="idvista" id="idvista" class="form-select" required>
                                        <option value="">Seleccionar vista... </option>
                                        @foreach($varlistavistas as $vista)
                                        <option value="{{$vista->id}}">{{$vista->nombre}}</option>
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
                    


                    

                        </div>

                        <div class="row mb-0 text-center">
                            <div>
                                <button type="submit" value="Registrar" onclick="validarPasswords()" style="width: 40%;"  class="rounded-5 btn btn-blue">
                                    <i class="fas fa-user-lock"></i>&nbsp;&nbsp;Añadir permiso
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


@endsection

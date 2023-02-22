@extends('layouts.app')
@section('content')

<div class="mt-5 container">
  @foreach($varnomem as $datosempleadonom)
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card shadow-lg p-3 mt-5 bg-body rounded  border-0">
              <div class="card-header text-center bg-gradient-pink mb-3">
                  <h4 class="fw-light">Editar Nomina</h4>
              </div>

              <div class="card-body offcanvas-body small" style="padding-left: 30px;padding-right:30px;">
                <form  action="/Nominaseditaremp/actualizarEmpleado/{{$datosempleadonom->idpadodet}}" method="POST"  class="g-3 needs-validation" novalidate> 
                    @csrf
                    @method('PUT')
                          <div class="row mb-4">
                            <div class="col">
                              <!-- Name input -->
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Numero de Empleado</label>
                                <p class="fw-bold">#{{$datosempleadonom->idpadodet}}</p>  
                                <input type="number"  class="form-control" name="id" value="{{$datosempleadonom->id}}" />
                                <input type="number"  class="form-control" name="idemple" value="{{$datosempleadonom->idtiponomina}}" />
         
                              </div>
                            </div>

                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label">Dias Laborados</label>
                                <input type="number" id="dias_laborados"  name="dias_laborados" class="form-control"  value="{{$datosempleadonom->dias_laborados}}" maxlength="20" required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>

                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >Deudores Fiscal</label>
                                <input type="number" name="deudores_fiscal" id="deudores_fiscal" class="form-control" value="{{$datosempleadonom->deudores_fiscal}}" maxlength="20" required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label" >Deudores No Fiscal</label>
                                <input type="number" name="deudores_no_fiscal" id="deudores_no_fiscal" class="form-control" value="{{$datosempleadonom->deudores_no_fiscal}}"  maxlength="20"required />
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
                                  <button type="submit" class="btn btn-success">Guardar cambios</button>
                          </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  @endforeach 
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
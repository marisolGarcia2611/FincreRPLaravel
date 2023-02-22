@extends('layouts.app')
@section('content')
@foreach($varnomem as $datosempleadonom)
  
  <div class="container mt-5 p__little">
        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              
                 
                    <form  action="{{ route('nominas.actualizaremp',$datosempleadonom->idpadodet) }}" method="POST"  class="g-3 needs-validation" novalidate> 
                      @csrf
                      @method('PUT')

                              <div class="row mb-4">
                                <div class="col">
                                  <!-- Name input -->
                                  <div class="form-outline">
                                  <label class="form-label" for="form8Example4">Numero de Empleado</label>
                                  <input type="number" hidden class="form-control" name="idnomina" required />
                                    <p class="fw-bold">#{{$datosempleadonom->idpadodet}}</p>  
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
                                       
                           
                      <br/>
                      <br/>


                        <!-- Guardar-->
                          <div class=" text-center" style="padding:10px;">
                            <button class="btn btn-blue text-light push" style="width: 80%;height:5vh;" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;<b>Guardar cambio</b></button>
                          </div>

                      <br/>
                      <br/>     
                   
                   
                    </form>
              

              </div>
            </div>
        </div> 
  </div>
@endforeach


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
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
                <form  action="" method="POST"  class="g-3 needs-validation" novalidate> 
                    @csrf
                    @method('PUT')
                      <div>

                        <div class="row">
                          <div class="col">
                            <!-- Name input -->
                            <div class="form-outline">
                    
                            <label class="form-label" for="form8Example4">Numero de Empleado</label>
                            <input type="text" hidden class="form-control" name="idnomina" required />
                              <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"  value="{{$datosempleadonom->idempleado}}"  minlength="3" maxlength="20" required />
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
                            <label class="form-label">Dias Laborados</label>
                              <input type="text" id="segundo_nombre"  name="segundo_nombre" class="form-control"  value="{{$datosempleadonom->dias_laborados}}" minlength="3" maxlength="20" required />
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
                              <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$datosempleadonom->deudores_fiscal}}" minlength="3" maxlength="20" required />
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
                              <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{$datosempleadonom->deudores_no_fiscal}}"  minlength="3" maxlength="20"required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <!-- Name input -->
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Pago Infoanvit</label>
                              <input type="numeric" name="telefono" id="telefono" class="form-control"  value="{{$datosempleadonom->pago_infonavit}}" minlength="6" maxlength="10"  required />
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
                            <label class="form-label">Pago Imss</label>
                              <input type="text"  name="correo" id="correo" class="form-control"  value="{{$datosempleadonom->pago_imss}}" minlength="3" maxlength="60"  required />
                              <div class="valid-feedback">
                                ¡Se ve bien!
                              </div>
                              <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                              </div>
                            </div>
                          </div>
                
                        <div class="row">
                          <div class="col">
                            <!-- Email input -->
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Pago Subsido</label>
                              <input type="text" name="calle" id="calle" class="form-control"  value="{{$datosempleadonom->pago_subsidio}}" minlength="3" maxlength="60" required />
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
                            <label class="form-label" for="form8Example4">Pago ISR</label>
                              <input type="text" name="colonia" id="colonia" class="form-control"  value="{{$datosempleadonom->pago_isr}}" minlength="3" maxlength="60"  required />
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
                            <label class="form-label" >Bono</label>
                              <input type="text" name="numero_interior" id="numero_interior" class="form-control" placeholder="00"  value="{{$datosempleadonom->bono}}"  maxlength="10"  required />
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
                          <div class="col">
                            <!-- Name input -->
                            <div class="form-outline">
                            <label class="form-label" >Transporte</label>
                              <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" placeholder="00"  value="{{$datosempleadonom->transporte}}"  maxlength="10"  required />
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
                              <button type="submit"  style="width: 40%;"  class="btn btn-blue rounded-5">
                                  <i class="fas fa-save"></i>&nbsp;&nbsp;Guardar cambios
                              </button>
                          </div>
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
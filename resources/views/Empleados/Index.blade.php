@extends('layouts.app')
@section('content')
<div class="container mt-5 p__little">
  <div class="row">
    {{-- @if($mensaje = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$mensaje}}
    </div>
  @endif --}}
    <div class="col-md-6">
      <h1 class="pt-5 text-center text-middle">Catalogo de Empleados</h1> 
    </div>
    <div class="card  bg-light col-md-6" style="padding: 30px">
      <div class="row text-center">
        <div class="col-md-4">
          <button  type="button" class="btn push2 bt_tool1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><h2><i class="fas fa-plus"></i></h2></button> 
        </div>
        <div class="col-md-4">
          <button  type="button" class="btn push2 bt_tool2"><h2><i class="fas fa-download"></i></h2></button>
        </div>
        <div class="col-md-4">
          <button  type="button" class="btn push2 bt_tool3"><h2><i class="fas fa-chart-pie"></i></h2></button>
        </div>
      </div>
    </div>
  </div>  
  <br/>
  <br/>
  
 <div class="card  bg-light" style="padding: 30px" >     
  <table class="table table-hover" id="tblempleados">
    <thead class="table-light">
      <tr>
        <th class="text-center fw-light">Herramientas</th>
        <th  class="text-center fw-light">Primer Nombre</th>
        <th  class="text-center fw-light">Segundo Nombre</th>
        <th  class="text-center fw-light">Apelleido Paterno</th>
        <th  class="text-center fw-light">Apellido Materno</th>
        <th  class="text-center fw-light">Telefono</th>
        <th  class="text-center fw-light">Correo</th>
        <th  class="text-center fw-light">Puesto</th>
        <th  class="text-center fw-light">Sucursal</th>
        <th  class="text-center fw-light">Ciudad</th>
        <th  class="text-center fw-light">Calle</th>
        <th  class="text-center fw-light">Colonia</th>
        <th  class="text-center fw-light">Numero Interior</th>
        <th  class="text-center fw-light">Numero Exterior</th>
        <th  class="text-center fw-light">Codigo Postal</th>
        <th  class="text-center fw-light">Sexo</th>
        <th  class="text-center fw-light">Fecha de Nacimiento</th>
        <th  class="text-center fw-light">Salario Bruto</th>
        <th  class="text-center fw-light">Salario Neto</th>
        <th  class="text-center fw-light">Banco</th>
        <th  class="text-center fw-light">Numero de Tarjeta</th>
        <th  class="text-center fw-light">Numero de Cuenta</th>
        <th  class="text-center fw-light">RFC</th>
        <th  class="text-center fw-light">NSS</th>
        <th  class="text-center fw-light">Tipo de Sangre</th>
        <th  class="text-center fw-light">Contacto de Emergencia</th>
      </tr>
    </thead>
    <tbody>
    @foreach($varlistaempleados as $vis)
      <tr>
        <td class="table-light"><h6 style="color: rgb(76, 74, 74)"><i class="fas fa-eye"></i>&nbsp; &nbsp;<i class="fas fa-edit"></i>&nbsp; &nbsp;<i class="fas fa-trash"></i></h6></td>
        <td class="table-info">{{$vis->primer_nombre}}</td>
        <td class="table-info">{{$vis->segundo_nombre}}</td>
        <td class="table-info">{{$vis->apellido_paterno}}</td>
        <td class="table-info">{{$vis->apellido_materno}}</td>
        <td class="table-primary">{{$vis->telefono}}</td>
        <td class="table-primary">{{$vis->correo}}</td>
        <td class="table-warning">{{$vis->puesto}}</td>
        <td class="table-primary">{{$vis->sucursal}}</td>
        <td class="table-primary">{{$vis->ciudad}}</td>
        <td class="table-primary">{{$vis->calle}}</td>
        <td class="table-primary">{{$vis->colonia}}</td>
        <td class="table-primary">{{$vis->numero_interior}}</td>
        <td class="table-primary">{{$vis->numero_exterior}}</td>
        <td class="table-primary">{{$vis->codigo_postal}}</td>
        <td class="table-primary">{{$vis->sexo}}</td>
        <td class="table-primary">{{$vis->fecha_nacimiento}}</td>
        <td class="table-warning">{{$vis->salario_bruto}}</td>
        <td class="table-warning">{{$vis->salario_neto}}</td>
        <td class="table-warning">{{$vis->banco}}</td>
        <td class="table-warning">{{$vis->numero_tarjeta}}</td>
        <td class="table-warning">{{$vis->numero_cuenta}}</td>
        <td class="table-danger">{{$vis->rfc}}</td>
        <td class="table-danger">{{$vis->nss}}</td>
        <td class="table-primary">{{$vis->tipo_sangre}}</td>
        <td class="table-info">{{$vis->contacto_emergencia}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>  

  <!-- Modal para insertar-->
  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:70vh">
        <div class="offcanvas-header">
          <nav id="navbar-example2" class="navbar navbar-light px-3">
            <a class="navbar-brand" href="#">Nuevo Empleado</a>
            <ul class="nav nav-pills middle__font">
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">Detalles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading3">Razón Social</a>
              </li>
            </ul>
          </nav>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <form action="{{route('Empleados.store')}}" method="POST"  class="g-3 needs-validation" novalidate>
                @csrf
                    <h4 id="scrollspyHeading1">General</h4>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombre" placeholder="Introduzca el primer nombre" required />
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
                          <label class="form-label">Segundo Nombre</label>
                            <input type="text" id="form8Example4"  name="segundo_nombre" class="form-control" placeholder="Introduzca el segundo nombre"  required />
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
                          <label class="form-label" >Apellido Paterno</label>
                            <input type="text" name="apellido_paterno" id="form8Example4" class="form-control" placeholder="Introduzca el apellido parterno" required />
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
                          <label class="form-label" >Apellido Materno</label>
                            <input type="text" name="apellido_materno" id="form8Example4" class="form-control" placeholder="Introduzca el apellido materno" required />
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
                          <label class="form-label" for="form8Example4">Telefono</label>
                            <input type="numeric" name="telefono" class="form-control" placeholder="0000000000"   required />
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
                          <label class="form-label">Correo</label>
                            <input type="text"  name="correo" class="form-control" placeholder="name@exmple.com" required />
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
                          <label class="form-label" >Puesto</label>
                          <select name="puesto" class="form-select" required>
                            <option selected >Seleccionar</option>
                          @foreach($varpuestos as $puestos)
                          <option  value="{{$puestos->id}}">{{$puestos->nombre}}</option>
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
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Sucursal</label>
                          <select  name="sucursal" class="form-select" required>
                            <option selected >Seleccionar</option>
                          @foreach($varsucursales as $sucursales)
                          <option value="{{$sucursales->id}}">{{$sucursales->nombre}}</option>
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
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Ciudad</label>
                          <select   name="ciudad" class="form-select" required>
                            <option selected >Seleccionar</option>
                          @foreach($varciudades as $ciudades)
                          <option value="{{$ciudades->id}}">{{$ciudades->nombre}}</option>
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

                        <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Banco</label>
                          <select   name="banco" class="form-select" required>
                            <option selected >Seleccionar</option>
                          @foreach($varbancos as $banco)
                          <option value="{{$banco->id}}">{{$banco->nombre}}</option>
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

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Calle</label>
                            <input type="text" name="calle" class="form-control" required />
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
                          <label class="form-label" for="form8Example4">Colonia</label>
                            <input type="text" name="colonia" class="form-control" required />
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
                          <label class="form-label" >Numero Interior</label>
                            <input type="text" name="numero_interior" class="form-control" placeholder="00" required />
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
                          <label class="form-label" >Numero Exterior</label>
                            <input type="text" class="form-control" name="numero_exterior" placeholder="00" required />
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
                          <label class="form-label">Codigo Postal</label>
                            <input type="text"  name="codigo_postal"  class="form-control"  placeholder="00000" required />
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
                          <label class="form-label" >Sexo</label>
                            <select  class="form-select" id="validationCustom16" name="sexo" required >
                              <option  selected>Seleccionar</option>
                              <option value="M">M</option>
                              <option value="F">F</option>
                            </select>
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
                          <label class="form-label" >Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control"  required />
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
                          <label class="form-label" >Foto</label>
                            <input type="text" name="foto" class="form-control"  required />
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              Por favor, completa la información requerida.
                            </div>
                          </div>
                        </div>
                      </div>
          

                        
                      </div>
                      <br/>
                      <!-- aqui termina el primer insert -->
                      <br/>
                      <h4 id="scrollspyHeading2">Detalles</h4>

                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Salario Bruto</label>
                            <input type="text" name="salario_bruto" class="form-control" placeholder="00.00" required />
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
                          <label class="form-label" >Salario Fijo</label>
                            <input type="text" name="salario_fijo" class="form-control" placeholder="00.00" required/>
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
                          <label class="form-label" >Salario Neto</label>
                            <input type="text" Name="salario_neto" id="form8Example4" class="form-control" placeholder="00.00" required />
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
                          <label class="form-label" >Numero de Tarjeta</label>
                            <input type="text" name="numero_tarjeta" class="form-control" placeholder="000000000000000" required />
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
                          <label class="form-label" for="form8Example4">Numero de Cuenta</label>
                            <input type="text" name="numero_cuenta" class="form-control" required  placeholder="0000000000" />
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
                          <label class="form-label" >rfc</label>
                            <input type="text" name="rfc" class="form-control" placeholder="0000000000000"  required/>
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
                          <label class="form-label" >Numero de Seguro Social</label>
                            <input type="text" name="nss" class="form-control" placeholder="000000000000" required />
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
                          <label class="form-label" >Tipo de Sangre</label>
                            <input type="text" name="tipo_sangre" class="form-control" placeholder="+" required />
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
                          <label class="form-label">Contacto de Emergencias</label>
                            <input type="text" name="contacto_emergencias" class="form-control" placeholder="Nombre de la persona"  required />
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              Por favor, completa la información requerida.
                            </div>
                          
                          </div>
                        </div>
                      </div>

                      
                        
                      <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Telefono de emergencia </label>
                            <input type="text" name="telefono_emergencia" class="form-control" placeholder="00000000000" required />
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              Por favor, completa la información requerida.
                            </div>
                          </div>
                        </div>


                        <br/>
                      <!-- aqui termina el segundo insert -->
                      <br/>
                      <h4 id="scrollspyHeading3">Razón Social</h4>

                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas" aria-label="Ejemplo de .form-select-lg" required>
                            <option selected >Seleccionar Empresa</option>
                          @foreach($varempresas as $empresa)
                          <option value="{{$empresa->id}}">{{$empresa->nombre_empresa}}</option>
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
                      <div class="row">
                        <div class="col-md-4" id="nss">
                          <label class="form-label">Desglose de IMSS</label>
                          <input type="text" name="pago_IMSS" class="form-control" placeholder="00.00"  required />
                          <div class="valid-feedback">
                            ¡Se ve bien!
                          </div>
                          <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                          </div>
                        </div>
                        <div class="col-md-4" id="excedente">
                          <label class="form-label">Excedente</label>
                          <input type="text" name="excedente" class="form-control" placeholder="00.00"  required />
                          <div class="valid-feedback">
                            ¡Se ve bien!
                          </div>
                          <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                          </div>
                      </div>
                      <div class="col-md-4" id="Efectivo">
                          <label class="form-label">Efectivo</label>
                          <input type="text" name="efectivo" class="form-control" placeholder="00.00" required />
                          <div class="valid-feedback">
                            ¡Se ve bien!
                          </div>
                          <div class="invalid-feedback">
                            Por favor, completa la información requerida.
                          </div>
                      </div>
                      </div>



                      <div class="offcanvas-footer text-center" style="padding:10px;">
                        <button class="btn btn-dark" type="submit">Guardar empleado</button>
                      </div>
                </form>
              </div>
            </div> 
        </div>
  </div>

  <br/>
  <br/>
</div>
  





<script>
$(document).ready(function() {
  $('#nss').hide();
  $('#excedente').hide();
  $('#Efectivo').hide();
    var table = $('#tblempleados').DataTable( {
        responsive: true,
        scrollY: 450,
        scrollX: true,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        
    } );

    
    new $.fn.dataTable.FixedHeader( table );
});


$("#cmbempresas").change(function(){
  var id = $(this).val(); 
  var empresa = $(this).find('option:selected').text(); 
  if(empresa == "KAGDA" || empresa == "CREDILAGUNA")
  {
      $('#nss').hide();
      $('#excedente').hide();
      $('#Efectivo').hide();
  }
  else
  {
      $('#nss').show();
      $('#excedente').show();
      $('#Efectivo').show();
  }
    });
</script>
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
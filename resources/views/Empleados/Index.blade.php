@extends('layouts.app')
@section('content')
<div class="container mt-5 p__little">
  
 

    <div class="row">
      <div class="col-md-6">
        <h1 class="fw-light">Catalogo de Empleados</h1> 
      </div>
      <div class="col-md-6">
        <div class="row text-center">
          <div class="col-md-4">
            <button  type="button" class="btn push2" style="background-color: #00AB26;border-radius:100%;border:0px solid #00AB26;width:15vh;height:15vh;color:#fff;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><h2><i class="fas fa-plus"></i></h2></button> 
          </div>
          <div class="col-md-4">
            <button  type="button" class="btn push2" style="background-color: #A449FF;border-radius:100%;border:0px solid #A449FF;width:15vh;height:15vh;color:#fff;"><h2><i class="fas fa-download"></i></h2></button>
          </div>
          <div class="col-md-4">
            <button  type="button" class="btn push2" style="background-color: #0D42FF;border-radius:100%;border:0px solid #0D42FF;width:15vh;height:15vh;color:#fff;"><h2><i class="fas fa-chart-pie"></i></h2></button>
          </div>
        </div>
      </div>
    </div>  
    <br/>
    <br/>
          
  <table class="table table-hover tl" id="tblempleados">
    <thead class="table-dark">
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
  <!-- Modal para insertar-->
  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:500px">
    <!-- <form action="{{route('Empleados.store')}}" method="POST">
     @csrf -->
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
                <form action="{{route('Empleados.store')}}" method="POST">
                @csrf
                    <h5 id="scrollspyHeading1">General</h5>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombre" required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label">Segundo Nombre</label>
                            <input type="text" id="form8Example4"  name="segundo_nombre" class="form-control"  required />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Apellido Paterno</label>
                            <input type="text" name="apellido_paterno" id="form8Example4" class="form-control"  required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Apellido Materno</label>
                            <input type="text" name="apellido_materno" id="form8Example4" class="form-control"  required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Telefono</label>
                            <input type="numeric" name="telefono" class="form-control"  required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label">Correo</label>
                            <input type="text"  name="correo" class="form-control"  required />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Puesto</label>
                          <select class="form-select" name="puesto">
                          @foreach($varpuestos as $puestos)
                          <option  value="{{$puestos->id}}">{{$puestos->nombre}}</option>
                        @endforeach
                        </select>
                          
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Sucursal</label>
                          <select class="form-select"  name="sucursal" >
                          @foreach($varsucursales as $sucursales)
                          <option value="{{$sucursales->id}}">{{$sucursales->nombre}}</option>
                        @endforeach
                        </select>
                          
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Ciudad</label>
                          <select class="form-select"  name="ciudad">
                          @foreach($varciudades as $ciudades)
                          <option value="{{$ciudades->id}}">{{$ciudades->nombre}}</option>
                        @endforeach
                        </select>
                          </div>
                        </div>

                        <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Banco</label>
                          <select  class="form-select" name="banco">
                          @foreach($varbancos as $banco)
                          <option value="{{$banco->id}}">{{$banco->nombre}}</option>
                        @endforeach
                        </select>
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Calle</label>
                            <input type="text" name="calle" class="form-control" required />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Colonia</label>
                            <input type="text" name="colonia" class="form-control" required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero Interior</label>
                            <input type="text" name="numero_interior" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero Exterior</label>
                            <input type="text" class="form-control" name="numero_exterior" required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label">Codigo Postal</label>
                            <input type="text"  name="codigo_postal"  class="form-control" required />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Sexo</label>
                            <input type="text" name="sexo" class="form-control" required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control"  required />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Foto</label>
                            <input type="text" name="foto" class="form-control"  required />
                          </div>
                        </div>
                      </div>
          

                        
                      </div>
                      <br/>
                      <!-- aqui termina el primer insert -->
                      <br/>
                      <h5 id="scrollspyHeading2">Detalles</h5>

                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Salario Bruto</label>
                            <input type="text" name="salario_bruto" class="form-control" required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Salario Fijo</label>
                            <input type="text" name="salario_fijo" class="form-control"  required/>
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Salario Neto</label>
                            <input type="text" Name="salario_neto" id="form8Example4" class="form-control" required />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero de Tarjeta</label>
                            <input type="text" name="numero_tarjeta" class="form-control" required />
                      
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Numero de Cuenta</label>
                            <input type="text" name="numero_cuenta" class="form-control" required  />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >rfc</label>
                            <input type="text" name="rfc" class="form-control"  required/>
                        
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero de Seguro Social</label>
                            <input type="text" name="nss" class="form-control" required />

                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Tipo de Sangre</label>
                            <input type="text" name="tipo_sangre" class="form-control" required />
                          
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label">Contacto de Emergencias</label>
                            <input type="text" name="contacto_emergencias" class="form-control"  required />
                          
                          </div>
                        </div>
                      </div>

                      
                        
                      <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Telefono de emergencia </label>
                            <input type="text" name="telefono_emergencia" class="form-control"  require />
                          </div>
                        </div>


                        <br/>
                      <!-- aqui termina el segundo insert -->
                      <br/>
                      <h5 id="scrollspyHeading3">Razón Social</h5>

                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas" aria-label="Ejemplo de .form-select-lg" require>
                            <option selected >Seleccionar Empresa</option>
                          @foreach($varempresas as $empresa)
                          <option value="{{$empresa->id}}">{{$empresa->nombre_empresa}}</option>
                          @endforeach
                          </select>
                          
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4" id="nss">
                          <label class="form-label">Desglose de IMSS</label>
                          <input type="text" name="pago_IMSS" class="form-control"  require />
                        </div>
                        <div class="col-md-4" id="excedente">
                          <label class="form-label">Excedente</label>
                          <input type="text" name="excedente" class="form-control"  require />
                      </div>
                      <div class="col-md-4" id="Efectivo">
                          <label class="form-label">Efectivo</label>
                          <input type="text" name="efectivo" class="form-control"  require />
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

  





<script>
$(document).ready(function() {
  $('#nss').hide();
  $('#excedente').hide();
  $('#Efectivo').hide();
    var table = $('#tblempleados').DataTable( {
        responsive: true,
        scrollY: 450,
        scrollX: true,
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
@endsection
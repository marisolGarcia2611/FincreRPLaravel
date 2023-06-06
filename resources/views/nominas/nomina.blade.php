@extends('layouts.app')
@section('content')

{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Movimiento completado de forma correcta","success", {buttons: false,timer: 1800});';
          echo '</script>';  
  @endphp
@elseif($mensaje = Session::get('successcalcular'))
@php
        echo '<script language="JavaScript">';
        echo 'swal("¡Nómina calculada exitosamente!","Proceso realizado de forma correcta","success", {buttons: false,timer: 2000});';
        echo '</script>';  
@endphp

@elseif($mensaje = Session::get('warning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp


  @elseif($mensaje = Session::get('Errorpermisos'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se encontro el permiso para efectuar la accion!","Comunicate al area de sistemas para validar permisos","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

@endif

<div id="btnBack"></div>  
<div class="pos__ico">
    <img class="ico__image2" src="{{ asset('ico/logo.png') }}" alt="fincreLaguna">
</div>

<div class="p__little">
<br/>
<br/>
{{--------------------------- Encabezado de la pagina----------------------}}
  <div class="container">
    <div  class="row mb-5 bg-p">
      <div class="col-md-3 center">
        <h2 class="mt-3 mb-1 fw-light animate_animated animate_backInLeft">Gestión de nómina</h2> 
          <cite title="Título fuente">Administración de nómina en empleados</cite>
        </div>

        <div class="col-md-4">
          <div class="row mt-3 text-center">
            @foreach($permisos as $permisoa) 
              @if($permisoa->nombre_accion=="alta_nominas")
                <div class="col-md-3">
                    <button  type="button" class="mb-1 animate__animated animate__backInLeft btn push2 bt__flat fs-8" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
                </div>
                <div class="col d-md-block d-none"></div>
              @endif
            @endforeach
          </div>
        </div>
    </div>
  </div> 

  @csrf
 <center class="mb-5 bg-body border-0">
  @foreach($permisos as $permiso) 
    @if($permiso->nombre_accion=="ver_nominas")
        <div class="table-responsive pad-table" id="mydatatable-container">    
          <table class="table table-hover" id="tblempleados">
            <thead class="table">
              <tr class="tr-table"> 
                <th class="text-center fw-light">Acciones</th>
                <th class="text-center fw-light">Numero de Nómina</th>
                <th class="text-center fw-light">Nombre de Nómina</th>
                <th class="text-center fw-light">Fecha inicio</th>
                <th class="text-center fw-light">Fecha Fin</th>
                <th class="text-center fw-light">Estatus</th>
                <th class="text-center fw-light">Tipo Nómina</th>
              </tr>
            </thead>
            
            <tbody>
              @foreach($varnominas as $nomina)
                <tr>
                  <td class="bg-0">
                    <form action="/Nominas/exportar_excel">
                      @csrf
                      @if($nomina->estado_nomina==="Iniciada")
                      <a class="text-s btn fas fa-calculator border-0 push" href="/Nominasinsert/insertarnomina/{{$nomina->id}}/{{$nomina->idtiponomina}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Calcular"></a>
                      <a class="text-s btn fas fa-trash border-0 push" href=" /Nominaseliminar/{{$nomina->id}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Eliminar"></a> <!--solo de enc-->
                      @elseif($nomina->estado_nomina==="Edicion")
                      <a class="text-s btn fas fa-edit border-0 push" href=" /Nominaseditar/editarnomina/{{$nomina->id}}/{{$nomina->idtiponomina}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar"></a>
                      <a class="text-s btn fas fa-trash border-0 push" href=" /Nominaseliminar/temporal/{{$nomina->id}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Eliminar"></a><!--solo de enc det temdet-->
                      @elseif($nomina->estado_nomina==="Cerrada")
                      <input type="text" name="id" id="id" hidden value="{{$nomina->id}}">
                      <button class="text-s btn fas fa-download border-0 push"  type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Exportar"></button>
                      <a class="text-s btn fas fa-trash border-0 push" href=" /Nominaseliminar/calcular/{{$nomina->id}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Eliminar"></a><!--solo de enc det-->
                      @endif 
                    </form>
                  </td>
                      
                    <td class="table-light text-secondary">{{$nomina->id}}</td>
                    <td class="table-light text-secondary">{{$nomina->nombre_nomina}}</td>
                    <td class="table-light text-secondary">{{$nomina->fecha_inicio}}</td>
                    <td class="table-light text-secondary">{{$nomina->fecha_fin}}</td>
                    @if($nomina->estado_nomina==="Iniciada")
                    <td class="table-success text-secondary">{{$nomina->estado_nomina}}</td>
                    @elseif($nomina->estado_nomina==="Edicion")
                    <td class="table-warning text-secondary">{{$nomina->estado_nomina}}</td>
                    @elseif($nomina->estado_nomina==="Cerrada")
                    <td class="table-danger text-secondary">{{$nomina->estado_nomina}}</td>
                    @endif
                    <td name="dtiponomina" class="table-light text-secondary">
                      @if($nomina->idtiponomina == 1)
                      Semanal
                    @elseif($nomina->idtiponomina == 2)
                      Quincenal
                    @elseif($nomina->idtiponomina == 3)
                      Mensual
                    @endif
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </div>  
    @endif
  @endforeach
</center> 
</div>
<!-- Insertar Modal-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:70vh">
  <div class="offcanvas-header">
      <nav id="navbar-example2" class="navbar navbar-light px-3">
            <a class="navbar-brand">Nueva Nomina</a>
      </nav>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

    <div class="offcanvas-body small">
          <div class="container">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <form action="" method="POST"  class="g-3 needs-validation" novalidate>
                @csrf

                <div class="card p-5 cartaForm">
                    <h4 id="paso1">Paso 1. General</h4>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                  
                          <label class="form-label" for="form8Example4">Nombre de Nómina</label>
                      
                            <input type="text"  class="form-control" name="nombre_nomina" id="nombre_nomina"   required />
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
                          <label class="form-label">Fecha de Inicio</label>
                            <input type="date" id="fecha_ini_nom"  name="fecha_ini_nom" class="form-control"  required />
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
                          <label class="form-label" >Fecha de termino</label>
                            <input type="date" name="fecha_ter_no" id="fecha_ter_no" class="form-control"  required />
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
                          <label class="form-label" >Tipo de Nómina</label>
                        <select class="form-select" name="tipo_nomina" required>
                          <option value="">Seleccionar...</option>
                          @foreach($varisrenc as $isrenc)
                          <option value="{{$isrenc->id}}">{{$isrenc->tipo}}</option>
                          @endforeach
                    
                        </select>
                          </div>
                        </div>
              

                      </div>  
                </div>
                <br/>
                <!-- Guardar empleado -->
                <div class="offcanvas-footer text-center" style="padding:10px;">
                  <button class="btn btn-blue" style="border-radius: 40px;" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Crear Nómina</button>
                </div>
              </form>
            </div>
          </div> 
    </div>
</div>
<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/simpleTabla.js') }}"></script>
@endsection
@extends('layouts.app')
@section('content')

</style>

<div class="mt-5 p__little">
<br/>
<br/>
  <center class="container bg-p">
        <div class="col-md-12">
          <h2 class="mt-3 mb-3 fw-light animate_animated ">Nominas</h2> 
        </div>
        <div class="col-md-12">
          <div class="row mt-8 text-end">
            <div class="col-md-2 d-md-block d-none"></div>
            <div class="col-md-2 mar-l">
              <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
            </div>
      
        </div>
    </center> 
  <br/>
  @csrf
 <center>
  <div class="bg-table">
    <div class="table-responsive" style="padding:30px;padding-bottom:10px;" id="mydatatable-container">     
      <table class="table table-hover" id="tblempleados">
      <thead class="table" style="border:0px solid rgba(255, 255, 255, 0);">
            <tr style="background-color: #32394B;color:#fff;border:0px solid rgba(255, 255, 255, 0);"> 

            <th class="text-center fw-light">Acciones</th>
            <th class="text-center fw-light">Nombre de Nomina</th>
            <th class="text-center fw-light">Fecha inicio</th>
            <th class="text-center fw-light">Fecha Fin</th>
            <th class="text-center fw-light">Estatus</th>
          </tr>
        </thead>
        
        <tbody>
         
            <tr>
              @foreach($varnominas as $nomina)
         
              <td class="table-dark" style="background-color: #32394B;">
                <form action="">
                  @if($nomina->estado_nomina==="Iniciada")
                  <button class="btn btn-success"  type="submit">GENERAR CALCULOS</button>
                  @elseif($nomina->estado_nomina==="Edicion")
                  <button class="btn btn-primary" type="submit">EDITAR NOMINA</button>
                  <button class="btn btn-danger" type="submit">CERRAR NOMINA</button>
                  @elseif($nomina->estado_nomina==="Cerrarada")
                  <button class="btn btn-success"  type="submit">EXPORTAR EXCEL</button>
                  @endif
                       
                </form>
              </td>
              
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->nombre_nomina}}</td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->fecha_inicio}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->fecha_fin}}</td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);">{{$nomina->estado_nomina}}</td>
            </tr>
    @endforeach
        </tbody>
      </table>
    </div>  
  </div>
</center> 


  <br/>
  <br/>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:70vh">

<div class="offcanvas-header">
<nav id="navbar-example2" class="navbar navbar-light px-3">
      <a class="navbar-brand">Nueva Nomina</a>
      
    </nav>
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>

<!-- Insertar Modal-->
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
                
                        <label class="form-label" for="form8Example4">Nombre de Nomina</label>
                     
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
            

                    </div>
                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                     
                    </div>
               </div>

                
                     <br/>
                    <!-- Guardar empleado -->
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                      <button class="btn btn-dark" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Crear Nomina</button>
                    </div>
              </form>
            </div>
          </div> 
      </div>
</div>

@endsection
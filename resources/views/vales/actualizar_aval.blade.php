@extends('layouts.app')
@section('content')
{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Movimiento completado de forma correcta","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@endif

<!-- Btn de regreso-->
<div class="pos__btnBack1 d-none d-md-block" style="z-index:3!important;">
        <div class="wrapper"> 
        <h5 class="btnBack1" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
        </div>
</div>

<!-- Menu de progreso-->
<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-2">
        <h5 class="fw-light">Fase 1: Actualización de Crédito  <button class="btn border-0 text-secondary" id="show2" onclick="divshow2()"><i class="fa-solid fa-minus"></i></button></h5>
        <div>
            <nav id="navbar">
                <div class="row p-3">
                    
                    <div class="col-md-2 col-2 marginSpecial">
                        <div class="row">
                            <div class="col-md-6 col-6 border1"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6 col-6 p-15">
                            <form action="/vales/getactualizardistribuidor/{{$iddis}}" method="get">
                                <button class=" btn fa-primary fw-light fs_special border-0" type="submit">Distribuidor</button>
                            </form>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line1"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 circle2"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Aval</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line2"></div>

                    @foreach($varobtenerdatosaval as $aval) 
                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 border3"><h2 class="fw-light">3</h2></div>
                            <div class="col-md-6 col-6 p-15">
                           
                                <form action="/vales/actualizar_docup/{{$iddis}}/{{$aval->id}}" method="get">
                                    <button class=" btn fa-primary fw-light fs_special border-0" type="submit">Documentos</button>
                                </form>
                            
                            </div>
                        </div> 
                    </div>
                    @endforeach                    
                </div>
            </nav>
        </div>

    </div>
</div>

<div class="space_height" id="block2"></div>


<!-- Contenedor principal-->
<div class="container">
    <form action="/vales/actualizar_aval" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>
      @csrf
        <div class="card p-5 cartaForm mb-4">
            <h4 class="fw-light">1. Aval</h4>  

             <div class="row">
                <div class="col text-center mt-1">
                    <h1 class="iconBlue"><i class="fa-solid fa-file-invoice"></i></h1>
                    <div id="boton1" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin1()">
                        <h6 class="fw-light">Datos Generales &nbsp;&nbsp; <i class="fa-solid fa-chevron-down"></i></h6>
                    </div> 
                </div>
            </div>
           

              <div id="caja1">
            
       
              @foreach($varobtenerdatosaval as $datos) 
              
              <div class="row mt-3">
                          <div class="col-md-2">
                              <div class="form-outline">
                                <div class="input-group">
                                    <div class="input-group-text labelInv">Numero de aval</div>
                                    <input type="text" name="numero_aval" id="numero_aval" class="form-control inputInv" value="{{$datos->id}}"  required>
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-outline">
                                <div class="input-group">
                                    <div class="input-group-text labelInv">No. Distribuidor</div>
                                    <input type="text" name="numero_dis" class="form-control inputInv" value="{{$iddis}}"  required>
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

                 <div class="row mt-3">
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Primer Nombre</label>
                                  <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"  value="{{$datos->primer_nombre}}" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col">
                              <div class="form-outline">
                               <label class="form-label" for="form8Example4">Segundo Nombre</label>
                                  <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre" value="{{$datos->segundo_nombre}}" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Apellido Parterno</label>
                                  <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno" value="{{$datos->apellido_paterno}}"  required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Apellido Materno</label>
                                  <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"   value="{{$datos->apellido_materno}}" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="row mt-3">
                        
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                <input type="date"  class="form-control" name="fecha_nac" id="fecha_nac"  value="{{$datos->fecha_nacimiento}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Sexo</label>
                                  <select class="form-select" name="sexo" id="sex" required>
                                      <option  value="{{$datos->sexo}}" >{{$datos->sexo}}</option>
                                      <option value="F">F</option>
                                      <option value="M">M</option>
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
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado Civil</label>
                                <select class="form-select" name="estado_civil" id="estado_civil" required>
                                    <option value="{{$datos->estado_civil}}">{{$datos->estado_civil}}</option>
                                    <option value="SOLTERO">Soltero</option>
                                    <option value="CASADO">Casado</option>
                                    <option value="UNION_LIBRE">Unión Libre</option>
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
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">Telefono</label>
                                    <input type="text"  class="form-control" name="telefono" id="telefono" value="{{$datos->telefono}}" maxlength="10" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                        </div>

                        
                     </div>

                    <div class="row mt-3">

                        <div class="col">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">CURP</label>
                                <input type="text" name="curp" id="curp" class="form-control"  value="{{$datos->telefono}}" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form8Example4">RFC</label>
                                <input type="text" name="rfc" id="rfc" class="form-control" value="{{$datos->rfc}}" maxlength="13" required/>
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                    </div>
                     
                            
                      <div class="row mt-3">

                        <div class="col">
                                <div class="form-outline">
                                <label class="form-label" for="form8Example4">CP</label>
                                    <input type="text"  class="form-control" name="codigo_postal" id="codigo_postal"  value="{{$datos->codigo_postal}}" maxlength="6" required />
                                    <div class="valid-feedback">
                                    ¡Se ve bien!
                                    </div>
                                    <div class="invalid-feedback">
                                    Por favor, completa la información requerida.
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form8Example4">Calle</label>
                                <input type="text"  class="form-control" name="calle" id="calle" value="{{$datos->calle}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
       
                        <div class="col">
                            <div class="form-outline">
                             <label class="form-label" for="form8Example4">Colonia</label>
                                <input type="text"  class="form-control" name="colonia" id="colonia" value="{{$datos->colonia}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>
                  
                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Numero Interior</label>
                                <input type="text"  class="form-control" name="numero_interior" id="numero_interior" value="{{$datos->numero_interior}}" />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Numero Exterior</label>
                                <input type="text"  class="form-control" name="numero_exterior" id="numero_exterior" value="{{$datos->numero_exterior}}" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline">
                              <label class="form-label" for="form8Example4">Ciudad</label>
                              <select class="form-select" name="ciudad" id="ciudad" required>
                              @foreach($varciudades as $ciudad)
                              @if($ciudad->id ==$datos->ciudad)
                              <option selected value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                              @else
                              <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                              @endif
                              @endforeach
                              </select>
                          </div>
                        </div>
                      </div>
                
                      <div class="row mt-3">
                          <div class="col">
                              <div class="form-outline">
                               <label class="form-label" for="form8Example4">Empleo</label>
                                  <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" value="{{$datos->lugar_empleo}}"" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Puesto de Empleo</label>
                                  <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" maxlength="30" value="{{$datos->puesto_empleo}}" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>  
  
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Salario Mensual</label>
                                  <input type="text"  class="form-control" name="salario_mensual" id="salarioMensual" maxlength="20" value="{{$datos->salario_mensual}}" maxlength="10" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
                          
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Egreso Fijo Mensual</label>
                                  <input type="text"  class="form-control" name="egreso_mensual" id="egresoFijoMensual" maxlength="20" value="{{$datos->egreso_fijomensual}}" maxlength="10" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Antiguedad</label>
                                  <input type="text"  class="form-control" name="antiguedad" id="antiguedad"  maxlength="20" value="{{$datos->antiguedad}}" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="row mt-3">
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Telefono de Empleo</label>
                                  <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo"  maxlength="10" value="{{$datos->telefono_empresa}}" maxlength="10" required />
                                  <div class="valid-feedback">
                                  ¡Se ve bien!
                                  </div>
                                  <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                  </div>
                              </div>
                          </div>
  
                          <div class="col">
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Dirección de Empleo</label>
                                  <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo"  maxlength="50" value="{{$datos->direccion_empresa}}" required />
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
        </div>

        @endforeach 

        <div class="mt-3">
            <div class="text-center">
                    <button class="btn btn-purple1" type="submit">Continuar</button>
            </div>
        </div>
        <br/>
        <br/>

    </form>
</div>

<script >
    var clic = 1;
    var show2 = document.getElementById('show2');


    function divshow2(){ 
        if(clic==1){
            document.getElementById("block2").style.height = "130px";
            show2.innerHTML = ' <i class="fa-solid fa-plus"></i>';
            $('#navbar').hide(); 
            clic = clic + 1;
        
        } 
        else{
            document.getElementById("block2").style.height = "230px";
            show2.innerHTML = '<i class="fa-solid fa-minus"></i>';
            $('#navbar').show();   
            clic = 1;
        }   
    }
</script>
<script src="{{ asset('js/caja.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/block2.js') }}"></script>
@endsection
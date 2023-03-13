@extends('layouts.app')
@section('content')

<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-2">
        <h5 class="fw-light">Fase 1: Captura Inicial de Crédito</h5>

        <div>
            <nav>
                <div class="row p-3">
                    
                    <div class="col-md-2 col-2 marginSpecial">
                        <div class="row">
                            <div class="col-md-6 col-6 circle1"><h2 class="fw-light">1</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Distribuidor</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line1"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 border2"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Aval</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line2"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 border3"><h2 class="fw-light">3</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Documentos</h5></div>
                        </div> 
                    </div>
                    
                </div>
            </nav>
        </div>

    </div>
</div>

<div class="space_height"></div>


<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>


        <div class="card p-5 cartaForm mb-5">
          <h4 id="scrollspyHeading1" class="fw-light">1. Distribuidor</h4> 

          <div class="row">
            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-file-invoice"></i></h1>
                <div id="boton1" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin1()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>

            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-person-circle-plus"></i></h1>
                <div id="boton2" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin2()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>
            
            
            <div class="col-md-4 col-4 text-center mt-2">
                <h1 class="iconBlue d-none d-md-block"><i class="fa-solid fa-id-badge"></i></h1>
                <div id="boton3" class="btn push bg-gradient-pink m-0 p-1 sizeItem" onclick="divLogin3()">
                    <div class="row">
                        <h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6>
                       <h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6>
                    </div>
                </div> 
            </div>
          </div>

        
            <div id="caja1">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.1</b> Datos Generales</h5>
                </div>
                
                    <div class="row mt-4">
                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sucursal</label>
                                <input type="text"  class="form-control" name="sucursal" id="sucursal"  maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Promotor Encargado</label>
                                <input type="text"  class="form-control" name="promotor_encargado" id="promotor_encargado"  maxlength="10" required />
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
                            <label class="form-label" for="form8Example4">Primer Nombre</label>
                                <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"    minlength="3" maxlength="15" required />
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
                                <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre"  value=""  maxlength="15" required />
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
                                <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno"   minlength="3" maxlength="15" required />
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
                                <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"  minlength="3" maxlength="15" required />
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

                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Sexo</label>
                                <select class="form-select" name="sexo" id="sex">
                                    <option value="" >...</option>
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


                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                                <input type="date"  class="form-control" name="" id=""  minlength="" maxlength="" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">CURP</label>
                            <input type="text" name="curp" id="curp" class="form-control"  maxlength="18" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">RFC</label>
                            <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000" maxlength="13" required/>
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
                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado Civil</label>
                                <select class="form-select" name="estado_civil" id="estado_civil">
                                    <option value="">...</option>
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

                        <div class="col-md-2">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Telefono</label>
                                <input type="text"  class="form-control" name="telefono" id="telefono" minlength="10" maxlength="10" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Estado</label>
                                <input type="text"  class="form-control" name="estado" id="estado"   minlength="3" maxlength="30" required />
                                <div class="valid-feedback">
                                ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                Por favor, completa la información requerida.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-outline">
                            <label class="form-label" for="form8Example4">Ciudad</label>
                                <input type="text"  class="form-control" name="ciudad" id="ciudad"   minlength="3" maxlength="30" required />
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
                                <input type="text"  class="form-control" name="codigo_postal" id="codigo_postal"  maxlength="6" required />
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
                                <input type="text"  class="form-control" name="colonia" id="colonia"  maxlength="60" required />
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
                                <input type="text"  class="form-control" name="calle" id="calle" maxlength="60" required />
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
                                <input type="text"  class="form-control" name="numero_interior" id="numero_interior" placeholder="#00" maxlength="10" />
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
                                <input type="text"  class="form-control" name="numero_exterior" id="numero_exterior" maxlength="10" placeholder="#00" required />
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
                            <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                                <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" maxlength="30" required />
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
                                <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" maxlength="30" required />
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
                                <input type="text"  class="form-control" name="salarioMensual" id="salarioMensual" maxlength="20" required />
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
                                <input type="text"  class="form-control" name="egresoFijoMensual" id="egresoFijoMensual" maxlength="20" required />
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
                                <input type="text"  class="form-control" name="antiguedad" id="antiguedad"  maxlength="20" required />
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
                                <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo"  maxlength="10" required />
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
                                <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo"  maxlength="50" required />
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

           
            <div id="caja2">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.2</b> Conyuge</h5>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"    minlength="3" maxlength="15" required />
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
                            <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre"  value=""  maxlength="15" required />
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
                            <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno"   minlength="3" maxlength="15" required />
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
                            <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"  minlength="3" maxlength="15" required />
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
                        <label class="form-label" for="form8Example4">Sexo</label>
                            <select class="form-select" name="sexo" id="sex">
                                <option value="" >...</option>
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
                        <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                            <input type="date"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                        <label class="form-label" for="form8Example4">CURP</label>
                        <input type="text" name="curp" id="curp" class="form-control"  maxlength="18" required />
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
                        <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000" maxlength="13" required/>
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
                            <input type="text"  class="form-control" name="telefono" id="telefono" minlength="10" maxlength="10" required />
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
                        <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                            <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" maxlength="30" required />
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
                            <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" maxlength="30" required />
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
                            <input type="text"  class="form-control" name="salarioMensual" id="salarioMensual" maxlength="20" required />
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
                            <input type="text"  class="form-control" name="egresoFijoMensual" id="egresoFijoMensual" maxlength="20" required />
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
                            <input type="text"  class="form-control" name="antiguedad" id="antiguedad"  maxlength="20" required />
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
                            <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo"  maxlength="10" required />
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
                            <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo"  maxlength="50" required />
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


            <div id="caja3">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">1.3</b> Referencias</h5>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline">
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"    minlength="3" maxlength="15" required />
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
                            <input type="text"  class="form-control" name="segundo_nombre" id="segundo_nombre"  value=""  maxlength="15" required />
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
                            <input type="text"  class="form-control" name="apellido_paterno" id="apellido_paterno"   minlength="3" maxlength="15" required />
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
                            <input type="text"  class="form-control" name="apellido_materno" id="apellido_materno"  minlength="3" maxlength="15" required />
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
                        <label class="form-label" for="form8Example4">Sexo</label>
                            <select class="form-select" name="sexo" id="sex">
                                <option value="" >...</option>
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
                        <label class="form-label" for="form8Example4">Fecha de Nacimiento</label>
                            <input type="date"  class="form-control" name="" id=""  minlength="" maxlength="" required />
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
                        <label class="form-label" for="form8Example4">CURP</label>
                        <input type="text" name="curp" id="curp" class="form-control"  maxlength="18" required />
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
                        <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000" maxlength="13" required/>
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
                            <input type="text"  class="form-control" name="telefono" id="telefono" minlength="10" maxlength="10" required />
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
                        <label class="form-label" for="form8Example4">Lugar de Empleo</label>
                            <input type="text"  class="form-control" name="lugar_empleo" id="lugar_empleo" maxlength="30" required />
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
                            <input type="text"  class="form-control" name="puesto_empleo" id="puesto_empleo" maxlength="30" required />
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
                            <input type="text"  class="form-control" name="salarioMensual" id="salarioMensual" maxlength="20" required />
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
                            <input type="text"  class="form-control" name="egresoFijoMensual" id="egresoFijoMensual" maxlength="20" required />
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
                            <input type="text"  class="form-control" name="antiguedad" id="antiguedad"  maxlength="20" required />
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
                            <input type="text"  class="form-control" name="telefono_empleo" id="telefono_empleo"  maxlength="10" required />
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
                            <input type="text"  class="form-control" name="direccion_empleo" id="direccion_empleo"  maxlength="50" required />
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

        <div class="mb-5">
            <div class="text-center">
                <div class="btn-group">
                    {{-- <button class="btn btn-outline-secondary">Abandonar</button>
                    <button class="btn btn-dark">Continuar</button> --}}
                    <a class="btn btn-outline-purple" href="/Creditos">Abandonar</a>
                    <a class="btn btn-purple" href="/Creditos/CapturaAval">Continuar</a>
                </div>
            </div>
        </div>


    </form>
</div>

<script>
$(document).ready(function() { 
    $('#caja1').hide();
    $('#caja2').hide();
    $('#caja3').hide();
});
</script>
<script>
    var clic1 = 1;
    var uno1 = document.getElementById('boton1');


    function divLogin1(){ 
    if(clic1==1){
        
        document.getElementById("caja1").style.height = "100%";
        $('#caja1').show(); 
        uno1.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-up"></i></h6></div>';
        $('#caja2').hide(); 
        uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
        $('#caja3').hide();
        uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6></div>';    
        clic1 = clic1 + 1;
    } 
    else{
        document.getElementById("caja1").style.height = "0px"; 
        $('#caja1').hide();   
        uno1.innerHTML ='<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
        clic1 = 1;
    }   
    }




    var clic2 = 1;
    var uno2 = document.getElementById('boton2');


    function divLogin2(){ 
    if(clic2==1){
        
        document.getElementById("caja2").style.height = "100%";
        $('#caja2').show();
        uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-up"></i></h6></div>';
        $('#caja1').hide(); 
        uno1.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6></div>'; 
        $('#caja3').hide();  
        uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6></div>';
        clic2 = clic2 + 1;
    } 
    else{
        document.getElementById("caja2").style.height = "0px"; 
        $('#caja2').hide();   
        uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
        clic2 = 1;
    }   
    }



    var clic3 = 1;
    var uno3 = document.getElementById('boton3');


    function divLogin3(){ 
    if(clic3==1){
        
        document.getElementById("caja3").style.height = "100%";
        $('#caja3').show();
        uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-up"></i></h6></div>';
        $('#caja2').hide();
        uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6></div>'; 
        $('#caja1').hide();  
        uno1.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6></div>';
        clic3 = clic3 + 1;
    } 
    else{
        document.getElementById("caja3").style.height = "0px"; 
        $('#caja3').hide();   
        uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
        clic3 = 1;
    }   
    }

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
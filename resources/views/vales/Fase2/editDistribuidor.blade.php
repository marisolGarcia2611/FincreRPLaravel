@extends('layouts.app')
@section('content')
<div id="EncabezadoDis"></div>
<div class="space_height"  id="block"></div>
<div id="aviso"></div>


<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="g-3 form needs-validation" novalidate>


        <div class="card p-5 cartaForm mb-5">
          <h5 id="scrollspyHeading1" class="fw-light">1. Distribuidor</h5> 

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

                    <div class="row mt-4">
                        <div class="mb-3">
                            <h5 class="fw-light"> <b class="cicle_Blue">1.2</b> Actividad economica</h5>
                        </div>
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
                            <label class="form-label" for="form8Example4">Dirección de Empresa</label>
                                <input type="text"  class="form-control" name="direccion_empresa" id="direccion_empresa" maxlength="30" required />
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
                            <label class="form-label" for="form8Example4">Telefono de Empresa</label>
                                <input type="text"  class="form-control" name="telefono_empresa" id="telefono_empresa" maxlength="30" required />
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
                                <input type="text"  class="form-control" name="salario_mensual" id="salario_mensual" maxlength="20" required />
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
                                <input type="text"  class="form-control" name="egreso_fijomensual" id="egreso_fijomensual" maxlength="20" required />
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

            </div>

           
            <div id="caja2">
                <div class=" mt-4">
                    <h5 class="fw-light"> <b class="cicle_Blue">2.1</b> Conyuge</h5>
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

                <div class="row mt-4">
                    <div class="mb-3">
                        <h5 class="fw-light"> <b class="cicle_Blue">2.2</b> Actividad economica</h5>
                    </div>
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
                    <h5 class="fw-light"> <b class="cicle_Blue">3.1</b> Referencias</h5>
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
                        <label class="form-label" for="form8Example4">Estado Civíl</label>
                            <select class="form-select" name="estado_civil" id="estado_civil">
                                <option value="" >...</option>
                                <option value="SOLTERO">SOLTERO</option>
                                <option value="CASADO">CASADO</option>
                                <option value="UNION_LIBRE">UNION_LIBRE</option>
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

                <div class="row mt-4">
                    <div class="mb-3">
                        <h5 class="fw-light"> <b class="cicle_Blue">3.2</b> Actividad economica</h5>
                    </div>
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
        <br/>
    </form>
</div>

<div id="chat"></div>


<script src="{{ asset('js/btnBack2.js') }}"></script>
<script src="{{ asset('js/F1Distribuidor.js') }}"></script>
<script src="{{ asset('js/aviso.js') }}"></script>
<script src="{{ asset('js/chat.js') }}"></script>
<script src="{{ asset('js/cajas.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
@endsection
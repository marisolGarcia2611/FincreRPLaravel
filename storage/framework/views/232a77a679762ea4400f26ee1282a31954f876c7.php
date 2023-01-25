
<?php $__env->startSection('content'); ?>


<style>
  .swal-overlay {
  background-color: rgba(70, 71, 95, 0.45);
  }
  .bor{
    border: none;
    -webkit-transition: all 0.3s ease;
     transition: all 0.3s ease;
  }

  .bor:hover {
  -webkit-transform: scale(1.1) !important;
  transform: scale(1.09) !important;
 }

 .nav-float{
    position: fixed;border-top-right-radius:30px;border-bottom-right-radius:30px;z-index:2;
  }

  .nav-it:hover{
    background-color: #33acce;border-radius:20px;
    color: #fff;
  }
  .cartaForm{
   border-radius: 30px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

 .bg-p{
  color: #32394B;
 }
 .mar-l{
  margin-left: 40px;
 }
 .bg-table{
  background-color:  #32394B;border-radius:18px;color:#fff; width:95%;
 }

 .bg-1{
    background-color: #6e7994;border:0px solid rgba(255, 255, 255, 0);

  }

  .bg-2{
    background-color: #525b72;border:0px solid rgba(255, 255, 255, 0);
  }

  .bg-3{
    background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);
  }

  .bg-4{
    background-color: #33ce64;border:0px solid rgba(255, 255, 255, 0);
  }

  .bg-5{
    background-color: #ffa200;border:0px solid rgba(255, 255, 255, 0);
  }

  .bg-6{
    background-color: #aab6dd;border:0px solid rgba(255, 255, 255, 0);
  }

 
 @media  screen and (max-width:900px) {

  .mar-l{
  margin-left: 0px;
 }

 }
</style>
<?php if($mensaje = Session::get('success')): ?>
  <?php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Empleado editado correctamente","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  ?>

<?php elseif($mensaje = Session::get('warning')): ?>
  <?php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues","warning", {buttons: false,timer: 1500});';
          echo '</script>';  
  ?>

<?php endif; ?>



<div class="mt-5 p__little">
<br/>
<br/>
  <center class="container bg-p">
        <div class="col-md-12">
          <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Catalogo de Empleados</h2> 
        </div>
        <div class="col-md-12">
          <div class="row mt-3 text-end">
            <div class="col-md-2 d-md-block d-none"></div>
            <div class="col-md-2 mar-l">
              <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
            </div>
            <div class="col-md-2">
              <form action="<?php echo e(route('Empleados.exportar_excel')); ?>">
              <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-download"></i>&nbsp; Exportar </button> 
              </form>            
            </div>
            <div class="col-md-2">
              <form action="<?php echo e(route('Empleados.grafica_empleados')); ?>">
              <button  type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-chart-pie"></i>&nbsp;Gaficar </button> 
              </form>
            </div>
            <div class="col-md-4 d-md-block d-none">
        
          </div>
        </div>
    </center> 
  <br/>
  <?php echo csrf_field(); ?>
 <center>
  <div class="bg-table">
    <div class="table-responsive" style="padding:30px;padding-bottom:10px;" id="mydatatable-container">     
      <table class="table table-hover" id="tblempleados">
      <thead class="table" style="border:0px solid rgba(255, 255, 255, 0);">
            <tr style="background-color: #32394B;color:#fff;border:0px solid rgba(255, 255, 255, 0);"> 
            <th class="text-center fw-light">Baja</th>
            <th class="text-center fw-light">Editar</th>
            <th  class="text-center fw-light">Numero de Empleado</th>
            <th  class="text-center fw-light">Primer Nombre</th>
            <th  class="text-center fw-light">Segundo Nombre</th>
            <th  class="text-center fw-light">Apellido Paterno</th>
            <th  class="text-center fw-light">Apellido Materno</th>
            <th  class="text-center fw-light">Estado</th>   
            <th  class="text-center fw-light">Descripción</th>
            <th  class="text-center fw-light">Estado Civil</th>
            <th  class="text-center fw-light">Telefono</th>
            <th  class="text-center fw-light">Empresa</th>
            <th  class="text-center fw-light">Correo</th>
            <th  class="text-center fw-light">Sucursal</th>
            <th  class="text-center fw-light">Ciudad</th>
            <th  class="text-center fw-light">Calle</th>
            <th  class="text-center fw-light">Colonia</th>
            <th  class="text-center fw-light">Numero Interior</th>
            <th  class="text-center fw-light">Numero Exterior</th>
            <th  class="text-center fw-light">CP</th>
            <th  class="text-center fw-light">Sexo</th>
            <th  class="text-center fw-light">Fecha de Nacimiento</th>
            <th  class="text-center fw-light">Fecha Ingreso</th>
            <th  class="text-center fw-light">Puesto</th>
            <th  class="text-center fw-light">Salario Bruto</th>
            <th  class="text-center fw-light">Salario Neto</th>
            <th  class="text-center fw-light">Salario fijo</th>
            <th  class="text-center fw-light" >ID INFONAVIT</th>
            <th  class="text-center fw-light"># Credito infonavit</th>
            <th  class="text-center fw-light">Descuento infonavit</th>
            <th  class="text-center fw-light">Factor sua</th>
            <th  class="text-center fw-light">Descuento Quincenal</th>
            <th  class="text-center fw-light">Banco</th>
            <th  class="text-center fw-light">Numero de Tarjeta</th>
            <th  class="text-center fw-light">Numero de Cuenta</th>
            <th  class="text-center fw-light">RFC</th>
            <th  class="text-center fw-light">NSS</th>
            <th  class="text-center fw-light">Tipo de Sangre</th>
            <th  class="text-center fw-light">Contacto de Emergencia</th>
            <th  class="text-center fw-light">Telefono de Emergencia</th>
            <th  class="text-center fw-light">Pago imss</th>
            <th  class="text-center fw-light">Pago excedente</th>
            <th  class="text-center fw-light">Pago efectivo</th>
            <th  class="text-center fw-light">Ruta foto</th>
        
          </tr>
        </thead>
        
        <tbody>
          <?php $__currentLoopData = $varlistaempleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="table-dark" style="background-color: #32394B;">
                  <div class="row">
                    <div class="col-md-6 text-start">
                      <button class="btn fas fa-trash" style="color:#bfc6d4;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom" id="<?php echo e($vis->id); ?>" ></button>
                    </div>
              </td>
              <td class="table-dark" style="background-color: #32394B;">
                <form action="/Empleados/<?php echo e($vis->idempleado); ?>/edit">
                          <button class="btn fas fa-edit bor" style="color:#bfc6d4;" type="submit"></button>
                </form>
              </td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->idempleado); ?></td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->primer_nombre); ?></td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->segundo_nombre); ?></td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->apellido_paterno); ?></td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->apellido_materno); ?></td>
              <?php if($vis->estado=='Activo'): ?>
              <td class="table-success" ><?php echo e($vis->estado); ?></td>
              <?php else: ?>
              <td class="table-danger" ><?php echo e($vis->estado); ?></td>
              <?php endif; ?>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->descripcion_estado); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->estado_civil); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->telefono); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->nombre_empresa); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->correo); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->sucursal); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->ciudad); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->calle); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->colonia); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->numero_interior); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->numero_exterior); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->codigo_postal); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->sexo); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->fecha_nacimiento); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->fecha_ingreso); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->puesto); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->salario_bruto); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->salario_neto); ?></td>
              <td class="bg-1" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->salario_fijo); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);" ><?php echo e($vis->idinfonavit); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);" ><?php echo e($vis->numero_credito_infonavit); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);" ><?php echo e($vis->nombreinfonavit); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->factor_sua); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->descuento_quincenal); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->banco); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->numero_tarjeta); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->numero_cuenta); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->rfc); ?></td>
              <td class="bg-3" style="background-color: #a0b2ec;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->nss); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->tipo_sangre); ?></td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->contacto_emergencia); ?></td>
              <td class="bg-2" style="background-color: #9ba9e2;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->telefono_emergencia); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->pago_imss); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->excedente); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->efectivo); ?></td>
              <td class="bg-1" style="background-color: #bfc6d4;border:0px solid rgba(255, 255, 255, 0);"><?php echo e($vis->foto); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
      <a class="navbar-brand">Nuevo Empleado</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link nav-it" href="#paso1">Paso 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-it" href="#paso2">Paso 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-it" href="#paso3">Paso 3</a>
          </li>
        
        </ul>
    </nav>
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>

<!-- Insertar Modal-->
<div class="offcanvas-body small">
          <div class="container">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <form action="" method="POST"  class="g-3 needs-validation" novalidate>
              <?php echo csrf_field(); ?>

              <div class="card p-5 cartaForm">
                  <h4 id="paso1">Paso 1. General</h4>
                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                
                        <label class="form-label" for="form8Example4">Primer Nombre</label>
                     
                          <input type="text"  class="form-control" name="primer_nombre" id="primer_nombre"   required />
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
                          <input type="text" id="segundo_nombre"  name="segundo_nombre" class="form-control"  required />
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
                          <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control"  required />
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
                          <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" required />
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
                          <input type="numeric" name="telefono" id="telefono" class="form-control"  required />
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
                          <input type="text"  name="correo" id="correo" class="form-control"   required />
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
                        <select name="puesto" id="puesto" class="form-select"  required>
                        <?php $__currentLoopData = $varpuestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obtenerpuestos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($obtenerpuestos->id); ?>"><?php echo e($obtenerpuestos->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
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
                        <select  name="sucursal" id="sucursal" class="form-select" required>
                        <?php $__currentLoopData = $varsucursales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obtenersucursal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($obtenersucursal->id); ?>"><?php echo e($obtenersucursal->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <select   name="ciudad" id="ciudad" class="form-select" required>
                        <?php $__currentLoopData = $varciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obtenerciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($obtenerciudad->id); ?>"><?php echo e($obtenerciudad->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <select   name="banco" id="banco" class="form-select" required>
                        <?php $__currentLoopData = $varbancos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obtenerbanco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($obtenerbanco->id); ?>"><?php echo e($obtenerbanco->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                          <input type="text" name="calle" id="calle" class="form-control" required />
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
                          <input type="text" name="colonia" id="colonia" class="form-control" required />
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
                          <input type="text" name="numero_interior" id="numero_interior" class="form-control" placeholder="00" required />
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
                          <input type="text" class="form-control" name="numero_exterior" id="numero_exterior" placeholder="00" required />
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
                          <input type="text"  name="codigo_postal" id="codigo_postal"  class="form-control"  placeholder="00000" required />
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
                          <select  class="form-select" id="sexo" name="sexo"  required >
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
                          <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"  required />
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
                          <input type="text" name="foto" id="foto" class="form-control"  required />
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
                        <label class="form-label" >Fecha de alta</label>
                          <input type="date" name="fecha_alta" id="fecha_alta" class="form-control"  required />
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
                    <br/>
                    <!-- aqui termina el primer insert -->
                    <br/>
              
              <div class="card p-5 cartaForm">
                    <h4 id="paso2">Paso 2. Salario</h4>
                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <label class="form-label" >Salario Bruto</label>
                          <input type="text" name="salario_bruto" id="salario_bruto" class="form-control"  required />
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
                          <input type="text" name="salario_fijo" id="salario_fijo" class="form-control" placeholder="00.00" required/>
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
                          <input type="text" Name="salario_neto" id="salario_neto" class="form-control" placeholder="00.00" required />
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
                          <input type="text" name="numero_tarjeta" id="numero_tarjeta" class="form-control" placeholder="000000000000000" required />
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
                          <input type="text" name="numero_cuenta" id="numero_cuenta" class="form-control" required  placeholder="0000000000" />
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
                          <input type="text" name="rfc" id="rfc" class="form-control" placeholder="0000000000000"  required/>
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
                          <input type="text" name="nss" id="numero_seguro_social" class="form-control" placeholder="xxxxxxxxxx" required />
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
                          <input type="text" name="tipo_sangre" id="tipo_sangre" class="form-control" placeholder="+" required />
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
                          <input type="text" name="contacto_emergencias" id="contacto_emergencias" class="form-control" placeholder="Nombre de la persona"  required />
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
                          <input type="text" name="telefono_emergencia" id="telefono_emergencia" class="form-control" placeholder="00000000000" required />
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
                    <!-- aqui termina el segundo insert -->
                    <br/>

               <div class="card p-5 cartaForm">
                    <h4 id="scrollspyHeading3">Paso 3. Razón Social</h4>

                    <div class="row">
                      <div class="col">
                        <!-- Name input -->
                        <div class="form-outline">
                        <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas" aria-label="Ejemplo de .form-select-lg" required>
                    
                          <?php $__currentLoopData = $varempresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obtenerempresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($obtenerempresa->id); ?>"><?php echo e($obtenerempresa->nombre_empresa); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <input type="text" name="pago_IMSS" id="pago_IMSS" class="form-control" placeholder="00.00"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                      </div>
                      <div class="col-md-4" id="excedente">
                        <label class="form-label">Excedente</label>
                        <input type="text" name="excedente" id="excedente" class="form-control" placeholder="00.00"  required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>
                    <div class="col-md-4" id="Efectivo">
                        <label class="form-label">Efectivo</label>
                        <input type="text" name="efectivo" id="efectivo" class="form-control" placeholder="00.00" required />
                        <div class="valid-feedback">
                          ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                          Por favor, completa la información requerida.
                        </div>
                    </div>
                    <label class="form-label" for="form8Example4">Credito Infonavit</label> 
                        <br>   
                        <LABEl style="font-size: 15px;">Si 
                        <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="chekinfonavit(this)" />
                      </LABEl>
                        <br>
                  
                          <div class="col-md-6" id="tipo_descuento_infonavit">
                            <div class="row" >
                            <label class="form-label">Tipo de descuento infonavit</label>

                            <select name="tipo_infonavit" >
                              <?php $__currentLoopData = $vartipodescinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obtenertipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($obtenertipo->Nombre=="N/D"): ?>
                              <option value=" <?php echo e($obtenertipo->id); ?>" selected><?php echo e($obtenertipo->Nombre); ?></option>
                              <?php else: ?>
                              <option value=" <?php echo e($obtenertipo->id); ?>"><?php echo e($obtenertipo->Nombre); ?></option>
                              <?php endif; ?>
                              
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          
                            </div>
                          </div>

                          <div class="col-md-6"  id="factor_sua">
                            <div class="row">
                              <label class="form-label">Factor SUA</label>
                               <input type="text" name="factor_sua" class="form-control" value="0.00" required />
                            </div>
                          </div>

                          <div class="col-md-6"  id="descuento_quincenal">
                            <div class="row">
                              <label class="form-label">Descuento quincenal</label>
                               <input type="text" name="descuento_quincenal" class="form-control" value="0.00" required />
                            </div>
                          </div>

                          <div class="col-md-6"  id="numero_credito_infonavit">
                            <div class="row">
                                      <label class="form-label">Numero de credito infoanvit</label>
                               <input type="text" name="numero_credito_infonavit" class="form-control" value="0.00" required />
                            </div>
                          </div>

                          <div class="col-md-6"  id="numero_credito_infonavit">
                            <div class="row">
                            <label class="form-label">Estado Civil</label>
                            <select name="estado_civil" id="estado_civil">
                              <option value="soltero">Soltero</option>
                              <option value="casado">Casado</option>
                              <option value="union_libre">Union Libre</option>
                            </select>
                            </div>
                          </div>
              
                    </div>
               </div>

                
                     <br/>
                    <!-- Guardar empleado -->
                    <div class="offcanvas-footer text-center" style="padding:10px;">
                      <button class="btn btn-dark" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Guardar empleado</button>
                    </div>


              </form>
            </div>
          </div> 
      </div>
</div>
<!-- Fin Insertar Modal-->


<!-- ................................................................................................................................................-->

<!-- Eliminar Modal-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel" style="height:70vh">

        <div class="offcanvas-header">
          <nav id="navbar-example2" class="navbar navbar-light px-3">
            <a class="navbar-brand" href="#">Baja Empleado</a>
          </nav>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body small">
            <div class="container">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                <form action="<?php echo e(route('Empleados.bajas')); ?>" method="POST"  class="g-3 needs-validation" novalidate>
                <?php echo csrf_field(); ?>
                    
                    <hr/>
                    <h5 class="text-center" id="scrollspyHeading1">Detalles de baja</h5>
                    <br/>
                    <input type="hidden"  id="ids" name="ids">
                      <div class="text-center">
                        <div class="row text-center">
                          <div class="col-md-3">
                            <div class="row">
                              <p class="fs-6 col-md-4 fw-bold">Nombre Empleado</p>
                              <input type="text" name="nombre" id="nombre" >
               
                            </div>
                            
                          </div>
                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-4 fw-bold">Salario Empleado</p>
                              <input type="text" name="salario" id="salario" >
                             
                            </div>
                            
                          </div>
                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-6 fw-bold">Fecha de Ingreso</p>
                              <input type="text" name="fecha_ingresoe" id="fecha_ingreso_empelado" >
                             
                 
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-6 fw-bold">Tipo infonavit</p>
                              <input type="text" name="t_infonavit" id="t_infonavit" >
                         
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-6 fw-bold">Puesto Empleado</p>
                              <input type="text"  name="t_puesto" id="t_puesto" >
                    
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr/>
                      <br/>
                 
                      <div class="row">
                        <div class="col">
                        <label class="form-label" for="form8Example4">Tipo de Baja</label> 
                        <select name="tipo_baja" class="form-select" required>
                            <option  selected value="finiquito">Finquito</option>
                        </select>
                        <label class="form-label" for="form8Example4">Aplicar prima vacacional</label> 
                        <br>   
                        
                        <LABEl style="font-size: 15px;">Si <input style="border: .5px solid rgb(165, 165, 165);width:15px;height:15px;" class="form-check-input" type="checkbox" id="terminos" value="1" onclick="terminos_cambio(this)" /></LABEl>
                        <br> 
                          <!-- Name input -->
                     

                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Descripcion de la baja</label>         
                            <textarea class="form-control" name="descripcion_baja" placeholder="Detalle el motivo de la baja del empleado" required>	</textarea>
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              Por favor, completa la información requerida.
                            </div>
                            <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Dias de Gratificacion</label>
                          <select name="diasgratificacion" id="diasgratificacion" class="form-select" required>
                            <option selected value="0">Seleccionar los dias a Gratificar</option>
                            <option  value="0">0</option>
                            <option  value="10">10</option>
                            <option  value="15">15</option>
                            <option  value="20">20</option>
                            <option  value="30">30</option>
                            <option  value="40">40</option>
                            <option  value="50">50</option>
                            <option  value="60">60</option>
                            <option  value="70">70</option>
                            <option  value="80">80</option>
                            <option  value="90">90</option>
                        </select>
                          </div>
                        </div>
                 


                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Dias trabajados Aguinaldo</label>
                            <input type="text" Name="dias_trabajados" id="dias_trabajados" class="form-control" placeholder="10" disabled  />
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
                          <label class="form-label" >Dias trabajados a deber</label>
                            <input type="text" Name="dias_trabajadosa_deber" id="dias_trabajadosa_deber" class="form-control" placeholder="10" disabled  />
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
                          <label class="form-label" >Dias de vacaciones a deber</label>
                            <input type="text" Name="dias_vacaciones" id="dias_vacaciones" class="form-control" placeholder="0" value="0"  />
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
                          <label class="form-label" >Cantidad Gratificacion</label>
                            <input type="text" Name="gratificacion" id="gratificacion" class="form-control" placeholder="00.00"  />
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
                          <label class="form-label" >Sueldo proporcional</label>
                            <input type="text" Name="sueldo_poporcional" id="sueldo_poporcional" class="form-control" placeholder="00.00"  />
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
                          <label class="form-label" >Aguinaldo proporcional</label>
                            <input type="text" Name="Aguinaldo_poporcional" id="Aguinaldo_poporcional" class="form-control" placeholder="00.00"  />
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
                          <label class="form-label" >Vacaciones Proporcionales</label>
                            <input type="text" Name="vacaciones_poporcionales" id="vacaciones_poporcionales" class="form-control" placeholder="00.00" value="0.0" />
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              Por favor, completa la información requerida.
                            </div>
                          </div>
                        </div>


                        <div class="col-md-4" id="Efectivo">
                          <label class="form-label">fecha de baja</label>
                          <input type="date" name="fecha_baja" class="form-control" placeholder="00.00" required />
                      </div>
                   

                      <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Total de percepciones</label>
                            <input  type="text" Name="total_p" id="total_p" class="form-control"  />
                            <div class="valid-feedback">
                              ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                              Por favor, completa la información requerida.
                            </div>
                          </div>
                        </div>
                        
                        <h5 class="mt-3">Deducciones</h5>

                        
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Imss</label>
                            <input type="text" Name="imms" id="imms" class="form-control"  required/>
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
                          <label class="form-label" >Infonavit</label>
                            <input type="text" Name="infonavit" id="infonavit" class="form-control" placeholder="00.00" value="0.00" required/>
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
                          <label class="form-label" >Transporte</label>
                            <input type="text" Name="transporte" id="transporte" class="form-control" placeholder="00.00" value="0.00" required />
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
                          <label class="form-label" >Prestamo</label>
                            <input type="text" Name="prestamo" id="prestamo" class="form-control" placeholder="00.00" value="0.00" required />
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
                          <label class="form-label" >Otras deducciones</label>
                            <input type="text" Name="otras" id="otras" class="form-control" placeholder="00.00"  value="0.00" required />
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
                          <label class="form-label" >Total de Deducciones</label>
                            <input  type="text" Name="total_d" id="total_d" class="form-control"  />
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
                          <br>
                            <button class="btn btn-success push2" type="button" onclick="operaciones()"><i class="fas fa-calculator"></i>&nbsp;Calcular</button>    
                                 
                          </div>
                          <div class="form-outline">
                          <br>
                          <button class="btn btn-primary push2" type="button" onclick="limpiar()"><i class="fas fa-cleaner"></i>&nbsp;Limpiar</button>  
                          </div>
                        </div>
                        </div>
                        <br/>
                        <br/>
                        <h5 class="mt-3">Cantidad a entregar</h5>
                        <input type="text" Name="total_entregar" id="total_entregar" class="form-control" placeholder="00.00" value="0" required />


                            <div class="offcanvas-footer text-center" style="padding:10px;">
                        <button class="btn btn-dark" type="submit">Guardar baja</button>
               
                      </div>
                          </form>
                          </div>
                        </div>
        </div>
</div>
<!--Fin Eliminar Modal-->

<script>
$(document).ready(function() {
  $('#nss').hide();
  $('#excedente').hide();
  $('#Efectivo').hide();
  $('#vacaciones_poporcionales').hide();
  $('#dias_vacaciones').hide();
  $('#vacaciones_poporcionales').hide();
  $('#dias_vacaciones').hide();
  $('#tipo_descuento_infonavit').hide();
  $('#factor_sua').hide();
  $('#descuento_quincenal').hide();
  $('#numero_credito_infonavit').hide();



  $("table tbody tr").click(function() {

    //obtenemos el id del empleado
    var id = $(this).find("td:eq(2)").text();

    //obtenemos el nombre completo mediante la tabla
    var nombre = $(this).find("td:eq(3)").text();
    var nombre2 = $(this).find("td:eq(4)").text();
    var Apellido_p = $(this).find("td:eq(5)").text();
    var Apellido_m = $(this).find("td:eq(6)").text();
    var pago_imms =  $(this).find("td:eq(40)").text();
    var tipo_descuentoinfo = $(this).find("td:eq(29)").text();
    var factorsua = $(this).find("td:eq(30)").text();
    var puesto_e = $(this).find("td:eq(23)").text();

    //obtenemos el salario del empleado
    var salario = $(this).find("td:eq(24)").text();
    //obtenemos la fecha de alta del empleado
   var fecha_ingreso_empelado = $(this).find("td:eq(22)").text();
   //obtenemos el imput que llenaremos mediante javascript


  var nombrecompleto=document.getElementById('nombre');
  var salariosoperaciones=document.getElementById('salario');
  var fecha_ingreso=document.getElementById('fecha_ingreso_empelado');
  var tipoinfo=document.getElementById('t_infonavit');
  var puesto_empleado=document.getElementById('t_puesto');


  //llenamos los imput mediante javascript





 $("#imms").val(parseFloat(pago_imms).toFixed(2));
$("#infonavit").val(parseFloat(factorsua).toFixed(2));
$("#nombre").val(nombre+' '+nombre2+' '+Apellido_p+' '+Apellido_m);
$("#salario").val(salario);
$("#fecha_ingreso_empelado").val(fecha_ingreso_empelado);
$("#t_infonavit").val(tipo_descuentoinfo);
$("#t_puesto").val(puesto_e);






  //obtenemos los datos para calcular dias de aguinaldo del empleado
    var fechaIni = new Date(fecha_ingreso.innerText);
    var fechaFin = new Date();
    const añoinicio = fechaIni.getFullYear();
    const mesinicio = fechaIni.getMonth()+1;
    const diainicio = fechaIni.getDate();
    const añoactual = fechaFin.getFullYear();
    const diahoy = fechaFin.getDate();
    const mes = fechaFin.getMonth()+1;
    var diff = fechaFin - fechaIni;

    if (añoinicio == añoactual){

      fechaIni = new Date(añoinicio+'-'+mesinicio+'-'+diainicio);
    }
    else{
      fechaIni = new Date(añoactual+'-01-01');
    }
   diff = fechaFin - fechaIni;
   diferenciaDias = Math.floor(diff / (1000 * 60 * 60 * 24));
    $("#dias_trabajados").val(diferenciaDias);



    if(diahoy >= 16 &&  diahoy <= 31){
      var fecha_ini_sueldopropo = new Date(añoactual+'-'+mes+'-16');
    }
    if(diahoy >= 01 && diahoy <= 15)
    {
      var fecha_ini_sueldopropo = new Date(añoactual+'-'+mes+'-01');
    }
   
    var diff = fechaFin - fecha_ini_sueldopropo;
    diferenciaDiass = Math.floor(diff / (1000 * 60 * 60 * 24));

  if(diferenciaDiass >diferenciaDias ){
    
    $("#dias_trabajadosa_deber").val(diferenciaDiass-1);
  }
  else{
    
    $("#dias_trabajadosa_deber").val(diferenciaDiass+1);
  }
  
    $("#ids").val(id);
   
});

  var table = $('#tblempleados').DataTable( {
        "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
        responsive: true,
        scrollY: 500,
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
  if(empresa == "CREDILAGUNA")
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


<script>

function terminos_cambio(checkbox){
    //Si está marcada ejecuta la condición verdadera.
    if(checkbox.checked){
      $('#vacaciones_poporcionales').show();
      $('#dias_vacaciones').show();


    }
    //Si se ha desmarcado se ejecuta el siguiente mensaje.
    else{
      $('#vacaciones_poporcionales').hide();
      $('#dias_vacaciones').hide();
      $("#vacaciones_poporcionales").val(0);
      $("#dias_vacaciones").val(0);
    }
}

function chekinfonavit(checkbox){
    //Si está marcada ejecuta la condición verdadera.
    if(checkbox.checked){
      $('#tipo_descuento_infonavit').show();
      $('#factor_sua').show();
      $('#descuento_quincenal').show();
      $('#numero_credito_infonavit').show();

    }
    //Si se ha desmarcado se ejecuta el siguiente mensaje.
    else{
      $('#tipo_descuento_infonavit').hide();
      $('#factor_sua').hide();
      $('#descuento_quincenal').hide();
      $('#numero_credito_infonavit').hide();
      $("#descuento_quincenal").val(0);
      $("#factor_sua").val(0);
     
    }
}


  function operaciones()
  {

    var salarioc =$("#salario").val()
    var diagratificacion = document.getElementById("diasgratificacion").value;
    var diastrabajados = $("#dias_trabajados").val();
    var diastrabajadosdeber = $("#dias_trabajadosa_deber").val();
    var diasvacaciones = $("#dias_vacaciones").val();
    var deduccionimms =  $("#imms").val();
    var deduccioninfonavit =  $("#infonavit").val();
    var deducciontransporte =  document.getElementById("transporte").value;
    var deduccionorestamo =  $("#prestamo").val();
    var deduccionotroa =  $("#otras").val();

    //en este apartado vamos a calcular lo que debe de infonavit segun su credito

    var tipopago =  $("#t_infonavit").val();
    var saldoadeberinfonavit=0;

    pagosuainfonavit =  $("#infonavit").val();
   

    if(pagosuainfonavit==parseFloat(0).toFixed(2));
    {
      saldoadeberinfonavit=0;
    }
    if(tipopago == 'CF' && pagosuainfonavit  != parseFloat(0).toFixed(2))
    {
      pagosuainfonavit =  $("#infonavit").val();
      saldoadeberinfonavit = (pagosuainfonavit*2)/61*(diastrabajadosdeber)+15;
    }
    if(tipopago == 'VSM' && pagosuainfonavit  != parseFloat(0).toFixed(2))
    {
      pagosuainfonavit =  $("#infonavit").val();
      saldoadeberinfonavit = (pagosuainfonavit*103.74*2)/61*(diastrabajadosdeber)+15;
    }
  

    var aguinaldo = 15/365*diastrabajados*salarioc;
    var gratificacion = diagratificacion*salarioc;
    var sueldopropo = salarioc*diastrabajadosdeber;
    var vacacionesproporcional = diasvacaciones*salarioc*.25;
    var totalpercepciones = aguinaldo+gratificacion+sueldopropo+vacacionesproporcional;
    //falta agregar las demas deducciones
   

  
    var total = ((((((aguinaldo+gratificacion+sueldopropo+vacacionesproporcional)-parseFloat(deduccionimms).toFixed(2))-parseFloat(saldoadeberinfonavit).toFixed(2)-parseFloat(deducciontransporte).toFixed(2))-parseFloat(deduccionorestamo).toFixed(2))-parseFloat(deduccionotroa).toFixed(2)));
    let totaldeduccion =total-(aguinaldo+gratificacion+sueldopropo+vacacionesproporcional);
  

  // calculamos el aguinaldo del empleado a deber segun la fecha de ingreso
    $("#Aguinaldo_poporcional").val(parseFloat(aguinaldo).toFixed(2));
    $("#total_p").val(parseFloat(totalpercepciones).toFixed(2));
    $("#total_d").val(parseFloat(totaldeduccion).toFixed(2).substr(1,15));
    $("#gratificacion").val(parseFloat(gratificacion).toFixed(2));
    $("#sueldo_poporcional").val(parseFloat(sueldopropo).toFixed(2));
    $("#vacaciones_poporcionales").val(parseFloat(vacacionesproporcional).toFixed(2));
    $("#infonavit").val(parseFloat(saldoadeberinfonavit).toFixed(2));
    $("#total_entregar").val(parseFloat(total).toFixed(2));
   
  
 //sumamos el total de dinero a otorgar al trabajador
  
  }

  function limpiar()
  {
    $("#Aguinaldo_poporcional").val(parseFloat(0).toFixed(2));
    $("#total_p").val(parseFloat(0).toFixed(2));
    $("#total_d").val(parseFloat(0).toFixed(2));
    $("#gratificacion").val(parseFloat(0).toFixed(2));
    $("#sueldo_poporcional").val(parseFloat(0).toFixed(2));
    $("#vacaciones_poporcionales").val(parseFloat(0).toFixed(2));
   
  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Codigo Fuente laravel\fincreerplaravel\FincreRPLaravel\resources\views/Empleados/Index.blade.php ENDPATH**/ ?>
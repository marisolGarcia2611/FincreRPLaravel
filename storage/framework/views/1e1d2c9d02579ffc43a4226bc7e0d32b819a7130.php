
<?php $__env->startSection('content'); ?>
<div class="container mt-5 p__little">
  <div class="row" style="margin-left:10px; ">
      
      <div class="col-md-6">
        <h4 class="mt-3 mb-3 animate__animated animate__backInLeft">Catalogo de Empleados</h4> 
      </div>
      <div class="col-md-6">
        <div class="row mt-3 text-end">
          <div class="col-md-3 d-md-block d-none"></div>
          <div class="col-md-3">
            <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i> Añadir </button> 
          </div>
          <div class="col-md-3">
            <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-download"></i> Exportar </button> 
          </div>
          <div class="col-md-3">
            <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat"><i class="fas fa-chart-pie"></i> Gráfica </button> 
          </div>
          
        </div>
      </div>
  </div>  
  
  
  <div style="background-color: #fff;border-radius:30px;">
    <div class="table-responsive" style="padding:30px;padding-bottom:10px;" id="mydatatable-container">     
      <table class="table table-hover" id="tblempleados">
        <thead class="table">
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
            <th  class="text-center fw-light">Esatdo del empleado</th>
            <th  class="text-center fw-light">Descripcion de estado</th>
            <th  class="text-center fw-light">Fecha Ingreso</th>
            <th  class="text-center fw-light">ID</th>
          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $varlistaempleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="table-light">
                <div class="row">
                  <div class="col-md-6 text-start">
                    <button class="btn fas fa-trash text-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom" id="<?php echo e($vis->id); ?>" ></button>
                  </div>
                  <div class="col-md-6 text-start">
                    <button class="btn fas fa-edit text-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"  id="<?php echo e($vis->id); ?>" ></button> 
                  </div>
                </div> 
            </td>
            <td class="table-info"><?php echo e($vis->primer_nombre); ?></td>
            <td class="table-info"><?php echo e($vis->segundo_nombre); ?></td>
            <td class="table-info"><?php echo e($vis->apellido_paterno); ?></td>
            <td class="table-info"><?php echo e($vis->apellido_materno); ?></td>
            <td class="table-primary"><?php echo e($vis->telefono); ?></td>
            <td class="table-primary"><?php echo e($vis->correo); ?></td>
            <td class="table-warning"><?php echo e($vis->puesto); ?></td>
            <td class="table-primary"><?php echo e($vis->sucursal); ?></td>
            <td class="table-primary"><?php echo e($vis->ciudad); ?></td>
            <td class="table-primary"><?php echo e($vis->calle); ?></td>
            <td class="table-primary"><?php echo e($vis->colonia); ?></td>
            <td class="table-primary"><?php echo e($vis->numero_interior); ?></td>
            <td class="table-primary"><?php echo e($vis->numero_exterior); ?></td>
            <td class="table-primary"><?php echo e($vis->codigo_postal); ?></td>
            <td class="table-primary"><?php echo e($vis->sexo); ?></td>
            <td class="table-primary"><?php echo e($vis->fecha_nacimiento); ?></td>
            <td class="table-warning"><?php echo e($vis->salario_bruto); ?></td>
            <td class="table-warning"><?php echo e($vis->salario_neto); ?></td>
            <td class="table-warning"><?php echo e($vis->banco); ?></td>
            <td class="table-warning"><?php echo e($vis->numero_tarjeta); ?></td>
            <td class="table-warning"><?php echo e($vis->numero_cuenta); ?></td>
            <td class="table-warning"><?php echo e($vis->rfc); ?></td>
            <td class="table-warning"><?php echo e($vis->nss); ?></td>
            <td class="table-primary"><?php echo e($vis->tipo_sangre); ?></td>
            <td class="table-info"><?php echo e($vis->contacto_emergencia); ?></td>
            <?php if($vis->estado=='Activo'): ?>
            <td class="table-success"><?php echo e($vis->estado); ?></td>
            <?php else: ?>
            <td class="table-danger"><?php echo e($vis->estado); ?></td>
            <?php endif; ?>
            <td class="table-primary"><?php echo e($vis->descripcion_estado); ?></td>
            <td class="table-primary"><?php echo e($vis->fecha_ingreso); ?></td>
            <td class="table-primary"><?php echo e($vis->id); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    </div>  
  </div>
  <br/>
  <br/>




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
                <form action="<?php echo e(route('Empleados.store')); ?>" method="POST"  class="g-3 needs-validation" novalidate>
                <?php echo csrf_field(); ?>
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
                          <?php $__currentLoopData = $varpuestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puestos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option  value="<?php echo e($puestos->id); ?>"><?php echo e($puestos->nombre); ?></option>
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
                          <select  name="sucursal" class="form-select" required>
                            <option selected >Seleccionar</option>
                          <?php $__currentLoopData = $varsucursales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sucursales): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($sucursales->id); ?>"><?php echo e($sucursales->nombre); ?></option>
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
                          <select   name="ciudad" class="form-select" required>
                            <option selected >Seleccionar</option>
                          <?php $__currentLoopData = $varciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($ciudades->id); ?>"><?php echo e($ciudades->nombre); ?></option>
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
                          <select   name="banco" class="form-select" required>
                            <option selected >Seleccionar</option>
                          <?php $__currentLoopData = $varbancos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($banco->id); ?>"><?php echo e($banco->nombre); ?></option>
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

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Fecha de alta</label>
                            <input type="date" name="fecha_alta" class="form-control"  required />
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
                          <?php $__currentLoopData = $varempresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($empresa->id); ?>"><?php echo e($empresa->nombre_empresa); ?></option>
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
                              <p class="fs-6 col-md-4 fw-bold">Empleado</p>
                              <p class="fs-6 fw-light col-md-6" id="nombre"></p>
                            </div>
                            
                          </div>
                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-4 fw-bold">Salario</p>
                              <p class="fs-6 col-md-2 fw-light" id="salario"></p>
                            </div>
                            
                          </div>
                          <div class="col-md-2">
                            <div class="row">
                              <p class="fs-6 col-md-6 fw-bold">Fecha de Ingreso</p>
                              <p class="fs-6 col-md-6 fw-light" id="f_ingreso"></p>
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
                            <option selected >Seleccionar</option>
                            <option  value="finiquito">Finquito</option>
                            <option  value="liquidacion">Liquidacion</option>
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
                            <input type="text" Name="dias_trabajados" id="dias_trabajados" class="form-control" placeholder="10"   />
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
                            <input type="text" Name="dias_trabajadosa_deber" id="dias_trabajadosa_deber" class="form-control" placeholder="10"   />
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
                   
                        
                        <h5 class="mt-3">Deducciones</h5>

                        
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Imss</label>
                            <input type="text" Name="imms" id="imms" class="form-control" placeholder="00.00" value="0" required/>
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
                            <input type="text" Name="infonavit" id="infonavit" class="form-control" placeholder="00.00" value="0" required/>
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
                            <input type="text" Name="transporte" id="transporte" class="form-control" placeholder="00.00" value="0" required />
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
                            <input type="text" Name="prestamo" id="prestamo" class="form-control" placeholder="00.00" value="0" required />
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
                            <input type="text" Name="otras" id="otras" class="form-control" placeholder="00.00"  value="0"required />
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


 





<script>
$(document).ready(function() {

 
  $("table tbody tr").click(function() {
  var salario = $(this).find("td:eq(17)").text();
  var nombre = $(this).find("td:eq(1)").text();
  var id = $(this).find("td:eq(29)").text();
  var nombre2 = $(this).find("td:eq(2)").text();
  var Apellido_p = $(this).find("td:eq(3)").text();
  var Apellido_m = $(this).find("td:eq(4)").text();
  var fecha_alta = $(this).find("td:eq(28)").text();
  var nombrecompleto=document.getElementById('nombre');
  var salariosoperaciones=document.getElementById('salario');
  var fecha_ingreso=document.getElementById('f_ingreso');
  nombrecompleto.innerText = nombre+' '+nombre2+' '+Apellido_p+' '+Apellido_m;
  salariosoperaciones.innerText = salario;
  fecha_ingreso.innerText =fecha_alta;
    var fechaIni = new Date(fecha_ingreso.innerText);
    var fechaFin = new Date();
    const añoinicio = fechaIni.getFullYear();
    const añoactual = fechaFin.getFullYear();
    const diahoy = fechaFin.getDate();
    const mes = fechaFin.getMonth()+1;
    if (añoinicio == añoactual){
 
    }
    else{
      fechaIni = new Date(añoactual+'-01-01');
    }
    var diff = fechaFin - fechaIni;
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
    diferenciaDias = Math.floor(diff / (1000 * 60 * 60 * 24));
    $("#dias_trabajadosa_deber").val(diferenciaDias);

    $("#ids").val(id);
});

  $('#nss').hide();
  $('#excedente').hide();
  $('#Efectivo').hide();
  $('#vacaciones_poporcionales').hide();
  $('#dias_vacaciones').hide();



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

<script>

function terminos_cambio(checkbox){
    //Si está marcada ejecuta la condición verdadera.
    if(checkbox.checked){
      $('#vacaciones_poporcionales').show();
      $('#dias_vacaciones').show();
 s
    }
    //Si se ha desmarcado se ejecuta el siguiente mensaje.
    else{
      $('#vacaciones_poporcionales').hide();
      $('#dias_vacaciones').hide();
      $("#vacaciones_poporcionales").val(0);
      $("#dias_vacaciones").val(0);
    }
}
  function operaciones()
  {

    var salario=document.getElementById('salario');
    var salarioc = parseFloat(salario.innerHTML).toFixed(2);
    var diagratificacion = document.getElementById("diasgratificacion").value;
    var diastrabajados = $("#dias_trabajados").val();
    var diastrabajadosdeber = $("#dias_trabajadosa_deber").val();
    var diasvacaciones = $("#dias_vacaciones").val();
    var deduccionimms =  $("#imms").val();
    var deduccioninfonavit =  $("#infonavit").val();
    var deducciontransporte =  $("#transporte").val();
    var deduccionorestamo =  $("#prestamo").val();
    var deducciootros =  $("#otras").val();


  

    var aguinaldo = 15/365*diastrabajados*salarioc;
    var gratificacion = diagratificacion*salarioc;
    var sueldopropo = salarioc*diastrabajadosdeber;
    var vacacionesproporcional = diasvacaciones*salarioc*.25
    var total = ((((((aguinaldo+gratificacion+sueldopropo+vacacionesproporcional)-parseFloat(deduccionimms).toFixed(2))-parseFloat(deduccioninfonavit).toFixed(2)-parseFloat(deducciontransporte).toFixed(2))-parseFloat(deduccionorestamo).toFixed(2))-parseFloat(deducciootros).toFixed(2)));
    $("#Aguinaldo_poporcional").val(parseFloat(aguinaldo).toFixed(2));
    $("#gratificacion").val(parseFloat(gratificacion).toFixed(2));
    $("#sueldo_poporcional").val(parseFloat(sueldopropo).toFixed(2));
    $("#vacaciones_poporcionales").val(parseFloat(vacacionesproporcional).toFixed(2));
    $("#total_entregar").val(parseFloat(total).toFixed(2));

  }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aux sistemas\Desktop\P-GIT\FincreRPLaravel\resources\views/Empleados/Index.blade.php ENDPATH**/ ?>
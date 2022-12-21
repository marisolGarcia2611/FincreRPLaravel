
<?php $__env->startSection('content'); ?>
<div class="container mt-3">
  <h2>Black/Dark Table</h2>      
  <a href="/Empleados/create">Nuevo</a>
    <button  type="button" class="btn btn-info" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Nuevo</button> 
    <button  type="button" class="btn btn-success">Exportar</button>
    <button  type="button" class="btn btn-warning">Grafica</button>      
  <table class="table table-dark" id="tblempleados">
    <thead>
      <tr>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Apelleido Paterno</th>
        <th>Apellido Materno</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Puesto</th>
        <th>Sucursal</th>
        <th>Ciudad</th>
        <th>Calle</th>
        <th>Colonia</th>
        <th>Numero Interior</th>
        <th>Numero Exterior</th>
        <th>Codigo Postal</th>
        <th>Sexo</th>
        <th>Fecha de Nacimiento</th>
        <th>Salario Bruto</th>
        <th>Salario Neto</th>
        <th>Banco</th>
        <th>Numero de Tarjeta</th>
        <th>Numero de Cuenta</th>
        <th>RFC</th>
        <th>NSS</th>
        <th>Tipo de Sangre</th>
        <th>Contacto de Emergencia</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $varlistaempleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($vis->primer_nombre); ?></td>
        <td><?php echo e($vis->segundo_nombre); ?></td>
        <td><?php echo e($vis->apellido_paterno); ?></td>
        <td><?php echo e($vis->apellido_materno); ?></td>
        <td><?php echo e($vis->telefono); ?></td>
        <td><?php echo e($vis->correo); ?></td>
        <td><?php echo e($vis->puesto); ?></td>
        <td><?php echo e($vis->sucursal); ?></td>
        <td><?php echo e($vis->ciudad); ?></td>
        <td><?php echo e($vis->calle); ?></td>
        <td><?php echo e($vis->colonia); ?></td>
        <td><?php echo e($vis->numero_interior); ?></td>
        <td><?php echo e($vis->numero_exterior); ?></td>
        <td><?php echo e($vis->codigo_postal); ?></td>
        <td><?php echo e($vis->sexo); ?></td>
        <td><?php echo e($vis->fecha_nacimiento); ?></td>
        <td><?php echo e($vis->salario_bruto); ?></td>
        <td><?php echo e($vis->salario_neto); ?></td>
        <td><?php echo e($vis->banco); ?></td>
        <td><?php echo e($vis->numero_tarjeta); ?></td>
        <td><?php echo e($vis->numero_cuenta); ?></td>
        <td><?php echo e($vis->rfc); ?></td>
        <td><?php echo e($vis->nss); ?></td>
        <td><?php echo e($vis->tipo_sangre); ?></td>
        <td><?php echo e($vis->contacto_emergencia); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <!-- Modal para insertar-->
  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:500px">
    <!-- <form action="<?php echo e(route('Empleados.store')); ?>" method="POST">
     <?php echo csrf_field(); ?> -->
        <div class="offcanvas-header">
          <nav id="navbar-example2" class="navbar navbar-light px-3">
            <a class="navbar-brand" href="#">Nuevo Empleado</a>
            <ul class="nav nav-pills">
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
                <form action="<?php echo e(route('Empleados.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <h4 id="scrollspyHeading1">General</h4>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Primer Nombre</label>
                            <input type="text"  class="form-control" name="primer_nombre" require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label">Segundo Nombre</label>
                            <input type="text" id="form8Example4"  name="segundo_nombre" class="form-control"  require />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Apellido Paterno</label>
                            <input type="text" name="apellido_paterno" id="form8Example4" class="form-control"  require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Apellido Materno</label>
                            <input type="text" name="apellido_materno" id="form8Example4" class="form-control"  require />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Telefono</label>
                            <input type="numeric" name="telefono" class="form-control"  require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label">Correo</label>
                            <input type="text"  name="correo" class="form-control"  require />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Puesto</label>
                          <select name="puesto">
                          <?php $__currentLoopData = $varpuestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puestos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option  value="<?php echo e($puestos->id); ?>"><?php echo e($puestos->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                          
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Sucursal</label>
                          <select  name="sucursal" >
                          <?php $__currentLoopData = $varsucursales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sucursales): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($sucursales->id); ?>"><?php echo e($sucursales->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                          
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Ciudad</label>
                          <select   name="ciudad">
                          <?php $__currentLoopData = $varciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($ciudades->id); ?>"><?php echo e($ciudades->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                          </div>
                        </div>

                        <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Banco</label>
                          <select   name="banco">
                          <?php $__currentLoopData = $varbancos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($banco->id); ?>"><?php echo e($banco->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Calle</label>
                            <input type="text" name="calle" class="form-control" require />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Colonia</label>
                            <input type="text" name="colonia" class="form-control" require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero Interior</label>
                            <input type="text" name="numero_interior" class="form-control" require />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero Exterior</label>
                            <input type="text" class="form-control" name="numero_exterior" require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label">Codigo Postal</label>
                            <input type="text"  name="codigo_postal"  class="form-control" require />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Sexo</label>
                            <input type="text" name="sexo" class="form-control" require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control"  require />
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Foto</label>
                            <input type="text" name="foto" class="form-control"  require />
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
                            <input type="text" name="salario_bruto" class="form-control" require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Salario Fijo</label>
                            <input type="text" name="salario_fijo" class="form-control"  require/>
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Salario Neto</label>
                            <input type="text" Name="salario_neto" id="form8Example4" class="form-control" require />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero de Tarjeta</label>
                            <input type="text" name="numero_tarjeta" class="form-control" require />
                      
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label" for="form8Example4">Numero de Cuenta</label>
                            <input type="text" name="numero_cuenta" class="form-control" require  />
                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >rfc</label>
                            <input type="text" name="rfc" class="form-control"  require/>
                        
                          </div>
                        </div>

                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Numero de Seguro Social</label>
                            <input type="text" name="nss" class="form-control" require />

                          </div>
                        </div>
                        <div class="col">
                          <!-- Email input -->
                          <div class="form-outline">
                          <label class="form-label" >Tipo de Sangre</label>
                            <input type="text" name="tipo_sangre" class="form-control" require />
                          
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <label class="form-label">Contacto de Emergencias</label>
                            <input type="text" name="contacto_emergencias" class="form-control"  require />
                          
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
                      <h4 id="scrollspyHeading3">Razón Social</h4>

                      <div class="row">
                        <div class="col">
                          <!-- Name input -->
                          <div class="form-outline">
                          <select class="form-select form-select mb-3" id="cmbempresas" name="cmbempresas" aria-label="Ejemplo de .form-select-lg" require>
                            <option selected >Seleccionar Empresa</option>
                          <?php $__currentLoopData = $varempresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($empresa->id); ?>"><?php echo e($empresa->nombre_empresa); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        scrollY: true,
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Codigo Fuente laravel\fincreerplaravel\FincreRPLaravel\resources\views/Empleados/index.blade.php ENDPATH**/ ?>
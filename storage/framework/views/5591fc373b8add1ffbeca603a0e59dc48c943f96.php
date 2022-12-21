
<?php $__env->startSection('content'); ?>
<div class="container mt-3">
  <h2>Black/Dark Table</h2>      
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
        <th>Numero Interior</th>
        <th>Numero Exterior</th>
        <th>Codigo Postal</th>
        <th>Sexo</th>
        <th>Fecha de Nacimiento</th>
        <th>Salario Bruto</th>
        <th>Salario Neto</th>
        <th>Salario Integrado</th>
        <th>Numero de Tarjeta</th>
        <th>Cuenta de Banco</th>
        <th>RFC</th>
        <th>NSS</th>
        <th>Tipo de Sangre</th>
        <th>Contacto de Emergencia</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $varlistaempleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($vis->primernombre_empleado); ?></td>
        <td><?php echo e($vis->segundonombre_empleado); ?></td>
        <td><?php echo e($vis->apellidopaterno_empleado); ?></td>
        <td><?php echo e($vis->apellidomaterno__empleado); ?></td>
        <td><?php echo e($vis->telefono_empleado); ?></td>
        <td><?php echo e($vis->correo_empleado); ?></td>
        <td><?php echo e($vis->nombre_puesto); ?></td>
        <td><?php echo e($vis->nombre_sucursal); ?></td>
        <td><?php echo e($vis->nombre_ciudad); ?></td>
        <td><?php echo e($vis->calle_empleado); ?></td>
        <td><?php echo e($vis->numerointerior_empleado); ?></td>
        <td><?php echo e($vis->numeroexterior_empleado); ?></td>
        <td><?php echo e($vis->codigopostal_empleado); ?></td>
        <td><?php echo e($vis->sexo_empleado); ?></td>
        <td><?php echo e($vis->fechanacimiento_empleado); ?></td>
        <td><?php echo e($vis->salario_bruto_empleados_det); ?></td>
        <td><?php echo e($vis->salario_neto_empleados_det); ?></td>
        <td><?php echo e($vis->precio); ?></td>
        <td><?php echo e($vis->numero_tarjeta_empleados_det); ?></td>
        <td><?php echo e($vis->cuenta_banco_empleados_det); ?></td>
        <td><?php echo e($vis->rfc_empleados_det); ?></td>
        <td><?php echo e($vis->nss_empleados_det); ?></td>
        <td><?php echo e($vis->tipo_sangre_empleados_det); ?></td>
        <td><?php echo e($vis->contacto_emergencia_empleados_det); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <!-- Modal para insertar-->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:70%;">
    <div class="offcanvas-header">
        <nav id="navbar-example2" class="navbar navbar-light px-3">
          <a class="navbar-brand" href="#">Empleados</a>
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
          <form action="/create" method="POST">
          <?php echo e(csrf_field()); ?>

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
                  <label class="form-label" name="segundo_nombre">Segundo Nombre</label>
                    <input type="text" id="form8Example4" class="form-control"  require />
                  </div>
                </div>

                <div class="col">
                  <!-- Email input -->
                  <div class="form-outline">
                  <label class="form-label" name="apellido_paterno">Apellido Paterno</label>
                    <input type="text" id="form8Example4" class="form-control"  require />
                  </div>
                </div>
                <div class="col">
                  <!-- Email input -->
                  <div class="form-outline">
                  <label class="form-label" name="apellido_materno">Apellido Materno</label>
                    <input type="text" id="form8Example4" class="form-control"  require />
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
                  <option  value="<?php echo e($puestos->id); ?>"><?php echo e($puestos->nombre_puesto); ?></option>
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
                  <option value="<?php echo e($sucursales->id); ?>"><?php echo e($sucursales->nombre_sucursal); ?></option>
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
                  <option value="<?php echo e($ciudades->id); ?>"><?php echo e($ciudades->nombre_ciudad); ?></option>
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
                  <label class="form-label" name="numero_interior">Numero Interior</label>
                    <input type="text" class="form-control" require />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- Name input -->
                  <div class="form-outline">
                  <label class="form-label" name="numero_exterior">Numero Exterior</label>
                    <input type="text" class="form-control" require />
                  </div>
                </div>
                <div class="col">
                  <!-- Email input -->
                  <div class="form-outline">
                  <label class="form-label" name="codigo_postal">Codigo Postal</label>
                    <input type="text"  class="form-control" require />
                  </div>
                </div>

                <div class="col">
                  <!-- Email input -->
                  <div class="form-outline">
                  <label class="form-label" name="sexo">Sexo</label>
                    <input type="text"  class="form-control" require />
                  </div>
                </div>
                <div class="col">
                  <!-- Email input -->
                  <div class="form-outline">
                  <label class="form-label" name="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="text"  class="form-control"  require />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- Name input -->
                  <div class="form-outline">
                  <label class="form-label" >Nomina</label>
                    <input type="text" name="id_nomina" value="" class="form-control" require />
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
                  <label class="form-label" Name="salario_neto">Salario Neto</label>
                    <input type="text" id="form8Example4" class="form-control" require />
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

              <br/>
              <!-- aqui termina el segundo insert -->
              <br/>
              <h4 id="scrollspyHeading3">Razón Social</h4>

              <div class="row">
                <div class="col">
                  <!-- Name input -->
                  <div class="form-outline">
                  <select class="form-select form-select mb-3" id="cmbempresas" aria-label="Ejemplo de .form-select-lg" require>
                    <option selected>Seleccionar Empresa</option>
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
                  <input type="text" name="porcentaje_IMSS" class="form-control"  require />
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
</div>
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
        scrollY: 600,
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Codigo Fuente laravel\fincreerplaravel\FincreRPLaravel\resources\views/Empleados.blade.php ENDPATH**/ ?>
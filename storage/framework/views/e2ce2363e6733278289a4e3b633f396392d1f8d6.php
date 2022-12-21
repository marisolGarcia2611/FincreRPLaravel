 
 <?php $__env->startSection('content'); ?>



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
                    <input type="text" name="fecha_nacimiento" class="form-control"  require />
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

              <br/>
              <!-- aqui termina el segundo insert -->
              <br/>
              <h4 id="scrollspyHeading3">Razón Social</h4>

              <div class="row">
                <div class="col">
                  <!-- Name input -->
                  <div class="form-outline">
                  <select class="form-select form-select mb-3" id="cmbempresas" aria-label="Ejemplo de .form-select-lg" require>
                    <option selected name="cmbempresas">Seleccionar Empresa</option>
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

          <?php $__env->stopSection(); ?>
          
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Codigo Fuente laravel\fincreerplaravel\FincreRPLaravel\resources\views/Empleados/create.blade.php ENDPATH**/ ?>
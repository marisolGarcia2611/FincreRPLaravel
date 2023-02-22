
<?php $__env->startSection('content'); ?>

<div class="mt-5 container">
  <?php $__currentLoopData = $varnomem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosempleadonom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card shadow-lg p-3 mt-5 bg-body rounded  border-0">
              <div class="card-header text-center bg-gradient-pink mb-3">
                  <h4 class="fw-light">Editar Nomina</h4>
              </div>

              <div class="card-body offcanvas-body small" style="padding-left: 30px;padding-right:30px;">
                <form  action="/Nominaseditaremp/actualizarEmpleado/<?php echo e($datosempleadonom->idpadodet); ?>" method="POST"  class="g-3 needs-validation" novalidate> 
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                          <div class="row mb-4">
                            <div class="col">
                              <!-- Name input -->
                              <div class="form-outline">
                              <label class="form-label" for="form8Example4">Numero de Empleado</label>
                                <p class="fw-bold">#<?php echo e($datosempleadonom->idpadodet); ?></p>  
                                <input type="number"  class="form-control" name="id" value="<?php echo e($datosempleadonom->id); ?>" />
                                <input type="number"  class="form-control" name="idemple" value="<?php echo e($datosempleadonom->idtiponomina); ?>" />
         
                              </div>
                            </div>

                            <div class="col">
                              <!-- Email input -->
                              <div class="form-outline">
                              <label class="form-label">Dias Laborados</label>
                                <input type="number" id="dias_laborados"  name="dias_laborados" class="form-control"  value="<?php echo e($datosempleadonom->dias_laborados); ?>" maxlength="20" required />
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
                              <label class="form-label" >Deudores Fiscal</label>
                                <input type="number" name="deudores_fiscal" id="deudores_fiscal" class="form-control" value="<?php echo e($datosempleadonom->deudores_fiscal); ?>" maxlength="20" required />
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
                              <label class="form-label" >Deudores No Fiscal</label>
                                <input type="number" name="deudores_no_fiscal" id="deudores_no_fiscal" class="form-control" value="<?php echo e($datosempleadonom->deudores_no_fiscal); ?>"  maxlength="20"required />
                                <div class="valid-feedback">
                                  ¡Se ve bien!
                                </div>
                                <div class="invalid-feedback">
                                  Por favor, completa la información requerida.
                                </div>
                              </div>
                            </div>
                          </div>
                      

                          <div class="row mb-0 text-center">
                                  <button type="submit" class="btn btn-success">Guardar cambios</button>
                          </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div>
 


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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aux sistemas\Desktop\FincreRPLaravel\resources\views/nominas/editarnominaempleado.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>


<?php if($mensaje = Session::get('success')): ?>
  <?php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Movimiento completado de forma correcta","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  ?>

<?php elseif($mensaje = Session::get('warning')): ?>
  <?php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  ?>

<?php endif; ?>



<div class="mt-4 p__little">
<br/>
<br/>
  <center class="container">
        <div class="col-md-12">
          <h2 class="mt-3 mb-3 fw-light animate_animated ">Nominas</h2> 
        </div>
        <div class="col-md-12">
          <div class="row mt-8 text-center">
            <div>
              <button  type="button" class="mb-1 animate__animated animate__backInLeft btn push2 bt__flat" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"><i class="fas fa-plus"></i>&nbsp; Añadir </button> 
            </div>
      
        </div>
  </center> 
  <br/>
  <?php echo csrf_field(); ?>
 <center>
  <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
    <div class="table-responsive pad-table" id="mydatatable-container">     
      <table class="table table-hover " id="tblempleados">
        <thead class="table">
          <tr class="tr-table"> 
            <th class="text-center fw-light">Acciones</th>
            <th class="text-center fw-light">Numero de Nomina</th>
            <th class="text-center fw-light">Nombre de Nomina</th>
            <th class="text-center fw-light">Fecha inicio</th>
            <th class="text-center fw-light">Fecha Fin</th>
            <th class="text-center fw-light">Estatus</th>
            <th class="text-center fw-light">Tipo Nomina</th>
          </tr>
        </thead>
        
        <tbody>
          <?php $__currentLoopData = $varnominas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nomina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="td-tools">
                <form action="/Nominas/exportar_excel">
                  <?php echo csrf_field(); ?>
                  <?php if($nomina->estado_nomina==="Iniciada"): ?>
                  <a class="text-light btn fas fa-calculator border-0 push" href="/Nominasinsert/insertarnomina/<?php echo e($nomina->id); ?>/<?php echo e($nomina->idtiponomina); ?>"></a>
                  <a class="text-light btn fas fa-trash border-0 push" href=" /Nominaseliminar/<?php echo e($nomina->id); ?>"></a> <!--solo de enc-->
                  <?php elseif($nomina->estado_nomina==="Edicion"): ?>
                  <a class="text-light btn fas fa-edit border-0 push" href=" /Nominaseditar/editarnomina/<?php echo e($nomina->id); ?>/<?php echo e($nomina->idtiponomina); ?>"></a>
                  <a class="text-light btn fas fa-trash border-0 push" href=" /Nominaseliminar/temporal/<?php echo e($nomina->id); ?>"></a><!--solo de enc det temdet-->
                  <?php elseif($nomina->estado_nomina==="Cerrada"): ?>
                  <input type="text" name="id" id="id" hidden value="<?php echo e($nomina->id); ?>">
                  <button class="text-light btn fas fa-download border-0 push"  type="submit"></button>
                  <a class="text-light btn fas fa-trash border-0 push" href=" /Nominaseliminar/calcular/<?php echo e($nomina->id); ?>"></a><!--solo de enc det-->
                  <?php endif; ?> 
                </form>
              </td>
                   
                <td class="bg-3"><?php echo e($nomina->id); ?></td>
                <td class="bg-1"><?php echo e($nomina->nombre_nomina); ?></td>
                <td class="bg-2"><?php echo e($nomina->fecha_inicio); ?></td>
                <td class="bg-2"><?php echo e($nomina->fecha_fin); ?></td>
                <td class="table-success border-0"><?php echo e($nomina->estado_nomina); ?></td>
                <td name="dtiponomina" class="table-warning border-0">
                  <?php if($nomina->idtiponomina == 1): ?>
                  Semanal
                 <?php elseif($nomina->idtiponomina == 2): ?>
                  Quincenal
                 <?php elseif($nomina->idtiponomina == 3): ?>
                  Mensual
                <?php endif; ?>
                </td>
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
      <a class="navbar-brand">Nueva Nomina</a>
      
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
            

                      <div class="col">
                        <!-- Email input -->
                        <div class="form-outline">
                        <label class="form-label" >Tipo de Nomina</label>
                      <select class="form-select" name="tipo_nomina" required>
                        <option value="">Seleccionar...</option>
                        <?php $__currentLoopData = $varisrenc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isrenc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($isrenc->id); ?>"><?php echo e($isrenc->tipo); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                      </select>
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
                      <button class="btn btn-blue" style="border-radius: 40px;" type="submit"><i class="fas fa-save"></i>&nbsp;&nbsp;Crear Nomina</button>
                    </div>
              </form>
            </div>
          </div> 
      </div>
</div>
<script>
// $(document).ready(function() {
//   $("table tbody tr").click(function() {
    var table = $('#tblempleados').DataTable( {
        "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
        responsive: true,
        scrollY: 500,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        
    } );
    new $.fn.dataTable.FixedHeader( table );
//   });
// });
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aux sistemas\Desktop\FincreRPLaravel\resources\views/nominas/nomina.blade.php ENDPATH**/ ?>
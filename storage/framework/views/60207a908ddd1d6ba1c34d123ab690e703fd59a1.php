

<?php $__env->startSection('content'); ?>

<div class="mt-5">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-4 fw-light"> Panel de control</h2>
        </div>

        <div class="row mt-4">
            <div class="col-md-3 mr-2">
                <form action="/Registro">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded push border-0">
                        <div class="card-body text-center">
                            <button class="btn border-0" type="submit" ><h1 class="text-lightGray text-center"><i class="fas fa-user-plus"></i></h1></button>
                        </div>
                        <button type="submit" class="bg-gradient-pink card-footer fw-light fs-8 border-0">Registrar Usuarios</button>
                    </div>
                </form>
               
            </div>

            <div class="col-md-3 mr-2">
                <form action="/Permisos">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded push border-0">
                        <div class="card-body">
                            <button class="btn border-0" type="submit" ><h1 class="text-lightGray"><i class="fas fa-user-lock"></i></h1></button>
                        </div>
                        <button type="submit" class="bg-gradient-pink card-footer fw-light fs-8 border-0">Permisos Usuarios</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aux sistemas\Desktop\FincreRPLaravel\resources\views/sistemas/index.blade.php ENDPATH**/ ?>
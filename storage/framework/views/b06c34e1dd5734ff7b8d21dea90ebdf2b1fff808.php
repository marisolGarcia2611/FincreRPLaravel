

<?php $__env->startSection('content'); ?>

<div class="login__body" style="position: absolute;min-width: 100vh;z-index:1;left:0;right:0;min-height: 100vh;bottom:0;margin:0;">
    <div class="login-page">
        <div class="form rounded__basic">
            <div class="login">
            <div class="login-header animate__animated animate__flip">
                <img src="<?php echo e(asset('images/logo.png')); ?>" class="size__icon animate__animated animate__flip" alt="icon login">
            </div>
            </div>
            <form method="POST" action="<?php echo e(route('login')); ?>" class="login-form">
                <?php echo csrf_field(); ?>
                <div class="bloque__1">
                    
                    <input id="email" type="email" class="rounded__basic  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="email" autofocus required>

                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    

                    

                    <div class="input-group">
                        
                        <input style="width: 360px" ID="txtPassword" id="password" type="password" class="rounded__basic  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="password" required>
                        
                        <div class="input-group-append">
                                <a id="show_password" class="btn__password" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </a>
                        </div>
                        
                        </div>

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    
                </div>
                <div class="bloque__2">
                    
                    <div style="text-align: left;margin-left:10px;">
                        <div class="min__text">
                            <div class="form-check">
                                <input style="width:15px; height:15px;" class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                <label class="form-check-label" style="margin-left:5px" for="remember">
                                    <?php echo e(__('Remember Me')); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                        <button type="submit" class="push rounded__basic push__button">
                            <?php echo e(__('Login')); ?>

                        </button>
                    


                        <?php if(Route::has('password.request')): ?>
                            <a class="btn btn-link message" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                        <?php endif; ?>                               
                </div>
            </form>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appfront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Codigo Fuente laravel\fincreerplaravel\FincreRPLaravel\resources\views/auth/login.blade.php ENDPATH**/ ?>
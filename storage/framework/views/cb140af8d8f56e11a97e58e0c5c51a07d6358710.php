
<?php $__env->startSection('content'); ?>
<div class="login-main"
    style="">
      <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="login-area">
                    <div class="login-wrapper">
                        <div class="login-wrapper__top">
                            <img src="<?php echo e(asset('assets/images/logoIcon/logo.png')); ?>" alt="" width="100" style="scale: 4">
                            <h3 class="title text-white"><?php echo app('translator')->get('Welcome to'); ?> <strong><?php echo e(__($general->site_name)); ?></strong></h3>
                            
                                
                        </div>
                        <div class="login-wrapper__body">
                            <form action="<?php echo e(route('admin.login.post')); ?>" method="POST"
                                class="cmn-form  verify-gcaptcha login-form">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label><?php echo app('translator')->get('Username'); ?></label>
                                    <input type="text" class="form-control" value="<?php echo e(old('username')); ?>" name="username" required>
                                </div>

                                <div class="form-group">
                                    <label><?php echo app('translator')->get('Password'); ?></label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                        <label class="form-check-label" for="remember"><?php echo app('translator')->get('Remember Me'); ?></label>
                                    </div>
                                    <a href="<?php echo e(route('admin.password.reset')); ?>" class="forget-text"><?php echo app('translator')->get('Forgot Password?'); ?></a>
                                </div>
                                <button type="submit" class="btn cmn-btn w-100"><?php echo app('translator')->get('LOGIN'); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        (function($){
        'use strict';
            $('[name=type]').on('change', function(){
                let type = $(this).val();
                let url = `<?php echo e(route('admin.login')); ?>`;
                if(type == 'staff'){
                    url = `<?php echo e(route('admin.login')); ?>`;
                }
                console.log(url);
                $('form')[0].action= url;
            })
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\warehouse_vidyagxp\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>
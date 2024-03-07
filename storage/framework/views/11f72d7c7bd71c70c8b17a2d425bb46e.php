

<?php $__env->startSection('contents'); ?>
    <div class="container" style="max-width: 600px;">
        <div class="mt-5">
          <form action="<?php echo e(route ('sign-in')); ?> " method="POST">

               <?php echo csrf_field(); ?>

                <h3 class="mb-4 mx-auto text-center"> 
                      Login with your email and password
                 </h3>

             <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                </div>
             <?php elseif(session('error')): ?>
                <div class="alert alert-danger" role="alert">
                        <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="JuanDelaCruz@Gmail.com">
                    <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3" id="show_hide_password">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                <span id="showEye">
                    <i class='bx bxs-hide' id="eye" onclick="showPassword(pass, eye)"></i>
                </span>

            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" value="true">
            <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            </div>    
            <div class="text-center">
                  <input style="width: 75%" type="submit" value="Sign in" class="btn btn-success mb-3 mt-2">
            <div class="text-center">Don't have an account? <a href="<?php echo e(route('sign-up.index')); ?>">Sign-up now</a>
            </div>
        </div>

<?php $__env->stopSection(); ?>

</section>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DTR-App\resources\views/contents/auth/sign-in.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTR</title>

    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class =" mb-2 bg-body text-black">
        <!--  <h1 style="text-align: center; margin-top: 100px">TASK MANAGER</h1> -->
        
<div class="align-items-center">
        <nav class="p-4 bg-dark">
            <div class="text-center">
                <a href="<?php echo e(asset('/auth/sign-in.php')); ?>"> 
                    <img class="mx-auto logo" src="css/logo/poring.png" alt="index">
                         </a>
                            <h1 class="mx-auto header text-white"> DTR Form Maker </h1>
                </div>
                     <div class="signup">
                         </div>
        </nav>
</div>

<?php echo $__env->yieldContent('contents'); ?>

<footer class="mt-5">John Louie B. Reynaldo (Intern Programmer)</footer>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('js/showPassword.js')); ?>"></script>
       
        <?php echo $__env->yieldContent('scripts'); ?>
</body><?php /**PATH C:\xampp\htdocs\DTR-App\resources\views/layouts/auth.blade.php ENDPATH**/ ?>
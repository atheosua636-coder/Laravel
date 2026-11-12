<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> - Simple POS System</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <header>
        <h1>Simple POS System</h1>
        <nav>
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('about')); ?>">About</a>
            <a href="<?php echo e(route('customers.index')); ?>">Customers</a>
            <a href="<?php echo e(route('users.index')); ?>">Users</a>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH C:\Users\Atheo Sua\Downloads\simple-pos\resources\views/layouts/app.blade.php ENDPATH**/ ?>
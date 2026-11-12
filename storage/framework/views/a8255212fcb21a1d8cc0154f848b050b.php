

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Welcome to the Simple POS System</h2>
    <p>This application provides basic customer and user account management for a point-of-sale system.</p>
    <a href="<?php echo e(route('customers.index')); ?>">View Customers</a>
    <a href="<?php echo e(route('users.index')); ?>">View Users</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Atheo Sua\Downloads\simple-pos\resources\views/pages/home.blade.php ENDPATH**/ ?>
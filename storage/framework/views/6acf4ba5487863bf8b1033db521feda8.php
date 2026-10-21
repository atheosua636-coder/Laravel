

<?php $__env->startSection('title', 'Customer Accounts'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Customer Accounts</h2>
    <p>List of registered POS customers.</p>

    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($customer['full_name']); ?></td>
                    <td><?php echo e($customer['email']); ?></td>
                    <td><?php echo e($customer['phone']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Atheo Sua\Downloads\simple-pos\resources\views/customers/index.blade.php ENDPATH**/ ?>
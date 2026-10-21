

<?php $__env->startSection('title', 'User Accounts'); ?>

<?php $__env->startSection('content'); ?>
    <h2>User Accounts</h2>
    <p>List of POS staff accounts.</p>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user['username']); ?></td>
                    <td><?php echo e($user['full_name']); ?></td>
                    <td><?php echo e($user['role']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Atheo Sua\Downloads\simple-pos\resources\views/users/index.blade.php ENDPATH**/ ?>
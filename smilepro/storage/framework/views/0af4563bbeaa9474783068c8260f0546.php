<!-- resources/views/Patient/index.blade.php -->

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Patients</h1>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patients): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="py-2 px-4 border-b border-gray-200"><?php echo e($patients->name); ?></td>x
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\bilag\Herd\smilepro\resources\views/patient/index.blade.php ENDPATH**/ ?>
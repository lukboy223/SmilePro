<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('title', null, []); ?> 
        Invoices Overview
     <?php $__env->endSlot(); ?>

    <!-- Main Content -->
    <div class="container mx-auto py-8 w-7/8 p-8">
        <h1 class="text-2xl font-bold text-center mb-6">Invoices</h1>
        <div class="flex justify-center">
            <div class="w-full max-w-6xl">
                <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md mx-auto">
                    <thead style="background-color: #5F1A37;" class="text-white">
                        <tr>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Invoice Number</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Customer Name</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Date</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Total Amount</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($invoices->isEmpty()): ?>
                            <tr>
                                <td colspan="5" class="text-center px-2 py-1 border border-gray-300">
                                    Er is een probleem opgetreden bij het ophalen van de facturen. Probeer het later
                                    opnieuw.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center hover:bg-gray-50">
                                    <td class="px-2 py-1 border border-gray-300"><?php echo e($invoice->Number); ?></td>
                                    <td class="px-2 py-1 border border-gray-300"><?php echo e($invoice->FirstName); ?> <?php echo e($invoice->LastName); ?></td>
                                    <td class="px-2 py-1 border border-gray-300"><?php echo e($invoice->Date); ?></td>
                                    <td class="px-2 py-1 border border-gray-300"><?php echo e($invoice->Amount); ?></td>
                                    <td class="px-2 py-1 border border-gray-300"><?php echo e($invoice->Status); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                    </tbody>
                </table>
                <!-- Pagination Links for Invoices -->
                <div class="mt-4">
                    <?php echo e($invoices->links()); ?>

                </div>
                
                <!-- Dashboard button -->
                <div class="flex justify-end mt-4">
                    <a href="/dashboard" style="background-color: #5F1A37;"
                        class="text-white px-6 py-2 rounded font-semibold shadow-md transition">Dashboard</a>
                </div>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\moham\Herd\smilepro\resources\views/invoices/index.blade.php ENDPATH**/ ?>
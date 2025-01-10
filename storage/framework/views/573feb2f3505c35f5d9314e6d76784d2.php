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
        Edit User
     <?php $__env->endSlot(); ?>
    <section class="bg-gray-100 text-white-800">
    <h1 class="text-3xl font-bold">Edit User</h1>
    <form action="<?php echo e(route('user.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div class="mb-4">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo e($user->name); ?>" required>
        </div>
        <div class="mb-4">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" required>
        </div>
        <div class="mb-4">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <small>Leave blank to keep the current password</small>
        </div>
        <button class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded" type="submit">Update User</button>
    </form>
    <a href="<?php echo e(route('user.index')); ?>" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded mx-4">Back to User List</a>
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\moham\Herd\smilepro\resources\views/user/edit.blade.php ENDPATH**/ ?>
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
        Patient Bewerken
     <?php $__env->endSlot(); ?>

    <h1 class="text-center mt-4">Patient Bewerken</h1>

    <div class="p-4">
        <form action="<?php echo e(route('patients.update', $patient->id)); ?>" method="POST" class="bg-white p-6 rounded shadow-md mx-auto" style="max-width: 600px;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-4">
                <label for="Number" class="block text-gray-700">Patient nummer</label>
                <input type="text" name="Number" id="Number" class="w-full px-4 py-2 border rounded" value="<?php echo e($patient->Number); ?>" required>
            </div>
            <div class="mb-4">
                <label for="FirstName" class="block text-gray-700">Voornaam</label>
                <input type="text" name="FirstName" id="FirstName" class="w-full px-4 py-2 border rounded" value="<?php echo e($person->FirstName); ?>" required>
            </div>
            <div class="mb-4">
                <label for="MiddleName" class="block text-gray-700">Tussenvoegsel</label>
                <input type="text" name="MiddleName" id="MiddleName" class="w-full px-4 py-2 border rounded" value="<?php echo e($person->MiddleName); ?>">
            </div>
            <div class="mb-4">
                <label for="LastName" class="block text-gray-700">Achternaam</label>
                <input type="text" name="LastName" id="LastName" class="w-full px-4 py-2 border rounded" value="<?php echo e($person->LastName); ?>" required>
            </div>
            <div class="mb-4">
                <label for="DateOfBirth" class="block text-gray-700">Geboortedatum</label>
                <input type="date" name="DateOfBirth" id="DateOfBirth" class="w-full px-4 py-2 border rounded" value="<?php echo e($person->DateOfBirth); ?>" required>
            </div>
            <div class="mb-4">
                <label for="MedicalRecord" class="block text-gray-700">Medisch dossier</label>
                <textarea name="MedicalRecord" id="MedicalRecord" class="w-full px-4 py-2 border rounded" required><?php echo e($patient->MedicalRecord); ?></textarea>
            </div>
            <button type="submit" style="background-color: #5F1A37;" class="text-white px-4 py-2 rounded">Opslaan</button>
        </form>
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
<?php endif; ?><?php /**PATH C:\Users\bilag\Herd\smilepro\resources\views/patients/update.blade.php ENDPATH**/ ?>
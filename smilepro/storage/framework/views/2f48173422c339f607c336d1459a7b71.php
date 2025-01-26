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
        Nieuwe Patient Toevoegen
     <?php $__env->endSlot(); ?>

    <h1 class="text-center mt-4">Nieuwe Patient Toevoegen</h1>

    
    
    
<div class="p-4bg-white p-6 rounded mx-auto" style="max-width: 600px;">
    
    
    <div class="flex justify-between p-4">
        <button type="button" style="background-color: #5F1A37;"
            class="text-white px-6 py-2 rounded font-semibold shadow-md transition"
            onclick="window.location.href='<?php echo e(route('patients.index')); ?>'">
            Patient overzicht
        </button>
        
        <a type="submit" href="/" style="background-color: #5F1A37;"
            class="text-white px-6 py-2 rounded font-semibold shadow-md transition">
            Dashboard
        </a>
    </div>

    <div class="p-4bg-white p-6 rounded shadow-md mx-auto" >
        
        <form action="<?php echo e(route('patients.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>
            
            
            <div class="mb-4">
                <label for="FirstName" class="block text-gray-700">Voornaam:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="text" id="FirstName" name="FirstName" required>
                <?php $__errorArgs = ['FirstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            
            <div class="mb-4">
                <label for="MiddleName" class="block text-gray-700">Tussenvoegsel:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="text" id="MiddleName" name="MiddleName">
                <?php $__errorArgs = ['MiddleName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            
            <div class="mb-4">
                <label for="LastName" class="block text-gray-700">Achternaam:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="text" id="LastName" name="LastName" required>
                <?php $__errorArgs = ['LastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            
            <div class="mb-4">
                
                    <label for="Number" class="block text-gray-700">Patient nummer</label>
                    <input type="text" name="Number" id="Number" class="w-full px-4 py-2 border rounded" required>
                 <?php $__errorArgs = ['Number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            
            <div class="mb-4">
                <label for="DateOfBirth" class="block text-gray-700">Geboorte Datum:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="date" id="DateOfBirth" name="DateOfBirth" required>
                <?php $__errorArgs = ['DateOfBirth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            
            <div class="mb-4">
                <label for="MedicalRecord" class="block text-gray-700">Medisch Dossier:</label>
                <textarea class="form-control w-full px-4 py-2 border rounded" id="MedicalRecord" name="MedicalRecord" required></textarea>
                <?php $__errorArgs = ['MedicalRecord'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            
            <div class="mb-4">
                <button type="submit" style="background-color: #5F1A37;"
                    class="m-0 mt-3 mb-3 mr-3 text-white px-6 py-2 rounded font-semibold shadow-md transition">
                    Patient toevoegen
                </button>
            </div>
        </form>
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
<?php endif; ?><?php /**PATH C:\Users\bilag\Herd\smilepro\resources\views/patients/create.blade.php ENDPATH**/ ?>
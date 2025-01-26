
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
        Patienten Overzicht
     <?php $__env->endSlot(); ?>

    <h1 class="text-center mt-4">Patienten Overzicht</h1>
    
    
    
    <div class="p-4">
        
        <div class="p-4">
            <button type="button" style="background-color: #5F1A37;"
            class=" m-0 mt-3 mb-3 mr-3 text-white px-6 py-2 rounded font-semibold shadow-md transition"
            onclick="window.location.href='<?php echo e(route('patients.create')); ?>'">
            Nieuwe Patient Toevoegen
        </button>
        
        <a type="submit" href="/" style="background-color: #5F1A37;"
            class="text-white px-6 py-2 rounded font-semibold shadow-md transition">
            Dashboard
        </a>        
        <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md mx-auto">
            <thead style="background-color: #5F1A37;" class="text-white">
            <tr>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"A>Patient nummer</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Voornaam</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Tussenvoegsel</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"A>Achternaam</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Geboortedatum</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Medisch dossier</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"A>Acties</th>
            </tr>
        </thead>
        <tbody>
            
            <?php if($persons->isEmpty()): ?>
                <tr>
                    <td colspan="6" class="text-center px-2 py-1 border border-gray-300">
                        Er is een probleem opgetreden bij het ophalen van de Patienten. Probeer het later opnieuw.
                    </td>
                </tr>
            <?php else: ?>
                
                <?php $__currentLoopData = $persons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center hover:bg-gray-50">
                        <td class="px-2 py-1 border border-gray-300"><?php echo e($person->Number); ?></td>
                        <td class="px-2 py-1 border border-gray-300"><?php echo e($person->FirstName); ?></td>
                        <td class="px-2 py-1 border border-gray-300"><?php echo e($person->MiddleName); ?></td>
                        <td class="px-2 py-1 border border-gray-300"><?php echo e($person->LastName); ?></td>
                        <td class="px-2 py-1 border border-gray-300"><?php echo e($person->DateOfBirth); ?></td>
                        <td class="px-2 py-1 border border-gray-300" style="min-width: 400px; max-width: 600px;">
                            <?php echo e($person->MedicalRecord); ?>

                        </td>
                         <td class="px-2 py-1 border border-gray-300">
                            
                            <a style="background-color: #5F1A37; color: white;" href="<?php echo e(route('patients.edit', $person->id)); ?>" class="btn">
                                Bewerken
                            </a>
                            <form action="<?php echo e(route('patients.destroy', $person->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" style="background-color: #d9534f; color: white;">
                                    Verwijderen
                                </button>
                            </form>
                        </td> 
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>
    </div>

    
    <div class="p-4">
        <?php echo e($persons->links()); ?>

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
<?php endif; ?><?php /**PATH C:\Users\bilag\Herd\smilepro\resources\views/patients/index.blade.php ENDPATH**/ ?>
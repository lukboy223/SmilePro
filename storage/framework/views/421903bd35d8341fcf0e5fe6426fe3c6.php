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
        Home
     <?php $__env->endSlot(); ?>


    
    <section class="homeSection1 row">

        
        <div class="col-12 col-lg-5 homeSection1Text">
            <h1>Smile Pro</h1>
            <p>Welcome to Smile Pro, where your smile comes first! We provide expert dental care, from routine cleanings
                to advanced cosmetic treatments, all in a comfortable and welcoming environment. Let us help you achieve
                a healthier, brighter smile today!</p>
            <button>Make appointment</button>
        </div>
        
        <div class="col-12 col-lg-6 homeSection1Img">
            <img src="<?php echo e(asset('img/homeImg1.jpg')); ?>" alt="homeImg1" class="col-12 col-lg-9">
        </div>
    </section>

    
    <section class="homeSection2 row">
        <div class="col-lg-3 col-12 homeSection2Text1">
            <h2>Comprehensive Dental Services</h2>
            <p>Smile Pro offers a wide range of treatments, from regular cleanings to advanced procedures like implants
                and veneers. Whatever your dental needs, our skilled team ensures you receive the highest quality care.
            </p>
        </div>
        <div class="col-lg-3 col-12 homeSection2Text2">
            <h2>State of the Art Technology</h2>
            <p>We use the latest dental technology to make your visits efficient, comfortable, and precise. At Smile
                Pro, innovation meets expertise for the best possible results.</p>
        </div>
        <div class="col-lg-3 col-12 homeSection2Text3">
            <h2>Patient Centered <br> Care</h2>
            <p>Your comfort and satisfaction are our top priorities. At Smile Pro, we take the time to listen to your
                concerns and provide personalized care in a welcoming environment.</p>
        </div>
    </section>
    
    <section class="homeSection3 row">
        
        <div class="col-12 col-lg-6 homeSection3Img">
            <img src="<?php echo e(asset('img/homeImg2.jpg')); ?>" alt="homeImg2" class="col-12 col-lg-9">
        </div>

        
        <div class="col-12 col-lg-5 homeSection3Text">
            <h1>Smile Pro</h1>
            <p>Welcome to Smile Pro, where your smile comes first! We provide expert dental care, from routine cleanings
                to advanced cosmetic treatments, all in a comfortable and welcoming environment. Let us help you achieve
                a healthier, brighter smile today!</p>
            <button>Make appointment</button>
        </div>
    </section>

    
    <div class="HomeLine"></div>

    
    <section class="homeSection4 row">
        <div class="homeSection4TextCont col-lg-5 col-12">
            <div class="homeSection4Text">
                
                <h3>Jeffery John</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem, veritatis impedit quas soluta assumenda accusantium, quos nam quo laudantium repellat cum praesentium. Dolores delectus culpa excepturi tempore enim a.
                </p>
            </div>
            <div class="homeSection4Line"></div>
            <div class="homeSection4Text">
                <h3>Jeffery John</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem, veritatis impedit quas soluta assumenda accusantium, quos nam quo laudantium repellat cum praesentium. Dolores delectus culpa excepturi tempore enim a.
                </p>
            </div>
            <div class="homeSection4Line"></div>
            <div class="homeSection4Text">
                <h3>Jeffery John</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem, veritatis impedit quas soluta assumenda accusantium, quos nam quo laudantium repellat cum praesentium. Dolores delectus culpa excepturi tempore enim a.
                </p>
            </div>
        </div>
        
        <div class="homeSection4ImgCont col-lg-7 col-12">
            <img src="<?php echo e(asset('img/DoctorImg1.png')); ?>" alt="Doctor1" class="homeSection4Img1">
            <img src="<?php echo e(asset('img/DoctorImg2.png')); ?>" alt="Doctor2" class="homeSection4Img2">
            <img src="<?php echo e(asset('img/DoctorImg3.png')); ?>" alt="Doctor3" class="homeSection4Img3">
        </div>
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
<?php endif; ?><?php /**PATH C:\Users\moham\Herd\smilepro\resources\views/home.blade.php ENDPATH**/ ?>
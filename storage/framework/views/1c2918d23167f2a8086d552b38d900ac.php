<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
    <title><?php echo e($title); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo e(Asset('style/css/style.css')); ?>">
</head>

<body>
    <header>
        
        <nav class="navbar">
            <div class="menuNavbar">
                <ul class="menuNavbarUl">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <div class="AccountNavbar">
                    <div class="navbarLine"></div>

                    
                    <?php if(auth()->guard()->guest()): ?>
                    <ul class="AccountNavbarUl">
                        <li>
                            <a href="<?php echo e(route('login')); ?>">Log in</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('register')); ?>">Sign up</a>
                        </li>
                    </ul>
                    <?php endif; ?>
                    
                    <?php if(auth()->guard()->check()): ?>

                    
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="sideBackgroundNavbar" onclick="openNavbar()">

            </div>
        </nav>
        
        <div onclick="openNavbar()" class="NavbarOpener">
            <div></div>
        </div>
        <div class="AccountNavbarMenu">
            <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('login')); ?>">Log in</a> | <a href="<?php echo e(route('register')); ?>">Sign up</a>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
            <?php if(Auth::user()->role_id == '3'): ?>
            <a href="<?php echo e(route('admin')); ?>" style="text-decoration: underline">dashboard admin</a>
            <?php else: ?>
            <a href="<?php echo e(route('dashboard')); ?>" style="text-decoration: underline">dashboard</a>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>

    <main>
        
        <?php echo e($slot); ?>

    </main>

    
    <footer>
        <div class="footerTopSection row">
            <div class="col-lg-5 col-12 footerNavbar">
                
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="col-1">
                <div class="footerLine"></div>
            </div>
            
            <div class="col-lg-5 col-12 footerContact">
                <h3>Contact information</h3>
                <ul>
                    <li>
                        <strong>Tel:</strong> <br>
                        123456789
                    </li>
                    <li>
                        <strong>Email:</strong> <br>
                        SmilePro@mail.com
                    </li>
                    <li>
                        <strong>Address</strong> <br>
                        123 somethinglane <br>
                        1234 AB The City <br>
                        The Country
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footerBottomSection">
            <a href="">Privacy Policy</a>
            <p>Trademarked by Project group</p>
            <p>Luka, Bilal, Sola, Mohamed & Shuhd</p>
        </div>
    </footer>
</body>


<script src="<?php echo e(asset('js/script.js')); ?>"></script>

</html><?php /**PATH C:\Users\moham\Herd\smilepro\resources\views/components/layout.blade.php ENDPATH**/ ?>
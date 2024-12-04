<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- when you write

    <x-slot:title>
        *your title*
    </x-slot:title>

    on inside the layout element it will be filled into the title, to give the page a title O: --}}
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- style css --}}
    <link rel="stylesheet" href="{{ Asset('style/css/style.css') }}">
</head>

<body>
    <header>
        {{-- the navbar O: Amazing! --}}
        <nav class="navbar">
            <div class="menuNavbar">
                <ul class="menuNavbarUl">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <div class="AccountNavbar">
                    <div class="navbarLine"></div>

                    {{-- guest checks if your logged into an account or not if not then guest will show, kind of like an
                    if statement --}}
                    @guest
                    <ul class="AccountNavbarUl">
                        <li>
                            <a href="">Log in</a>
                        </li>
                        <li>
                            <a href="">Sign up</a>
                        </li>
                    </ul>
                    @endguest
                    {{-- auth checks if your logged into an account or not if yes then auth will show, kind of like an
                    if statement --}}
                    @auth
                    still needs to be made, or make it yourself dummy ╚|•⌂•|╝
                    @endauth
                </div>
            </div>
            {{-- that black thing on the side of the navbar --}}
            <div class="sideBackgroundNavbar" onclick="openNavbar()">

            </div>
        </nav>
        {{-- hamburger thiny that opens the navbar (the 3 lines) --}}
        <div onclick="openNavbar()" class="NavbarOpener">
            <div></div>
        </div>
        <div class="AccountNavbarMenu">
            @guest
            <a href="">Log in</a> | <a href="">Sign up</a>
            @endguest
            @auth
            still needs to be made, or make it yourself dummy ╚|•⌂•|╝
            @endauth
        </div>
    </header>

    <main>
        {{-- all your code will be pasted here when you use the layout thingy, \(〃＾▽＾〃)/ --}}
        {{ $slot }}
    </main>

    {{-- look the footer, give him some shoes!! --}}
    <footer>
        <div class="footerTopSection row">
            <div class="col-lg-5 col-12 footerNavbar">
                {{-- footer navbar menu  --}}
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="col-1">
                <div class="footerLine"></div>
            </div>
            {{-- footer contact information  --}}
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
        {{-- gray bar underneath the footer   --}}
        <div class="footerBottomSection">
            <a href="">Privacy Policy</a>
            <p>Trademarked by Project group</p>
            <p>Luka, Bilal, Sola, Mohamed & Shuhd</p>
        </div>
    </footer>
</body>

{{-- hacker javascript file, I hacked Iraq with this one \(￣︶￣*\)) --}}
<script src="{{ asset('js/script.js') }}"></script>

</html>
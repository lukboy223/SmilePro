<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>


    {{-- first section of the homepage --}}
    <section class="homeSection1 row">

        {{-- has the very interesting and totally not generated text of chatgpt in it --}}
        <div class="col-12 col-lg-5 homeSection1Text">
            <h1>Smile Pro</h1>
            <p>Welcome to Smile Pro, where your smile comes first! We provide expert dental care, from routine cleanings
                to advanced cosmetic treatments, all in a comfortable and welcoming environment. Let us help you achieve
                a healthier, brighter smile today!</p>
            <button>Make appointment</button>
        </div>
        {{-- cool img --}}
        <div class="col-12 col-lg-6 homeSection1Img">
            <img src="{{ asset('img/homeImg1.jpg')}}" alt="homeImg1">
        </div>
    </section>

    {{-- second section of the homepage, 3 text one --}}
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
    {{-- third section of the homepage --}}
    <section class="homeSection3 row">
        {{-- cool img --}}
        <div class="col-12 col-lg-6 homeSection3Img">
            <img src="{{ asset('img/homeImg2.jpg')}}" alt="homeImg2">
        </div>

        {{-- has the very interesting and totally not generated text of chatgpt in it --}}
        <div class="col-12 col-lg-5 homeSection3Text">
            <h1>Smile Pro</h1>
            <p>Welcome to Smile Pro, where your smile comes first! We provide expert dental care, from routine cleanings
                to advanced cosmetic treatments, all in a comfortable and welcoming environment. Let us help you achieve
                a healthier, brighter smile today!</p>
            <button>Make appointment</button>
        </div>
    </section>

    {{-- black line --}}
    <div class="HomeLine"></div>

    {{-- fourth section of the homepage --}}
    <section class="homeSection4 row">
        <div class="homeSection4TextCont col-5">
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
        <div class="homeSection4Img col-7">
            <img src="{{ asset('img/DoctorImg1.png')}}" alt="Doctor1">
            <img src="{{ asset('img/DoctorImg2.png')}}" alt="Doctor2">
            <img src="{{ asset('img/DoctorImg3.png')}}" alt="Doctor3">
        </div>
    </section>

</x-layout>

<x-layout>
    <x-slot:title>
        Home 
    </x-slot:title>


    {{-- first section of the homepage --}}
<section class="homeSection1 row">

    {{-- has the very interesting and totally not generated text of chatgpt in it  --}}
    <div class="col-12 col-lg-5 homeSection1Text">
        <h1>Smile Pro</h1>
        <p>Welcome to Smile Pro, where your smile comes first! We provide expert dental care, from routine cleanings to advanced cosmetic treatments, all in a comfortable and welcoming environment. Let us help you achieve a healthier, brighter smile today!</p>
        <button>Make appointment</button>
    </div>
    {{-- cool img  --}}
    <div class="col-12 col-lg-6 homeSection1Img">
        <img src="{{ asset('img/homeImg1.jpg')}}" alt="homeImg1">
    </div>
</section>

<section class="homeSection2">

</section>

</x-layout>


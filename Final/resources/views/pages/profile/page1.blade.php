@extends('Main')
@section('body')

<section class="flex justify-between" style="font-family: Inter;">
    <section class="mt-40 w-[265px]">
        <div class="flex items-center my-1 h-[50px]">
            <img src={{ asset('zuragnuud/icon-regular1.png') }} alt="">
            <a href='/profile'><b class="text-[20px] mx-2">Ерөнхий мэдээлэл</b></a>
        </div>
        <div class="flex items-center my-1 h-[50px]">
            <img src={{ asset('zuragnuud/icon-work2.png') }} alt="">
           <a href="/profile/secondProfile"><b class="text-[20px] mx-2">Туршлага</b></a>
        </div>
        <div class="flex items-center my-1 h-[50px]">
            <img src={{ asset('zuragnuud/icon-work2.png') }} alt="">
            <a href="/profile/thirdProfile"><b class="text-[20px] mx-2">Имэйлийн дохиоллын тохиргоо</b></a>
        </div>
        <div class="my-40"></div>
        <hr>
        <div>
            <b class="text-[20px]">Ахиц дэвшил 61% гүйцэтгэлтэй байна</b>
        </div>
    </section>

    <div class="w-[770px] mt-40 px-12" id="sw" style="font-family: Inter;">
        <x-coverbridge>
            @if (session('form2'))
                <x-profileform2/>
            @elseif (session('form3'))
                <x-profileform3/>
            @else 
               <x-profileform1/>
            @endif
        </x-coverbridge>
    </div>
    
</section>
@endsection

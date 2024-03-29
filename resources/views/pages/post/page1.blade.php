@extends('Main')
@section('body')

<section class="flex h-[2475px]" style="font-family: Inter;">
    <section class="w-[276px] mt-40">
        <div class="flex items-center px-3">
            <img src={{ asset('zuragnuud/Group644.png') }} alt="">
            <b class="text-[#0029FF] px-3">Бичих & Илгээх</b>
        </div>
        <div class="my-8 flex items-center px-3">
            <img src={{ asset('zuragnuud/Group644.png') }} alt="">
            <b class="text-[#0029FF] px-3">Куратор</b>
        </div>
        <div class="flex items-center px-3">
            <img src={{ asset('zuragnuud/Group644.png') }} alt="">
            <b class="text-[#0029FF] px-3">Нийтэлсэн</b>
        </div>
        <div class="my-8">
            <hr>
        </div>
        <div class="flex px-3 items-center">
            <img src={{ asset('storage/'.$img) }} alt="" class="w-[54px] h-[54px] rounded-full">
            <div class="px-2">
                <span style="font-family: Libre Franklin;" class="text-[#2B2D42]">{{ $name }}</span>
                <p></p>
                <span class="text-[#020B75]">{{ $role }}</span>
            </div>
        </div>
    </section>

    <div class="w-[770px] mt-40 px-12" style="font-family: Inter;">
        <x-coverbridge>
             <x-postform1/>
        </x-coverbridge>
    </div>
</section>
@endsection

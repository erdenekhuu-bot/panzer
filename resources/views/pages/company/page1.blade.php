@extends('Main')
@section('body')

<section class="flex justify-between h-[2867px]" style="font-family: Inter;">
    <section class="mt-40 w-[265px]">
        <div class="flex items-center my-1 h-[50px]">
            <div class="w-[30px] h-[30px] bg-[#FFB800] rounded-full">
                <b class="text-[16px] text-[white] flex justify-center items-center my-1">1</b>
            </div>
           <a href="/company"><b class="text-[16px] text-[#020B75] mx-3">Ерөнхий мэдээлэл</b></a>
        </div>
        <div class="flex items-center my-1 h-[50px]">
            <div class="w-[30px] h-[30px] bg-[#9EA3C0] rounded-full">
                <b class="text-[16px] text-[white] flex justify-center items-center my-1">2</b>
            </div>
            <a href="/company/secondCompany"><b class="text-[16px] text-[#020B75] mx-3">Стартап мэдээлэл</b></a>
        </div>
        <div class="flex items-center my-1 h-[50px]">
            <div class="w-[30px] h-[30px] bg-[#9EA3C0] rounded-full">
                <b class="text-[16px] text-[white] flex justify-center items-center my-1">3</b>
            </div>
           <a href="/company/thirdCompany"><b class="text-[16px] text-[#020B75] mx-3">Багийн мэдээлэл</b></a>
        </div>
        <div class="flex items-center my-1 h-[50px]">
            <div class="w-[30px] h-[30px] bg-[#9EA3C0] rounded-full">
                <b class="text-[16px] text-[white] flex justify-center items-center my-1">4</b>
            </div>
            <b class="text-[16px] text-[#020B75] mx-3">Дуус!</b>
        </div>
        <script>
            $(document).ready(function(){
                $('.box').click(function(){
                    $('.sbox').css('background-color','green')
                })
            })
        </script>
    </section>


    <div class="w-[770px] mt-40 px-12" style="font-family: Inter;">
        <x-coverbridge>
             @if (session('companyform2'))
                <x-companyform2/>
            @elseif (session('companyform3'))
                <x-companyform3 :name="session('name')" :img="session('img')" :role="session('role')" :team="session('team')"/>
             @else
                 <x-companyform1/> 
            @endif 
        </x-coverbridge>
    </div>
</section>
@endsection

@extends('Main')
@section('body')
<section class="h-[2132px] grid bg-[#EBEBEB]" style="grid-template-rows: 0.13fr 1fr;">
    <section class="grid" style="grid-template-columns: 0.4fr 1fr;">
        <div style="margin: 0 auto;">
            <div class="mt-48 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                <img src={{ asset('images/icon-regular.png') }} alt="" class="w-[20px] h-[17.778px]">
                <b class="px-2 text-[20px]">Ерөнхий мэдээлэл</b>
            </div>
        </div>
        <div class="px-8">
            <div class="mt-48">
                <b class="text-[#2B2D42] text-[30px]">Туршлага</b>
            </div>
        </div>
    </section>
    <section class="grid" style="grid-template-columns: 0.4fr 1fr;">
        <div>
            <div class="my-1 mx-[70px] flex items-center h-[52px]" style="font-family: Inter;">
                <img src{{ asset('images/icon-work.png') }} alt="" class="w-[20px] h-[17.778px]">
                <b class="px-2 text-[20px]">Туршлага</b>
            </div>
            <div class="my-1 mx-14 flex items-center h-[52px] " style="font-family: Inter;">
                <img src{{ asset('images/icon-work.png') }} alt="" class="w-[20px] h-[17.778px]">
                <b class="px-2 text-[20px]">Имэйлийн дохиоллын тохиргоо</b>
            </div>
        </div>

        <form method="post" action='/profile/handleSecondProfile' class="grid" style="grid-template-rows: 0fr 0.1fr;">
            @csrf
            <div class="px-9 bg-[white] h-[565px] w-[770px]">
                <div class="my-6" style="font-family: 'Inter';">
                    <b class="text-[14px]">Ажлын туршлага нэмэх <b class="text-[#DE3436]">*</b></b>
                </div>
                <input type="text" name="skill" class="w-[677px] h-[35px] border-[1px]" style="border-radius: 5px;" placeholder="Company">
                @error('skill')
                    <span>{{ $message }}</span>
                @enderror
                <div class="my-6 text-[14px]" style="font-family: 'Inter';"px>
                    <span>Зөвхөн startupnews-д нэмэгдсэн компаниудыг олж болно. <span class="text-[#0029FF]">Та компани нэмэхийг хүсч байна уу? <br> Энд дар</span></span>
                </div>
                <div class="my-6" style="font-family: 'Inter';">
                    <b class="text-[14px]">Үүрэг</b>
                </div>
                <input type="text" name="role" class="w-[677px] h-[35px] border-[1px]" style="border-radius: 5px;" placeholder="Developer , Founder">
                @error('role')
                    <span>{{ $message }}</span>
                 @enderror
                <div class="my-6">
                    <b class="text-[14px]">Цаг хугацаа</b>
                </div>
                <div>
                    <select name="start_month" class="w-[102px] h-[32px] border-[1px]" style="border-radius: 8px;">
                        <option>--select--</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                    </select>
                    <select name="start_year" class="w-[87px] h-[32px] border-[1px] mr-5" style="border-radius: 8px;">
                        <option>--select--</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                        <option>2019</option>
                        <option>2018</option>
                    </select>
                    -

                    <select name="end_month" class="w-[102px] h-[32px] border-[1px] ml-5" style="border-radius: 8px;">
                        <option>--select--</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                    </select>
                    <select name="end_year" class="w-[87px] h-[32px] border-[1px]" style="border-radius: 8px;">
                        <option>--select--</option>
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                        <option>2019</option>
                        <option>2018</option>
                    </select>
                </div>
                <div class="my-6">
                    <input type="checkbox" name="state">
                    <b class="text-[14px]" style="font-family: 'Inter';">Одоогоор энд ажиллаж байна</b>
                </div>
                <div class="my-6">
                    <a href="/profile" class="">
                        <button class="m-2 border-[1px] w-[95px] h-[35px] text-[#0029FF] border-[#0029FF] cursor-pointer" style="border-radius: 5px;">ЦУЦЛАХ</button></a>
                        <button type="submit" class="m-2 border-[1px] w-[95px] h-[35px] text-[white] bg-[#0029FF]" style="border-radius: 5px;">НЭМЭХ</button>
                </div>
        </form>
    </section>
</section>
@endsection

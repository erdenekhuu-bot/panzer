@extends('Main')
@section('body')
<section class="h-[1796px]"  style="grid-template-rows: 0.13fr 1fr;">
    <section class="grid" style="grid-template-columns: 0.4fr 1fr;">
        <div style="margin: 0 auto;">
            <div class="mt-48 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center" style="border-radius: 50%;"><b>1</b></div>
                <div class="px-2">
                    <b class="text-[16px] text-[#020B75]">Ерөнхий мэдээлэл</b>
                </div>
            </div>
        </div>
        <div class="px-8">
            <div class="mt-48">
                <b class="text-[#2B2D42] text-[30px]" style="font-family: 'Inter';">Дуус!</b>
            </div>
        </div>
    </section>
    <section class="grid" style="grid-template-columns: 0.4fr 1fr;">
        <div style="margin: 0 auto;">
            <div class="my-1 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center" style="border-radius: 50%;"><b>2</b></div>
                <div class="px-2">
                    <b class="text-[16px] text-[#020B75]">Стартап мэдээлэл
                    </b>
                </div>
            </div>
            <div class="my-1 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center" style="border-radius: 50%;"><b>3</b></div>
                <div class="px-2">
                    <b class="text-[16px] text-[#020B75]">Багийн мэдээлэл
                    </b>
                </div>
            </div>
            <div class="my-1 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center" style="border-radius: 50%;"><b>4</b></div>
                <div class="px-2">
                    <b class="text-[16px] text-[#020B75]">Дуус!
                    </b>
                </div>
            </div>
        </div>
        <form method="get" class="grid" style="grid-template-rows: 0fr 0.1fr;">
            <div class="px-9 bg-[white]" style="font-family: 'Inter';">
                <div class="flex justify-center">
                    <img src={{ asset('images/prdt.PNG') }} alt="" class="w-[292.95px] h-[229.59px]">
                </div>
                <div class="text-center">
                    <b class="text-[20px]">Бүртгэл хадаглагдлаа</b> <p></p>
                    <span class="text-[16px]">startupnews -д хувь нэмрээ оруулахыг сонирхож байгаад баярлалаа. <br> Таны нийтлэл нийтлэгдсэний дараа танд мэдэгдэх болно.
                    </span>
                </div>
                <div class="my-10">
                    <hr class="w-[676.126px] h-[0.5px]">
                </div>
                <div class="flex flex-wrap">
                    <div class="w-[244.684px] m-2" style="font-family: 'Inter'; border-radius: 5.751px;">
                        <img src={{ asset('images/stt.png') }} alt="">
                        <span class="p-1 text-[#020B75] text-[14px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[16px]"><b>Монгол залуус хонины ноосон шүүлтүүртэй</b></span> <p></p>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[20.439px] h-[20.823px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="" class="w-[20.439px] h-[20.823px]">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[244.684px] m-2" style="font-family: 'Inter'; border-radius: 5.751px;">
                        <img src={{ asset('images/stt.png') }} alt="">
                        <span class="p-1 text-[#020B75] text-[14px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[16px]"><b>Монгол залуус хонины ноосон шүүлтүүртэй</b></span> <p></p>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[20.439px] h-[20.823px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="" class="w-[20.439px] h-[20.823px]">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[244.684px] m-2" style="font-family: 'Inter'; border-radius: 5.751px;">
                        <img src={{ asset('images/stt.png') }} alt="">
                        <span class="p-1 text-[#020B75] text-[14px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[16px]"><b>Монгол залуус хонины ноосон шүүлтүүртэй</b></span> <p></p>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[20.439px] h-[20.823px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="" class="w-[20.439px] h-[20.823px]">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[244.684px] m-2" style="font-family: 'Inter'; border-radius: 5.751px;">
                        <img src={{ asset('images/stt.png') }} alt="">
                        <span class="p-1 text-[#020B75] text-[14px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[16px]"><b>Монгол залуус хонины ноосон шүүлтүүртэй</b></span> <p></p>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[20.439px] h-[20.823px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="" class="w-[20.439px] h-[20.823px]">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[244.684px] m-2" style="font-family: 'Inter'; border-radius: 5.751px">
                        <img src={{ asset('images/stt.png') }} alt="">
                        <span class="p-1 text-[#020B75] text-[14px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[16px]"><b>Монгол залуус хонины ноосон шүүлтүүртэй</b></span> <p></p>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[20.439px] h-[20.823px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="" class="w-[20.439px] h-[20.823px]">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[244.684px] m-2" style="font-family: 'Inter'; border-radius: 5.751px">
                        <img src={{ asset('images/stt.png') }} alt="">
                        <span class="p-1 text-[#020B75] text-[14px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[16px]"><b>Монгол залуус хонины ноосон шүүлтүүртэй</b></span> <p></p>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[20.439px] h-[20.823px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="" class="w-[20.439px] h-[20.823px]">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</section>
@endsection

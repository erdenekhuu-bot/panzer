@extends('Main')

@section('body')
<section style="font-family: Inter;">
    <div class="flex h-[20px]"></div>
    <div class="relative w-[1072px] h-[117px] bg-[#2CFBFE] mt-20"
        style="background-image: url('{{ asset('zuragnuud/octagon.png') }}')">
        <div class="absolute ml-14 mt-20">
            <img src={{ asset('zuragnuud/octagon_pro.png') }} alt="" class="">
        </div>
    </div>
    <div class="w-[1072px] h-[141px] bg-[white]">
        <div class="ml-60">
            <b class="text-[30px] text-[#020B75]">Octagon</b>
        </div>
        <div class="ml-60">
            <span>Octagon NFT marketplace нь таны дижитал бүтээл авах, зарах, дуудлага худалдаанд оролцох боломжтой
                нээлттэй зах юм.</span>
        </div>
    </div>
    <div class="flex items-center justify-between">
        <b class="text-[30px] text-[#020B75]">Тухай Octagon</b>
        <b class="text-[20px] text-[#020B75] mr-14">Дэлгэрэнгүй мэдээлэл</b>
    </div>
    <section class="flex justify-between">
        <div class="w-[709px] p-4">
            <img src={{ asset('zuragnuud/image4.png') }} alt="">
            <div class="my-6 flex">
                <div class="h-[147px] w-[147px] bg-black flex items-center rounded-lg">
                    <img src={{ asset('zuragnuud/image5(2).png') }} alt="" class="w-[156px] h-[79px]">
                </div>
                <div class="mx-6">
                    <img src={{ asset('zuragnuud/image5(1).png') }} alt="" class="rounded-lg">
                </div>
            </div>
            <div class="my-4">
                <span>
                    Галауд эелдэг, хөндлөгийн бус аргаар туслах илүү хурдан арга бий юу?
                    Түүнчлэн, Web3-ийн ирээдүй нь дэлгэцэн дээрх цогц үйлчилгээг юу санал болгож, нэгтгэж чадах вэ?
                    Бид метаверсийн физик орон зайгаас дижитал орон зай хүртэл үргэлжилж буй хөгжлийг авч үзэж байна.
                    Хамтарсан SaaS эсвэл бие даасан RPG тоглоомын загвар болгон сайн сайхан байдлын үйлчилгээг санал
                    болгодог
                    bubbME.AI нь дижиталчлалын ирээдгүй хараахан харагдахгүй байгаа тул өөрийгөө боловсруулж байна.
                </span>
            </div>
            <hr>
            <div class="flex justify-center items-center text-[12px] my-4">
                <span class="text-[#020B75]">Илүүг үзэх</span>
                <div class="mx-2">
                    <img src={{ asset('zuragnuud/Vector.png') }} alt="">
                </div>
            </div>
            <div class="my-6">
                <b class="text-[20px] text-[#020B75]">Баг</b>
            </div>
            <div class="p-2 flex flex-wrap">
                <div class="flex w-[200px] m-1">
                    <img src={{ asset('zuragnuud/proImg.PNG') }} alt="" class="w-[60px] h-[60px] mr-3">
                    <div class="w-[131px]">
                        <b class="text-[12px]">Tomie min</b>
                        <p></p>
                        <span class="text-[#9EA3C0] text-[12px]">Chief Empath Officer at TEGAR Foundation</span>
                    </div>
                </div>
                <div class="flex w-[200px] m-1">
                    <img src={{ asset('zuragnuud/proImg.PNG') }} alt="" class="w-[60px] h-[60px] mr-3">
                    <div class="w-[131px]">
                        <b class="text-[12px]">Tomie min</b>
                        <p></p>
                        <span class="text-[#9EA3C0] text-[12px]">Self-employed | Content-creator</span>
                    </div>
                </div>
                <div class="flex w-[200px] m-1">
                    <img src={{ asset('zuragnuud/proImg.PNG') }} alt="" class="w-[60px] h-[60px] mr-3">
                    <div class="w-[131px]">
                        <b class="text-[12px]">Tomie min</b>
                        <p></p>
                        <span class="text-[#9EA3C0] text-[12px]">Self-employed | Content-creator</span>
                    </div>
                </div>
                <div class="flex w-[200px] m-1">
                    <img src={{ asset('zuragnuud/proImg.PNG') }} alt="" class="w-[60px] h-[60px] mr-3">
                    <div class="w-[131px]">
                        <b class="text-[12px]">Tomie min</b>
                        <p></p>
                        <span class="text-[#9EA3C0] text-[12px]">Chief Empath Officer at TEGAR Foundation</span>
                    </div>
                </div>
            </div>
            <div class="mt-20 mb-4">
                <b class="text-[20px] text-[#020B75]">Стартап санхүүжилтийн мэдээ</b>
            </div>
            <div class="w-[679px] h-[72px] border flex justify-center items-center mt-10 mb-20">
                <b>Октагон дээр мэдээ байхгүй</b>
            </div>
        </div>

        <div class="w-[307px] p-4">
            <div class="my-1">
                <b class="text-[#9EA3C0] text-[14px]">Үүсгэн байгуулагдсан огноо</b>
                <p></p>
                <b class="text-[#020B75] text-[14px]">2021 оны дөрөвдүгээр сар</b>
            </div>
            <div class="my-4">
                <b class="text-[#9EA3C0] text-[14px]">Вэбсайт</b>
                <p></p>
                <div class="flex items-center">
                    <b class="text-[#020B75] text-[14px]">octagon.mn</b>
                    <div class="flex mx-4">
                        <img src={{ asset('zuragnuud/instagram1.svg') }} alt="" class="mx-2">
                        <img src={{ asset('zuragnuud/facebook1.svg') }} alt="" class="mx-2">
                        <img src={{ asset('zuragnuud/Linkedin1.svg') }} alt="" class="mx-2">
                        <img src={{ asset('zuragnuud/Twitter1.svg') }} alt="" class="mx-2">
                    </div>
                </div>
            </div>
            <div class="my-4">
                <b class="text-[#9EA3C0] text-[14px]">Суурьшсан</b><p></p>
                <b class="text-[#020B75] text-[14px]">Монгол</b>
            </div>
            <hr>
            <div class="my-4">
                <b class="text-[#9EA3C0] text-[14px]">Verticals</b><p></p>
                <b class="text-[#020B75] text-[14px]">NFT Market</b>
            </div>
            <div class="my-4">
                <b class="text-[#9EA3C0] text-[14px]">Үйл ажиллагааны бүс(үүд)</b><p></p>
                <b class="text-[#020B75] text-[14px]">Монгол</b>
            </div>
            <hr>
            <div class="my-4">
                <b class="text-[#9EA3C0] text-[14px]">Боломжууд</b><p></p>
                <b class="text-[#020B75] text-[14px]">Би түншлэлийн боломжуудын талаар холбогдох сонирхолтой байна.</b>
            </div>
            <div class="mt-16 mb-2">
                <b class="text-[#020B75] text-[20px]">Шагнал</b>
            </div>
            <div class="h-[72px] border flex justify-center items-center">
                <b class="text-[14px] text-[#020B75]">Октагон дээр мэдээ байхгүй</b>
            </div>
            <div class="mt-16 mb-2">
                <b class="text-[#020B75] text-[20px]">Мэдээ</b>
            </div>
            <div class="h-[72px] border flex justify-center items-center">
                <b class="text-[14px] text-[#020B75]">Октагон дээр мэдээ байхгүй</b>
            </div>
        </div>
    </section>
</section>
@endsection
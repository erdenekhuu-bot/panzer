<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    @font-face{
        font-family: 'Montserrat';
        src: url('font/Montserrat-VariableFont_wght.ttf');
        font-weight: 700;
    }
    @font-face {
        font-family: 'Inter';
        src: url('font/Inter-VariableFont_slnt,wght.ttf');
        font-weight: 400;
    }
    @font-face {
        font-family: 'Sora';
        src: url('font/Sora-SemiBold.ttf')
    }
</style>
<body class="w-[1280px]" style="margin: 0 auto;">
    <header class="fixed">
        <nav class="w-[1280px] h-[96px] bg-[white]" style="display: grid; grid-template-rows: 0fr 0fr;">
            <div class="grid" style="grid-template-columns: 0.8fr 10fr 0.8fr;">
                <div class="bg-white-500"></div>
                <div class="p-4 bg-white-500 flex justify-between">
                    <span class="flex">
                        <img src={{ asset('images/menu.png') }} alt="error!" class="m-[3px]">
                        <b class="text-xl" style="font-family: Montserrat; color: #020B75; font-size: 20px;" class="m-[3px]">startupnews</b>
                    </span>
                    <span class="flex">
                        <img src={{ asset('images/icon_color.png') }} alt="error!" class="m-[3px]">
                        <img src={{ asset('images/moon.png') }} alt="error!" class="m-[3px]">
                        <span style="color: #9EA3C0;" class="m-[3px]">28o C  Ulaanbaatar</span>
                    </span>
                </div>
                <div class="bg-white-500"></div>
            </div>
            <div style="display: grid; grid-template-columns: 0.8fr 10fr 0.8fr;">
                <div class="bg-white-500"></div>
                <div class="bg-white-500 flex justify-between">
                    <span class="m-[5px] cursor-pointer">Мэдээ</span>
                    <span class="m-[5px] cursor-pointer">Стартапууд</span>
                    <span class="m-[5px] cursor-pointer">Монголын стартап экосистемийн зураглал 2022 | START</span>
                    <span class="m-[5px] cursor-pointer">Холбогдох</span>
                    <span class="flex justify-between">
                    <img src={{ asset('images/User.png') }} alt="error" class="m-[10px]">
                    <span class="m-[5px] cursor-pointer" id="call">НЭВТРЭХ</span>

            </div>
            <div class="bg-white-500"></div>
        </div>
        </nav>
    </header>







      <section style="display: block;" id="popup">
        <form method="post" action='/user/checkSignUp' class="w-[710px] h-[474px] grid fixed" style="grid-template-columns: 1fr 1fr; margin: 100px 310px; ">
            @csrf
            @if ($errors)
                @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                @endforeach
            @endif
            <section style="background-color: white;">
                @if (session('error'))
                    <span>{{ session('error') }}</span>
                @else
                    <span>{{ session('success') }}</span>
                @endif
                <div class="mt-6 mx-8">
                    <b class="text-[34px]">Бүртгүүлэх</b>
                </div>
                <div class="mx-8">
                    <span class="text-[12px]">Бүртгэлдээ нэвтэрснээр та манай хэрэглэгчийн туршлагыг үргэлжлүүлэн ашиглах боломжтой.</span>
                </div>
                <div class="mt-6 text-center">
                    <input type="text" placeholder="Нэр" name="username" class="w-[296px] h-[35px]" style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                </div>
                <div class="mt-8 text-center">
                    <input type="text" placeholder="Имэйл" name="email" class="w-[296px] h-[35px]" style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                </div>
                <div class="mt-8 text-center">
                    <input type="password" placeholder="Нууц үг" name="password" class="w-[296px] h-[35px]" style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                </div>
                <div class="my-6 mx-8 text-[12px] flex justify-between">
                    <div class="flex items-center">
                        <input type="checkbox"><span class="mx-1">Намайг санаарай</span>
                    </div>
                    <div>
                        <a href="" class="text-[#3A86FF]">Нууц үгээ мартсан?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="text-[#2CFBFE] bg-[#020B75] w-[273px] h-[48px]" style="border-radius: 5px;">БҮРТГҮҮЛЭХ</button>
                </div>
            </section>
            <section style="background-color: #020B75;"></section>
        </form>
    </section>















    <main class="w-[1280px] h-[3444px] grid bg-[#F8FAFC]" style="grid-template-rows: 1fr 0fr 1fr 1fr;">
        <section class="grid" style="grid-template-columns: 1fr 1.5fr 1fr;">
            <div class="grid" style="grid-template-rows: 0.21fr 1fr; margin: 0 auto;">
                <div></div>
                <div>
                    <div>
                        <img src={{ asset('images/startup.png') }} alt="err"> <p></p>
                    <div class="h-[10px]"></div>
                    <b class="text-[20px] text-[#020B75] m-3" style="font-family: 'Montserrat';">Ярилцлага</b> <p></p>
                    <div class="h-[5px]"></div>
                    <b style="font-family: 'Montserrat';" class="text-[18px]">Ганц бие хүмүүст зориулсан <br> олон нийтийн сүлжээний <br> платформ</b> <p></p>
                    <div class="flex h-[37px] items-center">
                        <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                            <img src={{ asset('images/tamir.png') }} alt="">
                        </div>
                        <span class="px-3 text-[#020B75]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                    </div>
                    <div class="my-[30px]"></div>
                    <img src={{ asset('images/frame.png') }} alt="err"> <p></p>
                    <div class="h-[10px]"></div>
                    <b class="text-[20px] text-[#020B75] m-3" style="font-family: 'Montserrat';">Нийтлэл</b> <p></p>
                    <div class="h-[5px]"></div>
                    <b style="font-family: 'Montserrat';" class="text-[18px]">Ганц бие хүмүүст зориулсан <br> олон нийтийн сүлжээний <br> платформ</b> <p></p>
                    <div class="flex h-[37px] items-center">
                        <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                            <img src={{ asset('images/tamir.png') }} alt="">
                        </div>
                        <span class="px-3 text-[#020B75]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="px-6 grid bg-[#F8FAFC]" style="grid-template-rows: 0.3fr 0fr 0fr">
                <div></div>
                <div>
                    <span class="text-[#020B75] text-[56px]" style="font-family: 'Montserrat';">startupnews</span>
                    <span class="text-[#020B75] text-[56px] bg-[#2CFBFE] w-[117px] h-[65px] pl-[10px]" style="font-family: 'Montserrat';">mn</span>
                </div>


                    <img src={{ asset('images/background.png') }} alt="">
                    <div>
                        <span class="text-[20px] text-[#020B75]" style="font-family: 'Inter';"><b>Мэдээ</b></span> <p></p>
                        <span class="text-[30px]" style="font-family: 'Inter';">
                            <b>Казакстан улс криптотой нөхөрлөв | Octagon weekly <br> news</b>
                        </span> <p></p>
                        <div class="flex h-[37px] items-center">
                            <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="">
                            </div>
                            <span class="px-3 text-[#020B75]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>

            </div>
            <div class="grid bg-[#FFFFFF]" style="grid-template-rows: 0.72fr 0fr 0fr 0fr 0fr 0fr 1fr 1fr 1fr;">
                <div class="bg-[#F8FAFC]"></div>

                <div class="grid w-[230px] h-[129px] m-8" style="grid-template-rows: 0.5fr 0.5fr;">
                    <div class="grid" style="grid-template-columns: 0.1fr 0.2fr 1fr;">
                        <img src={{ asset('images/vector.png') }} alt="">
                        <div class="text-center">
                            <b class="text-[40px] text-[#020B75]">3</b>
                        </div>
                        <div class="text-[#020B75] text-[20px] flex items-center px-2"><b>Нийтлэл</b></div>
                    </div>
                    <div class="grid" style="grid-template-columns: 0.3fr 1fr">
                        <div></div>
                        <div>
                            <b class="text-[18px]">Инновацийн санаачилгыг дэмжих “Mon-X” хөтөлбөр эхэллээ</b>
                        </div>
                    </div>
                </div>

                <div class="grid w-[230px] h-[129px] m-8" style="grid-template-rows: 0.5fr 0.5fr;">
                    <div class="grid" style="grid-template-columns: 0.1fr 0.2fr 1fr;">
                        <img src={{ asset('images/vector.png') }} alt="">
                        <div class="text-center">
                            <b class="text-[40px] text-[#020B75]">4</b>
                        </div>
                        <div class="text-[#020B75] text-[20px] flex items-center px-2"><b>Нийтлэл</b></div>
                    </div>
                    <div class="grid" style="grid-template-columns: 0.3fr 1fr">
                        <div></div>
                        <div>
                            <b class="text-[18px]">Казакстан улс криптотой нөхөрлөв | Octagon weekly news</b>
                        </div>
                    </div>
                </div>

                <div class="grid w-[230px] h-[129px] m-8" style="grid-template-rows: 0.5fr 0.5fr;">
                    <div class="grid" style="grid-template-columns: 0.1fr 0.2fr 1fr;">
                        <img src={{ asset('images/vector.png') }} alt="">
                        <div class="text-center">
                            <b class="text-[40px] text-[#020B75]">5</b>
                        </div>
                        <div class="text-[#020B75] text-[20px] flex items-center px-2"><b>Нийтлэл</b></div>
                    </div>
                    <div class="grid" style="grid-template-columns: 0.3fr 1fr">
                        <div></div>
                        <div>
                            <b class="text-[18px]">Sendly: Дэлхийг хэрэх Монгол финтек</b>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid" style="grid-template-rows: 0fr;">
                <div class="flex justify-center">
                    <div>
                        <img src={{ asset('images/img1.png') }} alt="" style="border-radius: 8px; margin: 5px;">
                    </div>
                    <div>
                        <img src={{ asset('images/img2.png') }} alt="" style="border-radius: 8px; margin: 5px;">
                    </div>
                   <div>
                    <img src={{ asset('images/musk.png') }} alt="" class="w-[158px] h-[280px]" style="margin: 5px;">
                   </div>
                    <div>
                        <img src={{ asset('images/img3.png') }} alt="" style="border-radius: 8px; margin: 5px;">
                    </div>
                    <div>
                        <img src={{ asset('images/img4.png') }} alt="" style="border-radius: 8px; margin: 5px;">
                    </div>
                    <div>
                        <img src={{ asset('images/img5.png') }} alt="" style="border-radius: 8px; margin: 5px;">
                    </div>
                </div>
        </section>
        <section>
            <div class="grid" style="grid-template-columns: 0.5fr 1fr;">
                <div class="p-8" style="font-family: 'Inter';">
                    <p class="text-[#020B75] text-[30px]"><b>Cүүлд нэмэгдсэн</b></p>
                    <div class="grid my-4" style="grid-template-columns: 0.4fr 1fr">
                        <div class="p-3">
                            <img src={{ asset('images/eclipse.png') }} alt="">
                        </div>
                        <div class="grid" style="grid-template-rows: 0.4fr 1fr;">
                            <div class="text-[#020B75] text-[20px]"><b>Нийтлэл</b></div>
                            <div class="text-[18px]">
                                <b>Metaverse-д хэрхэн <br> үнэ цэн бүтээлцэх вэ?</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid my-4" style="grid-template-columns: 0.4fr 1fr">
                        <div class="p-3">
                            <img src={{ asset('images/eclipse.png') }} alt="">
                        </div>
                        <div class="grid" style="grid-template-rows: 0.4fr 1fr;">
                            <div class="text-[#020B75] text-[20px]"><b>Нийтлэл</b></div>
                            <div class="text-[18px]">
                               <b>Бизнесийн салбарт манлайлагчдын анхаарах хэрэгтэй технологийн 14 ШИНЭ ТРЭНД</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid my-4" style="grid-template-columns: 0.4fr 1fr">
                        <div class="p-3">
                            <img src={{ asset('images/eclipse.png') }} alt="">
                        </div>
                        <div class="grid" style="grid-template-rows: 0.4fr 1fr;">
                            <div class="text-[#020B75] text-[20px]"><b>Нийтлэл</b></div>
                            <div class="text-[18px]">
                                <b>Казакстан улс криптотой нөхөрлөв | Octagon weekly news</b>
                            </div>
                        </div>
                    </div>
                    <div class="grid my-4" style="grid-template-columns: 0.4fr 1fr">
                        <div class="p-3">
                            <img src={{ asset('images/eclipse.png') }} alt="">
                        </div>
                        <div class="grid" style="grid-template-rows: 0.4fr 1fr;">
                            <div class="text-[#020B75] text-[20px]"><b>Нийтлэл</b></div>
                            <div class="text-[18px]">
                              <b> Ганц бие хүмүүст зориулсан олон нийтийн сүлжээний платформ | Zaya app</b>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="py-20 flex flex-wrap justify-around">
                    <div class="w-[353px] h-[383px] m-5" style="font-family: 'Inter';">
                        <img src={{ asset('images/startup.png') }} alt="bhgu!" class="w-[353px] h-[183.073px]"> <p></p>
                        <span class="p-1 text-[#020B75] text-[20px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[24px]"><b>Илон Маск: Twitter-ийг худалдаж авснаар</b></span> <p></p>
                        <span class="text-[18px] text-[#666666]"><b>“X, The Everything” апп эрт биеллээ олно</b></span>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[353px] h-[383px] m-5" style="font-family: 'Inter';">
                        <img src={{ asset('images/startup.png') }} alt="bhgu!" class="w-[353px] h-[183.073px]"> <p></p>
                        <span class="p-1 text-[#020B75] text-[20px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[24px]"><b>Мэдээллийн технологийн мэргэжлийн чадварыг </b></span> <p></p>
                        <span class="text-[18px] text-[#666666]"><b>90 хоногт</b></span>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[353px] h-[383px] m-5" style="font-family: 'Inter';">
                        <img src={{ asset('images/startup.png') }} alt="bhgu!" class="w-[353px] h-[183.073px]"> <p></p>
                        <span class="p-1 text-[#020B75] text-[20px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[24px]"><b>Монгол залуус хонины ноосон шүүлтүүртэй</b></span> <p></p>
                        <span class="text-[18px] text-[#666666]"><b>агаар цэвэршүүлэгч бүтээжээ</b></span>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                    <div class="w-[353px] h-[383px] m-5" style="font-family: 'Inter';">
                        <img src={{ asset('images/startup.png') }} alt="bhgu!" class="w-[353px] h-[183.073px]"> <p></p>
                        <span class="p-1 text-[#020B75] text-[20px]"><b>Нийтлэл</b></span> <p></p>
                        <span class="text-[24px]"><b>Ганц бие хүмүүст зориулсан олон нийтийн</b></span> <p></p>
                        <span class="text-[18px] text-[#666666]"><b>сүлжээний платформ | Zaya app</b></span>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid" style="grid-template-rows: 0fr 0fr 1fr;">
            <div class="grid" style="grid-template-columns: 1fr 7fr 0.6fr;">
                <div>
                    <b class="text-[30px]" style="font-family: 'Montserrat';">Стартап</b>
                </div>
                <div></div>
                <div>
                   <div class="h-[27.99px] flex items-center justify-evenly">
                        <b class="text-[20px] text-[#020B75]">Бүгд</b>
                        <img src={{ asset('images/arrow.png') }} alt="" class="mt-[7px] w-[22px] h-[22px]">
                   </div>
                </div>
            </div>
            <div>
                <span class="bg-[aqua] text-[#020B75] text-[18px] p-1" style=" font-family: 'Sora';"><b>UBCAB</b></span>
            </div>
            <div class="grid my-5" style="grid-template-columns: 1.5fr 1fr 1.5fr;">
                <div>
                    <img src={{ asset('images/startup.png') }} alt="" class="w-[437px] h-[396.537px]"> <p></p>
                    <div class="text-[#020B75] text-[20px]" style="font-family: 'Inter';">
                        <span class="m-1"><b>Мэдээ</b></span>
                        <span class="m-1"><b>Стартап</b></span>
                    </div>
                    <div class="text-[30px]">
                      <b>Инновацаар эвдэгдэж буй 5 их наяд ам.долларын салбарт өрсөлдөж байгаа Монгол стартап</b>
                    </div>
                    <div class="flex h-[37px] items-center m-1">
                        <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                            <img src={{ asset('images/tamir.png') }} alt="">
                        </div>
                        <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                    </div>
                </div>
                <div>
                    <img src={{ asset('images/startup.png') }} alt="" class="w-[260px] h-[182px]"> <p></p>
                    <div style="font-family: 'Inter';" class="w-[260px] h-[182px]">
                        <span class="m-1 text-[#020B75] text-[20px]"><b>Нийтлэл</b></span>
                        <div class="text-[24px]" style="font-family: 'Inter;";>
                           <b>Монгол залуус хонины ноосон шүүлтүүртэй</b>
                        </div>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>

                    <img src={{ asset('images/startup.png') }} alt="" class="w-[260px] h-[182px]"> <p></p>
                    <div style="font-family: 'Inter';" class="w-[260px] h-[182px]">
                        <span class="m-1 text-[#020B75] text-[20px]"><b>Нийтлэл</b></span>
                        <div class="text-[24px]" style="font-family: 'Inter;";>
                           <b>Монгол залуус хонины ноосон шүүлтүүртэй</b>
                        </div>
                        <div class="flex h-[37px] items-center m-1">
                            <div class="w-[40px] h-[37px] bg-[aqua]" style="border-radius: 50%;">
                                <img src={{ asset('images/tamir.png') }} alt="">
                            </div>
                            <span class="px-3 text-[12px]" style="font-family: 'Inter';">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>

                </div>
                <div class="grid" style="grid-template-rows: 0.2fr 0fr 0fr 0fr 0fr;">
                    <div class="text-[30px] text-[#020B75]">
                        <span class="text-[#020B75] text-[30px]"><b>Трэндинг Мэдээ</b></span>
                    </div>
                    <div>
                        <div>
                            <div class="flex justify-between">
                                <span class="text-[#020B75] text-[20px]"><b>TECHNOLOGY</b></span>
                                <span class="text-[#2AE5B199] text-[28.32px]"><b>01</b></span>
                            </div> <p></p>
                            <span>
                                <b>A Prototype Metaverse For Public
                                    Trial Use Is Ready For Launch...
                                </b>
                            </span> <p></p>
                            <span class="text-[#48545C] text-[14.16px]">19 February 2022</span>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="flex justify-between">
                                <span class="text-[#020B75] text-[20px]"><b>BUSINESS ECONOMY</b></span>
                                <span class="text-[#2AE5B199] text-[28.32px]"><b>02</b></span>
                            </div> <p></p>
                            <span>
                                <b>Startup Funding That Targets The
                                    Technology Sector Market...
                                </b>
                            </span> <p></p>
                            <span class="text-[#48545C] text-[14.16px]">13 February 2022</span>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="flex justify-between">
                                <span class="text-[#020B75] text-[20px]"><b>GADGET</b></span>
                                <span class="text-[#2AE5B199] text-[28.32px]"><b>03</b></span>
                            </div> <p></p>
                            <span>
                                <b>Apple and Samsung Are Back To
                                    Compete To Present Their...
                                </b>
                            </span> <p></p>
                            <span class="text-[#48545C] text-[14.16px]">28 February 2022</span>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="flex justify-between">
                                <span class="text-[#020B75] text-[20px]"><b>FASHION TRENDS</b></span>
                                <span class="text-[#2AE5B199] text-[28.32px]"><b>04</b></span>
                            </div> <p></p>
                            <span>
                                <b>Trend For Winter Clothes In
                                    Europe That Can Be An Inspiration
                                </b>
                            </span> <p></p>
                            <span class="text-[#48545C] text-[14.16px]">21 February 2022</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="w-[1280px] h-[444.44px] bg-black grid overflow-hidden bg-[#EBEBEB] " style="grid-template-columns: 1fr 1fr 1fr;">
        <div class="bg-[#000000] flex justify-center p-10">
            <div class="w-[298px]">
                <b class="text-[#2CFBFE] text-[56.89px]">startupnews</b> <p></p>
                <span class="text-[#FFFFFF] text-[14.23px]">Технологи ба стартап экосистемийн мэдээ мэдээллийг танд хүргэнэ.</span> <p></p>
                <div class="flex justify-between m-4">
                    <img src={{ asset('images/instagram.svg') }} alt="">
                    <img src="{{ asset('images/facebook.svg') }}" alt="">
                    <img src="{{ asset('images/Linkedin.svg') }}" alt="">
                    <img src="{{ asset('images/Twitter.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="bg-[#000000]"></div>
        <div class="bg-[#000000] p-16 flex flex-col justify-evenly">
            <span class="text-white" style="font-family: 'Inter';">Startupnews тухай</span> <p></p>
            <span class="text-white" style="font-family: 'Inter';">Стартапууд</span> <p></p>
            <span class="text-white" style="font-family: 'Inter';">Мэдээ</span> <p></p>
            <span class="text-white" style="font-family: 'Inter';">Бидэнтэй холбогдох</span> <p></p>
            <span class="text-white" style="font-family: 'Inter';">Ярилцлага</span>
        </div>
    </footer>
</body>
</html>

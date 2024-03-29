@extends('Main')
@section('body')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#popup').click(function() {
                $('#backfade').show()
            })
        })
    </script>
    <div class="mx-auto overflow-hidden">




        <section class="custom-background flex items-center justify-center">
            <section class="flex mt-24 mb-4 mr-16 font-black" style="font-family: 'Inter';">
                <b class="text-[56px] text-[#020B75]">startupnews</b>
                <div class="bg-[#2CFBFE] h-[65px] flex items-center my-2 pl-3">
                    <b class="text-[56px] text-[#020B75]">mn</b>
                </div>
            </section>
        </section>

        <section class="flex">
            <section>
                <div class="">
                    <img src={{ asset('zuragnuud/startup.png') }} alt="" class="rounded-lg">
                    <div class="my-2">
                        <b class="text-[20px] text-[#020B75] pl-1" style="font-family: Inter;">Ярилцлага</b>
                    </div>
                    <div style="font-family: Inter;">
                        <b class="text-[18px]">Ганц биш хүмүүст зориулсан олон нийтийн сүлжээний платформ</b>
                    </div>
                    <div class="flex items-center my-2">
                        <div class="rounded-[50%] bg-[aqua] w-[40px]">
                            <img src={{ asset('zuragnuud/youngwomansittinginfrontoflaptopandhavinganidea.png') }}
                                alt="">
                        </div>
                        <div class="text-[#020B75]" style="font-family: Inter;">
                            <span class="text-[11px] mx-2">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                </div>
                <div class="w-[95%] my-8">
                    <img src={{ asset('zuragnuud/frame.png') }} alt="" class="rounded-lg">
                    <div class="my-2">
                        <b class="text-[20px] text-[#020B75] pl-1" style="font-family: Inter;">Нийтлэл</b>
                    </div>
                    <div style="font-family: Inter;">
                        <b class="text-[18px]">Ганц биш хүмүүст зориулсан олон нийтийн сүлжээний платформ</b>
                    </div>
                    <div class="flex items-center my-2">
                        <div class="rounded-[50%] bg-[aqua] w-[40px]">
                            <img src={{ asset('zuragnuud/youngwomansittinginfrontoflaptopandhavinganidea.png') }}
                                alt="">
                        </div>
                        <div class="text-[#020B75]" style="font-family: Inter;">
                            <span class="text-[11px] mx-2">BY <b>Tamir Battulga</b></span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-[100%] mx-auto">
                <img src={{ asset('zuragnuud/background.png') }} alt="" class="rounded-lg">
                <div class="mt-4 text-[bold]" style="font-family: Inter;">
                    <b class="text-[20px] text-[#020B75]">Мэдээ</b>
                </div>
                <div class="text-[30px]" style="font-family: Inter;">
                    <b>Казакстан улс криптотой нөхөрлөв | Octagon weekly news</b>
                </div>
                <div class="flex items-center my-2">
                    <div class="rounded-[50%] bg-[aqua] w-[40px]">
                        <img src={{ asset('zuragnuud/youngwomansittinginfrontoflaptopandhavinganidea.png') }}
                            alt="">
                    </div>
                    <div class="text-[#020B75]" style="font-family: Inter;">
                        <span class="text-[11px] mx-2">BY <b>Tamir Battulga</b></span>
                    </div>
                </div>
            </section>

            <section style="font-family: Inter" class="ml-2">
                <div class="w-[95%]">
                    <b class="font-black text-[30px] text-[#020B75]">ИХ УНШСАН</b>
                </div>
                <div class="w-[95%]">
                    <div class="flex">
                        <div class="flex">
                            <img src={{ asset('zuragnuud/Vector7.png') }} alt="" class="h-[44px]">
                            <b class="text-[40px] text-[#020B75] text-[bold] pl-2">1</b>
                        </div>
                        <div class="my-2 mx-6 w-[181px]">
                            <b class="text-[#020B75] text-[20px] mx-2">Нийтлэл</b>
                            <div>
                                <b>Metaverse-д хэрхэн үнэ цэнэ бүтээлцэх вэ?</b>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex">
                            <img src={{ asset('zuragnuud/Vector7.png') }} alt="" class="h-[44px]">
                            <b class="text-[40px] text-[#020B75] text-[bold] pl-2">2</b>
                        </div>
                        <div class="my-2 mx-6 w-[181px]">
                            <b class="text-[#020B75] text-[20px] mx-2">Мэдээ</b>
                            <div>
                                <b>Бизнесийн салбарт манлайлагчдын анхаарах хэрэгтэй технологийн 14 ШИНЭ ТРЭНД</b>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex">
                            <img src={{ asset('zuragnuud/Vector7.png') }} alt="" class="h-[44px]">
                            <b class="text-[40px] text-[#020B75] text-[bold] pl-2">3</b>
                        </div>
                        <div class="my-2 mx-6 w-[181px]">
                            <b class="text-[#020B75] text-[20px] mx-2">Нийтлэл</b>
                            <div>
                                <b>Инновацийн санаачлагыг дэмжих "Mon-X" хөтөлбөр эхэллээ</b>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex">
                            <img src={{ asset('zuragnuud/Vector7.png') }} alt="" class="h-[44px]">
                            <b class="text-[40px] text-[#020B75] text-[bold] pl-2">4</b>
                        </div>
                        <div class="my-2 mx-6 w-[181px]">
                            <b class="text-[#020B75] text-[20px] mx-2">Нийтлэл</b>
                            <div>
                                <b>Казакстан улс криптотай нөхөрлөв | Octagon weekly news</b>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex">
                            <img src={{ asset('zuragnuud/Vector7.png') }} alt="" class="h-[44px]">
                            <b class="text-[40px] text-[#020B75] text-[bold] pl-2">5</b>
                        </div>
                        <div class="my-2 mx-6 w-[181px]">
                            <b class="text-[#020B75] text-[20px] mx-2">Нийтлэл</b>
                            <div>
                                <b>Sendly: Дэлхийг хэрэх Монгол финтек</b>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>


    <hr>


    <x-slide1/>


    <x-slide2/>

    <x-slide3/>

    
@endsection

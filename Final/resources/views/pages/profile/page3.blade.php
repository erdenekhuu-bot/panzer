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
                <b class="text-[#2B2D42] text-[30px]">Имэйлийн дохиоллын тохиргоо</b>
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

        <form method="post" action='/profile/handleThirdProfile' class="grid" style="grid-template-rows: 0fr 0.1fr;" enctype="multipart/form-data">
            @csrf
            <div class="px-9 bg-[white] h-[291px] w-[770px]">
                <div class="my-6" style="font-family: 'Inter';">
                    <input type="text" id="sample" class="w-[704px] h-[43px] border-[1px] text-[14px] text-[white] bg-[#9EA3C0]" style="border-radius: 5px;" value="Та erdeneundral@startco.net хаягаар танд имэйл мэдэгдэл илгээх e27 зөвшөөрлийг өгсөн байна.">
                </div>
                <script>
                    let sample=document.getElementById('sample')
                    sample.addEventListener('click',function(e){
                        e.target.value=''
                    })
                </script>
                <div class="mt-6 mb-2" style="font-family: 'Inter';"px>
                    <b class="text-[16px]">Мэдээллийн хуудас</b>
                </div>
                <div class="w-[400px] text-[14px]">
                    <p class="flex justify-between">Өдөр тутмын тойм <input type="checkbox" name="news"></p>
                    <p class="flex justify-between">Долоо хоног бүр шинэ стартапууд <input type="checkbox" name="wnews"></p>
                    <p class="flex justify-between">Долоо хоног бүр шинэ хөрөнгө оруулагчид <input type="checkbox" name="dnews"></p>
                    <p class="flex justify-between">Долоо хоног бүр шинэ ажлын байр <input type="checkbox" name="snews"></p>
                    <p class="flex justify-between">Долоо хоног бүр шинэ арга хэмжээ <input type="checkbox" name="mnews"></p>
                </div>
            </div>
            <div class="my-5">
                <button type="submit" class="text-[white] bg-[#0029FF] w-[129px] h-[35px]" style="border-radius: 5px;">Хадгалах </button>
            </div>
        </form>
    </section>
</section>
@endsection

@extends('Main')
@section('body')
<section class="h-[1796px] bg-[#F8FAFC]" style="grid-template-rows: 0.13fr 1fr;">
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
                <b class="text-[#2B2D42] text-[30px]" style="font-family: 'Inter';">Стартап мэдээлэл
                </b>
            </div>
        </div>
    </section>
    <section class="grid" style="grid-template-columns: 0.4fr 1fr;">
        <div class="bg-[white]" style="margin: 0 auto;">
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

        <form method="post" action='/company/handleSecondCompany' class="grid" style="grid-template-rows: 0fr 0.1fr;" enctype="multipart/form-data">
            @csrf
            <div class="px-9 w-[769px] h-[675px] bg-[white]" style="font-family: 'Inter';">
                <div class="my-6" style="font-family: 'Inter';">
                    <b class="text-[14px]">Цаг хугацаа <b class="text-[#DE3436]">*</b></b>
                </div>
                <select name="firstSector" class="w-[84px] h-[32px] border-[solid] border-[1px] border-[#9EA3C0]" style="border-radius: 5px;">
                    <option>Сар</option>
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                </select>
                @error('firstSector')
                    {{ $message }}
                @enderror
                <select name="secondSector" class="ml-3 w-[88px] h-[32px] border-[solid] border-[1px] border-[#9EA3C0]" style="border-radius: 5px;">
                    <option>Жил</option>
                    <option>2022</option>
                    <option>2045</option>
                    <option>2011</option>
                    <option>2001</option>
                </select>
                @error('secondSector')
                    {{ $message }}
                @enderror
                <div class="my-6" style="font-family: 'Inter';">
                    <b class="text-[14px]">Vertical(s) <b class="text-[#DE3436]">*</b></b>
                </div>
                <input type="text" name="vertical" class="w-[677px] h-[35px] border-[1px] border-[#9EA3C0]" style="border-radius: 5px;" placeholder="Зах зээл/салбараа сонгох">
                @error('vertical')
                    {{ $message }}
                @enderror
                <div class="my-6" style="font-family: 'Inter';">
                    <b class="text-[14px]">Одоогоор хандив цуглуулж байна уу? <b class="text-[#DE3436]">*</b></b>
                </div>
                <input type="radio" name="menu1"> <b>Тийм</b>
                <input type="radio" class="ml-3" name="menu2"> <b>Үгүй</b>
                <div class="my-6" style="font-family: 'Inter';">
                    <b class="text-[14px]">Стартап аль улсад үйл ажиллагаа явуулж байна вэ? <b class="text-[#DE3436]">*</b></b>
                </div>
                <input type="text" name="startup" class="w-[677px] h-[35px] border-[1px] border-[#9EA3C0]" style="border-radius: 5px;" placeholder="Үйл ажиллагааны талбарыг сонгоно уу">
                @error('startup')
                    {{ $message }}
                @enderror
                <div class="my-6" style="font-family: 'Inter';">
                    <b class="text-[14px]">Боломжууд <b class="text-[#DE3436]">*</b></b>
                </div>
                <div class="my-3 text-[14px]">
                    <input type="checkbox" name="choose1"> <b>Би түншлэлийн боломжуудын талаар холбогдох сонирхолтой байна</b>
                </div>
                <div class="my-3 text-[14px]">
                    <input type="checkbox" name="choose2"> <b>Би мэдлэг, хэтийн төлөвөө солилцохын тулд холбогдох сонирхолтой байна</b>
                </div>
                <div class="my-3 text-[14px]">
                    <input type="checkbox" name="choose3"> <b>Би зөвлөхийн боломжуудыг судлахын тулд холбогдох сонирхолтой байна</b>
                </div>
                <div class="my-6 flex">
                    <button type="button" class="m-2 border-[1px] w-[95px] h-[35px] text-[#0029FF] border-[#0029FF]" style="border-radius: 5px;">ЦУЦЛАХ</button>
                    <button type="submit" class="m-2 border-[1px] w-[95px] h-[35px] text-[white] bg-[#0029FF]" style="border-radius: 5px;">НЭМЭХ</button>
                </div>
            </div>
        </form>
    </section>
</section>
@endsection

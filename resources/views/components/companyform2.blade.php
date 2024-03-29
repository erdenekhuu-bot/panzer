<form action='/company/handleSecondCompany' method="post" enctype="multipart/form-data">
    @csrf
    <b class="text-[30px]">Стартап мэдээлэл</b>

    <div class="my-4">
        <b class="text-[14px]">Цаг хугацаа</b>
    </div>

    <div class="my-4 flex items-center">
        <select name="firstSector" class="w-[88px] border rounded-lg text-[14px]">
            <option>Сар</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
        </select>
        <select name="secondSector" class="w-[88px] border rounded-lg mx-3 text-[14px]">
            <option>Жил</option>
            <option>2022</option>
            <option>2045</option>
            <option>2011</option>
            <option>2001</option>
        </select>
    </div>
   
    <div class="my-4">
        <b class="text-[14px]">Vertical(s)</b>
    </div>
    <input type="text" name="vertical" class="w-[677px] h-[35px] border border-[#9EA3C0] rounded-lg text-[14px] text-[#9EA3C0]" placeholder="Зах зээл/салбараа сонгох">

    <div class="my-4">
        <b class="text-[14px]">Одоогоор хандив цуглуулж байна уу?</b>
    </div>
    <input type="radio" name="menu1"> <b class="text-[14px]">Тийм</b>
    <input type="radio" class="ml-3" name="menu2"> <b class="text-[14px]">Үгүй</b>

    <div class="my-4">
        <b class="text-[14px]">Стартап аль улсад үйл ажиллагаа явуулж байна вэ?</b>
    </div>
    <input type="text" name="startup" class="w-[677px] h-[35px] border border-[#9EA3C0] rounded-lg text-[14px] text-[#9EA3C0]" placeholder="Үйл ажиллагааны талбарыг сонгоно уу">

    <div class="my-4">
        <b class="text-[14px]">Боломжууд</b>
    </div>

    <div class="my-3 text-[14px]">
        <input type="checkbox" name="choose1"> <b class="px-1">Би түншлэлийн боломжуудын талаар холбогдох сонирхолтой байна</b>
    </div>
    <div class="my-3 text-[14px]">
        <input type="checkbox" name="choose2"> <b class="px-1">Би мэдлэг, хэтийн төлөвөө солилцохын тулд холбогдох сонирхолтой байна</b>
    </div>
    <div class="my-3 text-[14px]">
        <input type="checkbox" name="choose3"> <b class="px-1">Би зөвлөхийн боломжуудыг судлахын тулд холбогдох сонирхолтой байна</b>
    </div>

    <div class="my-8 flex items-center">
        <button type="buttom" class="w-[95px] h-[35px] border-2 border-[#0029FF] rounded-lg"><b class="text-[#0029FF] text-[14px]">ЦУЦЛАХ</b></button>
        <button type="submit" class="w-[95px] h-[35px] bg-[#0029FF] rounded-lg mx-4"><b class="text-[white] text-[14px]">НЭМЭХ</b></button>
    </div>
</form>
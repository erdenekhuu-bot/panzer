<form action='/profile/handleThirdProfile' method="post" enctype="multipart/form-data">
    @csrf
    <b class="text-[30px]">Имэйлийн дохиоллын тохиргоо</b>
    
    <label class="w-[704px] bg-[#9EA3C0] flex items-center my-8 h-[43px] border rounded-lg">
        <b class="text-[14px] text-[white]">Та erdeneundral@startco.net хаягаар танд имэйл мэдэгдэл илгээх e27 зөвшөөрлийг өгсөн байна.</b>
    </label>
    
    <div class="my-4">
        <b class="text-[16px]">Мэдээллийн хуудас</b>
    </div>
        <div class="my-2 text-[14px] flex items-center justify-between w-[400px]">
            <span>Өдөр тутмын тойм</span> <input type="checkbox" name="news">
        </div>
        <div class="my-2 text-[14px] flex items-center justify-between w-[400px]">
            <span>Долоо хоног бүр шинэ стартапууд</span> <input type="checkbox" name="wnews">
        </div>
        <div class="my-2 text-[14px] flex items-center justify-between w-[400px]">
            <span>Долоо хоног бүр шинэ хөрөнгө оруулагчид</span> <input type="checkbox" name="dnews">
        </div>
        <div class="my-2 text-[14px] flex items-center justify-between w-[400px]">
            <span>Долоо хоног бүр шинэ ажлын байр</span> <input type="checkbox" name="snews">
        </div>
        <div class="my-2 text-[14px] flex items-center justify-between w-[400px]">
            <span>Долоо хоног бүр шинэ арга хэмжээ</span> <input type="checkbox" name="mnews">
        </div>
    


    <div class="my-8 flex items-center text-[14px]">
        <input type="checkbox" name="state"> <b class="px-2">Одоогоор энд ажиллаж байна.</b>
    </div>
    <div class="my-4 flex items-center">
        <button type="buttom" class="w-[95px] h-[35px] border-2 border-[#0029FF] rounded-lg"><b class="text-[#0029FF] text-[14px]">ЦУЦЛАХ</b></button>
        <button type="submit" class="w-[95px] h-[35px] bg-[#0029FF] rounded-lg mx-4"><b class="text-[white] text-[14px]">НЭМЭХ</b></button>
    </div>
</form>
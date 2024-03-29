<form action='/profile/handleSecondProfile' method="post" enctype="multipart/form-data">
    @csrf
    <b class="text-[30px]">Туршлага</b>
    <div class="my-4 flex items-center">
        <b class="text-[14px]">Ажлын туршлага нэмэх</b> @error('fullName')<b class="text-[red]">*</b>@enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" placeholder="Company" name="skill">
    
    <div class="my-4 flex items-center text-[14px]">
        <span>Зөвхөн startupnews-д нэмэгдсэн компаниудыг олж болно. <a href="/company"><b class="text-[#0029FF]">Та компани нэмэхийг хүсч байна уу? Энд дар</b></a></span>
    </div>
    
    <div class="my-4 flex items-center">
        <b class="text-[14px]">Үүрэг</b> @error('fullName')<b class="text-[red]">*</b>@enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" placeholder="Developer, Founder" name="role">
    
    <div class="my-4 flex items-center">
        <b class="text-[14px]">Цаг хугацаа</b> @error('fullName')<b class="text-[red]">*</b>@enderror
    </div>
    <div class="flex">
        <div>
            <select class="w-[102px] border rounded-lg text-[14px]" name="start_month">
                <option>Month</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
            </select>
            <select class="w-[102px] border rounded-lg text-[14px] mx-2" name="start_year">
                <option>Year</option>
                <option>2024</option>
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
            </select>
        </div>
        <hr class="w-[12px]">
        <div>
            <select class="w-[102px] border rounded-lg text-[14px]" name="end_month">
                <option>Month</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
            </select>
            <select class="w-[102px] border rounded-lg text-[14px] mx-2" name="end_year">
                <option>Year</option>
                <option>2024</option>
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
            </select>
        </div>
    </div>
    <div class="my-8 flex items-center text-[14px]">
        <input type="checkbox" name="state"> <b class="px-2">Одоогоор энд ажиллаж байна.</b>
    </div>
    <div class="my-4 flex items-center">
        <button type="buttom" class="w-[95px] h-[35px] border-2 border-[#0029FF] rounded-lg"><b class="text-[#0029FF] text-[14px]">ЦУЦЛАХ</b></button>
        <button type="submit" class="w-[95px] h-[35px] bg-[#0029FF] rounded-lg mx-4"><b class="text-[white] text-[14px]">НЭМЭХ</b></button>
    </div>
</form>
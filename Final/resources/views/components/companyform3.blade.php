
<form action='/company/handleThirdCompany' method="post" enctype="multipart/form-data">
    @csrf
    <b class="text-[30px]">Багийн мэдээлэл</b>

    <div class="my-4">
        <b class="text-[14px]">Багийн гишүүдээ нэмснээр профайлаа бусдаас ялгаруулна уу.</b>
    </div>

    <div class="my-4 flex items-center">
        <img src={{ asset('storage/' . $img) }} alt="" class="w-[40px] h-[40px] rounded-full">
        <div class="px-2">
            <span style="font-family: Libre Franklin;" class="text-[#2B2D42]">{{ $name }}</span>
            <p></p>
            <span class="text-[#020B75]">{{ $role }}</span>
        </div>
    </div>

    <div class="my-4">
        <b class="text-[14px]">Vertocal(s)</b>
    </div>

    <div class="my-4">
        <select class="selectpicker w-100" multiple data-selected-text-format="count > 10" data-live-search="true" id="opt" name="team_member">
          @if ($team != null)
            @foreach ($team as $member)
                <option value="{{ $member->name }}">{{ $member->name }}</option>
            @endforeach
          @endif
        </select>
    </div>
    <div class="my-6 border-collapse">
        <div class="cursor-pointer mx-3" id="team">
        </div>
        <script>
            $(document).ready(function() {
                $('#opt').change(function() {
                    $.ajax({
                        url: '/company/addteam',
                        type: 'POST',
                        data: {
                            team_member: $(this).val(),
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(JSON.stringify(response));
                        }
                    });
                });
            });
        </script>
    </div>

    <div class="my-6 text-[14px]">
        <b>Зөвхөн startupnews профайлтай хэрэглэгчийг энд нэмэх боломжтой.
            <b class="text-[#0029FF] cursor-pointer hover:underline" id="invite">Энд дарж урилга илгээнэ
                үү</b>
        </b>
    </div>

    <x-mail-invite/>
    
    <script>
        $(document).ready(function(){
            $('#invite').click(function(){
                $('#panel').show();
            });
            $('#send').click(function(){
                    $.ajax({
                        url: '/api/send-email',
                        type: 'GET',
                        data: {
                            email: $('#handle').val()
                        },
                        success: function(){
                            alert('Мэйл хаягаа шалгана уу.')
                        }
                    })
            })
            $('#cancel').click(function(){
                $('#panel').hide();
            })
        })
    </script>
    <div class="my-4 flex items-center">
        <b class="text-[14px]">Цаг хугацаа</b> @error('fullName')
            <b class="text-[red]">*</b>
        @enderror
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
        <button type="buttom" class="w-[95px] h-[35px] border-2 border-[#0029FF] rounded-lg"><b
                class="text-[#0029FF] text-[14px]">ЦУЦЛАХ</b></button>
        <button type="submit" class="w-[95px] h-[35px] bg-[#0029FF] rounded-lg mx-4"><b
                class="text-[white] text-[14px]">НЭМЭХ</b></button>
    </div>
    <script></script>
</form>

@extends('Main')
@section('body')
    <section class="h-[1796px] bg-[#F8FAFC]" style="grid-template-rows: 0.13fr 1fr;">
        <section class="grid" style="grid-template-columns: 0.4fr 1fr;">
            <div style="margin: 0 auto;">
                <div class="mt-48 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                    <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center"
                        style="border-radius: 50%;"><b>1</b></div>
                    <div class="px-2">
                        <b class="text-[16px] text-[#020B75]">Ерөнхий мэдээлэл</b>
                    </div>
                </div>
            </div>
            <div class="px-8">
                <div class="mt-48">
                    <b class="text-[#2B2D42] text-[30px]" style="font-family: 'Inter';">Багийн мэдээлэл
                    </b>
                </div>
            </div>
        </section>
        <section class="grid" style="grid-template-columns: 0.4fr 1fr;">
            <div class="bg-[white]" style="margin: 0 auto;">
                <div class="my-1 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                    <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center"
                        style="border-radius: 50%;"><b>2</b></div>
                    <div class="px-2">
                        <b class="text-[16px] text-[#020B75]">Стартап мэдээлэл
                        </b>
                    </div>
                </div>
                <div class="my-1 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                    <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center"
                        style="border-radius: 50%;"><b>3</b></div>
                    <div class="px-2">
                        <b class="text-[16px] text-[#020B75]">Багийн мэдээлэл
                        </b>
                    </div>
                </div>
                <div class="my-1 flex items-center h-[52px] w-[221px]" style="font-family: Inter;">
                    <div class="text-[#FFF] w-[30px] h-[30px] bg-[#4CB898] flex justify-center items-center"
                        style="border-radius: 50%;"><b>4</b></div>
                    <div class="px-2">
                        <b class="text-[16px] text-[#020B75]">Дуус!
                        </b>
                    </div>
                </div>
            </div>

            <form method="post" action="/company/handleThirdCompany" class="grid" style="grid-template-rows: 0fr 0.1fr;">
                @csrf
                <div class="px-9 w-[783px] h-[587.1px] bg-[white]" style="font-family: 'Inter';">
                    <div class="my-6">
                        <b class="text-[14px]">Багийн гишүүдээ нэмснээр профайлаа бусдаас ялгаруулна уу. </b>
                    </div>
                    <div class="my-6">
                        <div class="grid" style="grid-template-rows: 0fr;">
                            <div class="grid" style="grid-template-columns: 0.1fr 1.3fr;">
                                <div>
                                    <img src={{ asset('storage/' . $img) }} alt=""
                                        class="w-[50px] h-[50px] rounded-full">
                                </div>
                                <div class="text-[16px] px-2">
                                    <span class="text-[#2B2D42]">{{ $name }}</span>
                                    <p></p>
                                    <p></p>
                                    <span class="text-[#020B75]">{{ $role }}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="my-6 text-[14px]">
                        ` <b>Vertical(s) <span class="text-[#DE3436]">*</span></b>
                    </div>
                    <div class="my-6 border-[solid] border-[1px] border-[#9EA3C0]" style="border-radius: 5px;">
                        <select class="w-[677px] h-[50px]" id="opt" name="team_member">
                            @foreach ($team as $member)
                                <option value="{{ $member->name }}">{{ $member->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-6 border-collapse">
                        <div class="cursor-pointer mx-3" id="team">
                        </div>
                        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
                        <x-MailInvite />
                    </div>
                    <div class="my-6 text-[14px]">
                        <b>Цаг хугацаа</b>
                    </div>
                    <div>
                        <select class="w-[102px] h-[32px] border-[1px]" style="border-radius: 8px;" name="begin_month">
                            <option>--select--</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                        </select>
                        <select class="w-[87px] h-[32px] border-[1px] mr-5" style="border-radius: 8px;" name="begin_year">
                            <option>--select--</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                        </select>

                        -

                        <select class="w-[102px] h-[32px] border-[1px] ml-5" style="border-radius: 8px;" name="end_month">
                            <option>--select--</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                        </select>
                        <select class="w-[87px] h-[32px] border-[1px]" style="border-radius: 8px;" name="end_year">
                            <option>--select--</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                        </select>
                    </div>
                    <div class="my-6">
                        <input type="checkbox" name="status">
                        <b class="text-[14px]" style="font-family: 'Inter';">Одоогоор энд ажиллаж байна</b>
                    </div>
                    <div class="my-6">
                        <button type="button" class="m-2 border-[1px] w-[95px] h-[35px] text-[#0029FF] border-[#0029FF]"
                            style="border-radius: 5px;">ЦУЦЛАХ</button>
                        <button type="submit" class="m-2 border-[1px] w-[95px] h-[35px] text-[white] bg-[#0029FF]"
                            style="border-radius: 5px;">НЭМЭХ</button>
                    </div>
                </div>
            </form>
        </section>
    </section>
@endsection

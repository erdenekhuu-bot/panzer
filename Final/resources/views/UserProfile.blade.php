@extends('Main')

@section('body')
<section class="h-[126px] bg-[#2CFBFE]">
    <section class="flex">
            <div class="my-8">
                <img src={{ asset('storage/'.$img) }} alt="bhgu" class="w-[146.56px] h-[146.56px] ml-14 rounded-full">
            </div>
            <div class="w-[409px] mt-12 mx-6">   
                <div>
                    <b class="text-[30px] text-[#020B75]">{{ $name }}</b> <p></p>
                </div>
                <div>
                    <span class="text-[20px] text-[#020b75]">{{ $role }}</span>
                </div>
                <div class="flex mt-8">
                    <img src={{ asset('images/insta1.svg') }} alt="" class="mr-4">
                    <img src={{ asset('images/face1.svg') }} alt="" class="mx-4">
                    <img src={{ asset('images/Linke1.svg') }} alt="" class="mx-4">
                    <img src={{ asset('images/Twit1.svg') }} alt="" class="ml-4">
                </div>
            </div>
    </section>
    <section class="grid" style="grid-template-columns: 1fr 2fr 1fr;">
        <div class="mt-8">
            <div class="flex items-center">
                <img src={{ asset('images/ext1.png') }} alt="" class="w-[17px] h-[17px]"> <span class="mx-3">Lives in Ulan-Bator</span>
            </div>
            <div class="flex items-center my-1">
                <img src={{ asset('images/ext2.png') }} alt="" class="w-[17px] h-[17px]"> <span class="mx-3">0 Articles Published</span>
            </div>
            <div class="flex items-center my-1">
                <img src={{ asset('images/ext3.png') }} alt="" class="w-[17px] h-[17px]"> <span class="mx-3">0 Content Views</span>
            </div>
            <div class="flex items-center my-1">
                <img src={{ asset('images/ext4.png') }} alt="" class="w-[17px] h-[17px]"> <span class="mx-3">0 Events Posted</span>
            </div>
            <div class="flex items-center">
                <img src={{ asset('images/ext5.png') }} alt="" class="w-[17px] h-[17px]"> <span class="mx-3">Joined Feb 2020</span>
            </div>
        </div>
        <div>
            <b class="text-[30px] text-[#020B75]">Тухай</b> <p></p>
            <div class="bg-[white] px-2">
                {{ $content }}
            </div>
            <div class="my-4">
                <b class="text-[20px] text-[#020b75]">Нийтлэл</b>
            </div>
             <div class="w-[552px] bg-[white] px-4">
                 <div class="mt-4">
                    <b>
                        @php
                            $cnt=count($size);
                        @endphp
                        Нийтэлсэн ({{ $cnt }})
                   </b>
                 </div>
                 @foreach ($blog_head->bridgeToPost as $nm)
                    <div class="my-4 grid" style="grid-template-columns: 1fr 5fr;">
                        <div class="px-1">
                            <img src={{ asset('images/startup.png') }} alt="" class="w-[71px] h-[71px] rounded-lg">
                        </div>
                        <div>
                            <b>{{ $nm->head }}</b> <p></p>
                            <div class="flex items-end">
                                <img src={{ asset('storage/'.$img) }} alt="" class="w-[25px] h-[24.59px] rounded-full">
                                <span class="px-2">{{ $name }} <span class="px-2">{{ $nm->created_at }}</span></span>
                            </div>
                        </div>
                    </div>
                 @endforeach
             </div>
        </div>
        <div>
            <b class="text-[20px] text-[#020b75]">Туршлага</b> <p></p>
            <div class="grid bg-[white]" style="grid-template-columns: 2fr 1fr;">
                @foreach ($turshlaga->bridgeToSkill as $t)
                    <div class="px-2">
                        <b class="text-[13.66px] text-[#020B75]">{{ $t->Role }}</b> <p></p>
                        <span class="text-[13.66px]">{{ $t->Company }}</span> <p></p>
                        <span class="text-[12px]">{{ $t->start_month }} <span class="text-[12px] mx-1">{{ $t->start_year .' - present' }}</span></span>
                    </div>
                    <div class="px-1">
                        <img src={{ asset('storage/'.$img) }} alt="" class="w-[71px] h-[71px] rounded-lg">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@endsection
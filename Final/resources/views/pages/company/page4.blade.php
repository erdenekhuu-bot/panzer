@extends('Main')
@section('body')
<section class="h-[3443.56px]">
    <div class="h-[150px]"></div>
    <div class="w-[706px]" style="margin: 0 auto;">
        <form action='/handleRegister' method="POST">
            @csrf
            <b class="text-[40px]">Гарааны мэдээний нийгэмлэгт нэгдээрэй!</b>
            <div class="my-6" style="margin: 0 auto;">
                <input type="checkbox" name=""> <span class="mx-1"><b>Намайг Daily Digest-д бүртгүүлээрэй</b></span>
            </div>
            <div class="mt-6">
                <label>Нэр *</label> <p></p>
                <input type="text" name="username" class="w-[706px] border-[solid] border-[1px]">
            </div>
            <div class="my-4">
                <label>Имэйл *</label> <p></p>
                <input type="text" name="email" class="w-[706px] border-[solid] border-[1px]">
            </div>
            <div class="my-4">
                <label>Нууц үг *</label> <p></p>
                <input type="text" name="password" class="w-[706px] border-[solid] border-[1px]">
            </div>
            <div class="my-4">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </div>
            <div class="my-4">
                <button type="submit" class="w-[84px] h-[38px] bg-[#0029FF] text-[white]" style="border-radius: 5px;">Оруулах</button>
            </div>
            <div class="w-[344px] h-[48px] mt-52 mx-52 text-center">
                <b class="text-[24px] text-[#020B75]">Join the startupnews community!</b>
                <div class="my-4">
                    <span class="text-[#020B75] text-[12px]">Sign me up for this Daily Digest</span>
                </div>
            </div>
            @if (session('ok'))
                <span>{{ session('ok') }}</span>
            @endif
        </form>
    </div>
</section>
@endsection

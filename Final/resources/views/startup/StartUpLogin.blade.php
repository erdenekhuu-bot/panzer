@extends('Main')
@section('body')
<section class="h-[2510px]">
    <div class="h-[150px]"></div>
    <form action="" method="post">
        <div class="w-[666px] text-center" style="margin: 0 auto;">
            <div class="my-4">
                <b class="text-[36px]">Өөрийн startupnews руу нэвтэрнэ үү</b>
            </div>
            <div>
                <label>Үргэлжлүүлэхийн тулд имэйл хаяг, нууц үгээ оруулна уу.</label>
            </div>
            <div class="my-6">
                <input type="text" placeholder="admin@company.com" name="email" class="w-[400px] h-[56px] border-[solid] border-[1px]" style="border-radius: 10px;">
            </div>
            <div class="my-6">
                <input type="password" placeholder="password" name="password" class="w-[400px] h-[56px] border-[solid] border-[1px]" style="border-radius: 10px;">
            </div>
            <div class="my-4">
                <button type="submit" class="w-[400px] h-[56px] bg-[#3A86FF] text-[white]" style="border-radius: 5px;"><b>SIGN IN</b></button>
            </div>
            <div class="mx-32 text-[14px]">
                <div class="flex justify-between">
                    <div>
                        <span>Don't have an account yet?</span>
                        <a href="/startupUser/signup"><b class="text-[#3A86FF]">Sign Up</b></a>
                    </div>
                    <div>
                        <a href=""><b class="text-[#3A86FF]">Forgot password</b></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection

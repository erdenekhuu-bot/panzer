@extends('Main')
@section('body')
<section class="h-[2510px]">
    <div class="h-[150px]"></div>
    <form action="" method="post">
        <div class="w-[608px]" style="margin: 0 auto;">
            <div class="text-center">
                <b class="text-[34px]">Бүртгүүлэх</b>
            </div>
            <div class="my-1 text-center">
                <b class="text-[14px]">Бүртгэлдээ нэвтэрснээр та манай хэрэглэгчийн туршлагыг үргэлжлүүлэн ашиглах боломжтой.</b>
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <label>Нэр</label> <p></p>
                    <input type="text" placeholder="Нэр" class="w-[295px] h-[48px] rounded-lg">
                </div>
                <div>
                    <label>Овог</label> <p></p>
                    <input type="text" placeholder="Овог нэр" class="w-[295px] h-[48px] rounded-lg">
                </div>
            </div>
            <div class="my-4">
                <label>Имэйл</label> <p></p>
                <input type="text" placeholder="admin@company.com" class="w-[608px] h-[48px] rounded-lg">
            </div>
            <div class="my-4">
                <label>Нууц үг</label> <p></p>
                <input type="password" placeholder="password" class="w-[608px] h-[48px] rounded-lg">
            </div>
            <div class="my-4 text-[12px]">
                <input type="checkbox"> <span class="mx-1">Намайг санаарай</span>
            </div>
            <div>
                <button class="w-[608px] h-[48px] bg-[#3A86FF] text-[white] rounded-lg"><b>БҮРТГҮҮЛЭХ</b></button>
            </div>
        </div>
    </form>
</section>
@endsection

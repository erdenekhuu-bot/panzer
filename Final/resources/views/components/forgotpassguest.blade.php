<section style="display: none;" id="loginpop"
        class="w-full h-full fixed top-0 bottom-0 left-0 right-0 bg-[black] bg-opacity-50 z-20">
        <form method="post" action='/user/checkLogin' class="w-[710px] h-[474px] grid fixed"
            style="grid-template-columns: 1fr 1fr; margin: 100px 310px; ">
            @csrf
            @if ($errors)
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
            <section style="background-color: white;">
                @if (session('error'))
                    <span>{{ session('error') }}</span>
                @endif
                <div class="mt-6 text-center">
                    <b class="text-[34px]">Бүртгэлд нэвтрэх</b>
                </div>
                <div class="mt-6 text-center">
                    <input type="text" placeholder="admin@company.com" name="email" class="w-[296px] h-[35px]"
                        style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                </div>
                <div class="mt-6 text-center">
                    <input type="password" placeholder="password" name="password" class="w-[296px] h-[35px]"
                        style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                </div>
                <div class="px-8">
                    <span class="text-[12px]">Та хараахан дансгүй байна уу? <span
                            class="text-[#0029FF] cc cursor-pointer">Бүргтгүүлэх</span></span>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.cc').click(function() {
                            $('#signpop').show()
                        })
                        $(document).keydown(function(e) {
                            if (e.key == 'Escape') {
                                $('#signpop').hide()
                            }
                        })
                    })
                </script>
                <div class="mt-4 flex justify-between px-10">
                    <a href="/forgotpass"><span class="my-2 text-[#0029FF] w-[141px]">Нууц үгээ мартсан</span></a>
                    <button class="w-[120px] h-[48px] bg-[#020B75] text-[#2CFBFE]"
                        style="border-radius: 10px;">Нэвтрэх</button>
                </div>
                <div class="px-8 my-4">
                    <b class="text-[12px]">Эсвэл сошиал медиагаар нэвтэрнэ үү.</b>
                </div>
                <div class="flex justify-center">
                    <div class="m-1 w-[96px] h-[40px]">
                        <img src={{ asset('images/google697.png') }} alt="">
                    </div>
                    <div class="m-1 w-[96px] h-[40px]">
                        <img src={{ asset('images/in696.png') }} alt="">
                    </div>
                    <div class="m-1 w-[96px] h-[40px]">
                        <img src={{ asset('images/facebook695.png') }} alt="">
                    </div>
                </div>
            </section>
            <section style="background-color: #020B75;"></section>
        </form>
    </section>
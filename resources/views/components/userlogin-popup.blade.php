<section style="display: none;" id="loginpop"
    class="w-full h-full fixed top-0 bottom-0 left-0 right-0 bg-[black] bg-opacity-50 z-20">
    <form method="post" id="myForm" action='/user/checkLogin' class="w-[710px] h-[474px] grid fixed"
        style="grid-template-columns: 1fr 1fr; margin: 100px 310px; ">
        @csrf
        <section style="background-color: white;">
            <div class="mt-6 text-center">
                <b class="text-[34px]">Бүртгэлд нэвтрэх</b>
            </div>
            <div class="px-10">
                <span class="text-[12px]">Хэрэглэгчийн нэр, нууц үгээ оруулна уу</span>
            </div>
            <div class="mt-6 text-center">
                <input type="text" placeholder="admin@company.com" name="email"
                    class="w-[296px] h-[35px] border-2 @error('email') border-[red] @enderror"
                    style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                <span id="emailcheck" class="text-[red] text-[12px] flex px-10 flex-start"></span>
            </div>
            <div class="mt-6 text-center">
                <input type="password" placeholder="password" name="password"
                    class="w-[296px] h-[35px] border-2 @error('password') border-[red] @enderror"
                    style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                <span id="passwordcheck" class="text-[red] text-[12px] flex px-10 flex-start"></span>
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
                    $('.forgotpasspop').click(function() {
                        $('#forgotpass').show()
                    })
                    $(document).keydown(function(e) {
                        if (e.key == 'Escape') {
                            $('#signpop').hide()
                            $('#forgotpass').hide()
                        }
                    })
                    $('#myForm').submit(function(e) {
                        e.preventDefault();
                        $.ajax({
                            type: "POST",
                            url: "/user/checkLogin",
                            data: $(this).serialize() + '&_token=' + $('meta[name="csrf-token"]').attr(
                                'content'),
                            success: function(response) {
                                if (response.error) {
                                    $('#emailcheck').text(response.error.email[0]);
                                    $('#passwordcheck').text(response.error.password[0]);
                                } 
                                else if (response.success) {
                                    window.location.href = '/';
                                } 
                                else if (response.auth){
                                    $('#emailcheck').text(response.auth)
                                    $('#passwordcheck').text(response.auth)
                                }
                            },
                        });
                    });

                })
            </script>
            <div class="mt-4 flex justify-between px-10">
                <span class="my-2 text-[#0029FF] w-[141px] cursor-pointer forgotpasspop">Нууц үгээ мартсан</span>
                <button class="w-[120px] h-[48px] bg-[#020B75] text-[#2CFBFE] rounded-lg">Нэвтрэх</button>
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

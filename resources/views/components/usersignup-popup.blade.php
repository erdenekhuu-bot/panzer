<section style="display: none;" id="signpop"
    class="w-full h-full fixed top-0 bottom-0 left-0 right-0 bg-opacity-30 z-30">
    <form method="post" id="registerForm" action='/user/checkSignUp' class="w-[710px] h-[474px] grid fixed"
        style="grid-template-columns: 1fr 1fr; margin: 100px 310px; ">
        @csrf
        <section style="background-color: white;">
            <div class="mt-6 mx-8">
                <b class="text-[34px]">Бүртгүүлэх</b>
            </div>
            <div class="mx-8">
                <span class="text-[12px]">Бүртгэлдээ нэвтэрснээр та манай хэрэглэгчийн туршлагыг үргэлжлүүлэн
                    ашиглах боломжтой.</span>
            </div>
            <div class="mt-6 text-center">
                <input type="text" placeholder="Нэр" name="username" class="w-[296px] h-[35px]"
                    style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                <span id="usernamecheck" class="text-[red] text-[12px] flex px-10 flex-start"></span>
            </div>
            <div class="mt-8 text-center">
                <input type="text" placeholder="Имэйл" name="email" class="w-[296px] h-[35px]"
                    style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                <span id="emailcheck" class="text-[red] text-[12px] flex px-10 flex-start"></span>
            </div>
            <div class="mt-8 text-center">
                <input type="password" placeholder="Нууц үг" name="password" class="w-[296px] h-[35px]"
                    style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
                <span id="repasswordcheck" class="text-[red] text-[12px] flex px-10 flex-start"></span>
            </div>
            <div class="my-6 mx-8 text-[12px] flex justify-between">
                <div class="flex items-center">
                    <input type="checkbox"><span class="mx-1">Намайг санаарай</span>
                </div>
                <div>
                    <span class="text-[#3A86FF] cursor-pointer forgotpasspop">Нууц үгээ мартсан?</span>
                </div>
            </div>
            <div class="text-center">
                <button class="text-[#2CFBFE] bg-[#020B75] w-[273px] h-[48px]"
                    style="border-radius: 5px;">БҮРТГҮҮЛЭХ</button>
            </div>
            <script>
                $(document).ready(function() {
                    $('#registerForm').submit(function(e) {
                        e.preventDefault()
                        $.ajax({
                            type: "POST",
                            url: "/user/checkSignUp",
                            data: $(this).serialize() + '&_token=' + $('meta[name="csrf-token"]').attr(
                                'content'),
                            success: function(response) {
                                if (response.error) {
                                    $('#usernamecheck').text(response.error.username[0])
                                    $('#emailcheck').text(response.error.email[0])
                                    $('#repasswordcheck').text(response.error.password[0])
                                }
                                if (response == 1) {
                                    alert('Registered Success')
                                }
                            }
                        })
                    })
                })
            </script>
        </section>
        <section style="background-color: #020B75;"></section>
    </form>
</section>

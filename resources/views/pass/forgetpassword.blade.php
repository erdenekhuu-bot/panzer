<section style="display: none;" id="resetpass" class="w-full h-full fixed top-0 bottom-0 left-0 right-0 bg-opacity-30 z-30">
    <script src="https://cdn.tailwindcss.com"></script>
    <form method="get" action='/api/forgot-password' class="w-[710px] h-[474px] grid fixed"
        style="grid-template-columns: 1fr 1fr; margin: 100px 310px; ">
        <section style="background-color: white;">
            <div class="mt-20 mb-4 text-center">
                <b class="text-[34px]">Имэйл оруулах</b>
            </div>
            <div class="text-center">
                <input type="email" placeholder="confirm email" name="fpass"
                    class="w-[296px] h-[35px] border-2 @error('fpass') border-[red] @enderror"
                    style="border-style: solid; border-color: black; border-width: 2px; border-right: none; border-left: none; border-top: none;">
            </div>
            <div class="my-4 text-center">
                <button class="text-[#2CFBFE] bg-[#020B75] w-[273px] h-[48px]"
                        style="border-radius: 5px;">ИЛГЭЭХ</button>
            </div>
        </section>
        <section style="background-color: #020B75;"></section>
    </form>
</section>
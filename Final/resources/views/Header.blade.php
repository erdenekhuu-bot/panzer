<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()>500){
                $('.hdd-head').css('position','absolute')
            } else {
                $('.hdd-head').css('position','fixed')
            }
        })
    })
</script>


<div class="h-[96px] w-[100%] fixed bg-[white] hdd-head">
    <div class="w-[1072px] mx-auto text-[black] custom-background">
        <section class="flex justify-between items-center h-[48px]" id="head-1">
            <div class="flex">
                <img src={{ asset('images/menu.png') }} alt="error!" class="m-[3px]">
                <div class="mx-6">
                    <b class="text-[20px]" style="font-family: Montserrat; color: #020B75;">startupnews</b>
                </div>
            </div>
            <div class="flex items-center">
                <input type="text" class="border rounded-lg s-input w-[100%] mx-auto h-[30px] hidden">
                <img src={{ asset('images/icon_color.png') }} alt="error!" class="m-[3px] mr-6 search cursor-pointer">
                <script>
                    $(document).ready(function() {
                        $('.search').click(function() {
                            $('.s-input').show()
                        })
                    })
                </script>
                <img src={{ asset('images/moon.png') }} alt="error!" class="m-[3px]">
                <span style="color: #9EA3C0;" class="m-[3px]">
                    @if ($temperature == null)
                        <span class="btn">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span class="sr-only">Loading...</span>
                        </span>
                    @else
                        {{ $temperature . '*C Ulaanbaatar' }}
                    @endif
                </span>
            </div>
        </section>
        <section class="flex justify-between items-center h-[48px]" id="head-2" style="font-family: Montserrat;">
            <a href="/"><span class="cursor-pointer clickNav text-[#9EA3C0]">Мэдээ</span></a>
            <a href="/companies"><span class="cursor-pointer clickNav text-[#9EA3C0]">Стартапууд</span></a>
            <a href="/startup"><span class="cursor-pointer clickNav text-[#9EA3C0]">Монголын стартап экосистемийн
                    зураглал 2022 | START</span></a>
            <span class="cursor-pointer clickNav text-[#9EA3C0]">Холбогдох</span>
            <script>
                $(document).ready(function() {

                    function fadeUp() {
                        $('.fading').fadeIn();
                    }

                    function fadeDown() {
                        $('.fading').fadeIn();
                    }

                    $('.clickNav').click(function() {
                        fadeUp()
                        $.ajax({
                            url: '/',
                            type: 'GET',
                            success: function(e) {
                                fadeDown()
                                $('#pages').load(e)
                            }
                        })
                    })
                })
            </script>
            <div class="flex justify-between items-center cursor-pointer" id="login" style="font-family: 'Inter';">
                <img src={{ asset('images/User.png') }} alt="error" class="my-[10px]">
                <span id="hoverTrigger" class="m-[5px] cursor-pointer text-[11px]">НЭВТРЭХ</span>
                <div id="popupPanel" style="display: none;">
                    <x-pagepanel3 />
                </div>
                <script>
                    $(document).ready(function() {
                        var isHovered = false;
                        var timeoutId;
                        $("#hoverTrigger").hover(function() {
                            clearTimeout(timeoutId); 
                            $("#popupPanel").show();
                            isHovered = true;
                        }, function() {
                            timeoutId = setTimeout(function() {
                                $("#popupPanel").hide();
                                isHovered = false;
                            }, 5000); // 5 second
                        });
                    });
                </script>

                <div>
        </section>
    </div>
   
    <div class="absolute right-36 top-24 w-[120px] bg-[white]">
        <div class="my-1 border">
            <span class="cursor-pointer" id="regular">Regular user</span>
        </div>
        <div class="border">
            <a href="/startupUser/login">Startup user</a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#regular').click(function(){
            $('#loginpop').show()
        })
        $(document).keydown(function(event){
            if(event.key == 'Escape'){
                $('#loginpop').hide()
            }
        })
    })
</script>



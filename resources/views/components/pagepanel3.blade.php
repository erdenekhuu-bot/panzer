@auth
    <section id="userpanel" style="font-family: Inter;" class="absolute right-32 top-16">
        <div class="w-[271px] h-[479px] text-[14px] mt-10 border bg-[white]">
            <div class="flex py-3 px-4 items-center">
                <img src={{ asset('zuragnuud/proImg.PNG') }} alt="" class="rounded-full w-[43px] h-[43px]">
                <div class="mx-2">
                    <span>erdenesundraw</span>
                    <p></p>
                    <span>UX/UI Designer</span>
                </div>
            </div>
            <div class="my-1">
                <hr>
            </div>
            <div class="m-3">
                <span>Account</span>
                <div class="mx-3 my-2">
                    <a href="/profile/viewProfile"> <b class="text-[#0029FF] switchpanel">View My Profile</b></a>
                    <div class="my-2">
                        <a href="/profile"><b class="text-[#0029FF] editprofile">Edit Profile</b></a>
                    </div>
                </div>
            </div>
            <div class="my-1">
                <hr>
            </div>
            <div class="m-3">
                <span>My Companies</span>
                <div class="mx-3 my-2">
                    <a href="/company"><b class="text-[#0029FF] switchpanel">+ Add Company Profile</b></a>
                </div>
            </div>
            <div class="my-1">
                <hr>
            </div>
            <div class="m-3">
                <span>Jobs</span>
                <div class="mx-3 my-2">
                    <a href="/post"><b class="text-[#0029FF] switchpanel">+ Post a job</b></a>
                </div>
            </div>
            <div class="my-1">
                <hr>
            </div>
            <div class="m-3">
                <span>Articles</span>
                <div class="mx-2 my-2 flex items-center">
                    <img src={{ asset('zuragnuud/Vector(pen).png') }} alt="" class="mx-1">
                    <b class="text-[#0029FF] switchpanel">Submit a Contributor Article</b>
                </div>
                <div class="mx-2 flex items-center">
                    <img src={{ asset('zuragnuud/Group(out).png') }} alt="" class="mx-1">
                    <a href="/user/logout"><b class="text-[#DE3436] mx-1 logout cursor-pointer">Log out</b></a>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {

            function fadeUp() {
                $('.fading').fadeIn();
            }

            function fadeDown() {
                $('.fading').fadeIn();
            }

            $('.logout').click(function() {
                fadeUp()
                $.ajax({
                    url: '/user/logout',
                    type: 'GET',
                    success: function(e) {
                        fadeDown()
                    }
                })
            })
            $('.editprofile').click(function() {
                fadeUp()
                $.ajax({
                    url: '/profile',
                    type: 'GET',
                    success: function(e) {
                        fadeDown()
                    }
                })
            })
        })
    </script>
@endauth

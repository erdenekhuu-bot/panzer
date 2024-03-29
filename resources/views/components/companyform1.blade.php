<form action='/company/demo' method="post" enctype="multipart/form-data">
    @csrf
    <b class="text-[30px]">Ерөнхий мэдээлэл</b>

    <div class="my-4 flex items-center">
        <b class="text-[14px]">Company name</b> @error('CompanyName')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <input type="text" name="CompanyName" class="w-[677px] h-[35px] border border-[#9EA3C0] rounded-lg">

    <div class="my-4 flex items-center">
        <b class="text-[14px]">Company Website</b> @error('CompanyWeb')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <input type="text" name="CompanyWeb" class="w-[677px] h-[35px] border border-[#9EA3C0] rounded-lg">

    <div class="my-4 flex items-center">
        <b class="text-[14px]">Байршил (суурьшсан)</b>
    </div>
    <select name="Location" class="w-[270px] rounded-lg border">
        <option>--select--</option>
        <option>Mongol,Ulaanbaatar</option>
        <option>Russia,Moscow</option>
        <option>China,Bejing</option>
        <option>Japan,Tokyo</option>
        <option>Turkey,Istanbul</option>
        <option>Germany,Berlin</option>
        <option>France,Paris</option>
        <option>USA,Washington</option>
        <option>Option 9</option>
        <option>Option 10</option>
    </select>
    @error('Location')
        <b class="text-[#DE3436]">{{ $message }}</b>
    @enderror


    <div class="my-8 w-[386px] h-[325px] border rounded-lg">
        <div class="my-3">
            <b class="px-4 text-[#020B75] text-[14px]">Лого байршуулах(300px x 300px) </b>
        </div>
        <div class="flex justify-center items-center my-2">
            <label for="handleInputLogo" id="showWallpaper"
                class="cursor-pointer overflow-hidden w-[175px] h-[175px] border-2 border-[#9EA3C0]"
                style="border-style: dashed;">
                <img src="" alt="" id="profile-img" class="w-[175px] h-[175px] z-10 hidden">
                <div class="flex justify-center my-2 z-0">
                    <img src={{ asset('images/File-fill.png') }} alt="" class="my-3 w-[40px] h-[40px]">
                </div>
                <div class="text-[14px] text-center z-0" id="result-1">
                    <p>Drag n Drop here</p>
                    <p>Or</p>
                    <p><b class="text-[#020B75]">Browse</b></p>
                    <input type="file" name="Logo" id="handleInputLogo" style="display: none;">
                </div>
            </label>
        </div>
        <div class="text-center">
            <button type="button" class="btn-w w-[338px] h-[55px] bg-[#9EA3C0] rounded-lg"><b
                    class="text-[16px] text-[white]">Байршуулах</b></button>
            <div class="h-[10px] w-[338px] bg-[white] mx-4 loading-screen">
                <div class="h-full w-0 loading bg-[green]"></div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#handleInputLogo').change(function() {
                    var file = $(this)[0].files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#profile-img').attr('src', e.target.result);
                            $('#profile-img').show();
                        };
                        reader.readAsDataURL(file);
                    }
                });
                $('.btn-w').click(function() {
                    let width = 0
                    let interval = setInterval(() => {
                        $('.loading').show()
                        width += 1
                        $('.loading').css("width", width + "%");
                        if (width > 99) {
                            clearInterval(interval)
                            $('.loading').hide()
                        }
                    }, 10);
                })
            });
        </script>
    </div>

    @error('Logo')
        <b class="text-[#DE3436]">{{ $message }}</b>
    @enderror

    <div class="my-8 w-[386px] h-[345px] border rounded-lg">
        <div class="mt-3 mb-1">
            <b class="px-4 text-[#020B75] text-[14px]">Хавтасны зураг</b>
        </div>
        <div>
            <span class="px-4 text-[#020B75] text-[12px]">(1085px x130px) | Хамгийн их байршуулах хэмжээ: 2M</span>
        </div>
        <div class="flex justify-center items-center my-2">
            <label for="handleInputWallpaper"
                class="cursor-pointer overflow-hidden w-[338px] h-[175px] border-2 border-[#9EA3C0]"
                style="border-style: dashed;">
                <img src="" alt="" id="wallpaper-img" class="w-[338px] h-[175px] z-10 hidden">
                <div class="flex justify-center my-2">
                    <img src={{ asset('images/File-fill.png') }} alt="" class="my-3 w-[40px] h-[40px]">
                </div>
                <div class="text-[14px] text-center z-0">
                    <p>Drag n Drop here</p>
                    <p>Or</p>
                    <p><b class="text-[#020B75]">Browse</b></p>
                    <input type="file" name="Wallpaper" id="handleInputWallpaper" style="display: none;">
                </div>
                <script>
                    $(document).ready(function() {
                        $('#handleInputWallpaper').change(function() {
                            var file = $(this)[0].files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    $('#wallpaper-img').attr('src', e.target.result);
                                    $('#wallpaper-img').show();
                                };
                                reader.readAsDataURL(file);
                            }
                        });
                    });
                </script>
            </label>
        </div>
        <div class="text-center">
            <button type="button" class="w-[338px] h-[55px] bg-[#9EA3C0] rounded-lg"><b
                    class="btn-w-2 text-[16px] text-[white]">Байршуулах</b></button>
            <div class="h-[10px] w-[338px] bg-[white] mx-4 loading-screen-2">
                <div class="h-full w-0 loading-2 bg-[green]"></div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.btn-w-2').click(function() {
                        let width = 0
                        let interval = setInterval(() => {
                            $('.loading-2').show()
                            width += 1
                            $('.loading-2').css("width", width + "%");
                            if (width > 99) {
                                clearInterval(interval)
                                $('.loading-2').hide()
                            }
                        }, 10);
                    })
                })
            </script>
        </div>
    </div>

    @error('Wallpaper')
        <b class="text-[#DE3436]">{{ $message }}</b>
    @enderror

    <div class="my-2 px-4">
        <b class="text-[14px] text-[#020B75]">Галерей</b>
    </div>

    <div class="px-4 text-[12px] text-[#020B75]">
        <span>(690px x 340px) | Хамгийн их байршуулах хэмжээ: 2MB | <br> Хамгийн ихдээ 6 зураг
        </span>
    </div>

    <div class="my-4 w-[386px] h-[55px] border rounded-lg flex justify-between items-center">
        <input type="file" name="Gallery" id="handleBrowser" style="display: none;">
        <label class="px-4">No file selected</label>
        <label for="handleBrowser"
            class="cursor-pointer w-[108px] my-1 mx-1 h-[47px] bg-[#020B75] rounded-lg flex justify-center items-center">
            <b class="text-[14px] text-[white]">Browse</b>
        </label>
    </div>
    <div class="w-[386px] logo-upload hidden">
        <div
            class="my-3 h-[55px] font-bold w-[386px] px-4 text-[white] py-3 logo-loading-1 border rounded-lg bg-[#020B75] hidden">
        </div>
        <div
            class="my-3 h-[55px] font-bold w-[386px] px-4 text-[white] py-3 flex logo-loading-2 border rounded-lg bg-[#020B75] hidden">
        </div>
        <div
            class="h-[55px] font-bold w-[386px] px-4 text-[white] py-3 flex items-center logo-loading-3 border rounded-lg bg-[#020B75] hidden">
        </div>
    </div>
    <script>
        $(document).ready(function() {

            function f1(e) {
                let width = 0
                let interval = setInterval(() => {
                    e.show()
                    e.text($('#handleBrowser')[0].files[0].name)
                    width += 1
                    e.css("width", width + "%");
                    if (width > 99) {
                        clearInterval(interval)
                        e.css("background", "white");
                        e.css("color", "#020B75");
                    }
                }, 10);
            }

            let count = 0
            $('#handleBrowser').change(function() {
                $('.logo-upload').show()
                count++
                if (count === 1) {
                    f1($('.logo-loading-1'))
                } else if (count === 2) {
                    f1($('.logo-loading-2'))
                } else if (count === 3) {
                    f1($('.logo-loading-3'))
                    count = 0;
                }
            })
        })
    </script>

    <div class="my-4">
        <b class="text-[14px]">Товч тодорхойлолт</b> @error('Definition')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <div>
        <textarea name="Definition" maxlength="200" class="w-[677px] h-[181px] border rounded-lg"></textarea>
    </div>

    <div class="my-4">
        <b class="text-[14px]">Урт тодорхойлолт</b> @error('LongDefinition')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <div>
        <textarea name="LongDefinition" maxlength="200" class="w-[677px] h-[181px] border rounded-lg"></textarea>
    </div>

    <div class="my-4">
        <b class="text-[14px]">Website</b> @error('Website')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="Website">

    <div class="my-4">
        <b class="text-[14px]">LinkedIn</b> @error('Linkedin')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="Linkedin">

    <div class="my-4">
        <b class="text-[14px]">Twitter</b> @error('Twitter')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="Twitter">

    <div class="my-4">
        <b class="text-[14px]">Facebook</b> @error('Facebook')
            <b class="text-[#DE3436]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="Facebook">


    <div class="my-16">
        <button type="submit" class="w-[129px] h-[35px] bg-[#0029FF] rounded-lg"><b
                class="text-[14px] text-[white] btt">Хадгалах</b></button>
    </div>
    <div class="flex justify-between items-center mb-32">
        <div>
            <b class="text-[14px] text-[#FF0000]">Профайл устгах</b>
            <p></p>
            <span class="text-[12px] text-[#9EA3C0]">Энэ нь байнгын ажиллагаа бөгөөд таны профайлыг startupnews сайтаас
                устгах болно. <br>
                Та энэ талаар итгэлтэй байна уу?
            </span>
        </div>
        <button type="button" class="w-[129px] h-[35px] border rounded-lg"><b
                class="text-[12px] text-[#0029FF]">Профайл устгах</b></button>
    </div>
</form>

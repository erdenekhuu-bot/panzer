<form action='/profile/handleProfile' id="proflieRegister" method="post" enctype="multipart/form-data">
    @csrf
    <b class="text-[30px]">Таны тухай</b>
    <div class="my-4 flex items-center">
        <b class="text-[14px]">Full name</b> @error('fullName')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="fullName">

    <div class="my-4">
        <b class="text-[14px]">Profile Picture</b>
    </div>
    <img src={{ asset('zuragnuud/proImg.PNG') }} alt="" class="w-[99px] h-[99px] rounded-full" id="img">
    <div class="my-4">
        <b class="text-[#0029FF] text-[10px]">
            Please upload your profile image that is less than 2mb and with a<br>
            dimension of 300px x 300px
        </b>
    </div>
    <div class="my-4">
        <input type="file" style="display: none;" id="fs" name="Image">
        <button type="button" class="w-[129px] h-[35px] bg-[#9EA3C0] rounded-lg" id="btn">
            <b class="text-[14px] text-[white]">Change Photo</b>
        </button>
        <script>
            $(document).ready(function() {
                $('#btn').click(function() {
                    $('#fs').click();
                });
                $('#fs').change(function() {
                    var file = $(this)[0].files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#img').attr('src', e.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                });

            });
        </script>
    </div>
    <div class="my-4 flex items-center">
        <b class="text-[14px]">Profile Headline</b> @error('headLine')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <div>
        <input type="text" maxlength="50" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg input-head"
            name="headLine">
        <span class="flex justify-end text-[14px] text-[#9EA3C0] head-result">0/50</span>
        <script>
            $(document).ready(function() {
                $('.input-head').on('input', function() {
                    $('.head-result').text($(this).val().length + '/50')
                })
            })
        </script>
    </div>

    <div class="my-4 flex items-center">
        <b class="text-[14px]">Which city are you based in ?</b> <b class="text-[red]">
            @error('dropDown')
                *
            @enderror
        </b>
    </div>
    <select class="w-[270px] rounded-lg border-2" name="dropDown">
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
    <div class="my-4">
        <b class="text-[14px]">Товч тодорхойлолт</b> @error('unknown')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="unknown"
        maxlength="500">
    <div class="mt-16 mb-8">
        <hr>
    </div>
    <div class="my-4">
        <b class="text-[14px]">Урт тодорхойлолт</b> @error('textArea')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <div>
        <textarea class="w-[677px] h-[181px] border-2 rounded-lg" maxlength="500" name="textArea" id="text1"></textarea>
        <span class="flex justify-end text-[14px] text-[#9EA3C0]" id="result1">0/500</span>
        <script>
            $(document).ready(function() {
                $('#text1').on('input', function() {
                    $('#result1').text($(this).val().length + '/500');
                })
            })
        </script>
    </div>
    <div class="mt-16 mb-8">
        <hr>
    </div>
    <div class="my-4">
        <b class="text-[20px]">Links</b>
    </div>
    <div class="my-4">
        <b class="text-[14px]">Website</b> @error('website')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="website">
    <div class="my-4">
        <b class="text-[14px]">LinkedIn</b> @error('linkedin')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="linkedin">
    <div class="my-4">
        <b class="text-[14px]">Twitter</b> @error('twitter')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="twitter">
    <div class="my-4">
        <b class="text-[14px]">Facebook</b> @error('facebook')
            <b class="text-[red]">*</b>
        @enderror
    </div>
    <input type="text" class="w-[677px] h-[35px] border-2 border-[#9EA3C0] rounded-lg" name="facebook">
    <div class="my-16">
        <button type="submit" class="w-[129px] h-[35px] bg-[#0029FF] rounded-lg"><b
                class="text-[14px] text-[white] btt">Хадгалах</b></button>
    </div>

</form>

<form action='/profile/destroy/{{ auth()->user()->id }}' method="post" id="deleteForm">
    @csrf
    @method('DELETE')
    <div class="flex justify-between items-center mb-32">
        <div>
            <b class="text-[14px] text-[#FF0000]">Профайл устгах</b>
            <p></p>
            <span class="text-[12px] text-[#9EA3C0]">Энэ нь байнгын ажиллагаа бөгөөд таны профайлыг startupnews сайтаас
                устгах болно. <br>
                Та энэ талаар итгэлтэй байна уу?
            </span>
        </div>
        <button  id="delete" class="w-[129px] h-[35px] border rounded-lg">
            <b class="text-[12px] text-[#0029FF]">Профайл устгах</b>
        </button>
    </div>
</form>

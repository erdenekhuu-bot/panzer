<form action='/post/handleBlog' method="post" enctype="multipart/form-data">
    @csrf
    <b class="text-[30px]">Бичих & Илгээх</b>

    <div class="my-4">
        <b class="text-[14px]">Content Headline:</b>
    </div>
    <input type="text" name="blogTitle" class="w-[677px] h-[35px] border border-[#9EA3C0] rounded-lg text-[14px] text-[#9EA3C0]"
        placeholder="Ямар гарчиг вэ?">

    <div class="my-4">
        <b class="text-[14px]">Content Headline:</b>
    </div>
    <div class="my-4">
        <select class="selectpicker w-100 text-[14px] border" name="blogContent" placeholder="Content headline" multiple
            data-selected-text-format="count > 5">
            <option>community</option>
            <option>мэдээ</option>
            <option>ярилцлага</option>
        </select>
    </div>
    <div class="my-8">
        <hr>
    </div>
    <div class="my-8">
        <textarea id="blog" name="blogMain" maxlength="500"></textarea>
        <script src={{ asset('ckeditor5-build-classic/ckeditor.js') }}></script>
        <style>
            .ck-editor__editable_inline {
                height: 434px;
                width: 673px;
            }
        </style>
        <script>
            ClassicEditor.create(document.querySelector('#blog'), {
                    ckfinder: {
                        uploadUrl: '{{ route('saveImage') . '?_token=' . csrf_token() }}',
                    }
                })
                .catch(error => {
                    alert(error)
                });
        </script>
    </div>
    <div class="w-[769px] text-[#2B2D42]">
        <div class="mt-8 mb-4">
            <b class="text-[30px]">Нөхцөл ба нөхцөл</b>
        </div>
        <div class="my-6 bg-[white]">
            <div class="flex px-8 mb-3">
                <img src={{ asset('images/u_check.png') }} alt="" class="w-[20.122px] h-[24px]">
                <span class="px-1 text-[14px]"><b>Зохиогч контентыг илгээснээр контентыг ашиглах, засварлах, өөрчлөх e27
                        <br> лиценз олгодог.</b></span>
            </div>
            <div class="flex px-8 mb-3">
                <img src={{ asset('images/u_check.png') }} alt="" class="w-[20.122px] h-[24px]">
                <span class="px-1 text-[14px]"><b>Нийтлэлд ашигласан судалгаа, судалгааны материалыг хуулбарлахаас <br>
                        зайлсхийхийн тулд эх сурвалжтай нь зөв холбосон байх ёстой.</b></span>
            </div>
            <div class="flex px-8 mb-3">
                <img src={{ asset('images/u_check.png') }} alt="" class="w-[20.122px] h-[24px]">
                <span class="px-1 text-[14px]"><b>Агуулга нь 1200 үгээс хэтрэхгүй байх ёстой, хэрэв энэ нь маш их
                        судлагдсан <br> материал биш бол.</b>
                </span>
            </div>
            <div class="flex px-8 mb-3">
                <img src={{ asset('images/u_check.png') }} alt="" class="w-[20.122px] h-[24px]">
                <span class="px-1 text-[14px]"><b>Агуулга нь сурталчилгааны шинж чанартай байж болохгүй.</b>
                </span>
            </div>
            <div class="flex px-8 mb-3">
                <img src={{ asset('images/u_check.png') }} alt="" class="w-[20.122px] h-[24px]">
                <span class="px-1 text-[14px]"><b>Зохиолч нийтлэлдээ бүдүүлэг үг хэллэг, доромжилсон үг хэрэглэх
                        ёсгүй.</b>
                </span>
            </div>
            <div class="flex px-8 mb-3">
                <img src={{ asset('images/u_check.png') }} alt="" class="w-[20.122px] h-[24px]">
                <span class="px-1 text-[14px]"><b>Зочны нийтлэлийг нийтлэх нь startupnews-ийн цорын ганц шийдвэр
                        юм.</b></span>
            </div>
        </div>
    </div>
    <div class="my-6">
        <input type="checkbox" name="status">
        <b class="px-1 text-[#2B2D42] text-[14px]">Одоогоор энд ажиллаж байна</b>
    </div>
    <div>
        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::display() !!}
    </div>
    <div class="my-8 flex">
        <button type="button" class="w-[265px] h-[35px] border-2 border-[#0029FF] rounded-lg text-[14px] text-[#0029FF]"><b>НООРОГ ХЭЛБЭРЭЭР ХАДГАЛАХ</b></button>
        <button type="submit" class="mx-3 w-[208px] h-[35px] rounded-lg bg-[#0029FF] text-[14px] text-[white]"><b>ШАЛГАЛТАНД ОРУУЛАХ</b></button>
    </div>
</form>

@extends('Main')
@section('body')
    <section style="font-family: Inter;" class="text-[14px]">
        <div class="flex h-[250px]"></div>
        <div>
            <img src={{ asset('zuragnuud/background80.png') }} alt="">
        </div>
        <section class="mx-auto w-[890px]">
            <div class="text-center my-10">
                <b class="text-[#020B75]">Зураглалын логоны өрөлт нь ямар нэгэн эрэмбэ дараалал үүсгэхгүй болно.</b>
            </div>
            <div class="mb-4">
                <b><span class="text-[#0029FF] text-[16px]">Стартап</span> нь нийгэмд үзүүлэх нөлөө, өндөр түвшний
                    технологийн хэрэглээ, өвөрмөц шийдэл гаргадгаараа бусад бизнесээс онцгойрохоос гадна улс орны эдийн
                    засаг, нийгмийн хөгжилд том хувь нэмэр оруулдаг. Дижиталчлалын энэ үед улс орны хөгжлийг технологийн
                    салбар, бий болсон юникорн (<span className="text-[#FFB800] text-[14px]">unicorn</span>) компаниудын тоо,
                    мөн стартап экосистемийн хөгжлөөр нь дүгнэж болно. </b>
            </div>
            <div class="mb-4">
                <b><span class="text-[#DE3436] text-[16px]">START</span> нь <span className="text-[#020B75]">Venture
                        Builder</span>-ийн хувьд стартапуудын хөгжлийг хурдасгах, стартап бүтээх үйл ажиллагаатай ба жил бүр
                    стартап экосистемийн хөгжилд хувь нэмэр оруулах үүднээс “Стартап экосистем зураглал”-ыг гаргаж олон
                    нийтэд танилцуулдаг. 2022 оны зураглал нь илүү дэлгэрэнгүй гарч байгаа бөгөөд экосистемийн бусад
                    тоглогчдыг хамруулан гаргаж байгаагаараа онцлог юм. </b>
            </div>
            <div class="mb-4">
                <b><span class="text-[#0029FF] text-[16px]">2022 оны зураглалд нийт 19 хэсэгт 109 стартап багтсан
                        байна</span>. Мөн экосистемийн бусад оролцогчдыг 15 хэсэгт хуваасан ба үүнд идэвхтэй хурдасгуур
                    хөтөлбөр, арга хэмжээ, төрийн бус байгууллагууд, энтрепренерууд, хөрөнгө оруулагчид гэх мэт олон зүйлс
                    багтаж байна. </b>
            </div>
            <div class="mb-4">
                <b>Зураглалд багтсан стартапуудыг бид шалгаруулахдаа нийгэмд үзүүлж буй нөлөө, шийдэл, бизнес модель, багийн
                    бүтэц, ажиллах арга барил, үүсгэн байгуулагчдын ёс зүй, технологийн шийдэл, идэвхтэй байдал гэх мэт олон
                    зүйлийг харгалзан үзэж оруулдаг. </b>
            </div>
            <div class="mb-4">
                <b><span class="text-[16px] text-[#FFB800]">Стартап экосистемийн зураглал гаргаж буй зорилго</span> нь олон
                    нийтэд стартапуудыг таниулах, хоорондын хамтын ажиллагааг өргөжүүлэх, хүрээллийг нэгтгэх, гадаад болон
                    дотоодын хөрөнгө оруулагчдын анхаарлыг татах байдаг. </b>
            </div>
            <div class="mb-4">
                <b>Та бүхэн энэхүү нийтлэлийн өөрийн хүрээлэлдээ түгээж стартапын экосистемээ дэмжээрэй. Энэхүү зураглалд
                    орсон бүх стартапууд бусад байгууллагуудаа ажлын өндөр амжилт хүсье! </b>
            </div>
            <div class="mb-4">
                <b>Томоохон компаниудын технологийн шийдлүүдийг оруулсан байгаа ба энэ нь хэрэглэгчдийн асуудлыг шийдэж буй
                    байдал, зах зээлд үзүүлж буй нөлөө, нөлөөллийг харгалзан үзэж орууллаа.</b>
            </div>
        </section>
        <div class="text-[60px] mt-14 mb-8">
            <b class="text-[#020B75]">Startups</b>
        </div>

        <section class="w-[888px]">
            <div class="mt-8 mb-4 flex items-center setPanel">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">1</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Ecommerce +</b>
            </div>
            <div class="getPanel flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/shoppy.png') }} alt="" class="m-3">
                <img src={{ asset('images/zochil.png') }} alt="" class="m-3">
                <img src={{ asset('images/geru.png') }} alt="" class="m-3">
                <img src={{ asset('images/market.png') }} alt="" class="m-3">
                <img src={{ asset('images/zary.png') }} alt="" class="m-3">
                <img src={{ asset('images/banana.png') }} alt="" class="m-3">
                <img src={{ asset('images/MadeMongolia.png') }} alt="" class="m-3">
                <img src={{ asset('images/garage.png') }} alt="" class="m-3">
                <img src={{ asset('images/LayerA.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">2</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">IT & Cybersecurity +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/FiboCloud.png') }} alt="" class="m-3">
                <img src={{ asset('images/iTools.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer3.png') }} alt="" class="m-3">
                <img src={{ asset('images/seclab.png') }} alt="" class="m-3">
                <img src={{ asset('images/Mezorn.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">3</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Product +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Lhamour.png') }} alt="" class="m-3">
                <img src={{ asset('images/zoma.png') }} alt="" class="m-3">
                <img src={{ asset('images/CoseCosmetics.png') }} alt="" class="m-3">
                <img src={{ asset('images/seezam.png') }} alt="" class="m-3">
                <img src={{ asset('images/NomadToys.png') }} alt="" class="m-3">
                <img src={{ asset('images/dot.png') }} alt="" class="m-3">
                <img src={{ asset('images/Mayara.png') }} alt="" class="m-3">
                <img src={{ asset('images/airee.png') }} alt="" class="m-3">
                <img src={{ asset('images/BioPlus.png') }} alt="" class="m-3">
                <img src={{ asset('images/ubpassport.png') }} alt="" class="m-3">
                <img src={{ asset('images/Nomadd.png') }} alt="" class="m-3">
                <img src={{ asset('images/Urmine.png') }} alt="" class="m-3">
                <img src={{ asset('images/NAAD.png') }} alt="" class="m-3">
                <img src={{ asset('images/OVOOCamping.png') }} alt="" class="m-3">
                <img src={{ asset('images/x.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">4</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Fintech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Storepay.png') }} alt="" class="m-3">
                <img src={{ asset('images/Zeelmn.png') }} alt="" class="m-3">
                <img src={{ asset('images/q.png') }} alt="" class="m-3">
                <img src={{ asset('images/Sendly.png') }} alt="" class="m-3">
                <img src={{ asset('images/rentpay.png') }} alt="" class="m-3">
                <img src={{ asset('images/LendMN.png') }} alt="" class="m-3">
                <img src={{ asset('images/hi-pay.png') }} alt="" class="m-3">
                <img src={{ asset('images/Pocket.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">5</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Edtech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/HippoCards.png') }} alt="" class="m-3">
                <img src={{ asset('images/MeLearn.png') }} alt="" class="m-3">
                <img src={{ asset('images/Tomyo.png') }} alt="" class="m-3">
                <img src={{ asset('images/brighton.png') }} alt="" class="m-3">
                <img src={{ asset('images/mindwealth.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">6</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Shared mobility +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/z.png') }} alt="" class="m-3">
                <img src={{ asset('images/CarShareMN.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">7</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">SAAS +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/anduud.png') }} alt="" class="m-3">
                <img src={{ asset('images/CallPro.png') }} alt="" class="m-3">
                <img src={{ asset('images/Chimege.png') }} alt="" class="m-3">
                <img src={{ asset('images/EgulenPOS.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer8.png') }} alt="" class="m-3">
                <img src={{ asset('images/cody.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer130.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">8</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Healthcare Tech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/HelloBaby.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer41.png') }} alt="" class="m-3">
                <img src={{ asset('images/clinica.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer43.png') }} alt="" class="m-3">
                <img src={{ asset('images/Tibi.png') }} alt="" class="m-3">
                <img src={{ asset('images/mend(1).png') }} alt="" class="m-3">
                <img src={{ asset('images/OneFit.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">9</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Legaltech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Codelex.png') }} alt="" class="m-3">
                <img src={{ asset('images/iGeree.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer54.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer53.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">10</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">SERVICE & DELIVERY
                    +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/ProCraft.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer55.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer167.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer49.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer47.png') }} alt="" class="m-3">
                <img src={{ asset('images/logo.png') }} alt="" class="m-3">
                <img src={{ asset('images/Delko.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer135.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer51.png') }} alt="" class="m-3">
                <img src={{ asset('images/TokTok.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">11</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Insurtech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/insur.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">12</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Ride hailing +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Ubcab.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">13</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">HRtech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/timely.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer38.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer45.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer56.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer52.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">14</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Martech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Chatbot.png') }} alt="" class="m-3">
                <img src={{ asset('images/Erxes.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">15</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Gaming +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Layer2.png') }} alt="" class="m-3">
                <img src={{ asset('images/NomadicBearGames.png') }} alt="" class="m-3">
                <img src={{ asset('images/CTAcopy.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer40.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">16</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">IOT +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/GeregeSystems.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer129.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer168.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer160.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">17</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Communication tech
                    +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Layer137.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer165.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">18</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Hospitality technology
                    +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/HoReCaSoft.png') }} alt="" class="m-3">
                <img src={{ asset('images/JoinMe.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer163.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer159.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">19</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Media +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/worldplus.png') }} alt="" class="m-3">
                <img src={{ asset('images/Unread.png') }} alt="" class="m-3">
                <img src={{ asset('images/ublife.png') }} alt="" class="m-3">
                <img src={{ asset('images/CTAcopy.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer133.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer164.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer162.png') }} alt="" class="m-3">
                <img src={{ asset('images/LEMONPRESS-1.png') }} alt="" class="m-3">
                <img src={{ asset('images/mmusic.png') }} alt="" class="m-3">
                <img src={{ asset('images/most.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">20</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Navigation tech +</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Layer158.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer166.png') }} alt="" class="m-3">
            </div>

            <div class="text-[60px] mt-14 mb-8" style="font-family: montserrat;">
                <b class="text-[#020B75]">Ecosystem players</b>
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">1</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Coworking spaces</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/mofice.png') }} alt="" class="m-3">
                <img src={{ asset('images/club.png') }} alt="" class="m-3">
                <img src={{ asset('images/#sign.png') }} alt="" class="m-3">
                <img src={{ asset('images/nomadico.png') }} alt="" class="m-3">
                <img src={{ asset('images/SMS.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">2</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Venture studios</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/intelmind.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer33copy.png') }} alt="" class="m-3">
                <img src={{ asset('images/Startventurebuilderbosoo1.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">3</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Crypto market</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/trade.png') }} alt="" class="m-3">
                <img src={{ asset('images/x-meta.png') }} alt="" class="m-3">
                <img src={{ asset('images/complex.png') }} alt="" class="m-3">
                <img src={{ asset('images/coinhub.png') }} alt="" class="m-3">
                <img src={{ asset('images/corex.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">4</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Accelerators &
                    Incubators</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/FounderInstituteMongolia.png') }} alt="" class="m-3">
                <img src={{ asset('images/monja.png') }} alt="" class="m-3">
                <img src={{ asset('images/mstars.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">5</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">NFT market</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/tradenft.png') }} alt="" class="m-3">
                <img src={{ asset('images/MNFT.png') }} alt="" class="m-3">
                <img src={{ asset('images/NFT.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">6</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Media & Content</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Unread10.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer145copy.png') }} alt="" class="m-3">
                <img src={{ asset('images/LEMONPRESS1.png') }} alt="" class="m-3">
                <img src={{ asset('images/shark.png') }} alt="" class="m-3">
                <img src={{ asset('images/businesmn.png') }} alt="" class="m-3">
                <img src={{ asset('images/startupnews.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">7</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Goverment programs and
                    events</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/smartstate.png') }} alt="" class="m-3">
                <img src={{ asset('images/Codeforgirls.png') }} alt="" class="m-3">
                <img src={{ asset('images/DigitalNation.png') }} alt="" class="m-3">
                <img src={{ asset('images/10,000programmer.png') }} alt="" srcset="">
                <img src={{ asset('images/lamp.png') }} alt="" class="m-3">
                <img src={{ asset('images/MongolianInnovationweek.png') }} alt="" class="m-3">
                <img src={{ asset('images/ezehb.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">8</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">VC Investors seed other
                    funding</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/andglobal2copy.png') }} alt="" class="m-3">
                <img src={{ asset('images/shunkhlai.png') }} alt="" class="m-3">
                <img src={{ asset('images/teso.png') }} alt="" class="m-3">
                <img src={{ asset('images/irbisoasis.png') }} alt="" srcset="">
                <img src={{ asset('images/ictgroup.png') }} alt="" class="m-3">
                <img src={{ asset('images/socratus.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">9</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Support NGO</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/zorigsan.png') }} alt="" class="m-3">
                <img src={{ asset('images/maialogohevtee.png') }} alt="" class="m-3">
                <img src={{ asset('images/hshiidel.png') }} alt="" class="m-3">
                <img src={{ asset('images/cp.png') }} alt="" srcset="">
                <img src={{ asset('images/SMSstartup.png') }} alt="" class="m-3">
                <img src={{ asset('images/startupmgl.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">10</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Awards</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/UNREADAWARDS.png') }} alt="" class="m-3">
                <img src={{ asset('images/forbes.png') }} alt="" class="m-3">
                <img src={{ asset('images/Layer173bloomberg.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">11</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Events and
                    competitions</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/Devsummit.png') }} alt="" class="m-3">
                <img src={{ asset('images/startupweekend.png') }} alt="" class="m-3">
                <img src={{ asset('images/hackteen.png') }} alt="" class="m-3">
                <img src={{ asset('images/startupworldcup.png') }} alt="" class="m-3">
                <img src={{ asset('images/unplug.png') }} alt="" class="m-3">
                <img src={{ asset('images/startupspear.png') }} alt="" class="m-3">
                <img src={{ asset('images/seedstars.png') }} alt="" class="m-3">
                <img src={{ asset('images/ulaanbaatarStartupWeke.png') }} alt="" class="m-3">
                <img src={{ asset('images/startupgrind.png') }} alt="" class="m-3">
                <img src={{ asset('images/irbis.png') }} alt="" class="m-3">
            </div>

            <div class="mb-4 flex items-center">
                <div class="bg-[aqua] w-[34px] h-[34px] flex items-center justify-center" style="border-radius: 50%;">
                    <b class="text-[#020B75] text-[30px]">12</b>
                </div>
                <b style="font-family: montserrat;" class="text-[30px] text-[#020B75] mx-8 listen">Education & Science
                    park</b>
            </div>
            <div class="flex flex-wrap overflow-hidden justify-center items-center transition-1">
                <img src={{ asset('images/ufe.png') }} alt="" class="m-3">
                <img src={{ asset('images/huis.png') }} alt="" class="m-3">
                <img src={{ asset('images/startacademy.png') }} alt="" class="m-3">
                <img src={{ asset('images/loopy.png') }} alt="" class="m-3">
                <img src={{ asset('images/it.png') }} alt="" class="m-3">
                <img src={{ asset('images/shutis.png') }} alt="" class="m-3">
                <img src={{ asset('images/muis.png') }} alt="" class="m-3">
                <img src={{ asset('images/nest.png') }} alt="" class="m-3">
            </div>

        </section>
        <script>
            // var panel = document.getElementsByClassName('setPanel');
            // let status = false
            // for (let i = 0; i < panel.length; i++) {
            //     panel[i].addEventListener('click', function() {
            //         panel[i].style.height = status ? '380px' : null
            //         status = !status
            //     })
            // }
        </script>
    </section>
@endsection

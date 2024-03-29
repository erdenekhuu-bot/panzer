import React,{ useState, useEffect } from "react";
import ReactDom from "react-dom/client";
import nay from '../../../public/images/80.png';
import shoppy from '../../../public/images/shoppy.png';
import zochil from '../../../public/images/zochil.png';
import geru from '../../../public/images/geru.png';
import market from '../../../public/images/market.png';
import zary from '../../../public/images/zary.png';
import banana from '../../../public/images/banana.png';
import MadeMongolia from '../../../public/images/MadeMongolia.png';
import garage from '../../../public/images/garage.png';
import LayerA from '../../../public/images/LayerA.png';
import FiboCloud from '../../../public/images/FiboCloud.png';
import iTools from '../../../public/images/iTools.png';
import Layer3 from '../../../public/images/Layer3.png';
import seclab from '../../../public/images/seclab.png';
import Mezorn from '../../../public/images/Mezorn.png';
import Lhamour from '../../../public/images/Lhamour.png';
import zoma from '../../../public/images/zoma.png';
import CoseCosmetics from '../../../public/images/CoseCosmetics.png';
import seezam from '../../../public/images/seezam.png';
import NomadToys from '../../../public/images/NomadToys.png';
import dot from '../../../public/images/dot.png';
import Mayara from '../../../public/images/Mayara.png';
import airee from '../../../public/images/airee.png';
import BioPlus from '../../../public/images/BioPlus.png';
import ubpassport from '../../../public/images/ubpassport.png';
import Nomadd from '../../../public/images/Nomadd.png';
import Urmine from '../../../public/images/Urmine.png';
import NAAD from '../../../public/images/NAAD.png';
import OVOOCamping from '../../../public/images/OVOOCamping.png';
import x from '../../../public/images/x.png';
import Storepay from '../../../public/images/Storepay.png';
import Zeelmn from '../../../public/images/Zeelmn.png';
import q from '../../../public/images/q.png';
import Sendly from '../../../public/images/Sendly.png';
import rentpay from '../../../public/images/rentpay.png';
import LendMN from '../../../public/images/LendMN.png';
import hipay from '../../../public/images/hi-pay.png';
import Pocket from '../../../public/images/Pocket.png';
import HippoCards from '../../../public/images/HippoCards.png';
import MeLearn from '../../../public/images/MeLearn.png';
import Tomyo from '../../../public/images/Tomyo.png';
import brighton from '../../../public/images/brighton.png';
import mindwealth from '../../../public/images/mindwealth.png';
import z from '../../../public/images/z.png';
import CarShareMN from '../../../public/images/CarShareMN.png';
import anduud from '../../../public/images/anduud.png';
import CallPro from '../../../public/images/CallPro.png';
import Chimege from '../../../public/images/Chimege.png';
import EgulenPOS from '../../../public/images/EgulenPOS.png';
import Layer8 from '../../../public/images/Layer8.png';
import cody from '../../../public/images/cody.png';
import Layer130 from '../../../public/images/Layer130.png';
import HelloBaby from '../../../public/images/HelloBaby.png';
import Layer41 from '../../../public/images/Layer41.png';
import clinica from '../../../public/images/clinica.png';
import Layer43 from '../../../public/images/Layer43.png';
import Tibi from '../../../public/images/Tibi.png';
import mend1 from '../../../public/images/mend(1).png';
import OneFit from '../../../public/images/OneFit.png';
import Codelex from '../../../public/images/Codelex.png';
import iGeree from '../../../public/images/iGeree.png';
import Layer54 from '../../../public/images/Layer54.png';
import Layer53 from '../../../public/images/Layer53.png';
import ProCraft from '../../../public/images/ProCraft.png';
import Layer55 from '../../../public/images/Layer55.png';
import Layer167 from '../../../public/images/Layer167.png';
import Layer49 from '../../../public/images/Layer49.png';
import Layer47 from '../../../public/images/Layer47.png';
import logo from '../../../public/images/logo.png';
import Delko from '../../../public/images/Delko.png';
import Layer135 from '../../../public/images/Layer135.png';
import Layer51 from '../../../public/images/Layer51.png';
import TokTok from '../../../public/images/TokTok.png';
import insur from '../../../public/images/insur.png';
import Ubcab from '../../../public/images/Ubcab.png';
import Chatbot from '../../../public/images/Chatbot.png';
import Erxes from '../../../public/images/Erxes.png';
import Layer2 from '../../../public/images/Layer2.png';
import NomadicBearGames from '../../../public/images/NomadicBearGames.png';
import CTAcopy from '../../../public/images/CTAcopy.png';
import Layer40 from '../../../public/images/Layer40.png';
import GeregeSystems from '../../../public/images/GeregeSystems.png';
import Layer129 from '../../../public/images/Layer129.png';
import Layer168 from '../../../public/images/Layer168.png';
import Layer160 from '../../../public/images/Layer160.png';
import Layer137 from '../../../public/images/Layer137.png';
import Layer165 from '../../../public/images/Layer165.png';
import HoReCaSoft from '../../../public/images/HoReCaSoft.png';
import JoinMe from '../../../public/images/JoinMe.png';
import Layer163 from '../../../public/images/Layer163.png';
import Layer159 from '../../../public/images/Layer159.png';
import worldplus from '../../../public/images/worldplus.png';
import Unread from '../../../public/images/Unread.png';
import ublife from '../../../public/images/ublife.png';
import CTAcopy1 from '../../../public/images/CTAcopy.png';
import Layer133 from '../../../public/images/Layer133.png';
import Layer164 from '../../../public/images/Layer164.png';
import Layer162 from '../../../public/images/Layer162.png';
import LEMONPRESS from '../../../public/images/LEMONPRESS-1.png';
import mmusic from '../../../public/images/mmusic.png';
import most from '../../../public/images/most.png';
import Layer158 from '../../../public/images/Layer158.png';
import Layer166 from '../../../public/images/Layer166.png';
import mofice from '../../../public/images/mofice.png';
import club from '../../../public/images/club.png';
import sign from '../../../public/images/_sign.png';
import nomadico from '../../../public/images/nomadico.png';
import SMS from '../../../public/images/SMS.png';
import timely from '../../../public/images/timely.png';
import Layer38 from '../../../public/images/Layer38.png';
import Layer45 from '../../../public/images/Layer45.png';
import Layer56 from '../../../public/images/Layer56.png';
import Layer52 from '../../../public/images/Layer52.png';
import intelmind from '../../../public/images/intelmind.png';
import Layer33copy from '../../../public/images/Layer33copy.png';
import Startventurebuilderbosoo1 from '../../../public/images/Startventurebuilderbosoo1.png';
import trade from '../../../public/images/trade.png';
import xmeta from '../../../public/images/x-meta.png';
import complex from '../../../public/images/complex.png';
import coinhub from '../../../public/images/coinhub.png';
import corex from '../../../public/images/corex.png';
import FounderInstituteMongolia from '../../../public/images/FounderInstituteMongolia.png';
import monja from '../../../public/images/monja.png';
import mstars from '../../../public/images/mstars.png';
import tradenft from '../../../public/images/tradenft.png';
import MNFT from '../../../public/images/MNFT.png';
import NFT from '../../../public/images/NFT.png';
import Layer145copy from '../../../public/images/Layer145copy.png';
import LEMONPRESS1 from '../../../public/images/LEMONPRESS1.png';
import shark from '../../../public/images/shark.png';
import businesmn from '../../../public/images/businesmn.png';
import startupnews from '../../../public/images/startupnews.png';
import smartstate from '../../../public/images/smartstate.png';
import Codeforgirls from '../../../public/images/Codeforgirls.png';
import DigitalNation from '../../../public/images/DigitalNation.png';
import programmer from '../../../public/images/10,000programmer.png';
import lamp from '../../../public/images/lamp.png';
import MongolianInnovationweek from '../../../public/images/MongolianInnovationweek.png';
import ezehb from '../../../public/images/ezehb.png';
import andglobal2copy from '../../../public/images/andglobal2copy.png';
import shunkhlai from '../../../public/images/shunkhlai.png';
import teso from '../../../public/images/teso.png';
import irbisoasis from '../../../public/images/irbisoasis.png';
import ictgroup from '../../../public/images/ictgroup.png';
import socratus from '../../../public/images/socratus.png';
import zorigsan from '../../../public/images/zorigsan.png';
import maialogohevtee from '../../../public/images/maialogohevtee.png';
import hshiidel from '../../../public/images/hshiidel.png';
import cp from '../../../public/images/cp.png';
import SMSstartup from '../../../public/images/SMSstartup.png';
import startupmgl from '../../../public/images/startupmgl.png';
import UNREADAWARDS from '../../../public/images/UNREADAWARDS.png';
import forbes from '../../../public/images/forbes.png';
import Layer173bloomberg from '../../../public/images/Layer173bloomberg.png';
import Devsummit from '../../../public/images/Devsummit.png';
import startupweekend from '../../../public/images/startupweekend.png';
import hackteen from '../../../public/images/hackteen.png';
import startupworldcup from '../../../public/images/startupworldcup.png';
import unplug from '../../../public/images/unplug.png';
import startupspear from '../../../public/images/startupspear.png';
import seedstars from '../../../public/images/seedstars.png';
import ulaanbaatarStartupWeke from '../../../public/images/ulaanbaatarStartupWeke.png';
import startupgrind from '../../../public/images/startupgrind.png';
import irbis from '../../../public/images/irbis.png';
import ufe from '../../../public/images/ufe.png';
import huis from '../../../public/images/huis.png';
import startacademy from '../../../public/images/startacademy.png';
import loopy from '../../../public/images/loopy.png';
import it from '../../../public/images/it.png';
import shutis from '../../../public/images/shutis.png';
import muis from '../../../public/images/muis.png';
import nest from '../../../public/images/nest.png';

export default function Startup(){
    const [menu1, setMenu1]=useState(false)
    const [menu2, setMenu2]=useState(false)
    const [menu3, setMenu3]=useState(false)
    const [menu4, setMenu4]=useState(false)
    const [menu5, setMenu5]=useState(false)
    const [menu6, setMenu6]=useState(false)
    const [menu7, setMenu7]=useState(false)
    const [menu8, setMenu8]=useState(false)
    const [menu9, setMenu9]=useState(false)
    const [menu10, setMenu10]=useState(false)
    const [menu11, setMenu11]=useState(false)
    const [menu12, setMenu12]=useState(false)
    const [menu13, setMenu13]=useState(false)
    const [menu14, setMenu14]=useState(false)
    const [menu15, setMenu15]=useState(false)
    const [menu16, setMenu16]=useState(false)
    const [menu17, setMenu17]=useState(false)
    const [menu18, setMenu18]=useState(false)
    const [menu19, setMenu19]=useState(false)
    const [menu20, setMenu20]=useState(false)
    const [submenu1, subsetMenu1]=useState(false)
    const [submenu2, subsetMenu2]=useState(false)
    const [submenu3, subsetMenu3]=useState(false)
    const [submenu4, subsetMenu4]=useState(false)
    const [submenu5, subsetMenu5]=useState(false)
    const [submenu6, subsetMenu6]=useState(false)
    const [submenu7, subsetMenu7]=useState(false)
    const [submenu8, subsetMenu8]=useState(false)
    const [submenu9, subsetMenu9]=useState(false)
    const [submenu10, subsetMenu10]=useState(false)
    const [submenu11, subsetMenu11]=useState(false)
    const [submenu12, subsetMenu12]=useState(false)

    function trigger1(){
        setMenu1(!menu1)
    }
    function trigger2(){
        setMenu2(!menu2)
    }
    function trigger3(){
        setMenu3(!menu3)
    }
    function trigger4(){
        setMenu4(!menu4)
    }
    function trigger5(){
        setMenu5(!menu5)
    }
    function trigger6(){
        setMenu6(!menu6)
    }
    function trigger7(){
        setMenu7(!menu7)
    }
    function trigger8(){
        setMenu8(!menu8)
    }
    function trigger9(){
        setMenu9(!menu9)
    }
    function trigger10(){
        setMenu10(!menu10)
    }
    function trigger11(){
        setMenu11(!menu11)
    }
    function trigger12(){
        setMenu12(!menu12)
    }
    function trigger13(){
        setMenu13(!menu13)
    }
    function trigger14(){
        setMenu14(!menu14)
    }
    function trigger15(){
        setMenu15(!menu15)
    }
    function trigger16(){
        setMenu16(!menu16)
    }
    function trigger17(){
        setMenu17(!menu17)
    }
    function trigger18(){
        setMenu18(!menu18)
    }
    function trigger19(){
        setMenu19(!menu19)
    }
    function trigger20(){
        setMenu20(!menu20)
    }
    function subtrigger1(){
        subsetMenu1(!submenu1)
    }
    function subtrigger2(){
        subsetMenu2(!submenu2)
    }
    function subtrigger3(){
        subsetMenu3(!submenu3)
    }
    function subtrigger4(){
        subsetMenu4(!submenu4)
    }
    function subtrigger5(){
        subsetMenu5(!submenu5)
    }
    function subtrigger6(){
        subsetMenu6(!submenu6)
    }
    function subtrigger7(){
        subsetMenu7(!submenu7)
    }
    function subtrigger8(){
        subsetMenu8(!submenu8)
    }
    function subtrigger9(){
        subsetMenu9(!submenu9)
    }
    function subtrigger10(){
        subsetMenu10(!submenu10)
    }
    function subtrigger11(){
        subsetMenu11(!submenu11)
    }
    function subtrigger12(){
        subsetMenu12(!submenu12)
    }
    return (
        <section className="grid" style={{ gridTemplateRows: '0fr 0fr 0fr' }}>
            <section style={{ fontFamily: 'Inter' }} className="text-[14px] mt-40">
                <img src={nay} alt=""/> <p></p>
                <div className="my-5 text-center">
                    <b className="text-[#020B75] text-[14px]">Зураглалын логоны өрөлт нь ямар нэгэн эрэмбэ дараалал үүсгэхгүй болно.</b>
                </div>
                <div className="w-[890px]" style={{ margin: '0 auto' }}>
                    <div className="mb-5">
                        <b><span className="text-[#0029FF] text-[16px]">Стартап</span> нь нийгэмд үзүүлэх нөлөө, өндөр түвшний технологийн хэрэглээ, өвөрмөц шийдэл гаргадгаараа бусад бизнесээс онцгойрохоос гадна улс орны эдийн засаг, нийгмийн хөгжилд том хувь нэмэр оруулдаг. Дижиталчлалын энэ үед улс орны хөгжлийг технологийн салбар, бий болсон юникорн (<span className="text-[#FFB800] text-[16px]">unicorn</span>) компаниудын тоо, мөн стартап экосистемийн хөгжлөөр нь дүгнэж болно. </b>
                    </div>
                    <div className="mb-5">
                        <b><span className="text-[#DE3436]">START</span> нь <span className="text-[#020B75]">Venture Builder</span>-ийн хувьд стартапуудын хөгжлийг хурдасгах, стартап бүтээх үйл ажиллагаатай ба жил бүр стартап экосистемийн хөгжилд хувь нэмэр оруулах үүднээс “Стартап экосистем зураглал”-ыг гаргаж олон нийтэд танилцуулдаг. 2022 оны зураглал нь илүү дэлгэрэнгүй гарч байгаа бөгөөд экосистемийн бусад тоглогчдыг хамруулан гаргаж байгаагаараа онцлог юм. </b>
                    </div>
                    <div className="mb-5">
                        <b><span className="text-[#0029FF] text-[16px]">2022 оны  зураглалд нийт 19 хэсэгт 109 стартап багтсан байна</span>. Мөн экосистемийн бусад оролцогчдыг 15 хэсэгт хуваасан ба үүнд идэвхтэй хурдасгуур хөтөлбөр, арга хэмжээ, төрийн бус байгууллагууд, энтрепренерууд, хөрөнгө оруулагчид гэх мэт олон зүйлс багтаж байна. </b>
                    </div>
                    <div className="mb-5">
                        <b>Зураглалд багтсан стартапуудыг бид шалгаруулахдаа нийгэмд үзүүлж буй нөлөө, шийдэл, бизнес модель, багийн бүтэц, ажиллах арга барил, үүсгэн байгуулагчдын ёс зүй, технологийн шийдэл, идэвхтэй байдал гэх мэт олон зүйлийг харгалзан үзэж оруулдаг. </b>
                    </div>
                    <div className="mb-5">
                        <b><span className="text-[16px] text-[#FFB800]">Стартап экосистемийн зураглал гаргаж буй зорилго</span> нь олон нийтэд стартапуудыг таниулах, хоорондын хамтын ажиллагааг өргөжүүлэх, хүрээллийг нэгтгэх, гадаад болон дотоодын хөрөнгө оруулагчдын анхаарлыг татах байдаг. </b>
                    </div>
                    <div className="mb-5">
                        <b>Та бүхэн энэхүү нийтлэлийн өөрийн хүрээлэлдээ түгээж стартапын экосистемээ дэмжээрэй. Энэхүү зураглалд орсон бүх стартапууд бусад байгууллагуудаа ажлын өндөр амжилт хүсье!  </b>
                    </div>
                    <div className="mb-5">
                        <b>Томоохон компаниудын технологийн шийдлүүдийг оруулсан байгаа ба энэ нь хэрэглэгчдийн асуудлыг шийдэж буй байдал, зах зээлд үзүүлж буй нөлөө, нөлөөллийг харгалзан үзэж орууллаа.</b>
                    </div>
                </div>
            </section>
            <section className="px-20">
                <div className="my-12">
                    <b className="text-[60px] text-[#020B75]">Startups</b>
                </div>
                <div onClick={trigger1} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu1 ? 380 : null)}}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>1</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Ecommerce +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={shoppy} alt="" className="m-3"/>
                            <img src={zochil} alt="" className="m-3"/>
                            <img src={geru} alt="" className="m-3"/>
                            <img src={market} alt="" className="m-3"/>
                            <img src={zary} alt="" className="m-3"/>
                            <img src={banana} alt="" className="m-3"/>
                            <img src={MadeMongolia} alt="" className="m-3"/>
                            <img src={garage} alt="" className="m-3"/>
                            <img src={LayerA} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger2} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu2 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>2</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">IT  & Cybersecurity +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={FiboCloud} alt="" className="m-3"/>
                            <img src={iTools} alt="" className="m-3"/>
                            <img src={Layer3} alt="" className="m-3"/>
                            <img src={seclab} alt="" className="m-3"/>
                            <img src={Mezorn} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger3} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu3 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>3</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Product +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Lhamour} alt="" className="m-3"/>
                            <img src={zoma} alt="" className="m-3"/>
                            <img src={CoseCosmetics} alt="" className="m-3"/>
                            <img src={seezam} alt="" className="m-3"/>
                            <img src={NomadToys} alt="" className="m-3"/>
                            <img src={dot} alt="" className="m-3"/>
                            <img src={Mayara} alt="" className="m-3"/>
                            <img src={airee} alt="" className="m-3"/>
                            <img src={BioPlus} alt="" className="m-3"/>
                            <img src={ubpassport} alt="" className="m-3"/>
                            <img src={Nomadd} alt="" className="m-3"/>
                            <img src={Urmine} alt="" className="m-3"/>
                            <img src={NAAD} alt="" className="m-3"/>
                            <img src={OVOOCamping} alt="" className="m-3"/>
                            <img src={x} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger4} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu4 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>4</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Fintech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Storepay} alt="" className="m-3"/>
                            <img src={Zeelmn} alt="" className="m-3"/>
                            <img src={q} alt="" className="m-3"/>
                            <img src={Sendly} alt="" className="m-3"/>
                            <img src={rentpay} alt="" className="m-3"/>
                            <img src={LendMN} alt="" className="m-3"/>
                            <img src={hipay} alt="" className="m-3"/>
                            <img src={Pocket} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger5} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu5 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>5</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Edtech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={HippoCards} alt="" className="m-3"/>
                            <img src={MeLearn} alt="" className="m-3"/>
                            <img src={Tomyo} alt="" className="m-3"/>
                            <img src={brighton} alt="" className="m-3"/>
                            <img src={mindwealth} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger6} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu6 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>6</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Shared mobility +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={z} alt="" className="m-3"/>
                            <img src={CarShareMN} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger7} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu7 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>7</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">SAAS +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={anduud} alt="" className="m-3"/>
                            <img src={CallPro} alt="" className="m-3"/>
                            <img src={Chimege} alt="" className="m-3"/>
                            <img src={EgulenPOS} alt="" className="m-3"/>
                            <img src={Layer8} alt="" className="m-3"/>
                            <img src={cody} alt="" className="m-3"/>
                            <img src={Layer130} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger8} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu8 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>8</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Healthcare Tech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={HelloBaby} alt="" className="m-3"/>
                            <img src={Layer41} alt="" className="m-3"/>
                            <img src={clinica} alt="" className="m-3"/>
                            <img src={Layer43} alt="" className="m-3"/>
                            <img src={Tibi} alt="" className="m-3"/>
                            <img src={mend1} alt="" className="m-3"/>
                            <img src={OneFit} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger9} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu9 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>9</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Legaltech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Codelex} alt="" className="m-3"/>
                            <img src={iGeree} alt="" className="m-3"/>
                            <img src={Layer54} alt="" className="m-3"/>
                            <img src={Layer53} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger10} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu10 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>10</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">SERVICE & DELIVERY +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={ProCraft} alt="" className="m-3"/>
                            <img src={Layer55} alt="" className="m-3"/>
                            <img src={Layer167} alt="" className="m-3"/>
                            <img src={Layer49} alt="" className="m-3"/>
                            <img src={Layer47} alt="" className="m-3"/>
                            <img src={logo} alt="" className="m-3"/>
                            <img src={Delko} alt="" className="m-3"/>
                            <img src={Layer135} alt="" className="m-3"/>
                            <img src={Layer51} alt="" className="m-3"/>
                            <img src={TokTok} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger11} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu11 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>11</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Insurtech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={insur} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger12} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu12 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>12</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Ride hailing +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Ubcab} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger13} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu13 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>13</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">HR tech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={timely} alt="" className="m-3"/>
                            <img src={Layer38} alt="" className="m-3"/>
                            <img src={Layer45} alt="" className="m-3"/>
                            <img src={Layer56} alt="" className="m-3"/>
                            <img src={Layer52} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger14} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu14 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>14</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Martech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Chatbot} alt="" className="m-3"/>
                            <img src={Erxes} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger15} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu15 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>15</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Gaming +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Layer2} alt="" className="m-3"/>
                            <img src={NomadicBearGames} alt="" className="m-3"/>
                            <img src={CTAcopy} alt="" className="m-3"/>
                            <img src={Layer40} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger16} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu16 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>16</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">IOT +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={GeregeSystems} alt="" className="m-3"/>
                            <img src={Layer129} alt="" className="m-3"/>
                            <img src={Layer168} alt="" className="m-3"/>
                            <img src={Layer160} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger17} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu17 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>17</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Communication tech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Layer137} alt="" className="m-3"/>
                            <img src={Layer165} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger18} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu18 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>18</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Hospitality technology +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={HoReCaSoft} alt="" className="m-3"/>
                            <img src={JoinMe} alt="" className="m-3"/>
                            <img src={Layer163} alt="" className="m-3"/>
                            <img src={Layer159} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger19} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu19 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>19</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Media +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={worldplus} alt="" className="m-3"/>
                            <img src={Unread} alt="" className="m-3"/>
                            <img src={ublife} alt="" className="m-3"/>
                            <img src={CTAcopy1} alt="" className="m-3"/>
                            <img src={Layer133} alt="" className="m-3"/>
                            <img src={Layer164} alt="" className="m-3"/>
                            <img src={Layer162} alt="" className="m-3"/>
                            <img src={LEMONPRESS} alt="" className="m-3"/>
                            <img src={mmusic} alt="" className="m-3"/>
                            <img src={most} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={trigger20} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (menu20 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>20</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Navigation tech +</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Layer158} alt="" className="m-3"/>
                            <img src={Layer166} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
            </section>
            <section className="px-20">
                <div className="my-12">
                    <b className="text-[60px] text-[#020B75]">Ecosystem players</b>
                </div>
                <div onClick={subtrigger1} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu1 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>1</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Coworking spaces</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={mofice} alt="" className="m-3"/>
                            <img src={club} alt="" className="m-3"/>
                            <img src={sign} alt="" className="m-3"/>
                            <img src={nomadico} alt="" className="m-3"/>
                            <img src={SMS} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger2} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu2 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>2</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Venture studios</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={intelmind} alt="" className="m-3"/>
                            <img src={Layer33copy} alt="" className="m-3"/>
                            <img src={Startventurebuilderbosoo1} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger3} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu3 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>3</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Crypto Market</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={trade} alt="" className="m-3"/>
                            <img src={xmeta} alt="" className="m-3"/>
                            <img src={complex} alt="" className="m-3"/>
                            <img src={coinhub} alt="" className="m-3"/>
                            <img src={corex} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger4} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu4 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>4</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Accelerators & Incubators</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={FounderInstituteMongolia} alt="" className="m-3"/>
                            <img src={monja} alt="" className="m-3"/>
                            <img src={mstars} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger5} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu5 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>5</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">NFT market</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={tradenft} alt="" className="m-3"/>
                            <img src={MNFT} alt="" className="m-3"/>
                            <img src={NFT} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger6} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu6 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>6</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Media & Content</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Unread} alt="" className="m-3"/>
                            <img src={Layer145copy} alt="" className="m-3"/>
                            <img src={LEMONPRESS1} alt="" className="m-3"/>
                            <img src={shark} alt="" className="m-3"/>
                            <img src={businesmn} alt="" className="m-3"/>
                            <img src={startupnews} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger7} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu7 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>7</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Goverment programs and events</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={smartstate} alt="" className="m-3"/>
                            <img src={Codeforgirls} alt="" className="m-3"/>
                            <img src={DigitalNation} alt="" className="m-3"/>
                            <img src={programmer} alt="" className="m-3"/>
                            <img src={lamp} alt="" className="m-3"/>
                            <img src={MongolianInnovationweek} alt="" className="m-3"/>
                            <img src={ezehb} alt="" className="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger8} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu8 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>8</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">VS Investors seed other funding</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={andglobal2copy} alt="" class="m-3"/>
                            <img src={shunkhlai} alt="" class="m-3"/>
                            <img src={teso} alt="" class="m-3"/>
                            <img src={irbisoasis} alt="" class="m-3"/>
                            <img src={ictgroup} alt="" class="m-3"/>
                            <img src={socratus} alt="" class="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger9} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu9 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>9</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Support NGO</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={zorigsan} alt="" class="m-3"/>
                            <img src={maialogohevtee} alt="" class="m-3"/>
                            <img src={hshiidel} alt="" class="m-3"/>
                            <img src={cp} alt="" class="m-3"/>
                            <img src={SMSstartup} alt="" class="m-3"/>
                            <img src={startupmgl} alt="" class="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger10} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu10 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>10</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Awards</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={UNREADAWARDS} alt="" class="m-3"/>
                            <img src={forbes} alt="" class="m-3"/>
                            <img src={Layer173bloomberg} alt="" class="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger11} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu11 ? 380 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>11</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Events and competitions</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={Devsummit} alt="" class="m-3"/>
                            <img src={startupweekend} alt="" class="m-3"/>
                            <img src={hackteen} alt="" class="m-3"/>
                            <img src={startupworldcup} alt="" class="m-3"/>
                            <img src={unplug} alt="" class="m-3"/>
                            <img src={startupspear} alt="" class="m-3"/>
                            <img src={seedstars} alt="" class="m-3"/>
                            <img src={ulaanbaatarStartupWeke} alt="" class="m-3"/>
                            <img src={startupgrind} alt="" class="m-3"/>
                            <img src={irbis} alt="" class="m-3"/>
                        </div>
                    </div>
                </div>
                <div onClick={subtrigger12} className="grid overflow-hidden mb-8 h-[45px] transition-[1s]" style={{ gridTemplateColumns : '0.1fr 1.5fr', height: (submenu12 ? 430 : null) }}>
                    <div className="py-1">
                        <div className="bg-[aqua] w-[34px] h-[34px] text-[#020B75] text-[30px] flex items-center justify-center" style={{ borderRadius: '50%' }}><b>12</b></div>
                    </div>
                    <div>
                        <div className="flex items-center">
                            <b className="text-[30px] text-[#020B75] mx-8">Education & Science park</b>
                        </div>
                        <div className="flex flex-wrap w-[888px] pl-28">
                            <img src={ufe} alt="" class="m-3"/>
                            <img src={huis} alt="" class="m-3"/>
                            <img src={startacademy} alt="" class="m-3"/>
                            <img src={loopy} alt="" class="m-3"/>
                            <img src={it} alt="" class="m-3"/>
                            <img src={shutis} alt="" class="m-3"/>
                            <img src={muis} alt="" class="m-3"/>
                            <img src={nest} alt="" class="m-3"/>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    );
}

const root = ReactDom.createRoot(document.getElementById('startup')).render(<Startup/>);
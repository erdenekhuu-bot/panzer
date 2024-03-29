import React,{ useState, useEffect } from "react";
import ReactDom from "react-dom/client";
import axios from 'axios';
import '../../css/app.css';
import menu from '../../../public/images/menu.png';
import icon_color from '../../../public/images/icon_color.png'
import moon from '../../../public/images/moon.png'
import User from '../../../public/images/User.png'

export default function Header(){
    const [temperature, setTemperature] = useState(null);

    function trigger1(){
        setBold1(!boldstyle1)
    }
    function trigger2(){
        setBold2(!boldstyle2)
    }
    function trigger3(){
        setBold3(!boldstyle3)
    }
    function trigger4(){
        setBold4(!boldstyle4)
    }
    function trigger5(){
        setBold5(!boldstyle5)
    }

    useEffect(() => {
        const fetchWeatherData = async function() {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/weather');
                setTemperature(response.data.temperature);
            } catch (error) {
                console.error('Error fetching weather data:', error);
            }
        };
        fetchWeatherData();
    }, []);


    return (
        <div className="fixed w-full">
            <div className="h-[96px] bg-[white]">
                <div className="w-[1072px] h-[96px] bg-[white] grid" style={{ margin: '0 auto', gridTemplateRows: '1fr 1fr' }}>
                        <section className="flex justify-between items-center">
                            <div className="flex">
                                <img src={menu} alt="error!" className="m-[3px]"/>
                                <div className="mx-6">
                                    <b className="text-xl" style={{ fontFamily: 'Montserrat', color: '#020B75', fontSize: '20px' }}>startupnews</b>
                                </div>
                            </div>
                            <div className="flex">
                                <img src={icon_color} alt="error!" className="m-[3px] mr-6"/>
                                <img src={moon} alt="error!" className="m-[3px]"/>
                                <div className='m-[3px] text-[#9EA3C0]'>
                                    {temperature ? (<span>{temperature}°C</span>) : (<span>Loading...</span>)}
                                </div>
                            </div>
                        </section>
                        <section className="flex justify-between items-center">
                            <span className="cursor-pointer ml-14"><a href="/">Мэдээ</a></span>
                            <span className="cursor-pointer"><a href="/companies">Стартапууд</a></span>
                            <span className="cursor-pointer"><a href="/startup">Монголын стартап экосистемийн зураглал 2022 | START</a></span>
                            <span className="cursor-pointer">Холбогдох</span>
                            <div className="flex justify-between" id='popup'>
                                <img src={User} alt="error" className="m-[10px]"/>
                                <span className="m-[5px] cursor-pointer">НЭВТРЭХ</span>
                            </div>
                        </section>
                </div>
            </div>
        </div>
    );
}

const root = ReactDom.createRoot(document.getElementById('header')).render(<Header/>);

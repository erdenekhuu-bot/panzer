<?php

namespace App\Http\Controllers;
use App\Models\Companies;
use App\Models\CompanyFace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Page extends Controller
{
    public function page1(){
            return view('pages.page1',
            ['temperature'=>$this->weather()['main']['temp'] ?? '']
        );
    }
    public function page2(){
        return view('pages.page2',['tab'=>Companies::paginate(10),
        'temperature'=>$this->weather()['main']['temp'] ?? '']);
    }
    public function page3(){
        return view('pages.page3',['temperature'=>$this->weather()['main']['temp'] ?? '']);
    }
    public function page4(){
        return view('pages.page4',['temperature'=>$this->weather()['main']['temp'] ?? '']);
    }
}

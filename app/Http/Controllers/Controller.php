<?php

namespace App\Http\Controllers;

use Carbon\Exceptions\Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function weather(){
       try {
        $res=Http::get('https://api.openweathermap.org/data/2.5/weather',[
            'q'=>'Ulaanbaatar',
            'units' => 'metric',
            'appid'=>'4883129c8d0f75ef7e7e2e0df29d7dbe'
        ]);
        return json_decode($res,true);
       } catch(\Exception $e){
        return null;
       }
    }
}

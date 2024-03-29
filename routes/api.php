<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/weather',function(){
    $res=Http::get('https://api.openweathermap.org/data/2.5/weather',[
        'q'=>'Ulaanbaatar',
        'units' => 'metric',
        'appid'=>'4883129c8d0f75ef7e7e2e0df29d7dbe'
    ]);
    $data=json_decode($res,true);
    return response()->json(['temperature'=>$data['main']['temp']]);
});

Route::get('/test',function(Request $request, User $user){
    
    return response()->json(['msg'=>$user->currentAccessToken()]);
});

Route::get('/send-email', [DemoMail::class, 'index']);

Route::get('/forgot-password', [DemoMail::class, 'forgot']);

// Route::prefix('/user')->group(function(){
//     Route::get('/login',[Register::class,'login'])->name('login');
//     Route::post('/checkLogin',[Register::class,'checkLogin'])->name('checkLogin');
//     Route::get('/signup',[Register::class,'signup'])->name('signup');
//     Route::post('/checkSignUp',[Register::class,'checkSignUp'])->name('checkSignUp');
//     Route::get('/logout',[Register::class,'logout'])->name('logout');
// });


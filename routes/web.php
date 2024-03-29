<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Team;
use App\Livewire\ProfileForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\SkillModel;
use App\Models\ProfileModel;
use App\Http\Controllers\DemoMail;
use Illuminate\Support\Facades\Request;
use PHPUnit\Util\GlobalState;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::prefix('/')->group(function () {
    Route::get('', [Page::class, 'page1'])->name('pages.page1');
    Route::get('companies', [Page::class, 'page2'])->name('pages.page2');
    Route::get('startup', [Page::class, 'page3'])->name('pages.page3');
    Route::get('news', [Page::class, 'page4'])->name('pages.page4');
});
Route::prefix('/profile')->middleware('checkout')->group(function () {
    Route::get('', [Profile::class, 'page1'])->name('pages.profile.page1');
    Route::post('/handleProfile', [Profile::class, 'handleProfile'])->name('handleProfile');
    Route::get('/secondProfile', [Profile::class, 'page2'])->name('pages.profile.page2');
    Route::post('/handleSecondProfile', [Profile::class, 'handleSecondProfile'])->name('handleSecondProfile');
    Route::get('/thirdProfile', [Profile::class, 'page3'])->name('pages.profile.page3');
    Route::post('/handleThirdProfile', [Profile::class, 'handleThirdProfile'])->name('handleThirdProfile');
    Route::get('/viewProfile', [Profile::class, 'viewProfile'])->name('viewProfile');
    Route::delete('/destroy/{id}',[Register::class,'destroy'])->name('destroy');
});

Route::get('/viewCompany', function () {
    return view('CompanyProfile');
});
Route::get('/final', function () {
    $res = Http::get('https://api.openweathermap.org/data/2.5/weather', [
        'q' => 'Ulaanbaatar',
        'units' => 'metric',
        'appid' => '4883129c8d0f75ef7e7e2e0df29d7dbe'
    ]);
    $path = json_decode($res, true);
    return view('pages.final', ['temperature' => $path['main']['temp']]);
});

Route::prefix('/company')->middleware('checkout')->group(function () {
    Route::get('', [Company::class, 'page1'])->middleware('team')->name('pages.company.page1');
    Route::post('/handleCompany', [Company::class, 'handleCompany'])->name('handleCompany');
    Route::get('/secondCompany', [Company::class, 'page2'])->name('pages.company.page2');
    Route::post('handleSecondCompany', [Company::class, 'handleSecondCompany'])->name('handleSecondCompany');
    Route::get('/thirdCompany', [Company::class, 'page3'])->name('pages.company.page3');
    Route::post('/handleThirdCompany', [Company::class, 'handleThirdCompany'])->name('handleThirdCompany');
    Route::post('/addteam', [Company::class, 'addteam'])->name('addteam');
    Route::get('/cp', [Company::class, 'retriveCompany'])->name('CompanyProfile');
});

Route::prefix('/user')->group(function () {
    Route::get('/login', [Register::class, 'login'])->name('login');
    Route::post('/checkLogin', [Register::class, 'checkLogin'])->name('checkLogin');
    Route::get('/signup', [Register::class, 'signup'])->name('signup');
    Route::post('/checkSignUp', [Register::class, 'checkSignUp'])->name('checkSignUp');
    Route::get('/logout', [Register::class, 'logout'])->name('logout');
});
Route::prefix('/startupUser')->group(function () {
    Route::get('/login', [Register::class, 'StartUpLogin'])->name('StartUpLogin');
    Route::post('/handleStartLogin', [Register::class, 'handleStartLogin'])->name('handleStartLogin');
    Route::get('/signup', [Register::class, 'StartUpSignUp'])->name('StartUpSignUp');
    Route::post('/handleStartSignUp', [Register::class, 'handleStartSignUp'])->name('handleStartSignUp');
});

Route::prefix('/post')->middleware('checkout')->group(function () {
    Route::get('', [Blog::class, 'page1'])->name('pages.post.page1');
    Route::post('/saveimage', [Blog::class, 'saveImage'])->name('saveImage');
    Route::post('/handleBlog', [Blog::class, 'trigger'])->name('handleBlog');
});

Route::get('/offer', [Company::class, 'page4'])->name('pages.company.page4');
Route::get('/loading', [Blog::class, 'showstatus']);

Route::get('/newpass', function () {
    return view('pass.forgetpassword');
})->name('newpass');


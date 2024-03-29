<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class Blog extends Controller
{
    public function page1(User $user)
    {
        $user = User::find(auth()->user()->id);
        return view('pages.post.page1', [
            'temperature' => $this->weather()['main']['temp'] ?? '',
            'name' => $user->bridgeToProfile->fullName ?? '',
            'img' => $user->bridgeToProfile->Image ?? '',
            'role' => $user->bridgeToProfile->headLine ?? '',
        ]);
    }
    public function saveImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
    public function trigger(Request $request, User $model, Role $post)
    {
        $rule = [
            'blogTitle' => 'required',
            'blogContent' => 'required',
            'blogMain' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ];
        $validation = Validator::make($request->all(), $rule);
        if ($validation->fails()) {
            dd($validation->errors());
        }
        $model = User::find(auth()->user()->id);
        $post->head = $request->blogTitle;
        $post->content = $request->blogContent;
        $post->blogger = $request->blogMain;
        // $model->bridgeToPost()->save($post);
        $model->crossOverRole()->save($post);
        return redirect('/loading');
    }
    public function showstatus(){
        return view('pages.final',['temperature'=>$this->weather()['main']['temp'] ?? '']);
    }
}

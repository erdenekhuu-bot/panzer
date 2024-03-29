<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Models\Team;
use Illuminate\Support\Facades\Validator;

class Register extends Controller
{
    public function checkLogin(Request $request, User $user)
    {
        $data = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($data->fails()) {
            return response()->json(['error' => $data->errors()]);
        }
        $user = User::where('email', $request->get('email'))->first();
        $credentials = $request->only('email', 'password');

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json(['auth' => 'username or password incorrect']);
        }
        if ($user && Auth::attempt($credentials)) {
            return response()->json(['success' => 'Login successful']);
        }
    }

    public function checkSignUp(Request $request, User $model)
    {
        $data = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|regex:/^([A-Za-z0-9!@#$%^&*()_+])/'
        ]);

        if ($data->fails()) {
            return response()->json(['error' => $data->errors()]);
        }
        try {
            $model->name = $request->get('username');
            $model->email = $request->get('email');
            $model->password = Hash::make($request->get('password'));
            $model->save();
            return 1;
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function handleRegister(Request $request, User $model)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $model->name = $request->get('username');
        $model->email = $request->get('email');
        $model->password = Hash::make($request->get('password'));
        $model->save();

        return redirect('offer')->with('ok', 'success');
    }

    public function destroy($id, User $user){
        $user=User::find($id);
        $user->delete();
        return redirect('/');
    }

    public function StartUpLogin()
    {
        return view('StartUpLogin', ['temperature' => $this->weather()['main']['temp'] ?? '']);
    }

    public function StartUpSignUp()
    {
        return view('StartUpSignUp', ['temperature' => $this->weather()['main']['temp'] ?? '']);
    }
    public function handleStartSignUp()
    {
        return view('StartUpSignUp', ['temperature' => $this->weather()['main']['temp'] ?? '']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Events\setResetPassword;
use App\Models\User;
use App\Mail\MailSender;
use App\Mail\OrderShipped;
use App\Mail\ForgetPass;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class DemoMail extends Controller
{
    public function index(Request $request){
       
        Mail::to($request->email)->send(new OrderShipped);
        return response()->json(['status'=>"success"]);
    }

    public function forgot(){
       try {
            if($_GET['forgot_email']){
                event(new setResetPassword(array($_GET['forgot_email'])));
            }
            return response()->json(['msg' => 'success']);
       } catch (\Exception $e){
           return response()->json(['error' => 'email not found']);
       }
    }
}

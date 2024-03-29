<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\setResetPassword;
use App\Mail\ForgetPass;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class getResetPassword
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }
    /**
     * Handle the event.
     */
    public function handle(setResetPassword $event)
    {
        try {
            $user = User::where('email', $event->email)->first();
            Mail::to($user->email)->send(new ForgetPass);
            return 1;
        } catch (\Exception $e) {
            return 0;
        }
    }
}

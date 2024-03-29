<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Team;
use App\Models\User;
use App\Models\ProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GetTeam
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user=User::find(auth()->user()->id);
        $id=auth()->user()->id;
        if($user->addTeam()->exists()){
            $user->addTeam()->update([
                'teamName'=>$id
            ]);
        } else {
            $user->addTeam()->create([
                'teamName'=>$id
            ]);
        }
        return $next($request);      
    }
}

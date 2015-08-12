<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class WatchlistMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // $user_token = $request->header('User-Token');
        // $user_id = $request->input('user_id');

        // if($user_token==""){
        //     return User::error('User token cannot be blank');
        // } elseif($user_id==""){
        //     return User::error('User id cannot be blank');
        // }

        // if($this->match($user_id,$user_token)){
        //     return $next($request);
        // } else {
        //     return User::error('Not authorised');
        // }

         return $next($request);


    }



    public function match($user_id,$user_token){
        $check = User::where('id',$user_id)->where('user_token',$user_token)->first();
        if($check){
            return true;
        } else {
            return false;
        }
    }

}

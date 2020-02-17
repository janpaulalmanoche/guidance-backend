<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
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


        return $next($request)//if you put '*', you are saying that your backend will communicate to anyone
        //instead of *, you can put the url of your front end site
        ->header('Access-Control-Allow-Credentials', '*')//http://localhost:8081//what domain you want to access this DB server
        ->header('Access-Control-Allow-Headers','*');//
        //specify what headers can be used to the request
//        header_remove('Access-Control-Allow-Credentials');
//        header_remove('Access-Control-Allow-Origin');
    }
    //X-REQUESTED-WITH
    //
}

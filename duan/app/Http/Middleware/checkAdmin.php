<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// use function Laravel\Prompts\alert;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check() && Auth::user()->id_group == 0) {
        //     return $next($request);
        // }
        if(auth()->user()->idgroup == 1){
            return $next($request);
        }else return redirect('/index');
         
            
        // abort(403, 'Bạn không đủ quyền để truy cập!!');
    }
}
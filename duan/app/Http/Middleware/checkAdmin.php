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
        // Kiểm tra xem người dùng đã đăng nhập và có idgroup == 1 hay không
        if (auth()->check() && auth()->user()->idgroup == 1) {
            return $next($request);
        }
    
        // Nếu không có đăng nhập hoặc idgroup không phải 1, cho phép tiếp tục sử dụng trang web
        return $next($request);
    }
    
}
<?php
namespace App\Http\Middleware;
use Closure;

use Illuminate\Support\Facades\Session;
class CustomAuth {
    protected $aberrt;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        // Test for an even vs. odd remote port
     if (!Session::has('email_login'))
       {
            return redirect('/login');
     }

       return $next($request);
    }

}
<?php

namespace App\Http\Middleware;

use Closure;
use Browser;
class ChromeAuthenticated
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
        if(!Browser::isChrome()){
            return redirect('/errorBrowser');
        }else {
            return $next($request);
        }

    }
}

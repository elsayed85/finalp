<?php

namespace App\Http\Middleware;

use Closure;

class IOTVersion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $version)
    {
        config(['iot.api.api_latest' => $version]);
        return $next($request);
    }
}

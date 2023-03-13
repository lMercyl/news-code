<?php

namespace App\Http\Middleware;

use Closure;
use Eseath\SxGeo\SxGeo;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;

class UserRegion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(! $request->cookie('_temp_region') && ! $request->cookie('_choose_region')){
            $db_path = database_path('GeoIP.dat');
            if(file_exists($db_path)){
                $sxGeo = new SxGeo($db_path);
                $fullInfo  = $sxGeo->getCityFull($request->ip());

                Cookie::queue('_temp_region',Arr::get($fullInfo,'region.iso',''), 60 * 24 * 60, null, null, false, false);
            }
        }

        return $next($request);
    }
}

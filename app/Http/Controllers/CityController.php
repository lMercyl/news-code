<?php

namespace App\Http\Controllers;

use Eseath\SxGeo\SxGeo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CityController extends Controller
{
    public function get(Request $request)
    {
        $db_path = database_path('GeoIP.dat');
        if(file_exists($db_path)){
            $sxGeo = new SxGeo($db_path);
            $fullInfo  = $sxGeo->getCityFull($request->ip());
            return response()->json(['region' => Arr::get($fullInfo,'region.iso','')]);
        }

        return response()->json(['region' => '']);
    }
}

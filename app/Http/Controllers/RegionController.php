<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Post;
use App\ElasticFront\Models\Region;
use Eseath\SxGeo\SxGeo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class RegionController extends Controller
{
    public function show($slug, $page = "1")
    {
        $region = Region::query()->where('slug',$slug)->firstOrFail();
        $posts = Post::query()
            ->where('_regions', $region->id)
            ->limit(20)
            ->paginate($page);

        return response()->view('region.show',[
            'region' => $region,
            'posts' => $posts,
            '_meta' => $region->getMeta()
        ]);
    }
}

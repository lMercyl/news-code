<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Page;
use App\ElasticFront\Models\Post;
use Carbon\Carbon;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::query()->where('slug',$slug)->first();
        if(!$page) abort(404);

        return view('page.show',[
            'page' => $page,
            '_meta' => $page->getMeta()
        ]);
    }
}

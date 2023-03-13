<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Category;
use App\ElasticFront\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    private function _meta()
    {
        return [
            'title' => 'Патрульный Петербурга',
            'og:title' => 'Патрульный Петербурга',
            'og:sitename' => 'Патрульный Петербурга',
            'description' => 'Патрульный Петербурга - следим за происходящим в Петербурге и докладывает о важных событиях.',
            'og:description' => 'Патрульный Петербурга - следим за происходящим в Петербурге и докладывает о важных событиях.',
            "keywords" => 'новости,последние новости,новости санкт-петербурга',
            'og:image' => '/images/logo.svg'
        ];
    }

    public function show()
    {
        return view('index.show-new',[
            '_meta' => $this->_meta()
        ]);
    }

    public function tapeNews($page = "1")
    {
        $posts = Post::query()
            ->where('show_lenta', true)
            ->limit(20)
            ->paginate($page);

        return view('index.tapeNews',['posts' => $posts]);
    }
}

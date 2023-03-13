<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Post;
use Eseath\SxGeo\SxGeo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FeedController extends Controller
{
    public function renderFeed($viewName,$posts)
    {
        return response()
            ->view('_feeds.' . $viewName,[
                'posts' => $posts
            ])->withHeaders([
                'Content-Type' => 'text/xml; charset=utf-8'
            ]);
    }

    public function yandexFeed()
    {
        $posts = Post::query()
            ->where('rss_yfeed',true)
            ->limit(100)
            ->get();

        return $this->renderFeed('yandex-news',$posts);
    }

    public function turboFeed()
    {
        $posts = Post::query()
            ->limit(100)
            ->get();

        return $this->renderFeed('yandex-turbo',$posts);
    }

    public function zenFeed()
    {
        $posts = Post::query()
            ->where('rss_yzen',true)
            ->limit(100)
            ->get();

        return $this->renderFeed('yandex-zen',$posts);
    }

    public function google()
    {
        $posts = Post::query()
            ->where('rss_gfeed',true)
            ->limit(100)
            ->get();

        return $this->renderFeed('google',$posts);

    }

    public function feed()
    {
        $posts = Post::query()
            ->limit(100)
            ->get();

        return $this->renderFeed('feed',$posts);

    }

    public function smm()
    {
        $posts = Post::query()
            ->where('rss_smm', true)
            ->limit(100)
            ->get();

        return $this->renderFeed('smm',$posts);

    }

    public function flipboard()
    {
        $posts = Post::query()
            ->where('rss_flipboard',true)
            ->limit(100)
            ->get();

        return $this->renderFeed('yandex-news',$posts);
    }
}

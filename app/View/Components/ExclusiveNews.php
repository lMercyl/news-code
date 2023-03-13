<?php

namespace App\View\Components;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class ExclusiveNews extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()
            ->where('show_main',true)
            ->limit(17)
            ->get();
    }

    public function render()
    {
        return view('components.exclusive-news');
    }
}

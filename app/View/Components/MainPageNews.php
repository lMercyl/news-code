<?php

namespace App\View\Components;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class MainPageNews extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()->where('show_exclusive', true)->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-page-news');
    }
}

<?php

namespace App\View\Components\Index;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class RecommendNews extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()
            ->where('show_rec',true)
            ->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.recommend-news');
    }
}

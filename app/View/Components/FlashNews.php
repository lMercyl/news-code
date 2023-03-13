<?php

namespace App\View\Components;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class FlashNews extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()->where('show_rec',true)->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flash-news');
    }
}

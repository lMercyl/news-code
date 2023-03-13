<?php

namespace App\View\Components;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class SliderNews extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()->where('show_line',true, false)->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider-news');
    }
}

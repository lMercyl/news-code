<?php

namespace App\View\Components\Post;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class SliderUnderPost extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()->where("onfeed_add_top","1")->limit(10)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.slider-under-post');
    }
}

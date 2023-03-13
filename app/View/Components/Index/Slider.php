<?php

namespace App\View\Components\Index;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class Slider extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()
            ->where('show_top',true)
            ->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.slider');
    }
}

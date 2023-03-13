<?php

namespace App\View\Components\Index;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class UnderSlider extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()
            ->where('show_main',true)
            ->limit(8)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.under-slider');
    }
}

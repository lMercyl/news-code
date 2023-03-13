<?php

namespace App\View\Components;

use App\ElasticFront\Models\Post;
use App\ElasticFront\Models\Region;
use Illuminate\View\Component;

class RegionNewsBlock extends Component
{
    public $posts;

    public function __construct()
    {
        $this->posts = Post::query()
            ->limit(4)
            ->where('_regions', 2)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.region-news-block');
    }
}

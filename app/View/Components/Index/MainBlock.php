<?php

namespace App\View\Components\Index;

use App\ElasticFront\Models\Post;
use App\ElasticFront\Models\Region;
use Illuminate\View\Component;

class MainBlock extends Component
{

    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()
            ->where('show_main',true)
            ->limit(7)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index.main-block');
    }
}

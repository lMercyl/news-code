<?php

namespace App\View\Components;

use App\ElasticFront\Models\Post;
use Illuminate\View\Component;

class TapeNews extends Component
{
    public $posts = [];

    public function __construct()
    {
        $this->posts = Post::query()->where('show_lenta', true)->limit(14)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tape-news');
    }
}

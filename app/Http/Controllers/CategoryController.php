<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Category;
use App\ElasticFront\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryController extends Controller
{
    public function show($slug, $id, $page = "1")
    {

        $cat = Category::query()->findOrFail($id);

        if($slug !== $cat->slug){
            return redirect(route('category.show',[
                'slug' => $cat->slug,
                'id'   => $cat->id,
                'page' => $page
            ]),301);
        }

        $posts = Post::query()
            ->where("_categories",$cat['id'])
            ->limit(21)
            ->paginate($page);

        return view('category.show',[
            'posts' => $posts,
            'category' => $cat,
            '_meta' => $cat->getMeta()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Post;
use App\ElasticFront\Models\Tag;

class TagController extends Controller
{
    public function show($slug, $id, $page = "1")
    {
        $tag = Tag::query()->findOrFail($id);

        if($slug !== $tag->slug){
            return redirect(str_replace(['[',']'],'',route('tag.show',[
                'slug' => $tag->slug,
                'id'   => $tag->id,
                'page' => $page
            ])),301);
        }

        $posts = Post::query()
            ->where('tags.id', $tag['id'])
            ->limit(20)
            ->paginate($page);

        return view('tag.show',[
            'posts' => $posts,
            'tag' => $tag,
            '_meta' => $tag->getMeta()
        ]);
    }
}

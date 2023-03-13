<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Post;
use App\ElasticFront\Models\User;

class AuthorController extends Controller
{
    public function show($slug, $id, $page = '1')
    {
        $author = User::query()->findOrFail($id);

        if($author->slug !== $slug){
            $params = [
                'slug' => $author->slug,
                'id' => $id,
            ];
            if(((int) $page) > 1 ) $params['page'] = $page;
            $url = route('author.show',$params);
            return redirect($url,301);
        }

        $posts = Post::query()
            ->must([
                "bool" => [
                    "should" => [
                        [ "term" => [ "_main_author" => $author->id ] ],
                        [
                            "bool" => [
                                "must" => [
                                    [
                                        "term" => [
                                            "_main_author" => 0
                                        ]
                                    ],
                                    [
                                        "term" => [
                                            "_author" => $author->id
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ])
            ->limit(21)
            ->paginate($page);

        return view('author.show',[
            'posts' => $posts,
            'author' => $author,
            '_meta' => $author->getMeta()
        ]);
    }
}

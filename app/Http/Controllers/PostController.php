<?php

namespace App\Http\Controllers;


use App\ElasticFront\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class PostController extends Controller
{

    public function show($year,$month,$day, $id, $params = null)
    {
        $post = Post::query()->findOrFail($id);

        $date = Carbon::parse($post->date);

        if($params === 'json'){
            return response()->json([
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'date' => $post->date,
                'main_image' => $post->main_image,
                'main_desc' => $post->main_desc,
                'content' => $post->content,
                'show_adstext' => $post->show_adstext,
                'show_publisher' => $post->show_publisher,
                'show_urlpublisher' => $post->show_urlpublisher,
                'show_ord' => $post->show_ord,
            ]);
        }

        if(
            "{$date->year}" !== $year ||
            "{$date->month}" !== $month ||
            "{$date->day}" !== $day
        ){
            if(! now()->greaterThan($date)) abort(404);

            $redirUrl = route('post.show',[
                'id' => $id,
                'year' => $date->year,
                'month' => $date->month,
                'day' => $date->day,
                'params' => $params
            ]);
            return redirect($redirUrl,301);
        }

        return view('post.show',[
            'post' => $post,
            '_meta' => $post->getMeta()
        ]);
    }

    public function old($slug,$id)
    {
        $alias = "/news/$slug-$id/";

        $post = Post::query()->where('alias',$alias)->firstOrFail();

        return view('post.show',[
            'post' => $post,
            '_meta' => $post->getMeta()
        ]);
    }

    public function archive($year,$month,$day,$page = "1")
    {
        try {
            $date = Carbon::parse("$year-$month-$day");
            $from = $date->copy()->startOfDay();
            $to = $date->copy()->endOfDay();
        }catch (\Exception $e) {
            abort(404);
        }

        $posts = Post::query()
            ->whereBetween('date',[
                $from->addHours(3)->format('c'),
                $to->addHours(3)->format('c')
            ])
            ->paginate($page);

        return view('post.archive',[
            'posts' => $posts,
            'date' => $date->locale('ru')->isoFormat('D MMMM YYYY')
        ]);
    }

    public function archiveIndex()
    {
        return view('post.archive-index',[
            '_meta' => [
                'title' => 'Архив',
                'og:title' => 'Архив',
                'description' => 'Архив',
                'og:description' => 'Архив'
            ]
        ]);
    }
}

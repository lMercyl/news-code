<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\ElasticFront\Models\Post;
use Niocncn\ElasticFront\ElasticQuery;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $posts = Post::query();

        try{

//            if($categories = $request->get('category_ids','')){
//                $posts->whereIn('_categories',array_map('intval',explode(',',$categories)));
//            }
//
//            if($authors = $request->get('author_ids','')){
//                $posts->whereIn('_author',array_map('intval',explode(',',$authors)));
//            }

//            $this->dates($posts);
//            $this->sort($posts);

            if($query = $request->get('query','')){
                $fields = explode(',',$request->get('content','title'));
//                $fieldNames = array_map(function ($item){
//                    return Arr::first(explode('^',$item));
//                },$fields);

//                $posts->highlightFields($fieldNames);
//                $posts->searchRelevant($query, $fields);
//                $posts->sort();
                $posts->must([
                    "function_score" => [
                        "functions" => [
                            [
                                "gauss" => [
                                    "date" => [
                                        "scale" => "360d"
                                    ]
                                ]
                            ]
                        ],
                        "query" => [
                            "multi_match" => [
                                "query" => $query,
                                "fields" => $fields,
                                "fuzziness" => "AUTO:6,10",
                                "boost" => 2,
                                "tie_breaker" => 0.3
                            ]
                        ]
                    ]
                ]);
            }

            $page = $request->get('page','1');
            $limit = $request->get('limit','20');

            return view('search.show',[
                'ok' => true,
                'posts' => $posts->paginate((int) $page, (int) $limit)
            ]);
        }catch (\Exception $e){
            return response()->json([
                'ok' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }

    private function sort(ElasticQuery &$query)
    {
        $sort = \request()->get('sort');

        switch ($sort){
            case 'date_asc':
                $query->orderBy('date','asc');
                break;
            case 'date_desc':
                $query->orderBy('date',  'desc');
                break;
        }
    }

    private function dates(ElasticQuery &$query)
    {
        $request = \request();
        if($dates = $request->get('dates','')){
            $dates = explode(' - ', $dates);
            $dateFrom = Carbon::parse($dates[0])->toDateString();
            $dateTo = $dates[1];
            $dateTo = Carbon::parse($dateTo)->addDay()->toDateString();
            $query->must([
                'range' => [
                    "date" => [
                        'gte' => $dateFrom,
                        'lt' => $dateTo
                    ]
                ]
            ]);
        }
    }

    public function get()
    {
        return view('search.show');
    }
}

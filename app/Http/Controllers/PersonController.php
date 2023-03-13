<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Company;
use App\ElasticFront\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function showByAlias($slug,$id)
    {
        $alias = route('person.show',[
            'id' => $id,
            'slug' => $slug
        ],false);

        $person = Person::query()
            ->where('alias',$alias)
            ->firstOrFail();

        return view('person.show',[
            'person' => $person
        ]);
    }

    public function all($page = "1")
    {
        $persons = Person::query()->paginate($page);

        return view('person.all',[
            'persons' => $persons
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\ElasticFront\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showByAlias($slug,$id)
    {
        $alias = route('company.show',[
            'id' => $id,
            'slug' => $slug
        ],false);

        $company = Company::query()
            ->where('alias',$alias)
            ->firstOrFail();

        return view('company.show',[
            'company' => $company
        ]);
    }

    public function all($page = "1")
    {
        $companies = Company::query()->paginate($page);

        return view('company.all',[
            'companies' => $companies
        ]);
    }
}

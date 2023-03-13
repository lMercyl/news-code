<?php

namespace App\View\Components;

use App\ElasticFront\Models\Company;
use Illuminate\View\Component;

class CompaniesList extends Component
{
    public $companies = [];

    public function __construct($page = "1")
    {
        $this->companies = Company::query()->paginate($page);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.companies-list');
    }
}

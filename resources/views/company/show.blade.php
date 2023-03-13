@extends('layout.layout')
@section('content')
    <div class="wrap category">
        <div class="row row_main">

{{--                        @dd($company)--}}

            <div class="row_main__col1 col-lg-auto order-xl-2">
                <nav class="breadcrumb">
                    <ol class="breadcrumb__list d-flex">
                        <li class="breadcrumb__item">
                            <a href="/">Новости</a>
                        </li>
                        <li class="breadcrumb__item active">
                            {{ $company->company_title }}
                        </li>
                    </ol>
                </nav>
                <div class="heading">
                    <div class="heading__head d-flex align-items-start">
                        <div class="title">
                            <h1 class="title__h2">{{ $company->company_title }}</h1>
                        </div>
                    </div>
                    <div class="heading__body d-flex mt10">
                        <span class="ws-nowrap">Адрес: &nbsp;</span>
                        <p>{{ $company->company_address }}</p>
                    </div>
                    @if(isset($company->company_mail) && strlen($company->company_mail) > 2)
                        <div class="heading__body d-flex mt10">
                            <span class="ws-nowrap">Эл. адрес: &nbsp;</span>
                            <p>
                                <a href="mailto:{{ $company->company_mail }}" style="color: #C42026;">{{ $company->company_mail }}</a>
                            </p>
                        </div>
                    @endif
                    @if(isset($company->company_phone))
                        <div class="heading__body d-flex mt10">
                            <span>Телефон: &nbsp;</span>
                            <p>{{ $company->company_phone }}</p>
                        </div>
                    @endif
                    <div class="heading__body d-flex mt10">
                        <span class="ws-nowrap">Сфера деятельности: &nbsp;</span>
                        <p>{{ $company->company_area_id }}</p>
                    </div>
{{--                    @dd($company->company_about)--}}
                    @if(isset($company->company_about) && strlen($company->company_about) > 2)
                        <div class="heading__body d-flex mt10">
                            <span class="ws-nowrap">О компании: &nbsp;</span>
                            <p>{{ $company->company_about }}</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row_main__col2 col-lg-auto order-xl-1 single-sidebar">
                <x-region-news-block />
            </div>

            <div class="row_main__col3 col-lg-auto order-xl-3 d-lg-none d-xl-block">
                <x-flash-news />
            </div>

        </div>
    </div>
@endsection

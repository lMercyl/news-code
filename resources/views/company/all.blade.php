@extends('layout.layout')
@section('content')
    <div class="wrap category">
        <div class="row row_main">
            <div class="row_main__col1 col-lg-auto order-xl-2">
                <nav class="breadcrumb">
                    <ol class="breadcrumb__list d-flex">
                        <li class="breadcrumb__item">
                            <a href="/">Новости</a>
                        </li>
                        <li class="breadcrumb__item active">
                            Компании
                        </li>
                    </ol>
                </nav>
                <div class="heading">
                    <div class="heading__head d-flex align-items-start">
                        <div class="title">
                            <h1 class="title__h2">Компании</h1>
                        </div>
                    </div>
                </div>

                <div class="news">
                    <div class="ribbon__list" style="margin-bottom: 40px;">
                        @foreach($companies as $company)
{{--                            @dd($company)--}}
                            <a href="{{ $company['alias'] }}" class="ribbon__item ribbon__item--active">
                                <p class="ribbon__name">{{ $company['title'] }}</p>
                                <p class="ribbon__subname text-crop">{{ $company['company_area_id'] }}</p>
                            </a>
                        @endforeach
                    </div>
                    {{ $companies->links() }}
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


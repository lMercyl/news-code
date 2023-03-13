@extends('layout.layout')
@section('content')
    <div class="wrap category">
        <div class="row row_main">

{{--            @dd($person)--}}

            <div class="row_main__col1 col-lg-auto order-xl-2">
                <nav class="breadcrumb">
                    <ol class="breadcrumb__list d-flex">
                        <li class="breadcrumb__item">
                            <a href="/">Новости</a>
                        </li>
                        <li class="breadcrumb__item active">
                            {{ $person->person_name }}
                        </li>
                    </ol>
                </nav>
                <div class="heading">
                    <div class="heading__head d-flex align-items-start">
                        <div class="title">
                            <h1 class="title__h2">{{ $person->person_name }}</h1>
                        </div>
                    </div>
                    <div class="heading__body d-flex">
                        <span>Должность: &nbsp;</span>
                        <p>{{ $person->person_title }}</p>
                    </div>
                    <div class="heading__body d-flex">
                        <span>Дата рождения: &nbsp;</span>
                        <p>{{ $person->person_birdth_day }}</p>
                    </div>
                    <div class="heading__body d-flex">
                        <span>Образование: &nbsp;</span>
                        <p>{{ $person->person_about_education }}</p>
                    </div>
                    <div class="heading__body d-flex">
                        <span>Биография: &nbsp;</span>
                        <p>{{ $person->person_about_bio }}</p>
                    </div>
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

@extends('layout.layout')
@section('title',$region->name)
@section('description',$region->description)
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
                            {{ $region->name }}
                        </li>
                    </ol>
                </nav>
                <div class="heading">
                    <div class="heading__head d-flex align-items-start">
                        @if($region->getImage())
                            <div class="heading__img"><img src="{{ $region->getImage() }}" alt="Фото"></div>
                        @endif
                        <div class="title">
                            <h1 class="title__h1">{{ $region->name }}</h1>
                        </div>
                    </div>
                    <div class="heading__body">
                        <p>{{ $region->description }}</p>
                    </div>
                </div>
                <div class="news">
                    <div class="swiper-container news__slider">
                        <div class="swiper-wrapper row row_news">
                            <x-defaults.post-list :posts="$posts" />
                        </div>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>

            <div class="row_main__col2 col-lg-auto order-xl-1">
                <x-tape-news />
            </div>

            <div class="row_main__col3 col-lg-auto order-xl-3 d-lg-none d-xl-block">
                <x-flash-news />
            </div>

        </div>
    </div>
@endsection

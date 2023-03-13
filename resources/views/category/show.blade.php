@extends('layout.layout')
@section('content')
    <div class="category-page">
        <div class="category-header">
            <div class="category-header__title-wrap">
                <h1 class="category-header__title">{{ $category->name }}</h1>
            </div>
            @if($category->description)
            <div class="category-header__container">
                {!! $category->description !!}
            </div>
            @endif
        </div>
        <section class="section">
            <div class="main-container">
                <x-defaults.post-list :posts="$posts" />
                {{ $posts->links() }}
            </div>

            <div class="sidebar">
                <x-main-page-news />
                <div class="sidebar__sticky">
                    <div class="banner">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

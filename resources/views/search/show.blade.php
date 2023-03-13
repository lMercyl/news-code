@extends('layout.layout')
@section('content')
<div class="tape-page">
    <div class="category-header">
        <div class="category-header__title-wrap">
            <h1 class="category-header__title">Поиск</h1>
        </div>
    </div>
    <section class="section">
        <div class="main-container">
            <div class="search-form">
                <form method="GET" action="/search">
                    <div class="search-form__block">
                        <input id="text" name="query" type="text" value="{{ isset($_GET['query'])?$_GET['query']:''}}">
                        <button type="submit" id="search-form-button">Найти</button>
                    </div>
                </form>
            </div>
            <x-defaults.post-list-v2 :posts="$posts" />
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

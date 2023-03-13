@extends('layout.layout')
@section('content')
    <div class="tape-page">
        <div class="category-header">
            <div class="category-header__title-wrap">
                <h1 class="category-header__title">Все новости</h1>
            </div>
        </div>
        <section class="section">
            <div class="main-container">
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

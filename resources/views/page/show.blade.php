@extends('layout.layout')
@section('content')
    <div class="single-page">
        <section class="section" style="justify-content: center;">
            <div class="main-container">
                <article class="article">
                    <div class="article-body">
                        <h1 class="article-body__title">{{ $page->title }}</h1>
                        <div class="article-body__content">
                            {!! $page->getContentWithCdnImages() !!}
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection

@extends('layout.layout')
@section('content')
    <div class="single-page">
        <section class="section">
            <div class="main-container">
                <div class="single-header">
                    <div class="single-header__info">
                        <div class="single-header__left">
                            <div class="single-header__time">{{ $post->getHumanDateWithYear() }}, {{ $post->getHumanTime() }}</div>
                            <a class="single-header__rubric"
                               href="{{ $post->getMainCat()->getUrl() }}">{{ $post->getMainCat()->name }}</a>
                            @if($post->getAuthor())
                                <a  href="{{ route('author.show',[ 'slug' => $post->getAuthor()->slug, 'id' => $post->getAuthor()->id ]) }}"
                                    class="single-header__rubric">
                                    {{ $post->getAuthor()->first_name }} {{ $post->getAuthor()->last_name }}
                                </a>
                            @endif
                            @if($post->show_ord)<span style="color: #636363;font-size: 14px;white-space: nowrap;">
                    Erid: {{ $post->show_ord }}</span>@endif
                        </div>
                        <div class="single-header__right">
                            <div class="share-block">
                                <div class="share-block__item">
                                    <div class="share-block__icon">
                                        <a href="https://vk.com/share.php?url={{ $post->getUrl() }}&amp;title={{ $post->title }}"
                                           target="_blank" rel=" noopener nofollow"><img src="/images/vk.svg"></a>
                                    </div>
                                </div>
                                <div class="share-block__item">
                                    <div class="share-block__icon">
                                        <a href="https://t.me/share/url?text={{ $post->title }}&amp;url={{ $post->getUrl() }}"
                                           target="_blank" rel=" noopener nofollow"><img src="/images/ok.svg"></a>
                                    </div>
                                </div>
                                <div class="share-block__item">
                                    <div class="share-block__icon">
                                        <a href="https://connect.ok.ru/offer?url={{ $post->getUrl() }}&amp;title={{ $post->title }}"
                                           target="_blank" rel=" noopener nofollow"><img src="/images/tg.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <article class="article">
                    <div class="article-body">
                        <h1 class="article-body__title">{{ $post->title }}</h1>
                        <div class="article-body__subtitle">{{ $post->getLead() }}</div>
                        @php
                            $count_p=0
                        @endphp

                        <div class="article-body__content">
                        @foreach(explode('</p>', $post->getContentWithCdnImages()) as $key_content =>$content_item)
                            @if ( trim($content_item) != '<p>' && strlen(trim($content_item)) > 4 )
                                @php
                                    $count_p++
                                @endphp
                                @if ($count_p == 2)
                                    @if($post->id < 21908)
                                    @else
                                    <div class="article-body__main-image">
                                        <figure class="article-body__figure">
                                            <div class="article-body__image-wrap">
                                                <img class="article-body__image"
                                                     width="620"
                                                     height="349"
                                                     loading="auto"
                                                     src="{{$post->getImage('jpg',600,16,9)}}"
                                                >
                                            </div>
                                            <figcaption class="article-body__caption">{!! $post->getImageCaption() !!}</figcaption>
                                        </figure>
                                    </div>
                                    @endif
                                @endif
                            @endif
                            {!! $content_item !!}</p>
                        @endforeach

                        </div>
{{--                        <div class="article-body__content">--}}
{{--                            {!! $post->getContentWithCdnImages() !!}--}}
{{--                        </div>--}}

                        <div class="article-body__tags">
                            @foreach($post->tags as $tag)
                            <a class="article-body__tag-item" href="/tag/{{ $tag['slug'] }}--{{ $tag['id'] }}">
                                {{ $tag['name'] }}
                            </a>
                            @endforeach
                        </div>

                        <div id="yandex_rtb_R-A-1717112-2"></div>

                    </div>
                </article>
            </div>
            <div class="sidebar">
                <div id="yandex_rtb_R-A-1717112-1"></div>
                <x-main-page-news />
                <div class="sidebar__sticky">
                    <div class="banner">
                    </div>
                </div>
            </div>
            <div id="unit_101038" style="width: 100%;"></div>

            <script type="text/javascript" charset="utf-8">
                (function() {
                    var sc = document.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
                    sc.src = '//smi2.ru/data/js/101038.js'; sc.charset = 'utf-8';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
                }());
            </script>
        </section>
    </div>
@endsection

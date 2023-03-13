<?xml version="1.0" encoding="UTF-8" ?><rss
        xmlns:yandex="http://news.yandex.ru"
        xmlns:media="http://search.yahoo.com/mrss/"
        xmlns:turbo="http://turbo.yandex.ru"
        version="2.0"
>
    <channel>
        <title>Патрульный Петербурга</title>
        <link>https://patrol.spb.ru</link>
        <description>Патрульный Петербурга - следим за происходящим в Петербурге и докладывает о важных событиях.</description>

        @foreach($posts as $post)
        <item turbo="true">
            <link>{{ $post->getUrl() }}</link>
            <pubDate>{{ $post->getRssDate() }}</pubDate>
            <category>{{ $post->getMainCat()->name }}</category>
            <turbo:content><![CDATA[
                <header>
                    <h1>{{ $post->title }}</h1>
                </header>
                @if($post->getMainImage())
                    <figure>
                        <img src="{{ $post->getMainImage() }}"  />
                        @if(!empty($post->getImageCaption()))
                            <figcaption>{{ strip_tags(wp_string($post->getImageCaption())) }}</figcaption>
                        @endif
                    </figure>
                @endif
                @php
                    $count_p=0
                @endphp
                @foreach(explode('</p>', $post->content) as $key_content =>$content_item)
                    @if ( trim($content_item) != '<p>' && strlen(trim($content_item)) > 4 )
                        @php
                            $count_p++
                        @endphp
                        @if ($count_p == 2)
                            <figure>
                                <img src="{{ $post->getMainImage() }}"  />
                                @if(!empty($post->getImageCaption()))
                                    <figcaption>{{ strip_tags(wp_string($post->getImageCaption())) }}</figcaption>
                                @endif
                                @endif
                            </figure>
                            {!! $content_item !!}</p>
                        @endif
                        @endforeach
                        {!! $content_item !!}

                        <figure data-turbo-ad-id="turbo-ad-2"></figure>
                        <figure data-turbo-ad-id="turbo-ad-3"></figure>
                        ]]>
            </turbo:content>
            <author>{{ $post->getAuthor()->first_name }} {{ $post->getAuthor()->last_name }}</author>
        </item>
        @endforeach
    </channel>
</rss>

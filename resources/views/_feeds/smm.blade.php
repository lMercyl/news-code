<?xml version="1.0" encoding="UTF-8"?>    <rss xmlns:yandex="https://news.yandex.ru" version="2.0">
    <channel>
        <title>Патрульный Петербурга</title>
        <link>https://patrol.spb.ru</link>
        <description>Патрульный Петербурга - следим за происходящим в Петербурге и докладывает о важных событиях.</description>
        <language>ru</language>
        <copyright>Патрульный Петербурга</copyright>
        <lastBuildDate>{{ $posts->first() ? $posts->first()->getRssDate() : now()->format(DATE_RSS) }}</lastBuildDate>
        <yandex:logo>https://patrol.spb.ru/images/logo.png</yandex:logo>
        <yandex:logo type="square">https://patrol.spb.ru/images/favicon/512.png</yandex:logo>
        <image>
            <url>https://patrol.spb.ru/images/logo.png</url>
            <title>Патрульный Петербурга</title>
            <link>https://patrol.spb.ru</link>
        </image>
        @foreach($posts as $post)
            <item>
                <title>{{ wp_string($post->title) }}</title>
                <guid>{{ $post->getUrl() }}</guid>
                <link>{{ $post->getUrl() }}</link>
                <description>{{ wp_string($post->getLead()) }}</description>
                <pubDate>{{ $post->getRssDate() }}</pubDate>
                <enclosure url="{{ $post->getMainImage() }}" type="image/jpg" />
                @foreach($post->getImageSourcesFromContent() as $image)
                    <enclosure url="{{ cdnImage($image) }}" type="image/{{ \Illuminate\Support\Arr::last(explode('.', cdnImage($image))) }}" />
                @endforeach
            </item>
        @endforeach
    </channel>
</rss>

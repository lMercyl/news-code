<?xml version="1.0" encoding="UTF-8" ?><rss version="2.0"
                                            xmlns:content="http://purl.org/rss/1.0/modules/content/"
                                            xmlns:wfw="http://wellformedweb.org/CommentAPI/"
                                            xmlns:dc="http://purl.org/dc/elements/1.1/"
                                            xmlns:atom="http://www.w3.org/2005/Atom"
                                            xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
                                            xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
>
    <channel>
        <title>Патрульный Петербурга</title>
        <atom:link href="https://patrol.spb.ru/rss/type/feed/" rel="self" type="application/rss+xml" />
        <link>https://patrol.spb.ru</link>
        <description>Патрульный Петербурга - следим за происходящим в Петербурге и докладывает о важных событиях.</description>
        <lastBuildDate>{{ $posts->first() ? $posts->first()->getRssDate() : now()->format(DATE_RSS) }}</lastBuildDate>
        <language>ru-RU</language>
        @foreach($posts as $post)
        <item>
            <guid isPermaLink="true">{{ $post->getUrl() }}</guid>
            <pubDate>{{ $post->getRssDate() }}</pubDate>
            <title>{{ $post->title }}</title>
            <description>{{ $post->getLead() }}</description>
            <category>{{ $post->getMainCat()->name }}</category>
            <enclosure url="{{ $post->getMainImage() }}" type="image/jpg" />
            <content:encoded><![CDATA[
                {!! $post->getContentWithCdnImages() !!}
                ]]></content:encoded>
            <link>{{ $post->getUrl() }}</link>
            <author>{{ $post->getAuthor()->first_name }} {{ $post->getAuthor()->last_name }}</author>
        </item>
        @endforeach
    </channel>
</rss>

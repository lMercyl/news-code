<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://search.yahoo.com/mrss/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:georss="http://www.georss.org/georss" version="2.0">
    <channel>
        <title>Патрульный Петербурга</title>
        <link>https://patrol.spb.ru</link>
        <description>Патрульный Петербурга - следим за происходящим в Петербурге и докладывает о важных событиях.</description>
        <language>ru</language>
        <copyright>Патрульный Петербурга</copyright>
        <lastBuildDate>{{ $posts->first() ? $posts->first()->getRssDate() : now()->format(DATE_RSS) }}</lastBuildDate>
        @foreach($posts as $post)
            <item>
                <title>{{ $post->title }}</title>
                <link>{{ $post->getUrl() }}</link>
                <description>{{ $post->getLead() }}</description>
                <pubDate>{{ $post->getRssDate() }}</pubDate>
                <media:rating scheme="urn:simple">nonadult</media:rating>
                <category>{{ $post->getMainCat()->name }}</category>
                <author>{{ $post->getAuthor()->name }}</author>
                <content:encoded>
                    @if($post->getMainImage())

                    @endif
                    {{ $post->getContentWithCdnImages() }}
                </content:encoded>
                <enclosure url="{{ $post->getMainImage() }}" type="image/jpg" />
                @foreach($post->getImageSourcesFromContent() as $image)
                    <enclosure url="{{ cdnImage($image) }}" type="image/{{ \Illuminate\Support\Arr::last(explode('.', cdnImage($image))) }}" />
                @endforeach
            </item>
        @endforeach
    </channel>
</rss>

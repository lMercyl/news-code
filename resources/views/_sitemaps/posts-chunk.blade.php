<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($posts as $post)
        <url>
            <loc>{{ $post->getUrl() }}</loc>
            <lastmod>{{ (new DateTime($post->date))->format('c') }}</lastmod>
        </url>
    @endforeach
</urlset>

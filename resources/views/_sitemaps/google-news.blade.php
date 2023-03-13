<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">
    @foreach($posts as $post)
    <url>
        <loc>{{ $post->getUrl() }}</loc>
        <news:news>
            <news:publication>
                <news:name>АБН</news:name>
                <news:language>ru</news:language>
            </news:publication>
            <news:publication_date>{{ (new DateTime($post->date))->format('c') }}</news:publication_date>
            <news:title>{{ $post->title }}</news:title>
        </news:news>
    </url>
    @endforeach
</urlset>





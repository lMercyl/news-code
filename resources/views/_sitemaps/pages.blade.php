<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($pages as $page)
        <url>
            <loc>{{ route('page.show',[ 'slug' => $page->slug ]) }}</loc>
            <lastmod>{{ (new DateTime($page->date))->format('c') }}</lastmod>
        </url>
    @endforeach
</urlset>

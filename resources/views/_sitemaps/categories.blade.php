<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($categories as $category)
        <url>
            <loc>{{ route('category.show',[ 'slug' => $category->slug ]) }}</loc>
            <lastmod>{{ (new DateTime($category->date))->format('c') }}</lastmod>
        </url>
    @endforeach
</sitemapindex>

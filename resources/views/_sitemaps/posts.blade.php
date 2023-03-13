<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @for($i = 0; $i <= $chunks; $i++)
    <sitemap>
        <loc>{{ route('sitemap.posts-chunk',[ 'chunk' => $i ]) }}</loc>
    </sitemap>
    @endfor
</sitemapindex>



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CdnController;

Route::get('/',"IndexController@show")
    ->name('index');

Route::get('/wp-from/{object}/{type}/{id}/{slug}',"BackRedirectController@fromWordPressAdmin");

Route::get('/storage/wp-content/uploads/{path_filename}__{width}_{widen}x{heighten}.{ext}', 'CdnController@wpContent')
    ->where([
        'width' => '[0-9]+',
        'widen' => '[0-9]+',
        'heighten' => '[0-9]+',
        'path_filename' => '.*',
        'ext' => '('. join('|',CdnController::ALLOW_EXT) .')',
    ])
    ->name('image.source');

Route::get('/news/{year}/{month}/{day}/{id}/{params?}',"PostController@show")
    ->name('post.show')
    ->where([
        'year' => '[0-9]+',
        'month' => '[0-9]+',
        'day' => '[0-9]+',
        'id' => '[0-9]+',
        'params' => '[a-zA-Z\-0-9\_]*',
    ]);

Route::get('/ar/{year}/{month}/{day}/{page?}',"PostController@archive")
    ->name('post.archive')
    ->where([
        'year' => '[0-9]+',
        'month' => '[0-9]+',
        'day' => '[0-9]+',
        'page' => '[0-9]+',
    ]);

Route::get('/ar/',"PostController@archiveIndex")
    ->name('post.archive-index');

Route::get('/category/{slug}--{id}/{page?}',"CategoryController@show")
    ->name('category.show')
    ->where([
        'id' => '[0-9]+',
        'slug' => '[a-zA-Z\-0-9\_]*',
        'page' => '[0-9]+',
    ]);

Route::get('/tape/{page?}',"IndexController@tapeNews")
    ->name('tapeNews.show')
    ->where([
        'page' => '[0-9]+',
    ]);

Route::get('/company/{slug}-{id}.html','CompanyController@showByAlias')
    ->where([
        'id' => '[0-9]+',
        'slug' => '[a-zA-Z\-0-9\_]*'
    ])->name('company.show');

Route::get('/person/{slug}-{id}.html','PersonController@showByAlias')
    ->where([
        'id' => '[0-9]+',
        'slug' => '[a-zA-Z\-0-9\_]*'
    ])->name('person.show');

Route::get('/person/{page?}',"PersonController@all")
    ->name('person.list')
    ->where([
        'page' => '[0-9]+',
    ]);

Route::get('/company/{page?}',"CompanyController@all")
    ->name('company.list')
    ->where([
        'page' => '[0-9]+',
    ]);

//Route::get('/region/{slug}--{id}/{page?}',"RegionController@show")
//    ->name('region.show')
//    ->where([
//        'id' => '[0-9]+',
//        'slug' => '[a-zA-Z\-0-9\_]*',
//        'page' => '[0-9]+',
//    ]);

Route::get('/tag/{slug}--{id}/{page?}',"TagController@show")
    ->name('tag.show')
    ->where([
        'id' => '[0-9]+',
        'slug' => '[a-zA-Z\-0-9\_]*',
        'page' => '[0-9]+',
    ]);

Route::get('/page/{slug}',"PageController@show")
    ->name('page.show')
    ->where([
        'slug' => '[a-zA-Z\-0-9\_]*',
    ]);

Route::get('/region/{slug}/{page?}',"RegionController@show")
    ->name('region.show')
    ->where([
        'slug' => '[a-zA-Z\-0-9\_]*',
    ]);

Route::get('/author/{slug}-{id}/{page?}',"AuthorController@show")
    ->name('author.show')
    ->where([
        'slug' => '[a-zA-Z\-0-9\_]*',
        'id' => '[0-9]+'
    ]);

Route::get('/internal/region',"CityController@get")
    ->name('region.get');

Route::get('/news/{slug}-{id}/',"PostController@old")
    ->name('post.old')
    ->where([
        'slug' => '[a-zA-Z\-0-9\_]*',
        'id' => '[0-9]+'
    ]);

Route::get('/search',"SearchController@show")
    ->name('search.show');


/** ****** RSS ****** SITEMAPS ****** */


Route::get('/rss/type/yandex/',"FeedController@yandexFeed")
    ->name('feed.yandex');

Route::get('/yrss/',"FeedController@yandexFeed")
    ->name('feed.yandex');

Route::get('/rss/type/yandex-turbo/',"FeedController@turboFeed")
    ->name('feed.turbo');

Route::get('/zen',"FeedController@zenFeed")
    ->name('feed.zen');

Route::get('/yrss2/',"FeedController@zenFeed");

Route::get('/isdze/',"FeedController@zenFeed");

Route::get('/rss/type/feed/',"FeedController@feed")
    ->name('feed.feed');

Route::get('/rss/type/google/',"FeedController@google")
    ->name('feed.google');

Route::get('/grss/',"FeedController@google");

Route::get('/rss/type/smm/',"FeedController@smm")
    ->name('feed.smm');

Route::get('/rss/type/flipboard/',"FeedController@flipboard")
    ->name('feed.flipboard');

Route::get('/sitemap.xml',function(){
    return response()
        ->view('_sitemaps.union')
        ->withHeaders([
            'Content-Type' => 'text/xml; charset=utf-8'
        ]);
})->name('sitemap');

Route::get('/sitemap-posts.xml',"SitemapController@posts")
    ->name('sitemap.posts');

Route::get('/sitemap-tags.xml',"SitemapController@tags")
    ->name('sitemap.tags');

Route::get('/sitemap-posts-{chunk}.xml',"SitemapController@postsChunk")
    ->name('sitemap.posts-chunk')
    ->where([
        'chunk' => '[0-9]+'
    ]);

Route::get('/google-news.xml',"SitemapController@googleNews")
    ->name('sitemap.google-news');

Route::get('/sitemap-tags-{chunk}.xml',"SitemapController@tagsChunk")
    ->name('sitemap.tags-chunk')
    ->where([
        'chunk' => '[0-9]+'
    ]);

Route::get('/sitemap-pages.xml',"SitemapController@pages")
    ->name('sitemap.pages');

Route::get('/sitemap-categories.xml',"SitemapController@categories")
    ->name('sitemap.categories');

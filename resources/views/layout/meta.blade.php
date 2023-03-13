<meta charset="utf-8" />
@isset( $_meta['title'] )
    <title>{{ $_meta['title'] }}</title>
@endisset
@isset( $_meta['description'] )
    <meta name="description" content="{{ $_meta['description'] }}" />
@endisset
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
@isset( $_meta['keywords'] )
    <meta name="keywords" content="{{ $_meta['keywords'] }}"/>
@endisset
@isset( $_meta['canonical'] )
    <link rel="canonical" href="{{ $_meta['canonical'] }}"/>
@endisset
@isset( $_meta['article:published_time'] )
    <meta property="article:published_time" content="{{ $_meta['article:published_time'] }}"/>
@endisset
@isset( $_meta['article:modified_time'] )
    <meta property="article:modified_time" content="{{ $_meta['article:modified_time'] }}"/>
@endisset
@isset( $_meta['article:author'] )
    <meta property="article:author" content="{{ $_meta['article:author'] }}">
@endisset
@isset( $_meta['article:section'] )
    <meta property="article:section" content="{{ $_meta['article:section'] }}">
@endisset
@isset( $_meta['author'] )
    <meta name="author" content="{{ $_meta['author'] }}">
@endisset
@isset( $_meta['og:title'] )
    <meta property="og:title" content="{{ $_meta['og:title'] }}"/>
@endisset
@isset( $_meta['og:description'] )
    <meta property="og:description" content="{{ $_meta['og:description'] }}"/>
@endisset
@isset( $_meta['og:url'] )
    <meta property="og:url" content="{{ $_meta['og:url'] }}"/>
@endisset
@isset( $_meta['og:site_name'] )
    <meta property="og:site_name" content="{{ $_meta['og:site_name'] }}"/>
@endisset
@isset( $_meta['og:image'] )
    <meta property="og:image" content="{{ $_meta['og:image'] }}"/>
@endisset
@isset( $_meta['og:type'] )
    <meta property="og:type" content="{{ $_meta['og:type'] }}">
@endisset
@isset( $_meta['og:image:secure_url'] )
    <meta property="og:image:secure_url" content="{{ $_meta['og:image:secure_url'] }}"/>
@endisset
@isset( $_meta['twitter:title'] )
    <meta name="twitter:title" content="{{ $_meta['twitter:title'] }}">
@endisset
@isset( $_meta['twitter:description'] )
    <meta name="twitter:description" content="{{ $_meta['twitter:description'] }}">
@endisset
    <meta name="twitter:card" content="summary">
@isset( $_meta['twitter:image'] )
    <meta name="twitter:image" content="{{ $_meta['twitter:image'] }}">
@endisset
    <link rel="manifest" href="/manifest.json" crossorigin="use-credentials">

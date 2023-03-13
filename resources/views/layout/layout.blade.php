<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    @include('layout.meta')
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon/512.svg">

    <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
</head>
<body>
<div class="layout">

    @include('layout.header')

    <main class="layout__content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layout.footer')

</div>
<script src="/libs/jquery/jquery-3.4.0.min.js"></script>
<script src="{{ mix('/js/app.js') }}"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

    ym(87696871, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87696871" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!--LiveInternet counter-->
<script>
    new Image().src = "https://counter.yadro.ru/hit;MKhouse?r"+
        escape(document.referrer)+((typeof(screen)=="undefined")?"":
            ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
        ";h"+escape(document.title.substring(0,150))+
        ";"+Math.random();
</script>
<!--/LiveInternet-->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y2TT978ZKF"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Y2TT978ZKF');
</script>

<!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>

</body>
</html>

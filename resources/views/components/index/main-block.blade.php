<div class="title title_big border">
    <p class="title__h2">главное</p>
</div>

@foreach($posts as $post)
{{--    @dd($post->getImage('jpg', 300))--}}
    <div style="margin-bottom: 22px;">
        <a href="{{ $post->getUrl() }}" class="news__item">
            <div class="news__img bleed border-white" style="background-image: url({{ $post->getImage('jpg', 300) }})">
            <div class="news__inner">
                <div class="news__body">
                    <p class="news__name main-page">{{ $post->title }}</p>
                    <p class="news__lead">{{ $post->getLead() }}</p>
                </div>
                <div class="news__foot">
                    <p class="ribbon__subname text-crop">{{ $post->getMainCat()->name }}</p>
                    <p class="ribbon__date"><b>{{ $post->getHumanDate() }}</b> {{ $post->getHumanTime() }}</p>
                </div>
            </div>
        </a>
    </div>
@endforeach

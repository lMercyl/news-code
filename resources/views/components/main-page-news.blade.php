<div class="main-news">
    <div class="main-news__title">
{{--        <img src="/images/icon-ches.svg" alt="Главное" height="25px" style="margin: 0px 10px -6px 0px;"/>--}}
        Эксклюзив
    </div>
    @foreach($posts as $key => $post)
        @if($key === 0)
            <a class="main-card main-card--tape" href="{{ $post->getUrl() }}">
                <div class="main-card__image">
                    <img class="main-card__image" loading="lazy" src="{{ $post->getImage('jpg', 600) }}">
                </div>
                <div class="main-card__titles">
                    <h3 class="main-card__title">{{ $post['title'] }}</h3>
                </div>
                <div class="main-card__info">
                    <time class="main-card__date">{{ $post->getHumanTime() }}, {{ $post->getHumanDate() }}</time>
                </div>
            </a>
        @else
        <a class="mini-card" href="{{ $post->getUrl() }}">
            <div class="mini-card__image-wrap">
                <img class="mini-card__image" height="50" loading="auto" src="{{ $post->getImage('jpg', 100, 1, 1, 'webp') }}" width="50">
            </div>
            <div class="mini-card__text">
                <span class="mini-card__title">{{ $post['title'] }}</span>
            </div>
        </a>
        @endif
    @endforeach
</div>

<div class="tapenews">
    @foreach($posts as $key => $post)
        @if($key === 0 || $key === 3 || $key === 8)
    <div class="tapenews__column">
        @endif
        @if($key === 0)
        <div class="tapenews__first">
            <a class="main-card" href="{{ $post->getUrl() }}">
                <div class="main-card__image">
                    <img class="main-card__image" loading="lazy" src="{{ $post->getImage('jpg', 600) }}">
                </div>
                <div class="main-card__titles">
                    <h3 class="main-card__title">{{ $post['title'] }}</h3>
                    <div class="main-card__info">
                        <time class="main-card__date">{{ $post->getHumanTime() }}, {{ $post->getHumanDate() }}</time>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @if($key > 0 && $key < 13)
                <a class="small-card" href="{{ $post->getUrl() }}">
                    <div class="small-card__text">
                        <span class="small-card__title">{{ $post['title'] }}</span>
                        <div class="small-card__info">
                            <time class="small-card__date">{{ $post->getHumanTime() }}, {{ $post->getHumanDate() }}</time>
                        </div>
                    </div>
                </a>
        @endif
        @if($key === 2 || $key === 7 || $key === 12)
    </div>
        @endif
    @endforeach
    <a class="tapenews__button" href="/tape">Все новости</a>
</div>

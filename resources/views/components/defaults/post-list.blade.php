<div class="exlusive-news">
    <div class="exlusive-news__box">
        <a class="exlusive-card" href="{{ $posts[0]->getUrl() }}">
            <div class="exlusive-card__image-wrap">
                <img class="exlusive-card__image" height="386" loading="auto" src="{{ $posts[0]->getImage('jpg', 600) }}" width="580">
            </div>
            <div class="exlusive-card__topic">
                <h3 class="exlusive-card__title">{{ $posts[0]->title }}</h3>
{{--                <span class="exlusive-card__rightcol">{{ $posts[0]->getLead() }}</span>--}}
                <div class="exlusive-card__info">
                    <time class="exlusive-card__date">{{ $posts[0]->getHumanTime() }}, {{ $posts[0]->getHumanDate() }}</time>
                </div>
            </div>
        </a>
    </div>
    <div class="exlusive-list__box">
        @foreach($posts as $key => $post)
            @if($key === 1)
                <a class="big-card" href="{{ $post->getUrl() }}">
                    <div class="big-card__image-wrap">
                        <img class="big-card__image" height="186" loading="lazy" src="{{ $post->getImage('jpg', 300) }}" width="280">
                    </div>
                    <div class="big-card__titles">
                        <h3 class="big-card__title">{{ $post->title }}</h3>
                        <span class="big-card__rightcol">{{ $post->getLead() }}</span>
                    </div>
                    <div class="big-card__info">
                        <time class="big-card__date">{{ $post->getHumanTime() }}, {{ $post->getHumanDate() }}</time>
                    </div>
                </a>
            @endif
            @if($key === 2 || $key === 3)
                <a class="mini-card" href="{{ $post->getUrl() }}">
                    <div class="mini-card__text">
                        <span class="mini-card__title">{{ $post->title }}</span>
                        <div class="mini-card__info">
                            <time class="mini-card__date">{{ $post->getHumanTime() }}, {{ $post->getHumanDate() }}</time>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>

    @foreach($posts as $key => $post)
    @if($key > 8 && $key < 21)
    <div class="exlusive-list__box">
        <a class="big-card" href="{{ $post->getUrl() }}">
            <div class="big-card__image-wrap">
                <img class="big-card__image" height="186" loading="lazy" src="{{ $post->getImage('jpg', 300) }}" width="280">
            </div>
            <div class="big-card__titles">
                <h3 class="big-card__title">{{ $post->title }}</h3>
                <span class="big-card__rightcol">{{ $post->getLead() }}</span>
            </div>
            <div class="big-card__info">
                <time class="big-card__date">{{ $post->getHumanTime() }}, {{ $post->getHumanDate() }}</time>
            </div>
        </a>
    </div>
    @endif
    @endforeach
</div>

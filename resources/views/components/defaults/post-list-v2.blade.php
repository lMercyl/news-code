<div class="news-list">
    @foreach($posts as $key => $post)
        <a class="news-list-card" href="{{ $post->getUrl() }}">
            <h3 class="news-list-card__title">{{ $post->title }}</h3>
            <div class="news-list-card__info">
                <time class="news-list-card__date">{{ $post->getHumanTime() }}, {{ $post->getHumanDate() }}</time>
                <span class="news-list-card__category">{{ $post->getMainCat()->name }}</span>
            </div>
        </a>
    @endforeach
</div>

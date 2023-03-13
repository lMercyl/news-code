<div class="row row_news">
    @foreach($posts as $post)
        <div class="col-6 col-md-3 d-none d-md-block">
            <a href="{{ $post->getUrl() }}" class="news__item news__item--small">
                <div class="news__img bleed">
                    <img src="{{ $post->getImage() }}" alt="{{ $post->title }}">
                </div>
                <div class="news__inner">
                    <div class="news__body">
                        <p class="news__name">{{ $post->title }}</p>
                    </div>
                    <div class="news__foot">
                        <p class="ribbon__subname text-crop">{{ $post->getMainCat()->name }}</p>
                        <p class="ribbon__date"><b>{{ $post->getHumanDate() }}</b> {{ $post->getHumanTime() }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

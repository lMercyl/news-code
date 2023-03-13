<div class="swiper-container theme__sl">
    <div class="swiper-wrapper">
        @foreach($posts as $post)
        <div class="swiper-slide">
            <a href="{{ $post->getUrl() }}" class="news__item news__item--small">
                <div class="news__img bleed"><img src="{{ $post->getImage() }}" alt="{{ $post->title }}"></div>
                <div class="news__inner">
                    <div class="news__body">
                        <p class="news__name">{{ $post->title }}</p>
                    </div>
                    <div class="news__foot">
                        <p class="ribbon__subname text-crop">название_рубрики</p>
                        <p class="ribbon__date"><b>25 января</b> 19:15</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <button class="swiper-button swiper-button-next"></button>
    <button class="swiper-button swiper-button-prev"></button>
</div>

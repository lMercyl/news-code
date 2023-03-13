<div class="popular">
    <div class="title">
        <p class="title__norm">Рекомендуемое</p>
    </div>
    <div class="swiper-container popular__sl">
        <div class="swiper-wrapper">
            @foreach($posts as $post)
                <div class="swiper-slide">
                    <a href="{{ $post->getUrl() }}" class="popular__item">
                        <div class="popular__img bleed"><img src="{{ $post->getImage('jpg', 300) }}" alt="Фото"></div>
                        <p class="popular__name">{{ $post->title }}</p>
                        <p class="ribbon__subname text-crop">{{ $post->getMainCat()->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

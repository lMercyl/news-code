<div class="popular">
    <div class="title">
        <p class="title__norm">Рекомендованное</p>
    </div>
    <div class="swiper-container popular__sl">
        <div class="swiper-wrapper">
            @foreach($posts as $key => $post)
                @if($key === 0)
                    <div class="swiper-slide  flash-item">
                        <a href="{{ $post->getUrl() }}" class="popular__item">
                            <div class="popular__img bleed">
                                <img src="{{ $post->getImage() }}" alt="Фото">
                            </div>
                            <p class="popular__name">{{ $post['title'] }}</p>
                            <p class="ribbon__subname text-crop">{{ $post->getMainCat()->name }}</p>
                        </a>
                    </div>
                @else
                    <div class="swiper-slide flash-item">
                        <a href="{{ $post->getUrl() }}" class="popular__item">
                            <p class="popular__name">{{ $post['title'] }}</p>
                            <p class="ribbon__subname text-crop">{{ $post->getMainCat()->name }}</p>
                        </a>
                    </div>
                @endif


            @endforeach
        </div>
    </div>
</div>

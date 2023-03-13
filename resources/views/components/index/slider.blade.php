<div class="swiper-container news__sl">
    <div class="swiper-wrapper">
        @foreach($posts as $post)
            <div class="swiper-slide">
                <a href="{{ $post->getUrl() }}" class="news__item news__item--big bleed" style="background: url({{ $post->getImage() }}) center/cover no-repeat;">
                    <div class="news__box">
                        <div class="news__info news__info--white skew">
                            <div class="skew__back d-flex align-items-center">
                                <p class="ribbon__date"><b>{{ $post->getHumanDate() }}</b> {{ $post->getHumanTime() }}</p>
                                <p class="ribbon__subname text-crop">{{ $post->getMainCat()->name }}</p>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <p class="news__title"><span class="">{{ $post->title }}</span></p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <button class="swiper-button swiper-button-next"></button>
    <button class="swiper-button swiper-button-prev"></button>
</div>

<div class="slider-sticky">
    <div class="ribbon">
        <div class="title">
            <a href="/region/spb" class="title__norm">Санкт-Петербург</a>
        </div>
        <div class="ribbon__list">
            @foreach($posts as $post)
                <a href="{{ $post->getUrl() }}" class="ribbon__item spb">
                    <p class="ribbon__date"><b>{{ $post->getHumanDate() }}</b> {{ $post->getHumanTime() }}</p>
                    <p class="ribbon__name">{{ $post->title }}</p>
                    <p class="ribbon__subname text-crop">{{ $post->getMainCat()->name }}</p>
                </a>
            @endforeach
        </div>
        <p class="ribbon__btn"><a href="/region/spb" class="btn bleed flex-center">Показать ещё
                <svg viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.16436 0.641517C4.75158 0.274599 4.11951 0.31178 3.75259 0.724563C3.38567 1.13735 3.42285 1.76942 3.83564 2.13634L5.3698 3.50004H1C0.447715 3.50004 0 3.94775 0 4.50004C0 5.05232 0.447715 5.50004 1 5.50004H5.3698L3.83564 6.86374C3.42285 7.23066 3.38567 7.86273 3.75259 8.27551C4.11951 8.6883 4.75158 8.72548 5.16436 8.35856L8.66065 5.25074C8.86872 5.06749 9 4.7991 9 4.50004C9 4.20097 8.86871 3.93256 8.66063 3.74931L5.16436 0.641517Z"/>
                </svg>
        </a></p>
    </div>
</div>

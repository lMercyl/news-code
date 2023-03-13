<div class="slider d-flex align-items-center">
    <i class="slider__icon">
        <svg viewBox="0 0 11 12" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.91837C0 1.36608 0.447715 0.918365 1 0.918365C6.04207 0.918365 10.1632 5.03954 10.1632 10.0816C10.1632 10.6339 9.71553 11.0816 9.16325 11.0816C8.61096 11.0816 8.16325 10.6339 8.16325 10.0816C8.16325 6.14411 4.9375 2.91837 1 2.91837C0.447715 2.91837 0 2.47065 0 1.91837ZM0 5.48981C0 4.93753 0.447715 4.48981 1 4.48981C4.1033 4.48981 6.59183 6.97834 6.59183 10.0816C6.59183 10.6339 6.14411 11.0816 5.59183 11.0816C5.03954 11.0816 4.59183 10.6339 4.59183 10.0816C4.59183 8.08291 2.99873 6.48981 1 6.48981C0.447715 6.48981 0 6.04209 0 5.48981ZM2 9.57143C2 9.84194 1.78071 10.0612 1.5102 10.0612C1.23969 10.0612 1.02041 9.84194 1.02041 9.57143C1.02041 9.30092 1.23969 9.08163 1.5102 9.08163C1.78071 9.08163 2 9.30092 2 9.57143ZM1.5102 8.06123C0.67614 8.06123 0 8.73737 0 9.57143C0 10.4055 0.67614 11.0816 1.5102 11.0816C2.34427 11.0816 3.02041 10.4055 3.02041 9.57143C3.02041 8.73737 2.34427 8.06123 1.5102 8.06123Z" fill="#C42026"/>
        </svg>
    </i>
    <div class="swiper-container slider__sl">
        <div class="swiper-wrapper">
            @foreach($posts as $post)
                <div class="swiper-slide"><a href="{{ $post->getUrl() }}" class="slider__link text-crop">{{ $post->title }}</a></div>
            @endforeach
        </div>
        <button class="swiper-button swiper-button-next">
            <svg width="5" height="7" viewBox="0 0 5 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L4 3.5L1 6" stroke="#C42026" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <button class="swiper-button swiper-button-prev">
            <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.5 1L1.5 3.5L4.5 6" stroke="#C42026" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</div>

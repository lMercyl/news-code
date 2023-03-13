@if(isset($post['persons']) && count($post['persons']) > 0)
    <div class="comp-list-block">
        <div class="title">
    {{--        <a href="/person" class="title__norm">Персоны</a>--}}
            <p class="title__norm">Персоны</p>
        </div>
        <div class="companies-list">
            @foreach($post['persons'] as $person)
                <a href="{{ $person['alias'] }}" class="news__item news__item--small">
                    <div class="news__inner">
                        <div class="news__body">
                            <p class="comp-title">{{ $person['title'] }}</p>
                            <p class="ribbon__subname text-crop" style="margin-bottom: 8px;">{{ $person['company_area_id'] }}</p>
                            @if(isset($person['person_birdth_day']) && strlen($person['person_birdth_day']) > 2)
                                <p class="ribbon__subname text-crop" style="margin-bottom: 8px;"><span>Дата рождения:</span> &nbsp {{ $person['person_birdth_day'] }}</p>
                            @endif
                            @if(isset($person['person_about_education']) && strlen($person['person_about_education']) > 2)
                                <p class="ribbon__subname text-crop"><span>Образование:</span> &nbsp {{ $person['person_about_education'] }}</p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif


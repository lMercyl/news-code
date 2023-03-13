@if(isset($post['companies']) && count($post['companies']) > 0)
    <div class="comp-list-block">
        <div class="title">
    {{--        <a href="/company" class="title__norm">Компании</a>--}}
            <p class="title__norm">Компании</p>
        </div>
        <div class="companies-list">
            @foreach($post['companies'] as $company)
                <a href="{{ $company['alias'] }}" class="news__item news__item--small">
                    <div class="news__inner">
                        <div class="news__body">
                            <p class="comp-title">{{ $company['title'] }}</p>
                            <p class="ribbon__subname text-crop" style="margin-bottom: 8px;">{{ $company['company_area_id'] }}</p>
                            @if(isset($company['company_address']) && strlen($company['company_address']) > 2)
                                <p class="ribbon__subname text-crop"><span>Адрес:</span> &nbsp {{ $company['company_address'] }}</p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif


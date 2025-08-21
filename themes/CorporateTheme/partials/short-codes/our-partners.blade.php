
{{--{{ $shortcode->title }}--}}
<div class="concern-logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client-logo">
                    <div class="logos-slider">
                        <div class="logos-slider-container">
                            @foreach($partners as $partner)
                            <a href="{{ $partner->set_url }}" target="_blank" alt="{{ $partner->name }}"><img src="{{ getImageUrl($partner->photo, 'adminboard/adminpartner') }}"/></a>
                            @endforeach
                        </div>

                        <div class="logos-slider-container">
                            @foreach($partners as $partner)
                                <a href="{{ $partner->set_url }}" target="_blank" alt="{{ $partner->name }}"><img src="{{ getImageUrl($partner->photo, 'adminboard/adminpartner') }}"/></a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

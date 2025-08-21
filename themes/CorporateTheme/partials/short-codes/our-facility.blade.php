<!-- ----------------------- Different Start ----------------------- -->
@if($facilities)
    <div class="section-area wow fadeInUp" data-wow-delay="0.3s">
        <div class="container">
            <div class="facilities-header">
                <h2>{{ $shortcode->title }}</h2>
                <p>{{ $shortcode->contain }}</p>
            </div>
            <div class="facility">
                <div class="row">
                    @php
                        $wow = 0.3;
                        $increment = 0.2;
                    @endphp
                    @foreach($facilities as $key=>$facility)
                        <div class="col-lg-3 col-md-6 col-sm-12 " data-wow-delay="{{ $wow +=$increment }}s">
                            <a href="{{ $facility->url }}">
                                <div class="service-bx">
                                    <i class="{{ $facility->icon }}"></i>
                                    <div class="info-bx">
                                        <h3>{{ $facility->name }}</h3>
                                        <p>{!! description_summary($facility->description, 175) !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endif
<!-- ----------------------- Different End ----------------------- -->

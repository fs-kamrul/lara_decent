
@if($faqs->count()>0)
    <section class="why-choose section" >
        <div class="container">
            <div class="row">
                <div class="@if($shortcode->image) col-lg-6 col-md-6 @else col-lg-12 @endif col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- Start Choose Left -->
                    <div class="choose-header">
                        <h2>{{ clean($shortcode->title) }}</h2>
                        <div class="row">
                            <div class="col-lg-10">
                                <ul class="list">
                                    @foreach($faqs as $key=>$faq)
                                        <li>
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            {{ $faq->question }}
{{--                                            {!! $faq->answer !!}--}}
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                            @if($shortcode->button_label1)
                                <a href="{{ $shortcode->button_url1 }}" class="btn">{{ $shortcode->button_label1 }}</a>
                            @endif
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>
{{--                <iframe  frameborder="0" height="400"  width="100%" src="{{ $shortcode->url }}" frameborder="0"--}}
{{--                         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                         title="{{ $shortcode->title }}"--}}
{{--                         allowfullscreen></iframe>--}}
                @if($shortcode->image)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Start Choose Rights -->
                        <div class="choose-right" style="background-image: {{ getImageUrlById($shortcode->image,'shortcodes') }};">
                            <div class="video-image">
                                <!-- Video Animation -->
                                <div class="promo-video">
                                    <div class="waves-block">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                                <!--/ End Video Animation -->
                                <a href="#" class="video" id="showAlertButton">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End Choose Rights -->
                    </div>
                @endif
            </div>
        </div>
    </section>
    @if($shortcode->image)
        <div id="vertualIframe" style="display: none;">
            <iframe width="97%" height="562" src="{{ $url }}"
                    title="{{ clean($shortcode->title) }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>
{{--        <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-dialog-centered">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">--}}
{{--                            <i class="ri-close-line"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="video-container">--}}
{{--                            <iframe--}}
{{--                                id="youtubeVideo"--}}
{{--                                src="{{ $url }}"--}}
{{--                                title="{{ clean($shortcode->title) }}"--}}
{{--                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                                allowfullscreen>--}}
{{--                            </iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endif
@endif

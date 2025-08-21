
<div class="blog-section wow fadeInUp" data-wow-delay="0.2s">
    <div class="container">
        <h2>{{ $shortcode->title }}</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="notice-event">
                    <div class="notice-header">
                        <div class="event-title">
                            <h3>@lang('adminboard::lang.adminnoticeboard')</h3>
                        </div>
                        <!-- event title -->
                        <ul>
                            @foreach($notice_boards as $key=>$notice_board)
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($notice_board->created_at)) }}</span>
                                    <a href="{{ $notice_board->url }}"><h6>{{ description_summary($notice_board->name, 70) }}</h6></a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ url('notice-board') }}" class="btn">@lang('adminboard::lang.read_more')</a>
                </div>
            </div>
            <!-- Blog Slider -->
            <div class="col-md-6 col-lg-8 wow fadeInUp" data-wow-delay="0.9s">
                <section>
                    <div class="blog">
                        <div class="container">
                            <div class="blog__inner">
                                <div class="latest-news-blog">
                                    @if($events->count())
                                        @foreach($events as $data)
                                            <div class="blog-slide">
                                                <div class="blog-img">
                                                    <img alt="" src="{{ getImageUrl($data->photo, 'adminboard/adminevent') }}">
                                                </div>
                                                <div class="blog-name">
                                                    <h3><a href="{{ $data->url }}">{{ description_summary($data->name, 24) }}</a></h3>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d F Y', strtotime($data->created_at)) }}</span>
                                                </div>
                                                <div class="blog-text">
                                                    <p>{{ description_summary($data->description, 250) }}</p>
                                                    <a href="{{ $data->url }}">@lang('adminboard::lang.read_more') <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    @if($news->count())
                                        @foreach($news as $data)
                                            <div class="blog-slide">
                                                <div class="blog-img">
                                                    <img alt="" src="{{ getImageUrl($data->photo, 'adminboard/adminnews') }}">
                                                </div>
                                                <div class="blog-name">
                                                    <h3><a href="{{ $data->url }}">{{ description_summary($data->name, 25) }}</a></h3>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d F Y', strtotime($data->created_at)) }}</span>
                                                </div>
                                                <div class="blog-text">
                                                    <p>{{ description_summary($data->description, 250) }}</p>
                                                    <a href="{{ $data->url }}">@lang('adminboard::lang.read_more') <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
{{--                                   @if($workshops->count())--}}
{{--                                        @foreach($workshops as $data)--}}
{{--                                            <div class="blog-slide">--}}
{{--                                                <div class="blog-img">--}}
{{--                                                    <img alt="" src="{{ getImageUrl($data->photo, 'adminboard/adminworkshop') }}">--}}
{{--                                                </div>--}}
{{--                                                <div class="blog-name">--}}
{{--                                                    <h3><a href="{{ $data->url }}">{{ description_summary($data->name, 25) }}</a></h3>--}}
{{--                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> {{ date('d F Y', strtotime($data->created_at)) }}</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="blog-text">--}}
{{--                                                    <p>{{ description_summary($data->description, 250) }}</p>--}}
{{--                                                    <a href="{{ $data->url }}">@lang('adminboard::lang.read_more') <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
{{--                                   @endif--}}

                                </div>
                                <!--.carousel-inner-->
                            </div>
                            <!--.Carousel-->
                        </div>
                    </div>
                </section>
            </div>
            <!-- Blog Slider END -->
        </div>
    </div>
</div>

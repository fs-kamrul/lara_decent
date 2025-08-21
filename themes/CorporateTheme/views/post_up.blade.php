@php

$layout = MetaBox::getMetaData($post, 'layout', true);
//dd($layout);
$layout = ($layout && in_array($layout, array_keys(get_blog_single_layouts()))) ? $layout : 'post-full-width';
Theme::layout($layout);
//    dd($layout);
@endphp
@php
    //    $right = $key % 2;
            $path_post = 'uploads/post/';
            $photo = getImageUrl($post->photo);
            if($post->document_file != ''){
                $photo_download = $path_post . $post->document_file;
            }else{
                $photo_download = '';
            }
@endphp
<section class="news-single section wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="{{ getImageUrl($post->photo) }}" alt="{{ $post->name }}">
                            </div>
                            <!-- News Title -->
{{--                            <h1 class="news-title"><a href="{{ $post->url }}">{{ $post->name }}</a></h1>--}}
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="date"><i class="fa fa-clock-o"></i>{{ date('d M Y', strtotime($post->created_at)) }}</span>
                                </div>
                                <div class="meta-right">
                                    <span class="comments"><a ><i class="ri-news-line"></i> @lang('post::lang.category'): @foreach($post->categories as $category) {{ $category->name .', ' }} @endforeach </a></span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text">
                                <p>{!! $post->description !!}</p>
{{--                                <div class="image-gallery">--}}
{{--                                    <div class="row wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                                        <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                            <div class="single-image">--}}
{{--                                                <img src="img/blog2.jpg" alt="#">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 col-md-6 col-12">--}}
{{--                                            <div class="single-image">--}}
{{--                                                <img src="img/blog3.jpg" alt="#">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="blog-bottom">
                                <!-- Social Share -->
                                <ul class="social-share">
                                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}&title={{ strip_tags(SeoHelper::getDescription()) }}"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                    <li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ strip_tags(SeoHelper::getDescription()) }}"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
{{--                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&summary={{ rawurldecode(strip_tags(SeoHelper::getDescription())) }}"><i class="fa fa-linkedin"></i></a></li>
{{--                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                                </ul>
                                <!-- Next Prev -->
{{--                                <ul class="prev-next">--}}
{{--                                    <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>--}}
{{--                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
{{--                                </ul>--}}
                                <!--/ End Next Prev -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Blog -->
            <div class="col-lg-4 col-12">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget search">
                        <div class="form">
                            <input type="email" placeholder="Search Here...">
                            <a class="button" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="single-widget category wow fadeInUp" data-wow-delay="0.3s">
                        <h3 class="title">@lang('post::lang.category')</h3>
                        {!! Theme::partial('blog_categories', ['categories' => $categories, 'options' => ['class' => 'categor-list'] ]) !!}
                    </div>
                    {!! Theme::partial('blog_recent_post', ['posts' => $posts]) !!}
{{--                    <div class="single-widget side-tags wow fadeInUp" data-wow-delay="0.7s">--}}
{{--                        <h3 class="title">Tags</h3>--}}
{{--                        <ul class="tag">--}}
{{--                            <li><a href="#">June 2024</a></li>--}}
{{--                            <li><a href="#">October 2023</a></li>--}}
{{--                            <li><a href="#">September 2023</a></li>--}}
{{--                            <li><a href="#">August 2023</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $number_of_gallery = $post->PostGalleryParameter->count();
@endphp
@if($number_of_gallery)
    <section class="mb-130 mt-20 bg-white px-4 lg:mt-32 lg:px-0">
        <div class="mx-auto xl:max-w-container lg:max-w-lg-container xs:max-w-xs-container sm:max-w-sm-container px-4 lg:px-0">
            <h3 class="section_heading">{{ $post->name }}</h3>
            <div class="gallery_main mt_35">
                <div class="row gallery_row">
                    @foreach($post->PostGalleryParameter as $key=>$gallery)
                        @php
                            $odd_num = 0; if ($key % 2 == 0) { $odd_num = 1; }
                        @endphp
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="gallery_img">
                                <a href="{{ getImageUrl($gallery->name, 'post') }}" target="_blank"><img
                                        src="{{ getImageUrl($gallery->name, 'post') }}" alt="{{ $post->name }}"></a>

                                <div class="overlay">
                                    <p>{{ $post->name }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif

{{--@if($post->post_types->id != 6)--}}
{{--    @php--}}
{{--        $number_of_gallery = $post->PostGalleryParameter->count();--}}
{{--    @endphp--}}
{{--    @if($number_of_gallery)--}}
{{--        <section class="mb-130 mt-20 bg-white px-4 lg:mt-32 lg:px-0">--}}
{{--            <div class="mx-auto xl:max-w-container lg:max-w-lg-container xs:max-w-xs-container sm:max-w-sm-container px-4 lg:px-0">--}}
{{--                @foreach($post->PostGalleryParameter as $key=>$gallery)--}}
{{--                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">--}}
{{--                        <div class="news_events_blog_gallery_img mb_24">--}}
{{--                            <img src="{{ getImageUrl($gallery->name, 'post') }}" alt="{{ $post->name }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    @endif--}}
{{--@endif--}}
{{--@php--}}
{{--    $relatedPosts = get_related_posts($post->id, 3);--}}
{{--@endphp--}}
{{--@if($relatedPosts->count())--}}
{{--    <section class="mb-130 mt-20 bg-white px-4 lg:mt-32 lg:px-0">--}}
{{--        <div class="mx-auto xl:max-w-container lg:max-w-lg-container xs:max-w-xs-container sm:max-w-sm-container px-4 lg:px-0">--}}
{{--                @php--}}
{{--                    $category = '';--}}
{{--                    foreach($post->categories as $value) {--}}
{{--                        $category .= $value->name . ', '; //like this--}}
{{--                    }--}}
{{--                @endphp--}}
{{--                <div class="news_events_top">--}}
{{--                    <h3 class="mt_45">@lang('Explore More') {{ rtrim($category, ", ") }}</h3>--}}
{{--                    --}}{{--                <a class="outline_btn" href="#">@lang('Learn More')</a>--}}
{{--                </div>--}}
{{--                <div class="new_event_main">--}}
{{--                    @include(Theme::getThemeNamespace() . '::views.venue.includes.news-items', ['posts' => $relatedPosts])--}}
{{--                    --}}{{--                @foreach($relatedPosts as $key => $relatedPost)--}}
{{--                    --}}{{--                    <div class="more_venue_item">--}}
{{--                    --}}{{--                        <div class="main_venue_img">--}}
{{--                    --}}{{--                            <img src="{{ getImageUrl($relatedPost->photo) }}" alt="{{ $relatedPost->name }}">--}}
{{--                    --}}{{--                        </div>--}}

{{--                    --}}{{--                        <h2 class="sub_heading_30 blue_text mt_45">{{ $relatedPost->name }}</h2>--}}
{{--                    --}}{{--                        <p class="mt_30">{!! $relatedPost->description !!}</p>--}}
{{--                    --}}{{--                        <a href="{{ url($relatedPost->url) }}" class="outline_btn mt_30">@lang('Learn More')</a>--}}
{{--                    --}}{{--                    </div>--}}
{{--                    --}}{{--                @endforeach--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endif--}}

<div class="@if($shortcode->section_type == 'left')about-1 @else why-choose @endif  about-us" >
    <div class="container">
        <div class="row">
            @if($shortcode->section_type == 'left')
                @if($shortcode->image != null)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="about-img">
                            <img src="{{ getImageUrlById($shortcode->image, 'shortcodes') }}" alt="{{ $shortcode->title }}">
                        </div>
                    </div>
                @endif
            @endif
            <div class=" @if($shortcode->image != null) col-lg-6 @else col-lg-12 @endif  wow fadeInUp" data-wow-delay="0.4s">
                <!-- Start Choose Rights -->
                <div class="about-details">
                    <span>{{ $shortcode->header }}</span>
                    <h3>{{ $shortcode->title }}</h3>
                    <p>{{ $shortcode->contain }}</p>
                </div>
                <!-- End Choose Rights -->
            </div>

                @if($shortcode->section_type == 'right')
                    @if($shortcode->image != null)
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="aimg">
                                <img src="{{ getImageUrlById($shortcode->image, 'shortcodes') }}" alt="{{ $shortcode->title }}">
                            </div>
                        </div>
                    @endif
                @endif
        </div>
    </div>
</div>
{{--@if($shortcode->button_label)--}}
{{--    <div class="mt-44">--}}
{{--        <a href="{{ $shortcode->button_url }}" class="before:btn_clip before:content[''] hover:before:btn_clip_hover relative inline-block overflow-hidden rounded-full bg-primary-blue px-5 py-2.5 text-base font-normal uppercase text-white before:absolute before:inset-0 before:duration-500 before:ease-in-out hover:before:bg-black first:mr-4">--}}
{{--            <span class="relative z-10">{{ $shortcode->button_label }}</span>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--@endif--}}


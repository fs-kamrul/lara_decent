
<div class="tp-hero__area tp-hero__mt">
    <div class="tp-hero__slider-active p-relative">
        @foreach($sliders as $slider)

        <div class="tp-hero__bg tp-hero__overlay d-flex align-items-center" data-background="{{ getImageUrlById($slider->image,'shortcodes') }}">
            {!! Theme::partial('short-codes.sliders.content', compact('slider')) !!}

        </div>
        @endforeach
    </div>
</div>


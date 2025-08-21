<section class="slider">
    <div class="hero-slider">
        @foreach($sliders as $slider)
            <div class="single-slider" style="background-image:url('{{ getImageUrlById($slider->image,'shortcodes') }}')">
                <div class="container">
                    <div class="row">
                        {!! Theme::partial('short-codes.sliders.content', compact('slider')) !!}

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

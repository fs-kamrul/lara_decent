
{{--    <h2>{{ $shortcode->title }}</h2>--}}
<div class="concern-logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client-logo">
                    <div class="logos-slider">
                        <div class="logos-slider-container">
                            @foreach($post_types->post as $post_type)
                                <a href="#"><img src="{{ getImageUrl($post_type->photo) }}" alt="{{ $post_type->name }}"></a>
                            @endforeach
                        </div>
                        <div class="logos-slider-container">
                            @foreach($post_types->post as $post_type)
                                <a href="#"><img src="{{ getImageUrl($post_type->photo) }}" alt="{{ $post_type->name }}"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{--@isset($posts)--}}
{{--    @if($posts != null)--}}
{{--    <div class="faq">--}}
{{--        <div class="container">--}}
{{--            <h2 class="">{{ clean($shortcode->title) }}</h2>--}}

{{--            @foreach($posts as $key=>$faq)--}}
{{--                <button class="accordion">--}}
{{--                    {{ $key+1 }}. {{ $faq->name }}--}}
{{--                </button>--}}
{{--                <div class="panel">--}}
{{--                    <div class="span_color">{!! $faq->description !!}</div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endif--}}
{{--@endisset--}}

<!-- ----------------------- Different Start ----------------------- -->
@isset($posts)
    @if($posts != null)
        <div class="instruction wow fadeIn" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    @php
                        $wow = 0;
                        $increment = 0.2;
                    @endphp
                    @foreach($posts as $post)
                        @php
                            $wow += $increment;
                        @endphp
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $wow.'s' }}">
                            <div class="instruction-card">
                                <i class="{{ $post->icon_set }}" aria-hidden="true"></i>
                                <h3>{{ $post->name }}</h3>
                                <p>{!! description_summary($post->description,200) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endisset
<!-- ----------------------- Different End ----------------------- -->

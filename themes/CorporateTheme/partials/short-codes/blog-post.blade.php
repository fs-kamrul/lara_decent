@isset($posts)
    @if($posts != null)
        <div class="faq">
            <div class="container">
                <div class="row justify-content-center">
                    @php
                        $wow = 0;
                        $increment = 0.2;
                    @endphp
                    @foreach($posts as $key=>$post)
                        @php
                            $wow +=$increment
                        @endphp
                        <div class="col-md-4 col-lg-3 mb-5 wow fadeInUp" data-wow-delay="@isset($wow) {{ $wow . 's' }} @endisset">
                            <div class="card-wrapper">
                                <div class="card" style="height: 500px;">
                                    <img src="{{ getImageUrl($post->photo, 'post') }}" class="card-img-top" alt="{{ $post->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ description_summary($post->name, 40) }}</h5>
                                        <p class="card-text">
                                            {{ description_summary($post->description) }}
                                        </p>
                                        <a href="{{ $post->url }}" class="btn btn-primary mt-2" style="color: white">@lang('kamruldashboard::lang.read_more')</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        @lang('kamruldashboard::lang.posted_on') {{ date('F d, Y', strtotime($post->created_at)) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endisset


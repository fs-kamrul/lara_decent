@if ($posts->count() > 0)
    <div class="faq">
        <div class="container">
            <div class="row justify-content-center">
                @php
                    $wow = 0;
                    $increment = 0.2;
                @endphp
            @foreach ($posts as $post)
                    @php
                        $wow +=$increment
                    @endphp
                    <div class="col-md-4 col-lg-3 mb-5 wow fadeInUp" data-wow-delay="@isset($wow) {{ $wow . 's' }} @endisset">
                        <div class="card-wrapper">
                            <div class="card" style="height: 500px;">
                                {!! Theme::partial('components.post-card', compact('post')) !!}
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="pagination-area mb-30 wow fadeInUp animated justify-content-start">
        {!! $posts->withQueryString()->onEachSide(1)->links() !!}
    </div>
@endif

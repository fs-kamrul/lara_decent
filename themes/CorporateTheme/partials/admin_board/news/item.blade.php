<div class="col-md-4 col-lg-3 mb-5 wow fadeInUp" data-wow-delay="@isset($wow) {{ $wow . 's' }} @endisset">
    <div class="card-wrapper">
        <div class="card" style="height: 500px;">
            <img src="{{ getImageUrl($news->photo, 'adminboard/adminnews') }}" class="card-img-top" alt="{{ $news->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ description_summary($news->name, 40) }}</h5>
                <p class="card-text">
                    {{ description_summary($news->description) }}
                </p>
                <a href="{{ $news->url }}" class="btn btn-primary mt-2">@lang('adminboard::lang.read_more')</a>
            </div>
            <div class="card-footer text-muted">
                @lang('adminboard::lang.posted_on') {{ date('F d, Y', strtotime($news->created_at)) }}
            </div>
        </div>
    </div>
</div>

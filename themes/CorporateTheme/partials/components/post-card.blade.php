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


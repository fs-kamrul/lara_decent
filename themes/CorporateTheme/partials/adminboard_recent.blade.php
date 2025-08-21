<div class="single-widget recent-post wow fadeInUp" data-wow-delay="0.5s">
    <h3 class="title">@lang('post::lang.recent_post')</h3>
    @foreach($posts as $post)
        <div class="single-post">
            <div class="image">
                <img src="{{ getImageUrl($post->photo, $photo) }}" alt="{{ $post->name }}">
            </div>
            <div class="content">
                <h5><a href="{{ $post->url }}">{{ description_summary($post->name, 50) }}</a></h5>
                <ul class="comment">
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
                </ul>
            </div>
        </div>
    @endforeach
</div>

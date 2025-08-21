<div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="@isset($wow) {{ $wow . 's' }} @endisset">
    <div class="notice-item" data-department="SB">
        <img src="{{ url( 'themes/' . Theme::getPublicThemeName() . '/img/notice.png') }}" alt="SB">
        <div class="notice-content">
            <h2 class="notice-title"><a href="{{ $notice_board->url }}">{{ description_summary($notice_board->name, 60) }}</a></h2>
            <p class="notice-department">{{ description_summary($notice_board->short_description) }}</p>
            <div class="notice-meta">
                @if($notice_board->categories->count())<span class="notice-type">{{ getCategoryNames($notice_board) }}</span> @endif
                <span class="notice-date">{{ date('d F Y', strtotime($notice_board->created_at)) }}</span>
            </div>
        </div>
    </div>
</div>


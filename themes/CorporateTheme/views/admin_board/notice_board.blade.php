<div class="single-notice">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="notice-details">
                    <h2 class="Notice-title">{{ $notice_board->name }}</h2>
                    <span class="publish-info">@lang('adminboard::lang.published_date') : {{ date('d F Y', strtotime($notice_board->created_at)) }}</span>
                    <p class="notice-description">{!! clean($notice_board->description) !!}</p>
                    @if($notice_board->photo != null)
                        <img src="{{ getImageUrl($notice_board->photo,'adminboard/adminnoticeboard') }}" alt="{{ $notice_board->name }}">
                        <br/>
                    @endif
                    @if($notice_board->document != null)
                        <a class="btn" style="color: white;" target="_blank" href="{{ getImageUrl($notice_board->document,'adminboard/adminnoticeboard') }}"> @lang('adminboard::lang.download_notice') <i class="ri-download-fill"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

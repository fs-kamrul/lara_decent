
<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="@isset($wow) {{ $wow . 's' }} @endisset">
    <div class="gallery_folder">
        <a href="{{ $admin_gallery_board->url }}">
            <img src="{{ getImageUrl($admin_gallery_board->photo, 'adminboard/admingalleryboard') }}" alt="{{ $admin_gallery_board->name }}" />
        </a>

        <span>
            <a href="{{ $admin_gallery_board->url }}">@lang('adminboard::lang.see_more_images')</a>
        </span>

        <div class="overlay">
            <p>{{ description_summary($admin_gallery_board->name, 30) }}</p>
        </div>
    </div>
</div>



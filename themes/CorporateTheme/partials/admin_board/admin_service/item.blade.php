
<div class="col-xl-3 col-lg-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="@isset($wow) {{ $wow . 's' }} @endisset">
    <div class="tp-service-3__item mb-30 fix p-relative">
        <div class="tp-service-3__shape">
{{--            <img src="{{ getImageUrl($admin_service->photo, 'adminboard/adminservice') }}" alt="{{ $admin_service->name }}">--}}
            <img src="{{ asset('themes/' . Theme::getPublicThemeName() . '/img/service/sv-shape-3-1.png') }}">
        </div>
        <div class="tp-service-3__icon z-index-1">
            <img height="70px" class="z-index" src="{{ getImageUrl($admin_service->photo, 'adminboard/adminservice') }}" alt="{{ $admin_service->name }}">
            <span></span>
        </div>
        <div class="tp-service-3__content">
            <h5 class="tp-service-3__title-sm"><a href="{{ $admin_service->url }}">{{ $admin_service->name }}</a></h5>
           <p>{{ description_summary($admin_service->description) }}</p>
        </div>
        <div class="tp-service-3__link d-flex justify-content-between align-items-center">
            <a class="child-1" href="{{ $admin_service->url }}">Read More</a>
            <a class="child-2" href="{{ $admin_service->url }}"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
        </div>
    </div>
</div>





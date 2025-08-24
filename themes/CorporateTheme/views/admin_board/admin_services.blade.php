
<div class="tp-service-3__area pt-145 pb-115 z-index">
    <div class="container">
        <div class="row">
            <div class="tp-service__section-wrapper">
                <div class="row align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-service__title-box">
                            <div class="tp-section-subtitle-box">
                                <span class="tp-section-subtitle section-subtitle-border">best it services</span>
                            </div>
                            <h3 class="tp-section-title p-relative">
                                Services We’re Offering
                                <span class="tp-service__title-shape d-none d-md-block">
                                 <svg width="163" height="5" viewBox="0 0 163 5" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M162.595 4.22307C108.986 2.55338 55.6855 2.288 2.11526 4.99709C0.242355 5.09661 0.268005 2.60867 2.11526 2.48703C55.3392 -0.962917 109.487 -1.06243 162.595 3.70336C162.98 3.73653 162.993 4.23412 162.595 4.22307Z"
                                        fill="#FFB302" />
                                 </svg>
                              </span>
                            </h3>
                        </div>
                    </div>
{{--                    <div class="col-xl-5 col-lg-5">--}}
{{--                        <div class="tp-service__right-box">--}}
{{--                            <p>As the complexity of buildings to increase, the field of arch--}}
{{--                                became multi-disciplinary with technological expertise.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="row">

            {!! Theme::partial('admin_board.admin_service.items', ['admin_services' => $admin_services, 'img_slider' => true]) !!}

            <div class="justify-content-center">
                @if ($admin_services->total() > 0)
                    {!! $admin_services->links(Theme::getThemeNamespace() . '::partials.admin_board.pagination') !!}
                @endif
            </div>



        </div>
    </div>
</div>


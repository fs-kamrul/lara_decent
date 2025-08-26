<div class="tp-price__area pt-95 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-price__title-box text-center">
                    <div class="tp-section-subtitle-box">
                        <span class="tp-section-subtitle section-subtitle-border">best IT Solutions</span>
                    </div>
                    <h3 class="tp-section-title">
                        <span class="p-relative">
                           Pricing
                           <span class="tp-title-shape d-none d-md-block">
                              <svg width="145" height="5" viewBox="0 0 145 5" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M144.738 4.22307C96.8043 2.55338 49.1463 2.288 1.24738 4.99709C-0.427246 5.09661 -0.404312 2.60867 1.24738 2.48703C48.8366 -0.962917 97.2516 -1.06243 144.738 3.70336C145.082 3.73653 145.093 4.23412 144.738 4.22307Z"
                                     fill="#FFB302" />
                              </svg>
                           </span>
                        </span>
                        We’re Offering
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            {!! Theme::partial('admin_board.admin_package.items', ['admin_packages' => $admin_packages, 'img_slider' => true]) !!}

            <div class="justify-content-center">
                @if ($admin_packages->total() > 0)
                    {!! $admin_packages->links(Theme::getThemeNamespace() . '::partials.admin_board.pagination') !!}
                @endif
            </div>
        </div>
    </div>
</div>


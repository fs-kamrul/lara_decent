<!-- ----------------------- Different Start ----------------------- -->
@if($services)
    <div class="tp-service__area tp-service__bg pt-130 grey-bg pb-100 z-index" data-background="{{ asset('themes/' . Theme::getPublicThemeName() . '/img/service/service-bg.png') }}">
        <div class="tp-service__badge-wrap d-none d-sm-block">
            <div class="tp-service__badge d-flex align-items-center">
               <span class="frist-child">
                  <img src="{{ asset('themes/' . Theme::getPublicThemeName() . '/img/service/badge-icon.png') }}" alt="">
               </span>
                <span>
                  {!! $shortcode->tag_line !!}
               </span>
            </div>
        </div>
        <div class="container">
            <div class="tp-service__section-wrapper">
                <div class="row align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-service__title-box">
                            <div class="tp-section-subtitle-box">
                                <span class="tp-section-subtitle section-subtitle-border">{{ $shortcode->title }}</span>
                            </div>
                            <h3 class="tp-section-title p-relative">
                                {{ $shortcode->contain }}
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
            <div class="row row-cols-md-2 row-cols-sm-2">

                @php
                    $wow = 0;
                    $increment = 0.2;
                @endphp
                @foreach($services as $key=>$service)
                <div class="col-xl col-lg mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="{{ $wow +=$increment }}s">
                    <div class="tp-service__item p-relative">
                        <div class="tp-service__box-shape">
                            <span></span>
                        </div>
                        <div class="tp-service__icon p-relative">
                            <img class="z-index" src="{{ getImageUrl($service->photo, 'adminboard/adminservice') }}" alt="{{ $service->name }}">
                            <span></span>
                        </div>
                        <div class="tp-service__content">
                            <h4 class="tp-service__title-sm"><a href="{{ $service->url }}">{{ $service->name }}</a></h4>
                        </div>
                        <div class="tp-service__link">
                            <a href="{{ $service->url }}">
                           <span>
                              <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M12.8097 4.52533L8.4716 0.191608C8.34777 0.0679018 8.18272 0 8.00673 0C7.83055 0 7.6656 0.0679994 7.54177 0.191608L7.1479 0.585166C7.02416 0.708677 6.95599 0.873651 6.95599 1.04955C6.95599 1.22536 7.02416 1.39589 7.1479 1.5194L9.6787 4.05314H1.63822C1.2757 4.05314 0.989258 4.33665 0.989258 4.69889V5.25527C0.989258 5.61751 1.2757 5.92961 1.63822 5.92961H9.70741L7.148 8.47749C7.02426 8.60119 6.95609 8.76168 6.95609 8.93758C6.95609 9.11329 7.02426 9.27611 7.148 9.39972L7.54187 9.79201C7.6657 9.91572 7.83065 9.98313 8.00683 9.98313C8.18282 9.98313 8.34787 9.91484 8.4717 9.79113L12.8098 5.45751C12.934 5.33342 13.0022 5.16776 13.0017 4.99166C13.0021 4.81498 12.934 4.64923 12.8097 4.52533Z"
                                     fill="#336EF9" />
                              </svg>
                           </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-service__bottom-text text-center mt-60">
                        <span> <a href="{{ url('services') }}"> View More Services</a><em><i class="fa-light fa-plus"></i></em></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
<!-- ----------------------- Different End ----------------------- -->

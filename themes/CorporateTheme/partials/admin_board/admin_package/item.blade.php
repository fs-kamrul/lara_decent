
<div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="@isset($wow) {{ $wow . 's' }} @endisset">
    <div class="tp-price__item @if($key == 1) active @endif p-relative text-center">
        <div class="tp-price__head-icon">

{{--            <img src="{{ asset('themes/' . Theme::getPublicThemeName() . '/img/package/sv-shape-3-1.png') }}">--}}
                        <span>
                           <svg width="32" height="29" viewBox="0 0 32 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M7.06865 2.06688C7.57381 1.59451 7.57381 0.828599 7.06865 0.35623C6.56348 -0.116139 5.7444 -0.116139 5.23924 0.35623C-0.814121 6.01661 -0.814121 15.2231 5.23924 20.8835C5.7444 21.3558 6.56348 21.3558 7.06865 20.8835C7.57381 20.4111 7.57381 19.6452 7.06865 19.1728C2.02568 14.4572 2.02568 6.78246 7.06865 2.06688Z"
                                  fill="currentcolor" />
                              <path
                                  d="M27.1917 0.354277C26.6865 -0.118092 25.8674 -0.118092 25.3623 0.354277C24.8571 0.826646 24.8571 1.59255 25.3623 2.06492C30.4052 6.78051 30.4052 14.4553 25.3623 19.1709C24.8571 19.6432 24.8571 20.4091 25.3623 20.8815C25.8674 21.3539 26.6865 21.3539 27.1917 20.8815C33.245 15.2211 33.245 6.0146 27.1917 0.354277Z"
                                  fill="currentcolor" />
                              <path
                                  d="M10.73 5.4868C11.2351 5.01443 11.2351 4.24852 10.73 3.77615C10.2248 3.30378 9.40572 3.30378 8.90055 3.77615C4.86518 7.54955 4.86518 13.6885 8.90055 17.4619C9.40572 17.9342 10.2248 17.9342 10.73 17.4619C11.2351 16.9895 11.2351 16.2236 10.73 15.7512C7.70498 12.9226 7.70498 8.31546 10.73 5.4868Z"
                                  fill="currentcolor" />
                              <path
                                  d="M23.5354 3.77615C23.0303 3.30378 22.2112 3.30378 21.706 3.77615C21.2009 4.24852 21.2009 5.01443 21.706 5.4868C24.7311 8.31546 24.7311 12.9226 21.706 15.7512C21.2009 16.2236 21.2009 16.9895 21.706 17.4619C22.2112 17.9342 23.0303 17.9342 23.5354 17.4619C27.5708 13.6885 27.5708 7.54955 23.5354 3.77615Z"
                                  fill="currentcolor" />
                              <path
                                  d="M21.3877 10.6196C21.3877 7.94731 19.0712 5.78125 16.2134 5.78125C13.3555 5.78125 11.0391 7.94731 11.0391 10.6196C11.0391 12.8742 12.6878 14.7684 14.9195 15.3056L14.9159 27.5538C14.9157 28.2218 15.4947 28.7635 16.2092 28.7637C16.9236 28.7639 17.5029 28.2225 17.5031 27.5544L17.5067 15.3057C19.7386 14.7688 21.3877 12.8744 21.3877 10.6196ZM16.2133 13.0389C14.7843 13.0389 13.6261 11.956 13.6261 10.6196C13.6261 9.28334 14.7842 8.20042 16.2133 8.20042C17.6424 8.20042 18.8005 9.28334 18.8005 10.6196C18.8005 11.956 17.6424 13.0389 16.2133 13.0389Z"
                                  fill="currentcolor" />
                           </svg>
                        </span>
        </div>
        <div class="tp-price__head">
            <h4 class="tp-price__title">{{ $admin_package->name }}</h4>
{{--            <span>Save 20%</span>--}}
        </div>
        <div class="tp-price__mpbs tp-price__mpbs-bg"
             data-background="assets/img/price/price-bg-shape.png">
            <h4>{{ $admin_package->name_limit }}<em>{{ $admin_package->name_size }}</em></h4>
            <span>{{ $admin_package->tag_line }}</span>
        </div>
        <div class="tp-price__content-wrap">
            <div class="tp-price__feature">
                <ul>
                    @foreach($admin_package->admin_facilities as $facility)
                        <li>{{ $facility->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="tp-price__info-box">
                <h4 class="p-relative">
                    {{ $admin_package->price }} Tk/{{ $admin_package->price_map }}
                    <span>
                                 <svg width="115" height="4" viewBox="0 0 115 4" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.717253 3.37845C38.4419 2.0427 75.95 1.8304 113.648 3.99767C114.966 4.07729 114.948 2.08693 113.648 1.98963C76.1937 -0.770334 38.0899 -0.849948 0.717253 2.96269C0.446437 2.98923 0.43741 3.3873 0.717253 3.37845Z"
                                        fill="#FFB302" />
                                 </svg>
                              </span>
                </h4>
{{--                <span><em>5%</em> VAT Included</span>--}}
{{--                <span>Installation Charge: 1,500 Tk</span>--}}
            </div>
            <div class="tp-price__btn-box">
                <a class="tp-price-btn" href="{{ url('contact-us') }}">Get started<span></span></a>
            </div>
        </div>
    </div>
</div>






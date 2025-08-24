<div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
    <div class="tp-footer__widget footer-col-1">
{{--        <h2>{{ $config['name'] }}</h2>--}}
        <div class="tp-footer__logo">
            <a href="{{ url('/') }}"> <img height="70px" src="{{ getImageUrlById(theme_option('logo_color'), 'shortcodes') }}" alt="{{ theme_option('site_title') }}"></a>
        </div>
        <div class="tp-footer__widget-content">
            <div class="tp-footer__info">
                <p>{{ theme_option('site_description') }}</p>
                @if (theme_option('address'))
                    <div class="tp-footer__main-location">
                        <a>
                            <i class="fa-sharp fa-light fa-location-dot"></i>
                            {{ theme_option('address') }}
                        </a>
                    </div>
                @endif
                @if (theme_option('site_email'))
                <div class="tp-footer__main-mail">
                    <a href="mailto:{{ theme_option('site_email') }}"><i class="fa-light fa-message-dots"></i>
                        {{ theme_option('site_email') }}
                    </a>
                </div>
                @endif
                @if (theme_option('site_phone'))
                <div class="tp-footer__main-mail">
                    <a href="tel:{{ theme_option('site_phone') }}"><i class="fal fa-phone-alt"></i></i>
                        {{ theme_option('site_phone') }}
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


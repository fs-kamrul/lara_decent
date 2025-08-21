<div class="col-lg-3 col-md-6 col-12">
    <div class="single-footer">
        <img src="{{ getImageUrlById(theme_option('logo_color'), 'shortcodes') }}" alt="">
        <p> {{ theme_option('site_description') }}</p>
        <!-- Social -->
        <ul class="social">
            @for ($i = 1; $i <= 5; $i++)
                @if (theme_option('social_' . $i . '_url') && theme_option('social_' . $i . '_name'))
                    <li>
                        <a
                            href="{{ theme_option('social_' . $i . '_url') }}"
{{--                            class="text-2xl text-white transition duration-150 hover:text-text-highlight"--}}
                            target="_blank"
                            title="{{ theme_option('social_' . $i . '_name') }}">
                            <i class="{{ theme_option('social_' . $i . '_icon') }}"></i>
                        </a>
                    </li>
                @endif
            @endfor
        </ul>
        <!-- End Social -->
    </div>
</div>
{{--<h5 class="mb-20">{{ $config['name'] }}</h5>--}}

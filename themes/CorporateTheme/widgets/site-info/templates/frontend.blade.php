<div class="col-lg-3 col-md-6 col-12">
    <div class="single-footer">
        <h2>{{ $config['name'] }}</h2>
        <div class="footer-address">
            @if (theme_option('address'))
                <p> <i class="fa fa-map-marker"></i> {{ theme_option('address') }}</p>
            @endif
            @if (theme_option('site_email'))
                <p> <i class="fa fa-envelope"></i> {{ theme_option('site_email') }}</p>
            @endif
            @if (theme_option('site_phone'))
                <p> <i class="fa fa-phone"></i>  {{ theme_option('site_phone') }}</p>
            @endif
        </div>
    </div>
</div>


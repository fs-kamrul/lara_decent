<div class="col-xl-4 col-lg-4 col-md-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
    <div class="tp-footer__widget footer-col-2">
        <h3 class="tp-footer__widget-title">{{ $config['name'] }}</h3>
        <div class="tp-footer__widget-content">
            {!!
                Menus::generateMenu(['slug' => $config['menu_id'], 'view' => 'menu_footer','options' => ['class' => '']])
            !!}
        </div>
    </div>
</div>

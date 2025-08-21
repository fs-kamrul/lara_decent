<div class="col-lg-3 col-md-6 col-12">
    <div class="single-footer f-link">
        <h2> {{ $config['name'] }}</h2>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                {!!
                    Menus::generateMenu(['slug' => $config['menu_id'], 'view' => 'menu_footer','options' => ['class' => '']])
                !!}
            </div>
        </div>
    </div>
</div>

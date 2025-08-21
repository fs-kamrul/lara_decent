<?php

use Modules\Theme\Packages\Supports\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });
            if (is_module_active('Ecommerce')) {
                $categories = ProductCategoryHelper::getActiveTreeCategories();

                $theme->partialComposer('header', function ($view) use ($categories) {
                    $view->with('categories', $categories);
                });
            }
            $version = get_cms_version();
//            $version = '1.0.1';

            // You may use this event to set up your assets.
            $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.min.css', [], [], $version);
//            $theme->asset()->add('bootstrap', 'vendor/Modules/KamrulDashboard/vendor/bootstrap/dist/css/bootstrap.min.css', [], [], $version);
            $theme->asset()->usePath()->add('nice', 'css/nice-select.css', [], [], $version);
            $theme->asset()->usePath()->add('sweetalert2', 'css/sweetalert2.min.css', [], [], $version);
            $theme->asset()->usePath()->add('font-awesome', 'css/font-awesome.min.css', [], [], $version);
            $theme->asset()->usePath()->add('remixicon', 'css/remixicon/remixicon.min.css', [], [], $version);
            $theme->asset()->usePath()->add('icofont', 'css/icofont.css', [], [], $version);
            $theme->asset()->usePath()->add('slicknav', 'css/slicknav.min.css', [], [], $version);
            $theme->asset()->usePath()->add('owl-carousel', 'css/owl-carousel.css', [], [], $version);
            $theme->asset()->usePath()->add('datepicker', 'css/datepicker.css', [], [], $version);
            $theme->asset()->usePath()->add('animate', 'css/animate.min.css', [], [], $version);
            $theme->asset()->usePath()->add('magnific-popup', 'css/magnific-popup.css', [], [], $version);
            $theme->asset()->usePath()->add('normalize', 'css/normalize.css', [], [], $version);
            $theme->asset()->usePath()->add('style', 'style.css', [], [], $version);
            $theme->asset()->usePath()->add('responsive', 'css/responsive.css', [], [], $version);


//
            $theme->asset()->usePath()->add('toastr_css', 'toastr/css/toastr.min.css', [], [], $version);
//            $theme->asset()->usePath()->add('output', 'css/output.css', [], [], $version);
            $theme->asset()->usePath()->add('custom_style', 'css/custom_style.css', [], [], $version);


            ////////*************************                      JS                      *************************////////


            $theme->asset()->container('footer')->usePath()->add('jquery_js', 'js/jquery.min.js');
//            $theme->asset()->container('footer')->usePath()->add('jquery_js_1', 'js/jquery-1.12.4.min.js');
//            $theme->asset()->container('footer')->add('bootstrap-js', 'vendor/Modules/KamrulDashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js');
            $theme->asset()->container('footer')->usePath()->add('jquery-migrate', 'js/jquery-migrate-3.0.0.js');
            $theme->asset()->container('footer')->usePath()->add('jquery-ui', 'js/jquery-ui.min.js');
            $theme->asset()->container('footer')->usePath()->add('easing', 'js/easing.js');
            $theme->asset()->container('footer')->usePath()->add('colors', 'js/colors.js');
            $theme->asset()->container('footer')->usePath()->add('sweetalert2', 'js/sweetalert2.min.js');
            $theme->asset()->container('footer')->usePath()->add('popper', 'js/popper.min.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap-datepicker', 'js/bootstrap-datepicker.js');
            $theme->asset()->container('footer')->usePath()->add('jquery', 'js/jquery.nav.js');
            $theme->asset()->container('footer')->usePath()->add('slicknav', 'js/slicknav.min.js');
            $theme->asset()->container('footer')->usePath()->add('scrollUp', 'js/jquery.scrollUp.min.js');
            $theme->asset()->container('footer')->usePath()->add('niceselect', 'js/niceselect.js');
            $theme->asset()->container('footer')->usePath()->add('tilt-jquery', 'js/tilt.jquery.min.js');
            $theme->asset()->container('footer')->usePath()->add('owl-carousel', 'js/owl-carousel.js');
            $theme->asset()->container('footer')->usePath()->add('jquery-counterup', 'js/jquery.counterup.min.js');
            $theme->asset()->container('footer')->usePath()->add('steller', 'js/steller.js');
            $theme->asset()->container('footer')->usePath()->add('wow', 'js/wow.min.js');
            $theme->asset()->container('footer')->usePath()->add('magnific-popup', 'js/jquery.magnific-popup.min.js');
            $theme->asset()->container('footer')->usePath()->add('waypoints', 'js/waypoints.min.js');

            $theme->asset()->container('footer')->usePath()->add('bootstrap-js', 'js/bootstrap.min.js');
            $theme->asset()->container('footer')->usePath()->add('main-js', 'js/main.js');
            $theme->asset()->container('footer')->usePath()->add('slick', 'js/slick.js');
//            $theme->asset()->container('footer')->usePath()->add('script', 'js/script.js');
//
            $theme->asset()->container('footer')->usePath()->add('toastr_js', 'toastr/js/toastr.min.js');
            $theme->asset()->container('footer')->usePath()->add('toastr_script_js', 'toastr/js/toastr_script.js');
//            $theme->asset()->container('footer')->usePath()->add('newsletter', 'js/newsletter.js');
//            $theme->asset()->container('footer')->usePath()->add('backend', 'js/backend.js');

//            $theme->asset()->usePath()->add('widgets', 'css/widgets.css', [], [], $version);
//            $theme->asset()->usePath()->add('responsive', 'css/responsive.css', [], [], $version);
//            $theme->asset()->usePath()->add('custom', 'css/custom.css', [], [], $version);

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post', 'ecommerce.product'], function (\Modules\Shortcodes\Resources\views\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];

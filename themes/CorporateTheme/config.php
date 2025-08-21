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
            $theme->asset()->usePath()->add('bootstrap', 'css/bootstrap.css', [], [], $version);
//            $theme->asset()->add('bootstrap', 'vendor/Modules/KamrulDashboard/vendor/bootstrap/dist/css/bootstrap.min.css', [], [], $version);
            $theme->asset()->usePath()->add('animate', 'css/animate.css', [], [], $version);
            $theme->asset()->usePath()->add('swiper-bundle', 'css/swiper-bundle.css', [], [], $version);
            $theme->asset()->usePath()->add('slick', 'css/slick.css', [], [], $version);
            $theme->asset()->usePath()->add('magnific-popup', 'css/magnific-popup.css', [], [], $version);
            $theme->asset()->usePath()->add('font-awesome', 'css/font-awesome-pro.css', [], [], $version);
            $theme->asset()->usePath()->add('spacing', 'css/spacing.css', [], [], $version);
            $theme->asset()->usePath()->add('custom-animation', 'css/custom-animation.css', [], [], $version);
            $theme->asset()->usePath()->add('main', 'css/main.css', [], [], $version);
//
            $theme->asset()->usePath()->add('toastr_css', 'toastr/css/toastr.min.css', [], [], $version);
//            $theme->asset()->usePath()->add('output', 'css/output.css', [], [], $version);
            $theme->asset()->usePath()->add('custom_style', 'css/custom_style.css', [], [], $version);


            ////////*************************                      JS                      *************************////////


            $theme->asset()->container('footer')->usePath()->add('jquery_js', 'js/vendor/jquery.js');
            $theme->asset()->container('footer')->usePath()->add('waypoints', 'js/vendor/waypoints.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap-bundle', 'js/bootstrap-bundle.js');
            $theme->asset()->container('footer')->usePath()->add('meanmenu', 'js/meanmenu.js');
            $theme->asset()->container('footer')->usePath()->add('gsap-min', 'js/gsap.min.js');
            $theme->asset()->container('footer')->usePath()->add('ScrollTrigger-min', 'js/ScrollTrigger.min.js');
            $theme->asset()->container('footer')->usePath()->add('split-text-min', 'js/split-text.min.js');
            $theme->asset()->container('footer')->usePath()->add('swiper-bundle', 'js/swiper-bundle.js');
            $theme->asset()->container('footer')->usePath()->add('slick', 'js/slick.js');
            $theme->asset()->container('footer')->usePath()->add('range-slider', 'js/range-slider.js');
            $theme->asset()->container('footer')->usePath()->add('magnific-popup', 'js/magnific-popup.js');
            $theme->asset()->container('footer')->usePath()->add('nice-select', 'js/nice-select.js');
            $theme->asset()->container('footer')->usePath()->add('purecounter', 'js/purecounter.js');
            $theme->asset()->container('footer')->usePath()->add('countdown', 'js/countdown.js');
            $theme->asset()->container('footer')->usePath()->add('jequery-knob', 'js/jequery-knob.js');
            $theme->asset()->container('footer')->usePath()->add('jequery-appear', 'js/jequery-appear.js');
            $theme->asset()->container('footer')->usePath()->add('wow', 'js/wow.js');
            $theme->asset()->container('footer')->usePath()->add('isotope-pkgd', 'js/isotope-pkgd.js');
            $theme->asset()->container('footer')->usePath()->add('imagesloaded-pkgd', 'js/imagesloaded-pkgd.js');
            $theme->asset()->container('footer')->usePath()->add('imagesloaded-pkgd', 'js/imagesloaded-pkgd.js');
            $theme->asset()->container('footer')->usePath()->add('ajax-form', 'js/ajax-form.js');
            $theme->asset()->container('footer')->usePath()->add('main-js', 'js/main.js');

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

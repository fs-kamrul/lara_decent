<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
    {!! Theme::header() !!}

    @php
        $slider_logo = theme_option('logo_color');
    @endphp
    <script>
        window.siteUrl = "{{ url('') }}";
        window.siteEditorLocale = "{{ apply_filters('cms_site_editor_locale', App::getLocale()) }}";
    </script>
    @php
        $headerStyle = theme_option('header_style') ?: '';
        $page = Theme::get('page');
        if ($page) {
            $headerStyle = $page->getMetaData('header_style', true) ?: $headerStyle;
        }
        $headerStyle = ($headerStyle && in_array($headerStyle, array_keys(get_layout_header_styles()))) ? $headerStyle : '';
//            dd($headerStyle);
    @endphp
</head>
<body>
@php
    $logo_image = theme_option('logo');
    $baseUrl = url('/');
@endphp
    <header class="header" >
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="top-left">
                            <a><i class="fa fa-phone"></i>  {{ theme_option('site_phone') }}</a>
                            <a> <i class="fa fa-envelope"></i> {{ theme_option('site_email') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="top-text">
                            <marquee behavior="Left" direction="">{{ theme_option('action_notice_box_text') }}</marquee>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="top-right">

                            <a>{{ __('kamruldashboard::at_a_glance.eiin') }}: {{ theme_option('action_eiin_text') }}</a>
                            <a><i class="ri-school-fill"></i> {{ __('kamruldashboard::at_a_glance.college_code') }}: {{ theme_option('action_college_code_text') }}</a>
                            {!! Menus::renderMenuLocation('header-menu', [
                               'view'    => 'menu_right_sub',
                               'status'    => 'top-contact',
                               'options' => ['class' => 'top-contact'],
                           ]) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--                        {!! Menus::renderMenuLocation('header-menu', [--}}
{{--                           'view'    => 'menu_right',--}}
{{--                           'status'    => 'top-contact',--}}
{{--                           'options' => ['class' => 'top-contact'],--}}
{{--                       ]) !!}--}}
{{--          @if (is_module_active('Language'))--}}
{{--                {!! Theme::partial('language-switcher') !!}--}}
{{--         @endif--}}
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-md-2 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ getImageUrlById($logo_image, 'shortcodes') }}" alt="{{ theme_option('site_title') }}"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-8 col-md-6 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    {!! Menus::renderMenuLocation('main-menu', [
                                        'view'    => 'menu',
                                        'status'    => 'nav-item nav-link',
                                        'options' => ['class' => 'nav menu'],
                                    ]) !!}
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <!--Search Bar-->
                        <div class="col-lg-2 col-md-6 col-12">
                            <div class="apply-btn">
                                <a href="{{ url('admission-form') }}" class="btn">@lang('Apply Now')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>

{{--    {!! Menus::renderMenuLocation('mobile-menu', [--}}
{{--       'view'    => 'menu_mobile',--}}
{{--       'status'    => '',--}}
{{--       'options' => ['class' => 'space-y-2 px-4 py-10'],--}}
{{--    ]) !!}--}}

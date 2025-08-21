<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

{{--    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />--}}
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
{{--<div id="loading">--}}
{{--    <div id="loading-center">--}}
{{--        <div id="loading-center-absolute">--}}
{{--            <div class="object" id="object_four"></div>--}}
{{--            <div class="object" id="object_three"></div>--}}
{{--            <div class="object" id="object_two"></div>--}}
{{--            <div class="object" id="object_one"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
        </svg>
    </button>
</div>
<div class="search__popup">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="search__wrapper">
                    <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ getImageUrlById($logo_image, 'shortcodes') }}" alt="{{ theme_option('site_title') }}">
                            </a>
                        </div>
                        <div class="search__close">
                            <button type="button" class="search__close-btn search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="search__form">
                        <form action="#">
                            <div class="search__input">
                                <input class="search-input-field" type="text" placeholder="Type here to search...">
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tpoffcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="tpoffcanvas__logo">
            <a href="{{ url('/') }}">
                <img src="{{ getImageUrlById($logo_image, 'shortcodes') }}" alt="{{ theme_option('site_title') }}">
            </a>
        </div>
        <div class="tpoffcanvas__title">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima incidunt eaque ab cumque, porro maxime autem sed.</p>
        </div>
        <div class="tp-main-menu-mobile d-xl-none"></div>
        <div class="tpoffcanvas__contact-info">
            <div class="tpoffcanvas__contact-title">
                <h5>Contact us</h5>
            </div>
            <ul>
                <li>
                    <i class="fa-light fa-location-dot"></i>
{{--                    <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">--}}
                    <a >
                        {{ theme_option('address') }}</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{ theme_option('site_email') }}">{{ theme_option('site_email') }}</a>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <a href="tel:{{ theme_option('site_phone') }}">{{ theme_option('site_phone') }}</a>
                </li>
            </ul>
        </div>
{{--        <div class="tpoffcanvas__input">--}}
{{--            <div class="tpoffcanvas__input-title">--}}
{{--                <h4>Get UPdate</h4>--}}
{{--            </div>--}}
{{--            <form action="#">--}}
{{--                <div class="p-relative">--}}
{{--                    <input type="text" placeholder="Enter mail">--}}
{{--                    <button>--}}
{{--                        <i class="fas fa-paper-plane"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
        <div class="tpoffcanvas__social">
            <div class="social-icon">
                <a href="#fac"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>

<header>
    <!-- header top area start -->
    <div class="tp-header-top__area grey-bg tp-header-top__height tp-header-top__plr d-none d-md-block">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-6">
                    <div class="tp-header-top__left-info">
                        <ul>
                            <li><span>Call</span>Consult With It Advisor? <a href="#">Click Now</a></li>
                            <li>
                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.01457 0C5.28957 0.00228587 3.63588 0.687839 2.41613 1.90633C1.19637 3.12482 0.510101 4.77679 0.507812 6.5C0.507813 11.1665 6.56994 17.011 6.8275 17.2575C6.8776 17.3061 6.94471 17.3334 7.01457 17.3334C7.08443 17.3334 7.15154 17.3061 7.20164 17.2575C7.4592 17.011 13.5213 11.1665 13.5213 6.5C13.519 4.77679 12.8328 3.12482 11.613 1.90633C10.3933 0.687839 8.73957 0.00228587 7.01457 0ZM7.01457 9.47917C6.42474 9.47917 5.84815 9.30444 5.35772 8.97709C4.86728 8.64973 4.48504 8.18445 4.25932 7.64008C4.0336 7.09571 3.97454 6.4967 4.08961 5.91879C4.20468 5.34089 4.48872 4.81006 4.90579 4.39341C5.32287 3.97677 5.85426 3.69303 6.43276 3.57808C7.01126 3.46313 7.6109 3.52212 8.15584 3.74761C8.70077 3.9731 9.16654 4.35494 9.49424 4.84486C9.82193 5.33479 9.99684 5.91078 9.99684 6.5C9.99636 7.28998 9.68201 8.04747 9.12283 8.60607C8.56365 9.16467 7.80537 9.47869 7.01457 9.47917Z"
                                        fill="#FFB302" />
                                </svg>
                                <a href="https://www.google.com/maps/" target="_blank">{{ theme_option('address') }} </a>
                            </li>
                            <li>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.58302 7.63437C9.20944 7.91095 8.77552 8.05715 8.32813 8.05715C7.88077 8.05715 7.44684 7.91095 7.07327 7.63437L0.92029 3.07875C0.886153 3.05348 0.852895 3.02713 0.820312 3.00003V10.4649C0.820312 11.3208 1.44572 12 2.2026 12H14.4536C15.2243 12 15.8359 11.3055 15.8359 10.4649V3C15.8033 3.02716 15.77 3.05358 15.7357 3.07888L9.58302 7.63437Z"
                                        fill="#FFB302" />
                                    <path
                                        d="M1.40833 2.54786L7.56129 6.76079C7.79421 6.92027 8.06115 7 8.32808 7C8.59505 7 8.86202 6.92024 9.09493 6.76079L15.2479 2.54786C15.6161 2.29591 15.8359 1.87424 15.8359 1.41914C15.8359 0.636605 15.216 0 14.4541 0H2.20213C1.4402 3.01194e-05 0.820312 0.636635 0.820312 1.41989C0.820312 1.87424 1.04015 2.29591 1.40833 2.54786Z"
                                        fill="#FFB302" />
                                </svg>
                                <a href="maito:{{ theme_option('site_email') }}">{{ theme_option('site_email') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                    <div class="tp-header-top__right-wrap d-flex align-items-center justify-content-end">
                        <div class="tp-header-top__social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
{{--                        <div class="tp-header-top__lang d-none d-lg-block ml-25">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a id="tp-header-top__lang-toogle" href="javascript:void(0)">--}}
{{--                                        <img src="assets/img/header-icon/header-flag.png" alt="flag">English--}}
{{--                                        <span>--}}
{{--                                    <svg width="9" height="6" viewBox="0 0 9 6" fill="none"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                       <path--}}
{{--                                           d="M8.11274 0.917894L7.85042 0.638679C7.76786 0.55148 7.65802 0.503441 7.54063 0.503441C7.4233 0.503441 7.31333 0.55148 7.23077 0.638679L4.23837 3.80193L1.24252 0.635169C1.16009 0.54797 1.05012 0.5 0.932798 0.5C0.815471 0.5 0.705438 0.54797 0.622945 0.635169L0.360556 0.912663C0.18971 1.09312 0.18971 1.38706 0.360556 1.56752L3.92748 5.35148C4.00991 5.43861 4.11974 5.5 4.23811 5.5H4.23948C4.35687 5.5 4.46671 5.43854 4.54914 5.35148L8.11274 1.57777C8.1953 1.49064 8.24061 1.37103 8.24074 1.24701C8.24074 1.12292 8.1953 1.00496 8.11274 0.917894Z"--}}
{{--                                           fill="#221717" />--}}
{{--                                    </svg>--}}
{{--                                 </span>--}}
{{--                                    </a>--}}
{{--                                    <ul class="tp-header-top__lang-submenu">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Arabic</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Spanish</a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Mandarin</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top area end -->

    <!-- header main area end -->
    <div id="header-sticky" class="tp-header-main__area tp-header-main__pl p-relative z-index">
        <div class="tp-header-main__main-bg" data-background="assets/img/header-icon/header-bg-shape-1.png"></div>
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">
                <div class="col-xl-2 col-lg-4 col-md-4 col-8">
                    <div class="tp-header-main__logo-wrap d-none d-xxl-block">
                        <div class="tp-header-main__logo p-relative">
                            <a href="{{ url('/') }}">
                                <div class="tp-header-main__logo-1 z-index">
                                    <img src="{{ getImageUrlById($logo_image, 'shortcodes') }}" height="70px" alt="{{ theme_option('site_phone') }}">
                                </div>
                                <span>
                              <svg width="156" height="133" viewBox="0 0 156 133" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M0 0H156V124.793C156 129.655 151.698 133.393 146.883 132.714L6.88286 112.971C2.93527 112.414 0 109.036 0 105.049V0Z"
                                     fill="#336EF9" />
                              </svg>
                           </span>
                            </a>
                        </div>
                    </div>
                    <div class="tp-header-main__xl-logo d-xxl-none">
                        <a href="{{ url('/') }}"><img src="{{ getImageUrlById($logo_image, 'shortcodes') }}" height="70px" alt="{{ theme_option('site_phone') }}"></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-8 col-md-8 col-4">
                    <div class="tp-header-main__menu-wrapper">
                        <div class="tp-header-main__menu-bg" data-background="assets/img/header-icon/header-bg-shape-1.png">
                            <div class="tp-header-main__menu-box d-none d-xl-block">
                                <div class="tp-header-main__menu menu-icon p-relative">
                                    {!! Menus::renderMenuLocation('main-menu', [
                                        'view'    => 'menu',
                                        'status'    => 'nav-item nav-link',
                                        'options' => ['class' => 'nav menu'],
                                    ]) !!}
                                    <nav class="tp-main-menu-content">
                                        <ul>
                                            <li class="has-dropdown has-dropdown-2 menu-icon-2">
                                                <a href="index.html">Home</a>
                                                <div class="tp-submenu submenu has-homemenu">
                                                    <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-3">
                                                        <div class="col homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/menu/home-1.jpg" alt="">
                                                                <div class="homemenu-btn">
                                                                    <a class="tp-menu-btn" href="index.html">View Demo</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    <a href="index.html">Home 01</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/menu/home-2.jpg" alt="">
                                                                <div class="homemenu-btn">
                                                                    <a class="tp-menu-btn" href="index-2.html">View Demo</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    <a href="index-2.html">Home 02</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="col homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/menu/home-3.jpg" alt="">
                                                                <div class="homemenu-btn">
                                                                    <a class="tp-menu-btn" href="index-3.html">View Demo</a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    <a href="index-3.html">Home 03</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="service.html">Services</a>
                                                <ul class="tp-submenu submenu">
                                                    <li><a href="service.html">Service</a></li>
                                                    <li><a href="service-details.html">Service Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#">Pages</a>
                                                <ul class="tp-submenu submenu">
                                                    <li><a href="blog.html">Blog Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="project.html">Project</a></li>
                                                    <li><a href="project-details.html">Project Details</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="price.html">Price</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="shop.html">Shop</a>
                                                <ul class="tp-submenu submenu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tp-header-main__right-wrapper">
                                <div class="tp-header-main__right-info d-flex justify-content-end align-items-center">
                                    <ul class="d-flex align-items-center">
                                        <li>
                                            <div class="tp-header-main__search d-none d-md-block">
                                                <button class="search-open-btn">
                                          <span>
                                             <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.01059 0C3.87798 0 0.515625 3.35886 0.515625 7.48718C0.515625 11.6157 3.87798 14.9744 8.01059 14.9744C12.1434 14.9744 15.5056 11.6157 15.5056 7.48718C15.5056 3.35886 12.1434 0 8.01059 0ZM8.01059 13.5921C4.64086 13.5921 1.89931 10.8534 1.89931 7.48721C1.89931 4.12098 4.64086 1.38225 8.01059 1.38225C11.3803 1.38225 14.1219 4.12095 14.1219 7.48718C14.1219 10.8534 11.3803 13.5921 8.01059 13.5921Z"
                                                    fill="white" />
                                                <path
                                                    d="M17.3302 15.8232L13.3636 11.8607C13.0933 11.5907 12.6556 11.5907 12.3853 11.8607C12.115 12.1305 12.115 12.5682 12.3853 12.838L16.3519 16.8004C16.487 16.9354 16.6639 17.0029 16.841 17.0029C17.0179 17.0029 17.195 16.9354 17.3302 16.8004C17.6005 16.5307 17.6005 16.0929 17.3302 15.8232Z"
                                                    fill="white" />
                                             </svg>
                                          </span>
                                                </button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tp-header-main__phone-wrap d-flex align-items-center d-none d-md-inline-flex">
                                                <div class="tp-header-main__phone-icon">
                                                    <a href="#">
                                             <span>
                                                <svg width="33" height="29" viewBox="0 0 33 29" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                   <path
                                                       d="M26.0245 0H22.2706H18.5167C14.8947 0 11.8848 2.94431 11.8848 6.5625C11.8848 9.863 14.3989 12.6023 17.5782 13.0582V15.9375C17.5782 16.3165 17.8064 16.6589 18.1574 16.8036C18.5036 16.9479 18.9096 16.8705 19.1802 16.6003L22.2706 13.5132L22.6591 13.125H26.0245C29.6464 13.125 32.6563 10.1807 32.6563 6.5625C32.6563 2.94431 29.6464 0 26.0245 0Z"
                                                       fill="#FFB302" />
                                                   <path
                                                       d="M26.0244 13.125C29.6464 13.125 32.6563 10.1807 32.6563 6.5625C32.6563 2.94431 29.6464 0 26.0244 0H22.2705V13.5132L22.6591 13.125H26.0244Z"
                                                       fill="#FFB302" />
                                                   <path
                                                       d="M24.5229 21.5625V25.3125C24.5229 26.9438 23.1896 28.125 21.7206 28.125C16.3144 28.125 11.0401 25.5719 7.11729 21.6688C3.19447 17.7656 0.623047 12.5125 0.623047 7.11187C0.623047 5.56062 1.88623 4.3125 3.43847 4.3125H7.19237C7.59654 4.3125 7.95504 4.57063 8.08205 4.95312L9.959 10.565C10.051 10.84 10.0103 11.1413 9.85013 11.3819L8.25848 13.7675C8.86161 15.0312 9.92897 16.4125 11.1615 17.6287C12.3947 18.8444 13.793 19.895 15.058 20.4975L17.4462 18.9075C17.6883 18.7481 17.9886 18.7063 18.2639 18.7987L23.8947 20.6737C24.2776 20.8006 24.5229 21.1588 24.5229 21.5625Z"
                                                       fill="#336EF9" />
                                                   <path
                                                       d="M24.5277 21.5627V25.3127C24.5277 26.9439 23.1944 28.1252 21.7254 28.1252C16.3191 28.1252 11.0449 25.572 7.12207 21.6689L11.1663 17.6289C12.3994 18.8445 13.7978 19.8952 15.0628 20.4977L17.4509 18.9077C17.6931 18.7483 17.9934 18.7064 18.2687 18.7989L23.8995 20.6739C24.2824 20.8008 24.5277 21.1589 24.5277 21.5627Z"
                                                       fill="#2562F0" />
                                                </svg>
                                             </span>
                                                    </a>
                                                </div>
                                                <div class="tp-header-main__phone-content">
                                                    <span>Phone:</span>
                                                    <a href="tel:+881900678956">+88 1900 6789 56</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tp-header-main__bar">
                                                <button class="tp-menu-bar">
                                                    <i class="fa-light fa-bars-staggered"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header main area end -->

</header>
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
                        {!! Menus::renderMenuLocation('header-menu', [
                           'view'    => 'menu_right',
                           'status'    => 'top-contact',
                           'options' => ['class' => 'top-contact'],
                       ]) !!}
          @if (is_module_active('Language'))
                {!! Theme::partial('language-switcher') !!}
         @endif
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

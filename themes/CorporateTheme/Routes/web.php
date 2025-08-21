<?php

Route::group(['namespace' => 'Theme\CorporateTheme\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get('ajax/cart', 'CorporateThemeController@ajaxCart')
            ->name('public.ajax.cart');

        Route::get('ajax/products', 'CorporateThemeController@ajaxGetProducts')
            ->name('public.ajax.products');

        Route::get('ajax/product-categories/products', 'CorporateThemeController@ajaxGetProductsByCategoryId')
            ->name('public.ajax.product-category-products');

        Route::get('ajax/featured-products', 'CorporateThemeController@getFeaturedProducts')
            ->name('public.ajax.featured-products');

        Route::get('ajax/posts', 'CorporateThemeController@ajaxGetPosts')->name('public.ajax.posts');

        Route::get('ajax/featured-product-categories', 'CorporateThemeController@getFeaturedProductCategories')
            ->name('public.ajax.featured-product-categories');

        Route::get('ajax/featured-brands', 'CorporateThemeController@ajaxGetFeaturedBrands')
            ->name('public.ajax.featured-brands');

        Route::get('ajax/related-products/{id}', 'CorporateThemeController@ajaxGetRelatedProducts')
            ->name('public.ajax.related-products');

        Route::get('ajax/product-reviews/{id}', 'CorporateThemeController@ajaxGetProductReviews')
            ->name('public.ajax.product-reviews');

        Route::get('ajax/get-flash-sales', 'CorporateThemeController@ajaxGetFlashSales')
            ->name('public.ajax.get-flash-sales');

        Route::get('ajax/quick-view/{id}', 'CorporateThemeController@getQuickView')
            ->name('public.ajax.quick-view');
    });
});

Theme::routes();
Route::group(['namespace' => 'Theme\CorporateTheme\Http\Controllers', 'middleware' => ['web']], function () {
    Route::group(apply_filters(FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::get('ajax/get-panel-inner', 'CorporateThemeController@ajaxGetPanelInner')
            ->name('theme.ajax-get-panel-inner');

        Route::get('/', 'CorporateThemeController@getIndex')
            ->name('public.index');
        Route::get('sitemap.xml', 'CorporateThemeController@getSiteMap')
            ->name('public.sitemap');
        Route::get('{slug?}' . config('kamruldashboard.public_single_ending_url'), 'CorporateThemeController@getView')
            ->name('public.single');
    });
});

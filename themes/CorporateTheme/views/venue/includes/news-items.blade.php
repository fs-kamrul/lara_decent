@php
    $layout = theme_option('product_list_layout');

    $requestLayout = request()->input('layout');
    if ($requestLayout && in_array($requestLayout, array_keys(get_product_single_layouts()))) {
        $layout = $requestLayout;
    }

    $layout = ($layout && in_array($layout, array_keys(get_product_single_layouts()))) ? $layout : 'product-full-width';
@endphp

<div class="mt-100 flex flex-col sm:flex-wrap sm:flex-row gap-5 xs:items-center sm:justify-center lg:flex-row lg:flex-nowrap">
    @forelse ($posts as $key=>$post)
        @include(Theme::getThemeNamespace() . '::views.venue.includes.news-item', compact('post'))
    @empty
        <div class="tab-pane mb-5" id="pills-picnic" role="tabpanel" aria-labelledby="pills-picnic-tab"
             tabindex="0">
           {{ __('No Item found!') }}
        </div>
    @endforelse
</div>
{{--        @if ($posts->total() > 0)--}}
{{--            <div class="mb_100">--}}
{{--            {!! $posts->withQueryString()->onEachSide(1)->links(Theme::getThemeNamespace() . '::partials.custom-pagination') !!}--}}
{{--            </div>--}}
{{--        @endif--}}

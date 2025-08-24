{!! Theme::partial('header') !!}
<!-- --------------- page Start --------------- -->

    @if (Theme::get('hasBreadcrumb', true))
{{--        <div class="breadcrumbs overlay">--}}
{{--            <div class="container">--}}
{{--                <div class="bread-inner">--}}
{{--                    <div class="row">--}}
                        {!! Theme::partial('breadcrumbs') !!}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endif

{{--                            {{ SeoHelper::getTitle() }}--}}
{{--<div class="at-a-glance">--}}
{{--    <div class="container">--}}

        {!! Theme::content() !!}
{{--    </div>--}}
{{--</div>--}}



<!-- --------------- page End --------------- -->
{!! Theme::partial('footer') !!}

{!! Theme::partial('header') !!}
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                {!! Theme::partial('breadcrumbs') !!}
            </div>
        </div>
    </div>
</div>

{{--<div id="contents" class="sixteen columns">--}}
{{--    <div class="twelve columns" id="left-content">--}}
{{--        <div class="row mainwrapper">--}}
            {!! Theme::content() !!}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="four columns right-side-bar" id="right-content">--}}
{{--        {!! dynamic_sidebar('product_sidebar') !!}--}}
{{--    </div>--}}
{{--</div>--}}

{!! Theme::partial('footer') !!}

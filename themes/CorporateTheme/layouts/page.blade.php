{!! Theme::partial('header') !!}

{{--{!! Theme::content() !!}--}}
{{--<section id="course_page">--}}

{{--    @if (Theme::get('hasBreadcrumb', true))--}}
{{--        {!! Theme::partial('breadcrumbs') !!}--}}
{{--    @endif--}}
{{--    {!! Theme::breadcrumb()->render() !!}--}}
<!-- Breadcrumbs -->
{{--<div class="breadcrumbs overlay">--}}
{{--    <div class="container">--}}
{{--        <div class="bread-inner">--}}
{{--            <div class="row">--}}
                {!! Theme::partial('breadcrumbs') !!}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- End Breadcrumbs -->--}}
{{--<section class="mb-130 mt-20 bg-white px-4 lg:mt-32 lg:px-0">--}}
{{--    <div class="mx-auto xl:max-w-container lg:max-w-lg-container xs:max-w-xs-container sm:max-w-sm-container px-4 lg:px-0">--}}
{{--        <h1 class="mb-5">{{ SeoHelper::getTitle() }}</h1>--}}
<div class="tp-portfolio-area pt-120 pb-60">
    <div class="container">
        {!! Theme::content() !!}
    </div>
</div>
{{--</section>--}}


{{--</section>--}}

{!! Theme::partial('footer') !!}

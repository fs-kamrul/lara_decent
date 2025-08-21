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
{{--<main class="bg-grey pb-30">--}}
    {!! Theme::content() !!}
{{--</main>--}}

{!! Theme::partial('footer') !!}

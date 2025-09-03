
<div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="{{ asset('themes/' . Theme::getPublicThemeName() . '/img/hero/hero-3-4.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb__content z-index text-center">
                    <div class="breadcrumb__list">
                        @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                            @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                                <span class="">
                                    <a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a>
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            @else
                                <span class="active">
                                    {{--                    <i class="icofont-simple-right"></i>--}}
                                    {!! $crumb['label'] !!}
                                </span>
                            @endif
                        @endforeach
{{--                        <span><a href="index.html">Home</a></span>--}}
{{--                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>--}}
{{--                        <span>Service</span>--}}
                    </div>
                    <h3 class="breadcrumb__title">{{ SeoHelper::getTitle() }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

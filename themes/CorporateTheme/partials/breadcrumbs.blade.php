
<div class="col-12">
    <h1>{{ SeoHelper::getTitle() }}</h1>
    <ul class="bread-list">
        @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
            @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                <li class="">
                    <a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a><span></span>
                    <i class="icofont-simple-right"></i>
                </li>
            @else
                <li class="active">
{{--                    <i class="icofont-simple-right"></i>--}}
                    {!! $crumb['label'] !!}
                </li>
            @endif
        @endforeach
    </ul>
</div>

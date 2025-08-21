@php
//    $layout = ($layout && in_array($layout, array_keys(get_blog_single_layouts()))) ? $layout : 'post-full-width';
//    Theme::layout($layout);
@endphp

<div class="faq">
    <div class="container">
        <div class="row justify-content-center">
                    @php
                        $wow = 0;
                        $increment = 0.2;
                    @endphp
                    @foreach($newses as $key=>$news)
                        @php
                            $wow = ($key == 6) ? 0 : $wow+$increment;
                        @endphp
                        {!! Theme::partial('admin_board.news.item', ['news' => $news, 'img_slider' => true, 'wow' => $wow]) !!}
                    @endforeach
{{--                {!! $newses->withQueryString()->links() !!}--}}
        @if ($newses->total() > 0)
            {{--                    <div class="mb-15 " style="padding-bottom: 20px">--}}
            {!! $newses->links(Theme::getThemeNamespace() . '::partials.admin_board.pagination') !!}
            {{--                    </div>--}}
        @endif
    </div>
    </div>
</div>



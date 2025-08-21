@php

    Theme::set('pageId', $page->id);
    Theme::set('title', $page->name);
//echo $page->photo;
@endphp

{!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->description), $page) !!}

@php
    if (!isset($layout)) {
        $layout = theme_option('blog_layout', 'grid');
        $layout = ($layout && in_array($layout, array_keys(get_blog_layouts()))) ? $layout : 'grid';
    }

    if (in_array($layout, ['grid', 'list'])) {
        Theme::layout('post-full-width');
    }
@endphp
{!! Theme::partial('public-layouts.' . $layout, compact('posts')) !!}

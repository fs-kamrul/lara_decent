
<ul {!! convert_options_to_attributes($options) !!} >
    @foreach($categories as $category)
        <li><a href="{{ $category->url }}">{{ $category->name }}</a></li>
        @if ($category->child_cats)
            {!! Theme::partial('blog_categories', ['categories' => $category->child_cats, 'options' => ['class' => 'category-left'] ]) !!}
        @endif
    @endforeach
</ul>

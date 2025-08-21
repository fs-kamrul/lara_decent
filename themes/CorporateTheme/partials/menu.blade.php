<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
        <li class=" @if ($row->active)  @endif">
{{--            @if ($row->has_child) <i class="icofont-rounded-down"></i> @endif--}}
            <a class="
                @if ($row->css_class == 'border-button') {{ $row->css_class }} @else  @endif" href="{{ url($row->url) }}"
                @if ($row->target !== '_self') target="{{ $row->target }}" @endif >

                @if ($row->icon_font) <i class="{{ trim($row->icon_font) }}"></i> @endif
                    {{ $row->title }}
                    @if ($row->has_child) <i class="icofont-rounded-down"></i> @endif
            </a>
            @if ($row->has_child)
                {!! Menus::generateMenu([
                    'menu'       => $menu,
                    'menu_nodes' => $row->child,
                    'view'       => 'menu',
                    'options' => [
                        'class' => 'dropdown',
                    ]
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>

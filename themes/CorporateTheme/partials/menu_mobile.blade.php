<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
        <li class="@if ($row->has_child) @endif @if ($row->active)  @endif">
            <a class="block pb-3 font-pop text-sm text-white
                @if ($row->css_class == 'border-button') {{ $row->css_class }} @else  @endif" href="{{ url($row->url) }}"
                @if ($row->target !== '_self') target="{{ $row->target }}" @endif>
                @if ($row->icon_font) <i class="{{ trim($row->icon_font) }}"></i> @endif
                    {{ $row->title }}
            </a>
            @if ($row->has_child)
                {!! Menus::generateMenu([
                    'menu'       => $menu,
                    'menu_nodes' => $row->child,
                    'view'       => 'menu_mobile',
                    'options' => [
                        'class' => '',
                    ]
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>

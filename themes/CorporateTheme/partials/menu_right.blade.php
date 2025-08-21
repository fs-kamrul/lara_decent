
<ul {!! $options !!}>
<div class="hidden lg:flex lg:gap-51">
@foreach ($menu_nodes as $key => $row)
    <li class=" @if ($row->has_child) dropdown @endif @if ($row->active) current-menu-item @endif">
        <a class=" @if ($row->has_child)  @endif "
           @if ($row->has_child)  @else  @endif
           href="{{ url($row->url) }}" @if ($row->target !== '_self') target="{{ $row->target }}" @endif>

            @if ($row->icon_font)
                <i class="{{ trim($row->icon_font) }}"></i>
            @endif
            {{ $row->title }}
        </a>
        @if ($row->has_child)
            {!! Menus::generateMenu([
                'menu'       => $menu,
                'menu_nodes' => $row->child,
                'view'       => 'menu_right',
                'options' => [
                    'class' => 'dropdown-menu dropdown-menu-end top-contact',
                ]
            ]) !!}
        @endif
    </li>
@endforeach
</ul>
{{--@if ($row->css_class == 'border-button') {{ $row->css_class }} @else nav-link @endif--}}

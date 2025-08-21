{{--<ul {!! $options !!}>--}}
    @foreach ($menu_nodes as $key => $row)
{{--        <li class="@if ($row->has_child) dropdown @endif @if ($row->active) current-menu-item @endif">--}}
{{--            <a class="@if ($row->has_child) dropdown @endif @if ($row->active) current-menu-item @endif">--}}
            <a class=" @if ($row->has_child)  @endif  @if($row->css_class == 'menu_btn') @else {{ $row->css_class }} @endif"
               @if ($row->has_child)  @endif
               href="{{ url($row->url) }}" @if ($row->target !== '_self') target="{{ $row->target }}" @endif>
                @if ($row->icon_font) <i class="{{ trim($row->icon_font) }}"></i> @endif
                    @if($row->css_class == 'menu_btn')
                        <span class="relative z-10">{{ $row->title }}</span>
                    @elseif($row->css_class == 'all_menu')
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                             class="transition duration-200 hover:fill-primary-blue">
                            <g id="Group_191" data-name="Group 191" transform="translate(-1217 -41)">
                                <rect id="Rectangle_130" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1217 41)" />
                                <rect id="Rectangle_130-2" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1227 41)" />
                                <rect id="Rectangle_130-3" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1237 41)" />
                                <rect id="Rectangle_130-4" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1217 51)" />
                                <rect id="Rectangle_130-5" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1227 51)" />
                                <rect id="Rectangle_130-6" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1237 51)" />
                                <rect id="Rectangle_130-7" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1217 61)" />
                                <rect id="Rectangle_130-8" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1227 61)" />
                                <rect id="Rectangle_130-9" data-name="Rectangle 130" width="8" height="8"
                                      transform="translate(1237 61)" />
                            </g>
                        </svg>
                    @else
                        {{ $row->title }}
                    @endif
            </a>
            @if ($row->has_child)
                {!! Menus::generateMenu([
                    'menu'       => $menu,
                    'menu_nodes' => $row->child,
                    'view'       => 'menu_right_sub',
                    'options' => [
                        'class' => 'dropdown-menu dropdown-menu-end',
                    ]
                ]) !!}
            @endif
{{--        </li>--}}
    @endforeach
{{--</ul>--}}
{{--@if ($row->css_class == 'border-button') {{ $row->css_class }} @else nav-link @endif--}}

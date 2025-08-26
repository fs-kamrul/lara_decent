@php
    $wow = .3;
    $increment = 0.3;
@endphp
@foreach($admin_packages as $key=>$admin_package)
    @php
        $wow = ($key == 4) ? .3 : $wow+$increment;
    @endphp
    {!! Theme::partial('admin_board.admin_package.item', ['admin_package' => $admin_package, 'img_slider' => true, 'wow' => $wow, 'key' => $key]) !!}
@endforeach

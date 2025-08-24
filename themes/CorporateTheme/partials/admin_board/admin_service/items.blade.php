@php
    $wow = .3;
    $increment = 0.3;
@endphp
@foreach($admin_services as $key=>$admin_service)
    @php
        $wow = ($key == 4) ? .3 : $wow+$increment;
    @endphp
    {!! Theme::partial('admin_board.admin_service.item', ['admin_service' => $admin_service, 'img_slider' => true, 'wow' => $wow]) !!}
@endforeach

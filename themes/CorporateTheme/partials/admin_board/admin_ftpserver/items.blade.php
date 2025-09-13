@php
    $wow = .3;
    $increment = 0.3;
@endphp
@foreach($admin_ftpservers as $key=>$admin_ftpserver)
    @php
        $wow = ($key == 4) ? .3 : $wow+$increment;
    @endphp
    {!! Theme::partial('admin_board.admin_ftpserver.item', ['admin_ftpserver' => $admin_ftpserver, 'img_slider' => true, 'wow' => $wow]) !!}
@endforeach



@section('title', __( 'kamruldashboard::lang.' . $title))

@extends('kamruldashboard::layouts.app_master')

@section('stylesheet')
{{--    <link href="{{ url('vendor/kamruldashboard/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">--}}
<link href="{{ url('vendor/kamruldashboard/vendor/summernote/summernote.css') }}" rel="stylesheet">


@endsection
@section('javascript')

<!-- Summernote -->
<script src="{{ url('vendor/kamruldashboard/vendor/summernote/js/summernote.min.js') }}"></script>
<!-- Summernote init -->
<script src="{{ url('vendor/kamruldashboard/js/plugins-init/summernote-init.js') }}"></script>

@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('kamruldashboard::lang.role_show')</h4>
                <h4 class="card-title">{{ $role->name }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-responsive-sm">
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th>#</th>-->
<!--                                <th>Name</th>-->
<!--                                <th>Status</th>-->
<!--                                <th>Date</th>-->
<!--                                <th>Price</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
                        <tbody>
                        <tr>
                            <td><b>@lang('kamruldashboard::lang.name')</b></td>
                            <td>{{ $role->name }}</td>
                        </tr>
                        <tr>
                            <td><b>@lang('kamruldashboard::lang.status')</b></td>
                            <td>{{ $role->status }}</td>
                        </tr>
                        <tr>
                            <td><b>@lang('kamruldashboard::lang.permission') :</b></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-responsive-sm">
                        <?php $i=0; ?>
                        @foreach ($role->permission as $key=>$value)
                                <?php $i++; ?>
                            @if($i == 0)
                                {!! '<tr>' !!}
                            @endif
                            <td>{{ $value->name }}</td>
                            @if($i == 4)
                                        <?php $i=0; ?>
                                    {!! '<tr>' !!}
                            @endif
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

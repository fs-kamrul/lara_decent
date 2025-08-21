@extends('kamruldashboard::layouts.app_master')

@section('stylesheet')
<link href="{{ url('vendor/Modules/KamrulDashboard/vendor/summernote/summernote.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('vendor/Modules/KamrulDashboard/slug/slug.css') }}" type="text/css"/>


@endsection
@section('javascript')

    <!-- Summernote -->
    <script src="{{ url('vendor/Modules/KamrulDashboard/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ url('vendor/Modules/KamrulDashboard/js/plugins-init/summernote-init.js') }}"></script>

    <script type="text/javascript">
        var csrf_token = "{{ csrf_token() }}";
    </script>
    <script src="{{ url('vendor/Modules/KamrulDashboard/slug/slug.js') }}"></script>

@endsection
@section('title', __( 'admission::lang.' . $title))
@section('content')

@if(isset($record))
    @php
        $button = 'update';
        $language = getLanguageUrlPost($record->id , 'admissionsubject');
    @endphp
    <form name="formPage" method="POST" action="{{ $language['url'] }}" novalidate=""  enctype="multipart/form-data">
        <input type="hidden" name="model" value="{{ \Modules\Admission\Http\Models\AdmissionSubject::class }}">
        <input type="hidden" name="language" value="{{ $language['code'] }}">
@else
    @php
        $button = 'save';
    @endphp
    <form method="POST" action="{{ route('admissionsubject.createadmissionsubject.store') }}"  enctype="multipart/form-data">
@endif
@csrf
        @php do_action(BASE_ACTION_TOP_FORM_CONTENT_NOTIFICATION, request(), \Modules\Admission\Http\Models\AdmissionSubject::class) @endphp

    <div class="row">
        <div class=" col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">@lang('admission::lang.admissionsubject_create')</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">

                            {!! Form::textField('name', isset($record) ? $record->name : null, 'admission', '12', ['placeholder'=> __('admission::lang.name')]) !!}
                            {!! Form::textField('code', isset($record) ? $record->code : null, 'admission', '12', ['placeholder'=> __('admission::lang.code')]) !!}

                            @isset($record)  @if($language['code_edit']){!! select_design_html($record->class_id,Option::getClassObj(),'class_id',6, __('admission::lang.class')) !!} @endif @else{!! select_design_html(1,Option::getClassObj(),'class_id',6, __('admission::lang.class')) !!} @endisset

                            @php
                                if(isset($record)){
                                    $slug = get_slug_table_data(null, \Modules\Admission\Http\Models\AdmissionSubject::class,$record->id, \Modules\Admission\Http\Models\AdmissionSubject::class);
                                }
                            @endphp
                            {!! Form::permalink('slug', isset($slug) ? $slug->key : null, isset($slug) ? $slug->reference_id : null, isset($slug) ? $slug->prefix : null) !!}

                            @isset($record) @if($language['code_edit']){!! status_design_html($record->status,6, __('admission::lang.status')) !!} @endif @else{!! status_design_html(1,6, __('admission::lang.status')) !!} @endisset

                            {!! Form::numberField('total_mark', isset($record) ? $record->total_mark : null, 'admission', '6', ['placeholder'=> __('admission::lang.total_mark')]) !!}
                            @isset($record) @if($language['code_edit']){!! input_design_html('photo',$record,6,'file', __('admission::lang.photo')) !!} @endif @else{!! input_design_html('photo',null,6,'file', __('admission::lang.photo')) !!} @endisset

                            {!! Form::numberField('order', isset($record) ? $record->order : 0, 'option', '12', ['placeholder'=> __('option::lang.order')]) !!}

{{--                            <div class="col-xl-12 col-xxl-12">--}}
{{--                                <label><strong>@lang('option::lang.description')</strong></label>--}}
{{--                                <textarea class="summernote" id="description" name="description">@isset($record){{$record->description}}@else{{ old('description') }}@endisset</textarea>--}}
{{--                                @error('description')--}}
{{--                                {!! getValidationMessage()!!}--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-3">
            {!! Form::formActions(__('admission::lang.publish'), '') !!}

            @isset($record)
                @php do_action(BASE_ACTION_META_BOXES, 'top', \Modules\Admission\Http\Models\AdmissionSubject::where('id',$record->id)->first()) @endphp
            @endisset
        </div>
    </div>
    </form>
@endsection

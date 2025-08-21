<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    <input name="title" type="text" id="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" />
</div>
<div class="form-group">
    <label class="control-label">{{ __('Description') }}</label>
    <input name="description" type="text" id="description" value="{{ Arr::get($attributes, 'description') }}" class="form-control" />
</div>
<div class="form-group">
    <label class="control-label">{{ __('Address') }}</label>
    <input name="address" type="text" id="address" value="{{ Arr::get($attributes, 'address') }}" class="form-control" />
</div>
{{--<div class="form-group mb-3">--}}
{{--    <p>{{ trans('contactform::lang.shortcode_content_description') }}</p>--}}
{{--</div>--}}

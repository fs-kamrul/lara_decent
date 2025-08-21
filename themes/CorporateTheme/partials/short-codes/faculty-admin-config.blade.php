

{{--<div class="form-group">--}}
{{--    <label class="control-label">{{ __('Title') }}</label>--}}
{{--    <input name="title" type="text" id="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" />--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--    <label class="control-label">{{ __('Description') }}</label>--}}
{{--    <input name="description" type="text" id="description" value="{{ Arr::get($attributes, 'description') }}" class="form-control" />--}}
{{--</div>--}}
@php
    $number = array();
    for ($i=1; $i<=20; $i++){
        $number[$i] = $i;
    }
@endphp
<div class="form-group">
    <label class="control-label">{{ __('Category') }}</label>
    <select class="form-control"
            name="category_id">
        <option value="">{{ __('-- select --') }}</option>
        @foreach($category as $data)
            <option value="{{ $data->id }}" @if ($data->id == Arr::get($attributes, 'category_id')) selected @endif>{{ $data->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label class="control-label"><?php echo __('Number of Scroll'); ?></label>
    <?php echo Form::Select('number_of_slide', $number, Arr::get($attributes, 'number_of_slide'), ['class' => 'form-control', 'id' => 'number_of_slide']); ?>
</div>



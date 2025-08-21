<div class="form-group">
    <label class="control-label">{{ __('Section Name') }}</label>
    <input name="section" value="{{ Arr::get($attributes, 'section') }}" class="form-control" />
</div>
<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    <input name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" />
</div>

<div class="form-group">
    <label class="control-label">{{ __('Contain') }}</label>
    <input name="contain" type="text" id="contain" value="{{ Arr::get($attributes, 'contain') }}" class="form-control" />
</div>
@php
    $number = array();
    for ($i=2; $i<=10; $i++){
        $number[$i] = $i;
    }
@endphp
<div class="form-group">
    <label class="control-label"><?php echo __('Number of Scroll'); ?></label>
    <?php echo Form::Select('number_of_slide', $number, Arr::get($attributes, 'number_of_slide'), ['class' => 'form-control', 'id' => 'number_of_slide']); ?>
</div>

<div class="form-group">
    <label class="control-label">{{ __('Button Label ') }}</label>
    <input name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" />
</div>
<div class="form-group">
    <label class="control-label">{{ __('Button Url ') }}</label>
    <input name="button_url" value="{{ Arr::get($attributes, 'button_url') }}" class="form-control" />
</div>

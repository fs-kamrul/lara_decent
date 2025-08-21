
@php
    $number = array();
    for ($i=2; $i<=20; $i++){
        $number[$i] = $i;
    }
@endphp

<input name="image" type="hidden" id="shortcode_image" value="{{ Arr::get($attributes, 'image') }}" class="form-control" />
<div class="form-group">
    <label class="control-label">{{ __('Title') }}</label>
    <input name="title" type="text" id="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" />
</div>

<div class="form-group">
    <label class="control-label"><?php echo __('Number of Scroll'); ?></label>
    <?php echo Form::Select('number_of_slide', $number, Arr::get($attributes, 'number_of_slide'), ['class' => 'form-control', 'id' => 'number_of_slide']); ?>
</div>


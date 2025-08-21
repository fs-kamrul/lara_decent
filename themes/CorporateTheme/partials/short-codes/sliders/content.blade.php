<div class="col-lg-12">
    <div class="text text-center">
        @php
//            $subtitle = $slider->getMetaData('subtitle', true);
//            $highlightText = $slider->getMetaData('highlight_text', true);
//            {!! DboardHelper::clean($subtitle) !!}
        @endphp
        <h2>{!! DboardHelper::clean($slider->title) !!}</h2>
        <p>{!! DboardHelper::clean($slider->description) !!}</p>
        @if ($slider->link)
            <div class="button">
                <a href="{{ url($slider->link) }}" class="btn">{!! DboardHelper::clean($slider->getMetaData('button_text', true)) !!}</a>
            </div>
        @endif
    </div>
</div>

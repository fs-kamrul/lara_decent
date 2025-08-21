
<!-- --------------- Faq page Start --------------- -->
@php
//dd($categories);
@endphp
@if($faqs->count()>0)

    <style>
        .span_color{
            color: white;
            padding: 20px 0;
        }
        .panel p {
            padding: 0;
        }
    </style>
    <div class="faq">
        <div class="container">
            <h2 class="">{{ clean($title) }}</h2>

                @foreach($faqs as $key=>$faq)
                    <button class="accordion">
                        {{ $key+1 }}. {{ $faq->question }}
                    </button>
                    <div class="panel">
                        <div class="span_color">{!! $faq->answer !!}</div>
        </div>
                @endforeach
        </div>
    </div>
@endif
<!-- --------------- Faq page End --------------- -->

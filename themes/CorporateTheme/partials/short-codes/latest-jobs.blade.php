<div class="job-list wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="job-heading">
            <h2>{{ $shortcode->title }}</h2>
            <p>{{ $shortcode->contain }}</p>
        </div>
        <style>
            .set_img{
                height: 65px;
            }
        </style>
        <div class="row">
            @php //up
                $wow = 0.210;
                $increment = 0;
            @endphp
            @if($post->results != null)
                @foreach($post->results as $key=>$value)
                    @php
//                    if($key)
                        $wow +=$increment
                    @endphp
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $wow . 's' }}">
                        <div class="job-circular">
                            <div class="job-img">
{{--                                <img src="{{ url( 'themes/' . Theme::getPublicThemeName() . '/img/i-doc-1700640404.webp') }}" alt="Job">--}}
                                <img class="set_img" src="{{ 'https://studio.skill.jobs/' . $value->company_info->logo }}" alt="Job">
                                <h1><a href="https://skill.jobs/jobs/{{ $value->slug }}" target="_blank">{{ description_summary($value->title, 45) }}</a></h1>
                            </div>
                            <div class="job-details">
                                <span><i class="ri-map-pin-fill"></i> {{ $value->division }}</span>
                                <span><i class="ri-briefcase-4-fill"></i> {{ $value->type }} </span>
                                <span>{{  $value->no_of_vacancy }} Vacancies</span>
                            </div>
                            <button class="btn"><a href="https://skill.jobs/jobs/{{ $value->slug }}" target="_blank">@lang('Apply now') <i class="ri-arrow-right-s-fill"></i></a></button>
                        </div>
                    </div>
                @endforeach
            @endif
            <!-- Job-card  -->
        </div>
    </div>
</div>

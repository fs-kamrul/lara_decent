@if($academic_groups)
    <section class="Academic wow fadeInUp" data-wow-delay="0.5s">
        <div class="container">
            <div class="academic-main">
                <h2>{{ $shortcode->title }}</h2>
                <div class="row">
                    @php
                        $wow = 0.3;
                        $increment = 0.2;
                    @endphp
                    @foreach($academic_groups as $key=>$academic_group)
                        <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="{{ $wow +=$increment }}s">
                            <div class="academic-card">
                                <div class="academic-text">
                                    <a href="{{ $academic_group->url }}"><h3>{{ $academic_group->name }}</h3>
                                    <p>{{ description_summary($academic_group->short_description, 160) }}</p></a>
                                    <a href="{{ url('admission-form') }}" class="btn">@lang('adminboard::lang.apply_now') </a>
                                </div>
                                <div class="academic-img">
                                    <a href="{{ $academic_group->url }}">
                                        <img style="margin-top: 0" src="{{ getImageUrl($academic_group->photo,'adminboard/adminacademicgroup') }}" alt="{{ $academic_group->name }}"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif

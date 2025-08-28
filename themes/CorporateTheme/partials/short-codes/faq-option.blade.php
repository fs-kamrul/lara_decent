
<!-- --------------- Faq page Start --------------- -->
@php
//dd($categories);
@endphp
@if($faq_categories->count()>0)


    <div class="tp-faq-inner__area pt-120 pb-120">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-xl-12">--}}
{{--                    <div class="tp-price__title-box text-center">--}}
{{--                        <h3 class="tp-section-title">--}}
{{--                           <span class="p-relative">--}}
{{--                           {{ clean($title) }}--}}
{{--                           <span class="tp-title-shape d-none d-md-block">--}}
{{--                              <svg width="145" height="5" viewBox="0 0 145 5" fill="none"--}}
{{--                                   xmlns="http://www.w3.org/2000/svg">--}}
{{--                                 <path--}}
{{--                                     d="M144.738 4.22307C96.8043 2.55338 49.1463 2.288 1.24738 4.99709C-0.427246 5.09661 -0.404312 2.60867 1.24738 2.48703C48.8366 -0.962917 97.2516 -1.06243 144.738 3.70336C145.082 3.73653 145.093 4.23412 144.738 4.22307Z"--}}
{{--                                     fill="#FFB302" />--}}
{{--                              </svg>--}}
{{--                           </span>--}}
{{--                        </span>--}}
{{--                            {{ $shortcode->contain }}--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="tp-faq-inner__tab-btn">
                        <nav>
                            <div class="nav nav-tab" id="nav-tab" role="tablist">
{{--                                @foreach($faq_categories as $key=>$faq_category)--}}
{{--                                    <button class="nav-links @if($key==0) active @endif " id="nav-{{ $key }}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{ $key }}" type="button" role="tab" aria-controls="nav-{{ $key }}" aria-selected="@if($key==0) true @endif">--}}
{{--                                        About Services <i class="fa-light fa-arrow-down"></i>--}}
{{--                                    </button>--}}
{{--                                @endforeach--}}
                                    @foreach($faq_categories as $key => $faq_category)
                                        <button class="nav-links @if($key==0) active @endif"
                                                id="nav-{{ $faq_category->id }}-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#nav-{{ $faq_category->id }}"
                                                type="button"
                                                role="tab"
                                                aria-controls="nav-{{ $faq_category->id }}"
                                                aria-selected="{{ $key==0 ? 'true' : 'false' }}">
                                            {{ $faq_category->name }} <i class="fa-light fa-arrow-down"></i>
                                        </button>
                                    @endforeach
                          </div>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="tab-content" id="nav-tabContent">
                        @foreach($faq_categories as $key => $faq_category)
                            <div class="tab-pane fade @if($key==0) show active @endif"
                                 id="nav-{{ $faq_category->id }}"
                                 role="tabpanel"
                                 aria-labelledby="nav-{{ $faq_category->id }}-tab">

                                <div class="tp-faq-inner__title-box mb-50">
                                    <h4 class="tp-faq-inner__subtitle">{{ $faq_category->name }}</h4>
{{--                                    <h4 class="tp-section-title">{{ $faq_category->name }}</h4>--}}
                                </div>

                                <div class="tp-service-details-faq tp-faq-inner__customize">
                                    <div class="tp-custom-accordion">
                                        <div class="accordion" id="accordion-{{ $faq_category->id }}">
                                            @foreach($faq_category->faqs as $faq_key => $faq)
                                                <div class="accordion-items @if($faq_key==0) tp-faq-active @endif">
                                                    <h2 class="accordion-header" id="heading-{{ $faq->id }}">
                                                        <button class="accordion-buttons @if($faq_key!=0) collapsed @endif"
                                                                type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse-{{ $faq->id }}"
                                                                aria-expanded="{{ $faq_key==0 ? 'true' : 'false' }}"
                                                                aria-controls="collapse-{{ $faq->id }}">
                                                            {{ $faq->question }}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-{{ $faq->id }}"
                                                         class="accordion-collapse collapse @if($faq_key==0) show @endif"
                                                         aria-labelledby="heading-{{ $faq->id }}"
                                                         data-bs-parent="#accordion-{{ $faq_category->id }}">
                                                        <div class="accordion-body">
                                                            {!! $faq->answer !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="faq">--}}
{{--        <div class="container">--}}
{{--            <h2 class="">{{ clean($title) }}</h2>--}}

{{--                @foreach($faqs as $key=>$faq)--}}
{{--                    <button class="accordion">--}}
{{--                        {{ $key+1 }}. {{ $faq->question }}--}}
{{--                    </button>--}}
{{--                    <div class="panel">--}}
{{--                        <div class="span_color">{!! $faq->answer !!}</div>--}}
{{--        </div>--}}
{{--                @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
@endif
<!-- --------------- Faq page End --------------- -->

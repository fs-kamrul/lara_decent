@if($faqs->count()>0)
    <div class="service wow fadeInUp">
        <div class="container">
            <div class="row">
                <section class="section-services">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-10 col-lg-8">
                                <div class="header-section">
                                    <h2 class="title"><span>{{ clean($shortcode->title) }}</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Start Single Service -->
                            @foreach($faqs as $key=>$faq)
                                <div class="col-md-6 col-lg-4">
                                    <div class="single-service">
                                        <div class="part-1">
    {{--                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>--}}
                                            <h3 class="title">{{ $faq->question }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endif

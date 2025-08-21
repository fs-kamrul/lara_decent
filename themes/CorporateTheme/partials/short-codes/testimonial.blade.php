
@if($testimonials)
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="testimonil-text">
                        <span>{{ $shortcode->section }}</span>
                        <h2>{{ $shortcode->title }}</h2>
                        <p>{{ $shortcode->contain }}</p>
                        @if($shortcode->button_label)
                            <a href="{{ $shortcode->button_url }}" class="btn">{{ $shortcode->button_label }} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        @endif
                    </div>

                </div>

                <div class="col-lg-9 col-md-9 wow fadeInUp" data-wow-delay="0.8s">
                    <!-- Words From Guardians & Alumni -->
                    <main>
                        <section>
                            <div class="testimonials">
                                <div class="container">
                                    <div class="testimonial__inner">
                                        <div class="testimonial-slider">
                                            @foreach($testimonials as $testimonial)
                                                <div class="testimonial-slide">
                                                    <div class="testimonial_header">
                                                        <div class="ti">
                                                            <img src="{{ url( 'themes/' . Theme::getPublicThemeName() . '/img/4x/Asset 1@4x.png') }}" alt="testimonial">
                                                        </div>
                                                        <div class="testimonial-img">
                                                            <img src="{{ getImageUrl($testimonial->photo, 'adminboard/admintestimonial') }}" alt="{{ $testimonial->name }}">
                                                        </div>
                                                        <div class="testimonial-text">
                                                            <p>{{ description_summary($testimonial->description, 380) }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial_footer">
                                                        <div class="stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h3>{{ $testimonial->name }}</h3>
                                                            <span>{{ $testimonial->designation }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>
                    <!-- Words From Guardians & Alumni END -->
                </div>
            </div>
        </div>
    </div>
@endif

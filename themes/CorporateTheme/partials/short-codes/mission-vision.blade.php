<div class="mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="dic-mission">
                    <div class="mission-icon">
                        <img src="{{ url('themes/'. Theme::getThemeName() .'/img/about-us/objective.png') }}" alt="{{ __('post::lang.our_mission') }}">
                    </div>
                    <div class="mission-text">
                        <span>{{ __('post::lang.our_mission') }}</span>
                        <p>{{ theme_option('action_our_mission_text') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="dic-mission">
                    <div class="mission-icon">
                        <img src="{{ url('themes/'. Theme::getThemeName() .'/img/about-us/opportunity.png') }}" alt="{{ __('post::lang.our_vision') }}">
                    </div>
                    <div class="mission-text">
                        <span>{{ __('post::lang.our_vision') }}</span>
                        <p>{{ theme_option('action_our_vision_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


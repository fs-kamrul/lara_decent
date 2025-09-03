
<div class="tp-team__area pt-120 pb-120">
    <div class="container">
        <div class="row">
            @php
                $wow = 0.1;
                $increment = 0.2;
            @endphp

            @foreach($teams as $key=>$team)
                @php
                     $wow = ($key == 6) ? 0 : $wow+$increment;
                @endphp

                @if($key == 0 && $teams->currentPage() < 2)
                    <div class="col-12 d-flex justify-content-center">
                        <div class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="{{ $wow }}s">
                            <div class="tp-team-wrapper p-relative mb-30 text-center">
                                <div class="tp-team-wrapper-thumb">
                                    <a href="{{ $team->url }}">
                                        <img src="{{ getImageUrl($team->photo, 'adminboard/adminteam') }}"
                                             alt="{{ $team->name }}"
                                             class="rounded-circle"
                                             style="width: 150px; height: 150px; object-fit: cover;">
                                    </a>
                                    <div class="tp-team-social-info">
                                        @if($team->facebook_id)
                                            <a href="{{ $team->facebook_id }}" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        @endif
                                        @if($team->email)
                                            <a href="mailto:{{ $team->email }}">
                                                <i class="fas fa-envelope"></i>
                                            </a>
                                        @endif
                                        @if($team->google_site)
                                            <a href="{{ $team->google_site }}" target="_blank">
                                                <i class="fab fa-google"></i>
                                            </a>
                                        @endif
                                        @if($team->linkedin_id)
                                            <a href="{{ $team->linkedin_id }}" target="_blank">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="tp-team-wrapper-content d-flex justify-content-between">
                                    <div class="tp-team-wrapper-content-text">
                                        <h3 class="team-title"><a href="{{ $team->url }}">{{ $team->name }}</a></h3>
                                        <p>{{ $team->designation }}</p>
                                    </div>
                                    <div class="tp-team-wrapper-icon">
                                       <span class="tp-team-social">
                                          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                                             <path d="M6.17963 0.813046L6.19966 6.20109L0.813128 6.17955L0.819197 7.81233L6.20573 7.83388L6.22576 13.2219L7.85808 13.2285L7.83805 7.84041L13.2246 7.86195L13.2185 6.22917L7.83198 6.20762L7.81195 0.819575L6.17963 0.813046Z" fill="currentColor"/>
                                          </svg>
                                       </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4 col-sm-6 wow tpfadeUp d-flex justify-content-center" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-team-wrapper p-relative mb-30 text-center">
                            <div class="tp-team-wrapper-thumb ">
                                <a href="{{ $team->url }}">
                                    <img src="{{ getImageUrl($team->photo, 'adminboard/adminteam') }}"
                                         alt="{{ $team->name }}"
                                         class="rounded-circle"
                                         style="width: 150px; height: 150px; object-fit: cover;">
                                </a>
                                <div class="tp-team-social-info">
                                    @if($team->facebook_id)
                                        <a href="{{ $team->facebook_id }}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    @endif

                                    @if($team->email)
                                        <a href="mailto:{{ $team->email }}">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    @endif

                                    @if($team->google_site)
                                        <a href="{{ $team->google_site }}" target="_blank">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    @endif

                                    @if($team->linkedin_id)
                                        <a href="{{ $team->linkedin_id }}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="tp-team-wrapper-content d-flex justify-content-between">
                                <div class="tp-team-wrapper-content-text">
                                    <h3 class="team-title"><a href="{{ $team->url }}">{{ $team->name }}</a></h3>
                                    <p>{{ $team->designation }}</p>
                                </div>
                                <div class="tp-team-wrapper-icon">
                           <span class="tp-team-social">
                              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M6.17963 0.813046L6.19966 6.20109L0.813128 6.17955L0.819197 7.81233L6.20573 7.83388L6.22576 13.2219L7.85808 13.2285L7.83805 7.84041L13.2246 7.86195L13.2185 6.22917L7.83198 6.20762L7.81195 0.819575L6.17963 0.813046Z" fill="currentColor"/>
                              </svg>
                           </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center mt-4">
            @if ($teams->total() > 0)
                {!! $teams->links(Theme::getThemeNamespace() . '::partials.admin_board.pagination') !!}
            @endif
        </div>
    </div>
</div>

<!-- Pagination -->


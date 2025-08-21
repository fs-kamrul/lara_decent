
<div class="governing-profile">
    <div class="container">
        <div class="row justify-content-center">
            @php
                $wow = 0.3;
                $increment = 0;
            @endphp
            @foreach($teams as $key=>$team)
                @php
//                    $wow = ($key == 6) ? 0 : $wow+$increment;
                @endphp
                @if($key == 0 && $teams->currentPage() < 2)
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="{{ $wow }}s">
                        <div class="gov-p">
                            <div class="card-wrapper">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{ getImageUrl($team->photo, 'adminboard/adminteam') }}" alt="{{ $team->name }}">
                                    </div>
                                    <ul class="social-icons">
                                        @if($team->facebook_id)<li><a target="_blank" href="{{ $team->facebook_id }}"><i class="fa fa-facebook-f"></i></a></li>@endif
                                        @if($team->email)<li><a href="mailto:{{ $team->email }}"><i class="fa fa-envelope-o"></i></a></li>@endif
                                        @if($team->google_site)<li><a target="_blank" href="{{ $team->google_site }}"><i class="fa fa-google"></i></a></li>@endif
                                        @if($team->linkedin_id)<li><a target="_blank" href="{{ $team->linkedin_id }}"><i class="fa fa-linkedin"></i></a></li>@endif
                                    </ul>
                                </div>
                                <div class="details mt-3">
                                    <h2 style="line-height: 18px"><a href="{{ $team->url }}">{{ $team->name }}</a></h2>
                                    <p>{{ $team->designation }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="row justify-content-center">
                @else
                {!! Theme::partial('admin_board.team.item', ['team' => $team, 'img_slider' => true, 'wow' => $wow]) !!}
                @endif
            @endforeach
        </div>
                    <div class="justify-content-center">
                        @if ($teams->total() > 0)
                            {!! $teams->links(Theme::getThemeNamespace() . '::partials.admin_board.pagination') !!}
                        @endif
                    </div>
    </div>
</div>



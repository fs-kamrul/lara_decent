<div class="governing-profile">
    <div class="container">
        @if($teams->count()>0)
            <div class="row justify-content-center">
                @php
                    $wow = 0.3;
                    $increment = 0;
                @endphp
                @foreach($teams as $key=>$team)
                    @php
                       // $wow +=$increment
                    @endphp
                    {!! Theme::partial('admin_board.team.item', ['team' => $team, 'img_slider' => true, 'wow' => $wow]) !!}
                @endforeach
                @if ($teams->total() > 0)
                    {!! $teams->links(Theme::getThemeNamespace() . '::partials.admin_board.pagination') !!}
                @endif
            </div>
        @else
            <div class="row">@lang('kamruldashboard::lang.empty') {{ SeoHelper::getTitle() }}</div>
        @endif
    </div>
</div>

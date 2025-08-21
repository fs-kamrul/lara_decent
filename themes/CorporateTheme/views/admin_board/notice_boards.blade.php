@php
        $news_category = get_news_with_children('noticeboard');
@endphp
<div class="notice-main">
    <div class="container">
        <!-- Filter and Search -->
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="filter-search-container">
                    <input type="text" id="searchBox" placeholder="Search notices...">
                    <select id="filterDropdown">
                        <option value="0">@lang('adminboard::lang.all_adminnoticeboard')</option>
                        @foreach($news_category as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        <!-- Add more Option if needed -->
                    </select>
                </div>
            </div>
        </div>

        <div id="noticeBoard" class="notice-board">
            <div class="row" id="noticesContainer">
                @php
                    $wow = 0.3;
                    $increment = 0;
                @endphp
                @foreach($notice_boards as $key=>$notice_board)
                    @php
                       // $wow = ($key == 6) ? 0 : $wow+$increment;
                    @endphp
                    {!! Theme::partial('admin_board.notice_boards.item', ['notice_board' => $notice_board, 'img_slider' => true, 'wow' => $wow]) !!}
                @endforeach
{{--                {!! $notice_boards->withQueryString()->links() !!}--}}
            </div>
            <div class="text-center" id="noticesContainer_pagination">
                @if ($notice_boards->total() > 0)
                    {!! $notice_boards->links(Theme::getThemeNamespace() . '::partials.admin_board.pagination') !!}
                @endif
            </div>
        </div>
    </div>
</div>



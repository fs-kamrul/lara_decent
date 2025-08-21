<div class="single-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-details">
                    <div class="profile-img">
                        <img src="{{ getImageUrl($team->photo,'adminboard/adminteam') }}" alt="{{ $team->name }}">
                    </div>
                    <div class="profile-name">
                        <h3 class="title">{{ $team->name }}</h3>
                        <h6>{{ $team->designation }}</h6>
{{--                        <h6>B.Sc. (Hons), M.Sc in Mathematics (1st Class) Jahangirnagar University</h6>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="profile-header">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="profile-nav nav nav-tabs" data-tabs="tabs">
                                <li class="active"><a href="#message" data-toggle="tab"><i class="fa fa-envelope-open-o"></i> @lang('adminboard::lang.message')</a></li>
                                <li><a href="#about" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> @lang('adminboard::lang.about')</a></li>
                                @if($team->admin_educations->count())
                                <li><a href="#education" data-toggle="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i> @lang('adminboard::lang.admineducation')</a></li>
                                @endif
                                <li><a href="#contact" data-toggle="tab"><i class="fa fa-mobile"></i> @lang('adminboard::lang.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Content Start-->
                <div class="content">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="message">
                            <table class="table" width="180px" align="center">
                                <tbody>
                                <tr>
                                    <td class="text-left">
                                        {!! clean($team->description) !!}
                                        <!-- Name -->
                                        <br> — <b>{{ $team->name }}</b>
                                        <br> {{ $team->designation }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--End Message-->
                        <div class="tab-pane" id="about">
                            <table class="table" width="180px" align="center">
                                <tbody>
                                @if($team->name)
                                <tr>
                                    <td class="text-right">@lang('adminboard::lang.full_name'):</td>
                                    <td style="text-align:left;"><b>{{ $team->name }}</b></td>
                                </tr>
                                @endif
                                @if($team->father_name)
                                <tr>
                                    <td class="text-right">@lang('adminboard::lang.father_name'):</td>
                                    <td style="text-align:left;"><b>{{ $team->father_name }}</b></td>
                                </tr>
                                @endif
                                @if($team->mother_name)
                                <tr>
                                    <td class="text-right">@lang('adminboard::lang.mother_name'):</td>
                                    <td style="text-align:left;"><b>{{ $team->mother_name }}</b></td>
                                </tr>
                                @endif
                                @if($team->dob)
                                <tr>
                                    <td class="text-right">@lang('adminboard::lang.dob'):</td>
                                    <td style="text-align:left;"><b>{{ date('d M Y', strtotime($team->dob)) }}</b></td>
                                </tr>
                                @endif
{{--                                @if($team->phone)--}}
{{--                                <tr>--}}
{{--                                    <td class="text-right">Nationality:</td>--}}
{{--                                    <td style="text-align:left;"><b>{{ $team->name }}</b></td>--}}
{{--                                </tr>--}}
{{--                                @endif--}}
{{--                                @if($team->phone)--}}
{{--                                <tr>--}}
{{--                                    <td class="text-right">Marital Status:</td>--}}
{{--                                    <td style="text-align:left;"><b>{{ $team->name }}</b></td>--}}
{{--                                </tr>--}}
{{--                                @endif--}}
                                </tbody>
                            </table>
                        </div>
                        @if($team->admin_educations->count())
                            <div class="tab-pane" id="education">
                                <table class="table" width="180px" align="center">
                                    <tbody>
                                    @foreach($team->admin_educations as $education)
                                        @php
    //                                    dd($education);
                                        @endphp
                                    <tr>
                                        <td class="text-right">{{$education->name}}:</td>
                                        <td style="text-align:left;"><b>{{$education->pivot->name_title}}</b></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        <div class="tab-pane" id="contact">
                            <table class="table" width="80px" align="center">
                                <tbody>
                                @if($team->office_address)
                                <tr>
                                    <td class="text-right">@lang('adminboard::lang.office_address'):</td>
                                    <td style="text-align:left;"><b>{{ $team->office_address }}</b></td>
                                </tr>
                                @endif
                                @if($team->email)
                                <tr>
                                    <td class="text-right">@lang('adminboard::lang.email'):</td>
                                    <td style="text-align:left;"><b>{{ $team->email }}</b></td>
                                </tr>
                                @endif
                                @if($team->phone)
                                <tr>
                                    <td class="text-right">@lang('adminboard::lang.phone'):</td>
                                    <td style="text-align:left;"><b>{{ $team->phone }}</b></td>
                                </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!--End Contact-->
                    </div>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->
        </div>
    </div>
</div>



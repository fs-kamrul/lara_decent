
<section class="news-single section wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="{{ getImageUrl($admin_ftp_server->photo, 'adminboard/adminftpserver') }}" alt="{{ $admin_ftp_server->name }}">
                            </div>
                            <!-- News Title -->
{{--                            <h1 class="news-title"><a href="{{ $admin_ftp_server->url }}">{{ $admin_ftp_server->name }}</a></h1>--}}
                            <!-- Meta -->
                            <div class="meta">
                                <div class="meta-left">
                                    <span class="date"><i class="ri-news-line"></i>{{ date('d M Y', strtotime($admin_ftp_server->start_date)) }}</span>
                                </div>
                                <div class="meta-right">
                                    <span class="comments"><a ><i class="fa fa-clock-o"></i> {{ $admin_ftp_server->set_time }}</a></span>
                                </div>
                            </div>
                            <!-- News Text -->
                            <div class="news-text">
                                <p>{!! $admin_ftp_server->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

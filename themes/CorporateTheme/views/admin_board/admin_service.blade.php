
<div class="tp-service-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="tp-service-widget">
                    <div class="tp-service-widget-item mb-40">
                        <div class="tp-service-widget-tab">
                            <ul>
                                @php
                                    $lastSegment = last(request()->segments());
                                @endphp
                                @foreach($admin_services as $admin_servic)
                                <li><a class="@if($lastSegment == $admin_servic->slug) active @endif" href="{{ $admin_servic->slug }}">{{ $admin_servic->name }} <i class="fa-regular fa-arrow-right-long"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tp-service-details-wrapper">
                    <div class="tp-service-details-thumb">
                        <img style="width: auto; height: 200px"  src="{{ getImageUrl($admin_service->photo, 'adminboard/adminservice') }}" alt="{{ $admin_service->name }}">
                    </div>
                    <h3 class="tp-service-details-title">{{ $admin_service->name }}</h3>
{{--                    <span class="date"><i class="ri-calendar-todo-line"></i>{{ date('d M Y', strtotime($admin_service->created_at)) }}</span>--}}
                    <p>{!! $admin_service->description !!}</p>


                </div>
            </div>
        </div>
    </div>
</div>

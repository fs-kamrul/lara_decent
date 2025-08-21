<section class="contact-us section wow fadeInUp" data-wow-delay="0.8s">
    <div class="container">
        <div class="inner">
            <div class="row">
                @if($shortcode->address != '')
                <div class="col-lg-6">
                    <div class="contact-us-left">
                        <!--Start Google-map -->
                        <div class="google-map">
{{--                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.725377205343!2d90.37147727589723!3d23.757170588515415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf54a634f2a1%3A0xefc69fcf316efb2!2sDaffodil%20International%20College%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1720518249904!5m2!1sen!2sbd"
                                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                            <iframe src="https://maps.google.com/maps?q={{ addslashes($shortcode->address) }}&output=embed" width="600" height="450"
                                    allowfullscreen="" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!--/End Google-map -->
                    </div>
                </div>
                @endif
                <div class=" @if($shortcode->address != '') col-lg-6 @else col-lg-12 @endif">
                    <div class="contact-us-form">
                        <h2>{{ $shortcode->title }}</h2>
                        <p>{{ $shortcode->description }}</p>

            {!!    Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'form']) !!}
                        <div class="row">
{{--            <div class="max-w-md mx-auto bg-white rounded p-6">--}}
{{--                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>--}}
{{--                <input--}}
{{--                    type="text"--}}
{{--                    id="username"--}}
{{--                    name="username"--}}
{{--                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:ring focus:border-blue-300"--}}
{{--                    placeholder="Enter your username"--}}
{{--                >--}}
{{--            </div>--}}
                            <div class="col-lg-6">
{{--                                <label for="name">@lang('Name')</label>--}}
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" id="contact_name"
                                           placeholder="{{ __('Name') }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
{{--                                <label for="email">@lang('Email Address')</label>--}}
                                <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" id="contact_email"
                                       placeholder="{{ __('Email') }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
{{--                                <label for="contact">@lang('Contact')</label>--}}
                                <div class="form-group">
                                <input type="number" name="phone" value="{{ old('phone') }}" id="contact_phone"
                                       placeholder="{{ __('Phone Number') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
{{--                                <label for="contact">@lang('Subject')</label>--}}
                                <div class="form-group">
                                <input type="text" name="subject" value="{{ old('subject') }}" id="contact_subject"
                                       placeholder="{{ __('Subject') }}">
                                </div>
                            </div>

                            <div class="col-lg-12">
{{--                                <label for="message">@lang('Message')</label>--}}
                                <div class="form-group">

                                <textarea name="content" id="contact_content" cols="30" rows="10"
                                          placeholder="{{ __('Your message') }}">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            @if (setting('enable_captcha') && is_module_active('Captcha'))
                                <div class="contact-form-row">
                                    <div class="contact-column-12">
                                        <div class="contact-form-group">
                                            {!! Captcha::display() !!}
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{--                        <div class="col-12">--}}
                            {{--                            <p>{!! clean(__('The field with (<span style="color:#FF0000;">*</span>) is required.')) !!}</p>--}}
                            {{--                        </div>--}}
                            <div class="col-12">
                                <div class="form-group login-btn">
                                    <button class="btn">@lang('Send')</button>
                                </div>
                            </div>
                        </div>
            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--            <div class="mt-100 flex w-285 justify-left mx-auto xs:hidden lg:flex lg:mt-0 lg:w-2/5">--}}
{{--                [our-offices][/our-offices]--}}
{{--            </div>--}}

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @if($shortcode->address != '')
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3">
                        <iframe src="https://maps.google.com/maps?q={{ addslashes($shortcode->address) }}&output=embed"
                                allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            @endif

            <div class="@if($shortcode->address != '') col-lg-6 @else col-lg-12 @endif">
                <h2 class="mb-3">{{ $shortcode->title }}</h2>
                <p class="mb-4">{{ $shortcode->description }}</p>

                {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST']) !!}
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="name" value="{{ old('name') }}" id="contact_name"
                               class="form-control" placeholder="{{ __('Name') }}">
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" value="{{ old('email') }}" id="contact_email"
                               class="form-control" placeholder="{{ __('Email') }}">
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="phone" value="{{ old('phone') }}" id="contact_phone"
                               class="form-control" placeholder="{{ __('Phone Number') }}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="subject" value="{{ old('subject') }}" id="contact_subject"
                               class="form-control" placeholder="{{ __('Subject') }}">
                    </div>
                    <div class="col-12">
            <textarea name="content" id="contact_content" rows="5"
                      class="form-control" placeholder="{{ __('Your message') }}">{{ old('content') }}</textarea>
                    </div>

                    @if (setting('enable_captcha') && is_module_active('Captcha'))
                        <div class="col-12">
                            {!! Captcha::display() !!}
                        </div>
                    @endif

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">@lang('Send')</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

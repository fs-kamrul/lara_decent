<style>
    .red{
        color: red;
    }
</style>
<div class="admission-f">
    <div class="container">
        <div class="admission-form">
            <div class="formbold-main-wrapper">
                <div class="formbold-form-wrapper">
    {!!    Form::open(['route' => 'admission_store.store', 'method' => 'POST', 'class' => '', 'enctype' => 'multipart/form-data']) !!}
                    {{ method_field('POST') }}
                    <div class="formbold-form-title">
                        <h2><i class="fa fa-check-square-o" aria-hidden="true"></i> @lang('Application Form') :</h2>
                        <p>@lang('Personal Information') :</p>
                    </div>
        @csrf
                    <div class="formbold-input-flex">
                        <div>
                            <label for="name" class="formbold-form-label">@lang('Student Name') <span class="red">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="formbold-form-input" placeholder="{{ __('Student Name') }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="formbold-form-label">@lang('Phone Number') <span class="red">*</span></label>
                            <input type="number" name="phone" value="{{ old('phone') }}" class="formbold-form-input" id="phone" placeholder="{{ __('Phone Number') }}">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="father_name" class="formbold-form-label">@lang('Father Name') <span class="red">*</span></label>
                            <input type="text" name="father_name" value="{{ old('father_name') }}" class="formbold-form-input" id="father_name" placeholder="{{ __('Father Name') }}">
                            @error('father_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="father_phone" class="formbold-form-label">@lang('Father Phone Number') <span class="red">*</span></label>
                            <input type="number" name="father_phone" value="{{ old('father_phone') }}" class="formbold-form-input" id="father_phone" placeholder="{{ __('Father Phone Number') }}">
                            @error('father_phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="mother_nane" class="formbold-form-label">@lang('Mother Name') <span class="red">*</span></label>
                            <input type="text" name="mother_nane" value="{{ old('mother_nane') }}" id="mother_nane"  class="formbold-form-input" placeholder="{{ __('Mother Name') }}">
                            @error('mother_nane')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="mother_phone" class="formbold-form-label">@lang('Mother Phone Number') <span class="red">*</span></label>
                            <input type="number" name="mother_phone" value="{{ old('mother_phone') }}" id="mother_phone"  class="formbold-form-input" placeholder="{{ __('Mother Phone Number') }}">
                            @error('mother_phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="email" class="formbold-form-label">@lang('Email') <span class="red">*</span></label>
                            <input type="email" name="email"  class="formbold-form-input" value="{{ old('email') }}" id="dob" placeholder="{{ __('Email') }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="dob" class="formbold-form-label">@lang('Date of Birth') <span class="red">*</span></label>
                            <input type="date" name="dob"  class="formbold-form-input" value="{{ old('dob') }}" id="dob" placeholder="{{ __('Date of Birth') }}">
                            @error('dob')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="religion" class="formbold-form-label">@lang('Religion') </label>
                            {!! Form::select('religion', Option::getReligion(), old('religion'), [ 'id' => "religion", 'class'=>"formbold-form-input" ]) !!}
                        </div>
                        <div>
                            <label for="gender" class="formbold-form-label">@lang('Gender') </label>
                            {!! Form::select('gender', Option::getGender(), old('gender'), [ 'id' => "gender", 'class'=>"formbold-form-input" ]) !!}
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        @if (is_module_active('Location'))
                            <div>
                                <label for="pre_country" class="formbold-form-label">@lang('Nationality') </label>
                                {!! Form::select('nationality',
                                    Location::getNationality(),
                                    old('nationality'),
                                    [
                                        'class' => 'nice-select formbold-form-input'
                                    ]
                                    )
                                !!}
                            </div>
                        @endif
                        <div>
                            <label for="birth_registration" class="formbold-form-label">@lang('Birth Registration Number') <span class="red">*</span></label>
                            <input type="text" name="birth_registration" class="formbold-form-input" value="{{ old('birth_registration') }}" id="dob" placeholder="{{ __('Birth Registration Number') }}">
                            @error('birth_registration')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div>
                            <label for="photo" class="formbold-form-label">@lang('Student Photo') <span class="red">*</span></label><br/>
                            <input type="file" name="photo" value="{{ old('photo') }}" class="formbold-form-input" id="photo" placeholder="{{ __('Student Photo') }}" accept="image/*"><br/>
                            <span class="red">* @lang('Select Your Image:(Color Photo, JPEG, JPG, PNG Format)')<br> @lang('Picture Size 150 kb only').</span>
{{--                            , 300 x 300 pixel--}}
                            @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (setting('enable_captcha') && is_module_active('Captcha'))
                            <div>
                                <div class="contact-column-12">
                                    <div class="contact-form-group">
                                        {!! Captcha::display() !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="formbold-form-title">
                        <h2><i class="fa fa-book" aria-hidden="true"></i> @lang('Important Information') :</h2>
                    </div>

                    <div class="formbold-input-flex">
                        <div>
                            <label for="class" class="formbold-form-label">@lang('Admission Class') </label>
                            {!! Form::select('class', Option::getClass(), old('class'), [ 'id' => "class", 'class'=>"formbold-form-input" ]) !!}
                        </div>
                        <div>
                            <label for="year" class="formbold-form-label">@lang('Admission Year') </label>
                            {!! Form::select('year', Option::getYear(), old('year'), [ 'id' => "year", 'class'=>"formbold-form-input" ]) !!}
                        </div>
                        <div>
                            <label for="admission_group" class="formbold-form-label">@lang('Choose Admission Group') </label>
                            {!! Form::select('admission_group', Option::getGroup(), old('admission_group'), [ 'id' => "religion", 'class'=>"formbold-form-input" ]) !!}
                        </div>
                    </div>
                    <div class="formbold-form-title">
                        <h2><i class="fa fa-book" aria-hidden="true"></i> @lang('Previous Institution') :</h2>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="pre_institution" class="formbold-form-label">@lang('SSC Institution Name') <span class="red">*</span></label>
                            <input type="text" name="pre_institution" value="{{ old('pre_institution') }}" class="formbold-form-input" id="pre_institution" placeholder="{{ __('SSC Institution Name') }}">
                            @error('pre_institution')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="ssc_group" class="formbold-form-label">@lang('SSC Group') </label>
                            {!! Form::select('ssc_group', Option::getGroup(), old('ssc_group'), [ 'id' => "religion", 'class'=>"formbold-form-input" ]) !!}
                        </div>
                        <div>
                            <label for="ssc_board" class="formbold-form-label">@lang('SSC Board Name') <span class="red">*</span></label>
                            <input type="text" name="ssc_board" value="{{ old('ssc_board') }}" class="formbold-form-input" id="ssc_board" placeholder="{{ __('SSC Board Name') }}">
                            @error('ssc_board')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
{{--                        <div>--}}
{{--                            <label for="pre_class" class="formbold-form-label">@lang('Previous Class') </label>--}}
{{--                            {!! Form::select('pre_class', Option::getClass(), old('pre_class'), [ 'id' => "pre_class", 'class'=>"formbold-form-input" ]) !!}--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label for="pre_gpa" class="formbold-form-label">@lang('Previous GPA') <span class="red">*</span></label>--}}
{{--                            <input type="text" name="pre_gpa" value="{{ old('pre_gpa') }}" id="pre_gpa" class="formbold-form-input" placeholder="{{ __('Previous GPA') }}">--}}
{{--                        </div>--}}
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="ssc_year" class="formbold-form-label">@lang('SSC Year') <span class="red">*</span></label>
                            <input type="text" name="ssc_year" value="{{ old('ssc_year') }}" id="ssc_year" class="formbold-form-input" placeholder="{{ __('SSC Year') }}">
                            @error('ssc_year')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="ssc_roll" class="formbold-form-label">@lang('SSC Roll') <span class="red">*</span></label>
                            <input type="number" name="ssc_roll" value="{{ old('ssc_roll') }}" id="ssc_roll" class="formbold-form-input" placeholder="{{ __('SSC Roll') }}">
                            @error('ssc_roll')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="ssc_registration" class="formbold-form-label">@lang('SSC Registration') <span class="red">*</span></label>
                            <input type="number" name="ssc_registration" value="{{ old('ssc_registration') }}" id="ssc_registration" class="formbold-form-input" placeholder="{{ __('SSC Registration') }}">
                            @error('ssc_registration')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="ssc_gpa" class="formbold-form-label">@lang('SSC GPA') <span class="red">*</span></label>
                            <input type="number" name="ssc_gpa" value="{{ old('ssc_gpa') }}" id="ssc_gpa" class="formbold-form-input" placeholder="{{ __('SSC GPA') }}">
                            @error('ssc_gpa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="ssc_transcript" class="formbold-form-label">@lang('SSC Transcript') <span class="red">*</span></label><br/>
                            <input type="file" name="ssc_transcript" value="{{ old('ssc_transcript') }}" class="formbold-form-input" id="ssc_transcript" placeholder="{{ __('SSC Transcript') }}" accept="image/*"><br/>
{{--                            <span class="red">* @lang('Select Your Image:(Color Photo, JPEG, JPG, PNG Format, 300 x 300 pixel)')<br> @lang('Picture Size 150 kb only').</span>--}}
                            @error('ssc_transcript')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="ssc_testimonial" class="formbold-form-label">@lang('SSC Testimonial') <span class="red">*</span></label><br/>
                            <input type="file" name="ssc_testimonial" value="{{ old('ssc_testimonial') }}" class="formbold-form-input" id="ssc_testimonial" placeholder="{{ __('SSC Testimonial') }}" accept="image/*"><br/>
{{--                            <span class="red">* @lang('Select Your Image:(Color Photo, JPEG, JPG, PNG Format, 300 x 300 pixel)')<br> @lang('Picture Size 150 kb only').</span>--}}
                            @error('ssc_testimonial')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="formbold-form-title">
                        <h2><i class="fa fa-book" aria-hidden="true"></i> @lang('Present Address')</h2>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="pre_address" class="formbold-form-label">@lang('Address') <span class="red">*</span></label>
                            <input type="text" name="pre_address" value="{{ old('pre_address') }}" class="formbold-form-input" id="pre_address" placeholder="{{ __('Address') }}">
                            @error('pre_address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="pre_postcode" class="formbold-form-label">@lang('Post Code') <span class="red">*</span></label>
                            <input type="text" name="pre_postcode" value="{{ old('pre_postcode') }}" class="formbold-form-input" id="pre_postcode" placeholder="{{ __('Post Code') }}">
                            @error('pre_postcode')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
{{--        <div>--}}
{{--            <label for="name">@lang('Name') <span class="red">*</span></label>--}}
{{--            <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="{{ __('Name') }}">--}}
{{--        </div>--}}

                    <div class="formbold-input-flex">
        @if (is_module_active('Location'))
            <div>
                <label for="pre_country" class="formbold-form-label">@lang('Country') </label>
                {!! Form::select('pre_country',
                    Location::getCountry(),
                    old('pre_country'),
                    [
                        'data-type' => "country",
                        'id' => "pre_country",
                         'class'=>"formbold-form-input"
                    ]) !!}
            </div>
            <div>
                <label for="pre_states" class="formbold-form-label">@lang('States') </label>
                {!! Form::select('pre_states',
                    Location::getStates(),
                    47,
                    [
                        'data-type' => "state",
                        'data-url' => route('ajax.states-by-country'),
                        'id' => "pre_states",
                        'class'=>"formbold-form-input"
                    ]) !!}
            </div>
            <div>
                <label for="pre_city" class="formbold-form-label">@lang('City') </label>
                {!! Form::select('pre_city',
                    Location::getCitiesByState(47),
                    old('pre_city'),
                    [
                        'data-type' => "city",
                        'data-url' => route('ajax.cities-by-state'),
                        'id' => "pre_city",
                         'class'=>"formbold-form-input"
                    ],
                ) !!}
            </div>
        @endif
                    </div>
                    <div class="formbold-form-title">
                        <h2><i class="fa fa-book" aria-hidden="true"></i> @lang('Permanent Address')</h2>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="per_address" class="formbold-form-label">@lang('Address') <span class="red">*</span></label>
                            <input type="text" name="per_address" class="formbold-form-input" value="{{ old('per_address') }}" id="per_address" placeholder="{{ __('Address') }}">
                            @error('per_address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="per_postcode" class="formbold-form-label">@lang('Post Code') <span class="red">*</span></label>
                            <input type="text" name="per_postcode" class="formbold-form-input" value="{{ old('per_postcode') }}" id="per_postcode" placeholder="{{ __('Post Code') }}">
                            @error('per_postcode')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="formbold-input-flex">
        @if (is_module_active('Location'))
            <div>
                <label for="per_country" class="formbold-form-label">@lang('Country') </label>
                {!! Form::select('per_country',
                    Location::getCountry(),
                    old('per_country'),
                    [
                        'data-type' => "per_country",
                        'id' => "per_country",
                         'class'=>"formbold-form-input"
                    ]) !!}
            </div>
            <div>
                <label for="per_states" class="formbold-form-label">@lang('States') </label>
                {!! Form::select('per_states',
                    Location::getStates(),
                    47,
                    [
                        'data-type' => "per_state",
                        'data-url' => route('ajax.states-by-country'),
                        'id' => "per_states",
                         'class'=>"formbold-form-input"
                    ]) !!}
            </div>
            <div>
                <label for="per_city" class="formbold-form-label">@lang('City') </label>
                {!! Form::select('per_city',
                    Location::getCitiesByState(47),
                    old('per_city'),
                    [
                        'data-type' => "per_city",
                        'data-url' => route('ajax.cities-by-state'),
                        'id' => "per_city",
                         'class'=>"formbold-form-input"
                    ],
                ) !!}
            </div>
        @endif
                    </div>
                    <div class="formbold-form-title">
                        <h2><i class="fa fa-book" aria-hidden="true"></i> @lang('Local Guardian Information')</h2>
                    </div>
                    <div class="formbold-input-flex">
                        <div>
                            <label for="loc_name" class="formbold-form-label">@lang('Name') <span class="red">*</span></label>
                            <input type="text" name="loc_name" class="formbold-form-input" value="{{ old('loc_name') }}" id="loc_name" placeholder="{{ __('Name') }}">
                            @error('loc_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="loc_phone" class="formbold-form-label">@lang('Phone') <span class="red">*</span></label>
                            <input type="text" name="loc_phone" class="formbold-form-input" value="{{ old('loc_phone') }}" id="loc_phone" placeholder="{{ __('Phone') }}">
                            @error('loc_phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="formbold-input-flex">
                        <div>
                            <label for="loc_relation" class="formbold-form-label">@lang('Relation with Student') <span class="red">*</span></label>
                            <input type="text" name="loc_relation" class="formbold-form-input" value="{{ old('loc_relation') }}" id="loc_relation" placeholder="{{ __('Relation with Student') }}">
                            @error('loc_relation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="loc_address" class="formbold-form-label">@lang('Address') <span class="red">*</span></label>
                            <input type="text" name="loc_address" class="formbold-form-input" value="{{ old('loc_address') }}" id="loc_address" placeholder="{{ __('Address') }}">
                        </div>
                        <div>
                            <label for="loc_postcode" class="formbold-form-label">@lang('Post Code') <span class="red">*</span></label>
                            <input type="text" name="loc_postcode" class="formbold-form-input" value="{{ old('loc_postcode') }}" id="loc_postcode" placeholder="{{ __('Post Code') }}">
                            @error('loc_postcode')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
{{--        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">--}}
{{--            <h3>@lang('Student Photo')</h3>--}}
{{--        </div>--}}

        {{--                        <div class="col-12">--}}
        {{--                            <p>{!! clean(__('The field with (<span style="color:#FF0000;">*</span>) is required.')) !!}</p>--}}
        {{--                        </div>--}}

                    <div class="formbold-form-title">
                        <h2><i class="fa fa-paypal" aria-hidden="true"></i> Payment Information:</h2>
                    </div>
                    <div class="formbold-input-flex payment">
                        <div>
                            <div class="payment-title">
                                <h3>Payment Guidelines:</h3>
                                <h4>Mobile Banking Account Number: 01847027544</h4>
                            </div>
                            <div class="payment-info">
                                <p>1. বিকাশের মাধ্যমে পেমেন্ট করতে Payment অপশনে গিয়ে 01847027544 লিখে সার্চ করুন। Daffodil International College আসবে। এরপর এমাউন্ট দিয়ে পেমেন্ট Submit করুন।</p>
                                <img src="{{ url('themes/'. Theme::getThemeName() .'/img/BKash-bKash-Logo.wine.svg') }}" alt="">
                            </div>
                            <div class="payment-info">
                                <p>2. নগদের মাধ্যমে পেমেন্ট করতে Bill Pay অপশনে গিয়ে Biller ID তে 1235 লিখে সার্চ করুন। Daffodil International College আসবে। এরপর এমাউন্ট দিয়ে পেমেন্ট Submit করুন।</p>
                                <img src="{{ url('themes/'. Theme::getThemeName() .'/img/Nagad-Logo.wine.png') }}" alt="">
                            </div>
                            <div class="payment-info">
                                <p>3. রকেটের মাধ্যমে পেমেন্ট করতে Bill Pay অপশনে গিয়ে Biller ID তে 5237 লিখে সার্চ করুন। Daffodil International College, Dhaka আসবে। এরপর এমাউন্ট দিয়ে পেমেন্ট Submit করুন।</p>
                                <img src="{{ url('themes/'. Theme::getThemeName() .'/img/Rocket Logo.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
{{--                    <img src="{{ url('themes/'. Theme::getThemeName() .'/img/Online Payment option-01.png') }}" alt="bkash">--}}

                    <div class="formbold-input-flex">
                        <div>
                            <label for="tex_id" class="formbold-form-label"> Trx id *</label>
                            <input type="text" name="tex_id" value="{{ old('tex_id') }}" id="tex_id" class="formbold-form-input"/>
                            @error('tex_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="payment_img" class="formbold-form-label"> Payment SS *</label>
                            <input type="file" name="payment_img" id="payment_img" accept="image/*" class="formbold-form-input"/>
                            @error('payment_img')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button class="outline_btn btn">@lang('Register Now')</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

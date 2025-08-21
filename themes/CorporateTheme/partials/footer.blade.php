<footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                {!! dynamic_sidebar('footer_sidebar') !!}
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>{!! theme_option('copyright') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
{{--{!! dynamic_sidebar('top_footer_sidebar') !!}--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>--}}
{!! Theme::footer() !!}


{!! Theme::place('footer') !!}
<script>
    var KamrulVariables = KamrulVariables || {};

    @if (Auth::check())
        KamrulVariables.languages = {
        tables: {!! json_encode(trans('table::lang'), JSON_HEX_APOS) !!},
        notices_msg: {!! json_encode(trans('kamruldashboard::notices'), JSON_HEX_APOS) !!},
        pagination: {!! json_encode(trans('pagination'), JSON_HEX_APOS) !!},
        system: {
            'character_remain': '{{ trans('kamruldashboard::forms.character_remain') }}'
        },
    };
    KamrulVariables.authorized = "{{ setting('membership_authorization_at') && now()->diffInDays(Carbon\Carbon::createFromFormat('Y-m-d H:i:s', setting('membership_authorization_at'))) <= 7 ? 1 : 0 }}";
    @else
        KamrulVariables.languages = {
        notices_msg: {!! json_encode(trans('kamruldashboard::notices'), JSON_HEX_APOS) !!},
    };
    @endif
</script>
@if (session()->has('success_msg') || session()->has('error_msg') || (isset($errors) && $errors->count() > 0) || isset($error_msg))
    <script type="text/javascript">
        $(document).ready(function () {
            @if (session()->has('success_msg'))
            kamruldashboard.showSuccess('{{ session('success_msg') }}');
            @endif
            @if (session()->has('error_msg'))
            kamruldashboard.showError('{{ session('error_msg') }}');
            @endif
            @if (isset($error_msg))
            kamruldashboard.showError('{{ $error_msg }}');
            @endif
            @if (isset($errors))
            @foreach ($errors->all() as $error)
            kamruldashboard.showError('{{ $error }}');
            @endforeach
            @endif
        });
    </script>
    @endif


    </body>
</html>

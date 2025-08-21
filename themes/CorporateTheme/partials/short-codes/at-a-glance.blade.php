<div class="at-a-glance wow fadeInUp" data-wow-delay="0.5s">
    <div class="container">
        <h2>{{ __('kamruldashboard::at_a_glance.name') }}</h2>
        <table>
            <tr>
                <th>{{ theme_option('site_title') }}</th>
                <th>{{ __('kamruldashboard::at_a_glance.information') }}</th>
            </tr>
            <tr>
                <td>{{ __('kamruldashboard::at_a_glance.eiin') }}</td>
                <td>{{ theme_option('action_eiin_text') }}</td>
            </tr>
            <tr>
                <td>{{ __('kamruldashboard::at_a_glance.college_code') }}</td>
                <td>{{ theme_option('action_college_code_text') }}</td>
            </tr>
            <tr>
                <td>{{ __('kamruldashboard::at_a_glance.founder_chairman') }}</td>
                <td><a href="{{ theme_option('action_founder_chairman_url_text') }}" target="_blank">{{ theme_option('action_founder_chairman_text') }}</a></td>
            </tr>
            <tr>
                <td>{{ __('kamruldashboard::at_a_glance.education_level') }}</td>
                <td>{{ theme_option('action_education_level_text') }}</td>
            </tr>
            <tr>
                <td>{{ __('kamruldashboard::at_a_glance.department') }}</td>
                <td>{{ theme_option('action_department_text') }}</td>
            </tr>
            <tr>
                <td>{{ __('kamruldashboard::at_a_glance.clubs_of_dic') }}</td>
                <td>{{ theme_option('action_clubs_of_dic_text') }}</td>
            </tr>
            <tr>
                <td>{{ __('kamruldashboard::at_a_glance.others_facilities') }}</td>
                <td>{{ theme_option('action_others_facilities_text') }}</td>
            </tr>
        </table>
    </div>
</div>


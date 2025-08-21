<?php

app()->booted(function () {
    theme_option()
        ->setField([
            'id'         => 'copyright',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Copyright'),
            'attributes' => [
                'name'    => 'copyright',
                'value'   => '© 2022 Apphostbd Technologies. All right reserved.',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Change copyright'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Copyright on footer of site'),
        ])
        ->setField([
            'id'         => 'designed_by',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Designed by'),
            'attributes' => [
                'name'    => 'designed_by',
                'value'   => 'Designed by Kamrul | All rights reserved.',
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 250,
                ],
            ],
        ])
        ->setField([
            'id'         => 'preloader_enabled',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'select',
            'label'      => __('Enable Preloader?'),
            'attributes' => [
                'name'    => 'preloader_enabled',
                'list'    => [
                    'no'  => trans('theme::theme.no'),
                    'yes' => trans('theme::theme.yes'),
                ],
                'value'   => 'no',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
//        ->setField([
//            'id'         => 'primary_font',
//            'section_id' => 'opt-text-subsection-general',
//            'type'       => 'googleFonts',
//            'label'      => __('Primary font'),
//            'attributes' => [
//                'name'  => 'primary_font',
//                'value' => 'Roboto',
//            ],
//        ])
        ->setField([
            'id'         => 'primary_color',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customColor',
            'label'      => __('Primary color'),
            'attributes' => [
                'name'  => 'primary_color',
                'value' => '#edf6fa',
            ],
        ])
        ->setField([
            'id'         => 'secondary_color',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customColor',
            'label'      => __('Secondary color'),
            'attributes' => [
                'name'  => 'secondary_color',
                'value' => '#2d3d8b',
            ],
        ])
        ->setField([
            'id'         => 'background_color',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customColor',
            'label'      => __('Background color'),
            'attributes' => [
                'name'  => 'background_color',
                'value' => '#edf6fa',
            ],
        ])
        ->setField([
            'id'         => 'danger_color',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customColor',
            'label'      => __('Danger color'),
            'attributes' => [
                'name'  => 'danger_color',
                'value' => '#e3363e',
            ],
        ])
        ->setField([
            'id'         => 'site_description',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'textarea',
            'label'      => __('Site description'),
            'attributes' => [
                'name'    => 'site_description',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'address',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Address'),
            'attributes' => [
                'name'    => 'address',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'address_google',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Google Share Address URL'),
            'attributes' => [
                'name'    => 'address_google',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                    'placeholder' => 'https://goo.gl/maps/******',
                ],
            ],
        ])
        ->setField([
            'id'         => 'site_email',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'email',
            'label'      => __('Email'),
            'attributes' => [
                'name'    => 'site_email',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'site_email2',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'email',
            'label'      => __('2nd Email'),
            'attributes' => [
                'name'    => 'site_email2',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'site_phone',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Phone'),
            'attributes' => [
                'name'    => 'site_phone',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'site_phone2',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('2nd Phone'),
            'attributes' => [
                'name'    => 'site_phone2',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'working_hours',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Working Hours'),
            'attributes' => [
                'name'    => 'working_hours',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'off_day',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Off Day'),
            'attributes' => [
                'name'    => 'off_day',
                'value'   => 'Friday',
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setSection([
            'title'      => __('Social'),
            'desc'       => __('Social links'),
            'id'         => 'opt-text-subsection-social-links',
            'subsection' => true,
            'icon'       => 'fa fa-share-alt',
        ]);

    for ($i = 1; $i <= 6; $i++) {
        theme_option()
            ->setField([
                'id'         => 'social_' . $i . '_name',
                'section_id' => 'opt-text-subsection-social-links',
                'type'       => 'text',
                'label'      => __('Name') . ' ' . $i,
                'attributes' => [
                    'name'    => 'social_' . $i . '_name',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'social_' . $i . '_icon',
                'section_id' => 'opt-text-subsection-social-links',
                'type'       => 'text',
                'label'      => __('Icon') . ' ' . $i,
                'attributes' => [
                    'name'    => 'social_' . $i . '_icon',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'social_' . $i . '_url',
                'section_id' => 'opt-text-subsection-social-links',
                'type'       => 'text',
                'label'      => __('URL') . ' ' . $i,
                'attributes' => [
                    'name'    => 'social_' . $i . '_url',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ]);
//            ->setField([
//                'id'         => 'social_' . $i . '_color',
//                'section_id' => 'opt-text-subsection-social-links',
//                'type'       => 'customColor',
//                'label'      => __('Color') . ' ' . $i,
//                'attributes' => [
//                    'name'    => 'social_' . $i . '_color',
//                    'value'   => null,
//                    'options' => [
//                        'class' => 'form-control',
//                    ],
//                ],
//            ]);
    }

    theme_option()
//        ->setSection([
//            'title'      => __('Header'),
//            'desc'       => __('Header config'),
//            'id'         => 'opt-text-subsection-header',
//            'subsection' => true,
//            'icon'       => 'fa fa-link',
//        ])
//        ->setField([
//            'id'         => 'action_title_text',
//            'section_id' => 'opt-text-subsection-header',
//            'type'       => 'text',
//            'label'      => __('Header Title'),
//            'attributes' => [
//                'name'    => 'action_title_text',
//                'value'   => 'Freshers\' Orientation Program for the Session: 2022 - 23',
//                'options' => [
//                    'class' => 'form-control',
//                ],
//            ],
//        ])
//        ->setField([
//            'id'         => 'action_button_text',
//            'section_id' => 'opt-text-subsection-header',
//            'type'       => 'text',
//            'label'      => __('Action button text'),
//            'attributes' => [
//                'name'    => 'action_button_text',
//                'value'   => null,
//                'options' => [
//                    'class' => 'form-control',
//                ],
//            ],
//        ])
//        ->setField([
//            'id'         => 'action_button_url',
//            'section_id' => 'opt-text-subsection-header',
//            'type'       => 'text',
//            'label'      => __('Action button URL'),
//            'attributes' => [
//                'name'    => 'action_button_url',
//                'value'   => null,
//                'options' => [
//                    'class' => 'form-control',
//                ],
//            ],
//        ])
        ->setField([
            'id'         => 'blog_single_layout',
            'section_id' => 'opt-text-subsection-blog',
            'type'       => 'select',
            'label'      => __('Default Page Single Layout'),
            'attributes' => [
                'name'    => 'blog_single_layout',
                'list'    => get_blog_single_layouts(),
                'value'   => 'blog-full-width',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'blog_layout',
            'section_id' => 'opt-text-subsection-blog',
            'type'       => 'select',
            'label'      => __('Public Layout'),
            'attributes' => [
                'name'    => 'blog_layout',
                'list'    => get_blog_layouts(),
                'value'   => 'big',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'facebook_comment_enabled_in_gallery',
            'section_id' => 'opt-text-subsection-facebook-integration',
            'type'       => 'select',
            'label'      => __('Enable Facebook comment in the gallery detail?'),
            'attributes' => [
                'name'    => 'facebook_comment_enabled_in_gallery',
                'list'    => [
                    'no'  => trans('theme::theme.no'),
                    'yes' => trans('theme::theme.yes'),
                ],
                'value'   => 'no',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ]);
    theme_option()
        ->setSection([
            'title'      => __('Facts Data'),
            'desc'       => __('Facts Action config'),
            'id'         => 'opt-text-subsection-banner-action',
            'subsection' => true,
            'icon'       => 'icon-zoom-in',
        ])
        ->setField([
            'id'         => 'action_years_experience_text',
            'section_id' => 'opt-text-subsection-banner-action',
            'type'       => 'text',
            'label'      => __('Years Experience'),
            'attributes' => [
                'name'    => 'action_years_experience_text',
                'value'   => '20Ac',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_total_achievements_text',
            'section_id' => 'opt-text-subsection-banner-action',
            'type'       => 'text',
            'label'      => __('Total Achievements'),
            'attributes' => [
                'name'    => 'action_total_achievements_text',
                'value'   => '50+',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_happy_students_text',
            'section_id' => 'opt-text-subsection-banner-action',
            'type'       => 'text',
            'label'      => __('Happy Students'),
            'attributes' => [
                'name'    => 'action_happy_students_text',
                'value'   => '10K',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_graduates_text',
            'section_id' => 'opt-text-subsection-banner-action',
            'type'       => 'text',
            'label'      => __('Graduates'),
            'attributes' => [
                'name'    => 'action_graduates_text',
                'value'   => '10K',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_notice_box_text',
            'section_id' => 'opt-text-subsection-banner-action',
            'type'       => 'textarea',
            'label'      => __('Notice Box'),
            'attributes' => [
                'name'    => 'action_notice_box_text',
                'value'   => 'If you want to center the content within a specific area rather than the entire viewport.',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ]);
    theme_option()
        ->setSection([
            'title'      => __('Venue Massage'),
            'desc'       => __('Venue Massage config'),
            'id'         => 'opt-text-venue-massage-action',
            'subsection' => true,
            'icon'       => 'icon-envelope2',
        ])
        ->setField([
            'id'         => 'action_venue_title_text',
            'section_id' => 'opt-text-venue-massage-action',
            'type'       => 'text',
            'label'      => __('Title'),
            'attributes' => [
                'name'    => 'action_venue_title_text',
                'value'   => null,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_venue_massage_text',
            'section_id' => 'opt-text-venue-massage-action',
            'type'       => 'text',
            'label'      => __('Massage'),
            'attributes' => [
                'name'    => 'action_venue_massage_text',
                'value'   => null,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_venue_contact_us_text',
            'section_id' => 'opt-text-venue-massage-action',
            'type'       => 'text',
            'label'      => __('Contact us URL'),
            'attributes' => [
                'name'    => 'action_venue_contact_us_text',
                'value'   => null,
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setSection([
            'title' => __('Contact info boxes'),
            'desc' => __('Contact info boxes'),
            'id' => 'opt-contact',
            'subsection' => false,
            'icon' => 'fa fa-info-circle',
            'fields' => [],
        ])
        ->setField([
            'id' => 'contact_info_boxes',
            'section_id' => 'opt-contact',
            'type' => 'repeater',
            'label' => __('Contact info boxes'),
            'attributes' => [
                'name' => 'contact_info_boxes',
                'value' => null,
                'fields' => [
                    [
                        'type' => 'text',
                        'label' => __('Name'),
                        'attributes' => [
                            'name' => 'name',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'type' => 'text',
                        'label' => __('Contact Person'),
                        'attributes' => [
                            'name' => 'contact',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'type' => 'text',
                        'label' => __('Person Designation'),
                        'attributes' => [
                            'name' => 'designation',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'type' => 'text',
                        'label' => __('Address'),
                        'attributes' => [
                            'name' => 'address',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'type' => 'text',
                        'label' => __('Phone'),
                        'attributes' => [
                            'name' => 'phone',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                    [
                        'type' => 'email',
                        'label' => __('Email'),
                        'attributes' => [
                            'name' => 'email',
                            'value' => null,
                            'options' => [
                                'class' => 'form-control',
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    theme_option()
        ->setSection([
            'title'      => __('kamruldashboard::at_a_glance.name'),
            'desc'       => __('kamruldashboard::at_a_glance.name_config'),
            'id'         => 'opt-text-at-a-glance-action',
            'subsection' => true,
            'icon'       => 'icon-address-book',
        ])
        ->setField([
            'id'         => 'action_years_experience',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'text',
            'label'      => __('kamruldashboard::at_a_glance.year_of_establishment'),
            'attributes' => [
                'name'    => 'action_years_experience',
                'value'   => 'July 2003',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_eiin_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'text',
            'label'      => __('kamruldashboard::at_a_glance.eiin'),
            'attributes' => [
                'name'    => 'action_eiin_text',
                'value'   => '134564',
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_college_code_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'text',
            'label'      => __('kamruldashboard::at_a_glance.college_code'),
            'attributes' => [
                'name'    => 'action_college_code_text',
                'value'   => '1065',
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_founder_chairman_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'text',
            'label'      => __('kamruldashboard::at_a_glance.founder_chairman'),
            'attributes' => [
                'name'    => 'action_founder_chairman_text',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_founder_chairman_url_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'text',
            'label'      => __('kamruldashboard::at_a_glance.founder_chairman_url'),
            'attributes' => [
                'name'    => 'action_founder_chairman_url_text',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_education_level_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'text',
            'label'      => __('kamruldashboard::at_a_glance.education_level'),
            'attributes' => [
                'name'    => 'action_education_level_text',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_department_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'text',
            'label'      => __('kamruldashboard::at_a_glance.department'),
            'attributes' => [
                'name'    => 'action_department_text',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_clubs_of_dic_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'textarea',
            'label'      => __('kamruldashboard::at_a_glance.clubs_of_dic'),
            'attributes' => [
                'name'    => 'action_clubs_of_dic_text',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'action_others_facilities_text',
            'section_id' => 'opt-text-at-a-glance-action',
            'type'       => 'textarea',
            'label'      => __('kamruldashboard::at_a_glance.others_facilities'),
            'attributes' => [
                'name'    => 'action_others_facilities_text',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'data-counter' => 255,
                ],
            ],
        ]);
//        ->setField([
//            'id'         => 'action_subsection_text',
//            'section_id' => 'opt-text-subsection-banner-action',
//            'type'       => 'text',
//            'label'      => __('Subjects'),
//            'attributes' => [
//                'name'    => 'action_subjects_text',
//                'value'   => '40+',
//                'options' => [
//                    'class' => 'form-control',
//                ],
//            ],
//        ]);
});

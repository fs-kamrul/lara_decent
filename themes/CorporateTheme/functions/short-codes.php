<?php

//use Theme;
use Illuminate\Support\Arr;
use Modules\KamrulDashboard\Packages\Supports\DboardStatus;
use Modules\Post\Repositories\Interfaces\CategoryInterface;
use Modules\Post\Repositories\Interfaces\PosttypeInterface;
use Modules\Post\Repositories\Interfaces\PostInterface;
use Modules\Theme\Packages\Supports\ThemeSupport;
use Modules\Faq\Repositories\Interfaces\FaqInterface;
use Modules\Faq\Repositories\Interfaces\FaqCategoryInterface;
use Modules\Ecommerce\Repositories\Interfaces\EcommerceProductCategoryInterface;
use Modules\Ecommerce\Repositories\Interfaces\EcommerceProductCollectionInterface;
use Modules\Mentor\Repositories\Interfaces\MentorInterface;
use Modules\AdminBoard\Repositories\Interfaces\AdminTestimonialInterface;
use Modules\AdminBoard\Repositories\Interfaces\AdminPartnerInterface;
use Modules\AdminBoard\Repositories\Interfaces\AdminNoticeBoardInterface;
use Modules\AdminBoard\Repositories\Interfaces\AdminEventInterface;
use Modules\AdminBoard\Repositories\Interfaces\AdminNewsInterface;
use Modules\AdminBoard\Repositories\Interfaces\AdminWorkshopInterface;
use Modules\AdminBoard\Repositories\Interfaces\AdminCategoryInterface;
use Modules\AdminBoard\Enums\AdminCategoryStatusEnum;
//use Theme;

app()->booted(function () {


//    ThemeSupport::registerGoogleMapsShortcode(Theme::getThemeNamespace().'::partials.short-codes');
//    ThemeSupport::registerYoutubeShortcode(Theme::getThemeNamespace().'::partials.short-codes');

//    if (is_module_active('Newsletter')) {
//        add_shortcode('newsletter-form', __('Newsletter Form'), __('Newsletter Form'), function ($shortcode) {
//            return Theme::partial('short-codes.newsletter-form', [
//                'title' => $shortcode->title,
//                'description' => $shortcode->description,
//            ]);
//        });
//
//        shortcode()->setAdminConfig('newsletter-form', function ($attributes) {
//            return Theme::partial('short-codes.newsletter-form-admin-config', compact('attributes'));
//        });
//    }
    if (is_module_active('SimpleSlider')) {
        add_filter(SIMPLE_SLIDER_VIEW_TEMPLATE, function () {
            return Theme::getThemeNamespace() . '::partials.short-codes.sliders.main';
        }, 120);
    }

//    add_shortcode('our-offices', __('Our offices'), __('Our offices'), function () {
//        return Theme::partial('short-codes.our-offices');
//    });
//
//    shortcode()->setAdminConfig('our-offices', function ($attributes) {
//        return Theme::partial('short-codes.our-offices-admin-config', compact('attributes'));
//    });
    add_shortcode('contact-info', __('Contact Info'), __('Contact Info'), function () {
        return Theme::partial('short-codes.contact-info');
    });

    shortcode()->setAdminConfig('contact-info', function ($attributes) {
        return Theme::partial('short-codes.contact-info-admin-config', compact('attributes'));
    });
    add_shortcode('facts-data', __('Facts Data'), __('Facts Data'), function () {
        return Theme::partial('short-codes.facts-data');
    });

    shortcode()->setAdminConfig('facts-data', function ($attributes) {
        return Theme::partial('short-codes.facts-data-admin-config', compact('attributes'));
    });
    add_shortcode('at-a-glance', __('kamruldashboard::at_a_glance.name'), __('kamruldashboard::at_a_glance.name'), function () {
        return Theme::partial('short-codes.at-a-glance');
    });

    shortcode()->setAdminConfig('at-a-glance', function ($attributes) {
        return Theme::partial('short-codes.at-a-glance-admin-config', compact('attributes'));
    });
    add_shortcode('mission-vision', __('post::lang.mission_vision'), __('post::lang.mission_vision'), function () {
        return Theme::partial('short-codes.mission-vision');
    });

    shortcode()->setAdminConfig('mission-vision', function ($attributes) {
        return Theme::partial('short-codes.mission-vision-admin-config', compact('attributes'));
    });
//    add_shortcode('choose-us', __('Our Choose Us'), __('Add Choose Us'),
//        function ($shortcode) {
//            Theme::asset()->container('footer')->usePath()->add('video-js', 'js/video.js');
////            Assets::addScripts(['raphael', 'morris']);
////            Assets::addScriptsDirectly([
////                'vendor/Modules/ContactForm/js/contfgfact.js',
////            ]);
//            $attributes = $shortcode->toArray();
//
//            $url = Youtube::getYoutubeVideoEmbedURL($shortcode->content);
////            $url = $shortcode->content;
//            $faqs = app(FaqCategoryInterface::class)->advancedGet([
//                'condition' => ['id' => Arr::get($attributes, 'category_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'faqs' => function ($query) use ($attributes) {
//                            return $query
////                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//            ]);
//            return Theme::partial('short-codes.choose-us', ['shortcode' => $shortcode,'faqs' => $faqs->faqs, 'url' => $url]);
//        });
//
//    shortcode()->setAdminConfig('choose-us', function ($attributes, $content) {
//        $categories = app(FaqCategoryInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//        return Theme::partial('short-codes.choose-us-admin-config', compact('attributes','categories', 'content'));
//    });
//    add_shortcode('choose-us-page', __('Our Choose Us Page'), __('Add Choose Us Page'),
//        function ($shortcode) {
//            $attributes = $shortcode->toArray();
//            $url = Youtube::getYoutubeVideoEmbedURL($shortcode->content);
//            $faqs = app(FaqCategoryInterface::class)->advancedGet([
//                'condition' => ['id' => Arr::get($attributes, 'category_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'faqs' => function ($query) use ($attributes) {
//                            return $query
////                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED);
////                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//            ]);
//            return Theme::partial('short-codes.choose-us-page', ['shortcode' => $shortcode,'faqs' => $faqs->faqs, 'url' => $url]);
//        });
//
//    shortcode()->setAdminConfig('choose-us-page', function ($attributes, $content) {
//        $categories = app(FaqCategoryInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//        return Theme::partial('short-codes.choose-us-page-admin-config', compact('attributes','categories', 'content'));
//    });
    if (is_module_active('ContactForm')) {
        add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
            return Theme::getThemeNamespace() . '::partials.short-codes.contact-form';
        }, 120);
    }
    if (is_module_active('Admission')) {
        add_filter(ADMISSION_FORM_TEMPLATE_VIEW, function () {
            return Theme::getThemeNamespace() . '::partials.short-codes.admission-form';
        }, 121);
    }
    if (is_module_active('AdminBoard')) {

        add_shortcode('our-services', __('Our Services'), __('Add Our Services'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $adminBoardRepository = app(\Modules\AdminBoard\Repositories\Interfaces\AdminServiceInterface::class);
                $services = $adminBoardRepository->advancedGet(array_merge([
                    'take' => Arr::get($attributes, 'number_of_slide'),
                    'order_by' => ['created_at' => 'desc'],
                ]));
//                dd($facilities);
//                $facilities = AdminBoardHelper::getFacilityFilter((int) Arr::get($attributes, 'number_of_slide'), []);
                return Theme::partial('short-codes.our-services', ['shortcode' => $shortcode,'services' => $services]);
            });
        shortcode()->setAdminConfig('our-services', function ($attributes) {
            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.our-services-admin-config', compact('attributes','post_types'));
        });

//        add_shortcode('our-facility', __('Our Facilities'), __('Add Our Facilities'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $adminBoardRepository = app(\Modules\AdminBoard\Repositories\Interfaces\AdminFacilityInterface::class);
//                $facilities = $adminBoardRepository->advancedGet(array_merge([
//                    'take' => Arr::get($attributes, 'number_of_slide'),
//                    'order_by' => ['created_at' => 'desc'],
//                ]));
////                dd($facilities);
////                $facilities = AdminBoardHelper::getFacilityFilter((int) Arr::get($attributes, 'number_of_slide'), []);
//                return Theme::partial('short-codes.our-facility', ['shortcode' => $shortcode,'facilities' => $facilities]);
//            });
//        shortcode()->setAdminConfig('our-facility', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.our-facility-admin-config', compact('attributes','post_types'));
//        });
        add_shortcode('academic-group', __('Academic Group'), __('Academic Group'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $adminBoardRepository = app(\Modules\AdminBoard\Repositories\Interfaces\AdminAcademicGroupInterface::class);
                $academic_groups = $adminBoardRepository->advancedGet(array_merge([
                    'take' => Arr::get($attributes, 'number_of_slide'),
                    'order_by' => ['created_at' => 'desc'],
                ]));
//                dd($facilities);
//                $facilities = AdminBoardHelper::getFacilityFilter((int) Arr::get($attributes, 'number_of_slide'), []);
                return Theme::partial('short-codes.academic-group', ['shortcode' => $shortcode,'academic_groups' => $academic_groups]);
            });
        shortcode()->setAdminConfig('academic-group', function ($attributes) {
            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.academic-group-admin-config', compact('attributes','post_types'));
        });
        add_shortcode('latest-news-blog', __('Latest News Blog'), __('Add Latest News Blog'),
            function ($shortcode) {
//                $attributes = $shortcode->toArray();
                $notice_boards = app(AdminNoticeBoardInterface::class)->advancedGet(['take' => 5, 'order_by' => ['created_at' => 'desc'],]);
                $events = app(AdminEventInterface::class)->advancedGet(['take' => 2, 'order_by' => ['created_at' => 'desc'],]);
                $news = app(AdminNewsInterface::class)->advancedGet(['take' => 2, 'order_by' => ['created_at' => 'desc'],]);
//                $workshops = app(AdminWorkshopInterface::class)->advancedGet(['take' => 2, 'order_by' => ['created_at' => 'desc'],]);
                return Theme::partial('short-codes.latest-news-blog', [
                    'shortcode' => $shortcode,
                    'notice_boards' => $notice_boards,
                    'events' => $events,
                    'news' => $news,
//                    'workshops' => $workshops,
                ]);
            });
        shortcode()->setAdminConfig('latest-news-blog', function ($attributes) {
            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.latest-news-blog-admin-config', compact('attributes','post_types'));
        });
        add_shortcode('testimonial', __('Testimonial'), __('Add Testimonial'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $testimonials = app(AdminTestimonialInterface::class)->advancedGet([
                    'take'      => Arr::get($attributes, 'number_of_slide'),
                    'order_by' => ['created_at' => 'desc'],
                ]);
//                dd($testimonials);
                return Theme::partial('short-codes.testimonial', ['shortcode' => $shortcode,'testimonials' => $testimonials]);
            });
        shortcode()->setAdminConfig('testimonial', function ($attributes) {
            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.testimonial-admin-config', compact('attributes','post_types'));
        });
        add_shortcode('our-partners', __('Our Partners'), __('Add Our Partners'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $partners = app(AdminPartnerInterface::class)->advancedGet([
                    'take'      => Arr::get($attributes, 'number_of_slide'),
                    'order_by' => ['created_at' => 'desc'],
                ]);
                return Theme::partial('short-codes.our-partners', ['shortcode' => $shortcode,'partners' => $partners]);
            });
        shortcode()->setAdminConfig('our-partners', function ($attributes) {
            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.our-partners-admin-config', compact('attributes','post_types'));
        });
        add_shortcode('faculty', __('Faculty'), __('Add Faculty'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $teams = AdminBoardHelper::getCategoryFilter((int) Arr::get($attributes, 'number_of_slide'), Arr::get($attributes, 'category_id'));
//                dd($attributes);
//                $partners = app(AdminPartnerInterface::class)->advancedGet([
//                    'take'      => Arr::get($attributes, 'number_of_slide'),
//                    'order_by' => ['created_at' => 'desc'],
//                ]);
//                return Theme::scope('admin_board.teams', compact('teams'), 'pag')->render();
                return Theme::partial('short-codes.faculty', ['shortcode' => $shortcode,'teams' => $teams]);
            });
        shortcode()->setAdminConfig('faculty', function ($attributes) {
            $category = app(AdminCategoryInterface::class)->allBy(['status' => AdminCategoryStatusEnum::PUBLISHED, 'adminboard' => 'team']);
            return Theme::partial('short-codes.faculty-admin-config', compact('attributes','category'));
        });
    }
    add_shortcode('latest-jobs', __('Latest Jobs'), __('Add Latest Jobs'),
        function ($shortcode) {
            $attributes = $shortcode->toArray();
            $api_data = Arr::get($attributes, 'api_data');
//                dd($api_data);
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $api_data,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'my_secret: test'
                ),
            ));
            $response = curl_exec($curl);
            if ($response === false) {
                echo 'Curl error: ' . curl_error($curl);
            }
            curl_close($curl);
            $get_data = json_decode($response);
            return Theme::partial('short-codes.latest-jobs', ['shortcode' => $shortcode,'post' => $get_data]);
        });
    shortcode()->setAdminConfig('latest-jobs', function ($attributes) {
        $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
        return Theme::partial('short-codes.latest-jobs-admin-config', compact('attributes','post_types'));
    });
    if (is_module_active('Post')) {

        add_shortcode('blog-post', __('Blog Post'), __('Add Blog Post'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $post_types = app(PosttypeInterface::class)->advancedGet([
                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
                    'take'      => 1,
                    'with'      => [
                        'post' => function ($query) use ($attributes) {
                            return $query
                                ->latest()
                                ->where('status', DboardStatus::PUBLISHED)
                                ->limit(Arr::get($attributes, 'number_of_slide'));
                        },
                    ],
                ]);
                $posts = $post_types->post()->orderBy('id', 'DESC')->Paginate((int)Arr::get($attributes, 'number_of_slide'))->where('status', DboardStatus::PUBLISHED);

                return Theme::partial('short-codes.blog-post', ['shortcode' => $shortcode,'posts' => $posts]);
            });
        shortcode()->setAdminConfig('blog-post', function ($attributes) {
            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.blog-post-admin-config', compact('attributes','post_types'));
        });
        add_shortcode('set-image', __('Set Image'), __('Add Set Image'),
            function ($shortcode) {
                return Theme::partial('short-codes.set-image', ['shortcode' => $shortcode]);
            });
        shortcode()->setAdminConfig('set-image', function ($attributes) {
            return Theme::partial('short-codes.set-image-admin-config', compact('attributes'));
        });

//        add_shortcode('upcoming-event', __('Upcoming Event'), __('Add Upcoming Event'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                $post_last_one = app(PostInterface::class)->advancedGet([
//                    'condition' => ['post_types_id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'order_by'  => ['id'=> 'desc'],
////                    'with'      => [
////                        'post' => function ($query) use ($attributes) {
////                            return $query
////                                ->latest()
////                                ->where('status', DboardStatus::PUBLISHED)
////                                ->first();
////                        },
////                    ],
//                ]);
////                dd($post_last_one);
////                $posts = $post_types->post()->orderBy('id', 'DESC')->Paginate((int)Arr::get($attributes, 'number_of_slide'));
//                return Theme::partial('short-codes.upcoming-event', ['shortcode' => $shortcode,'post_types' => $post_types,'post_last_one' => $post_last_one]);
//            });
//        shortcode()->setAdminConfig('upcoming-event', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.upcoming-event-admin-config', compact('attributes','post_types'));
//        });

        add_shortcode('programs-section', __('Programs section'), __('Add Programs section'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $post_types = app(PosttypeInterface::class)->advancedGet([
                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
                    'take'      => 1,
                    'with'      => [
                        'post' => function ($query) use ($attributes) {
                            return $query
                                ->latest()
                                ->where('status', DboardStatus::PUBLISHED)
                                ->limit(Arr::get($attributes, 'number_of_slide'));
                        },
                    ],
                ]);
                $posts = $post_types->post()->orderBy('id', 'DESC')->Paginate((int)Arr::get($attributes, 'number_of_slide'))->where('status', DboardStatus::PUBLISHED);
                return Theme::partial('short-codes.programs-section', ['shortcode' => $shortcode,'posts' => $posts]);
            });
        shortcode()->setAdminConfig('programs-section', function ($attributes) {
            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.programs-section-admin-config', compact('attributes','post_types'));
        });
//        add_shortcode('need-help', __('Need Help'), __('Add Need Help'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.need-help', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//        shortcode()->setAdminConfig('need-help', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.need-help-admin-config', compact('attributes','post_types'));
//        });

//        add_shortcode('notice-board', __('Notice Board'), __('Add Notice Board'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.notice-board', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//        shortcode()->setAdminConfig('notice-board', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.notice-board-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('all-notice-board', __('All Notice Board'), __('Add All Notice Board'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
////                return Theme::partial('short-codes.all-notice-board', ['shortcode' => $shortcode,'post_types' => $post_types]);
//                $posts = $post_types->post()->orderBy('id', 'DESC')->Paginate((int)Arr::get($attributes, 'number_of_slide'));
//                return Theme::partial('short-codes.all-notice-board', ['shortcode' => $shortcode,'posts' => $posts]);
//            });
//        shortcode()->setAdminConfig('all-notice-board', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.all-notice-board-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('homepage-box', __('Homepage Box'), __('Add Homepage Box'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $categories = app(CategoryInterface::class)->advancedGet([
//                    'condition' => ['status' => DboardStatus::PUBLISHED],
//                    'order_by'  => ['order' => 'asc'],
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.homepage-box', ['shortcode' => $shortcode,'categories' => $categories]);
//            });
//        shortcode()->setAdminConfig('homepage-box', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.homepage-box-admin-config', compact('attributes','post_types'));
//        });

        if (is_module_active('VenueFacility')) {
            add_shortcode('our-venues', __('Our Venues'), __('Add Our Venues'),
                function ($shortcode) {
                    $attributes = $shortcode->toArray();
                    $post_types = app(PosttypeInterface::class)->advancedGet([
                        'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
                        'take' => 1,
                        'with' => [
                            'post' => function ($query) use ($attributes) {
                                return $query
                                    ->latest()
                                    ->where('status', DboardStatus::PUBLISHED)
                                    ->limit(Arr::get($attributes, 'number_of_slide'));
                            },
                        ],
                    ]);
                    return Theme::partial('short-codes.our-venues', ['shortcode' => $shortcode, 'post_types' => $post_types]);
                });
            shortcode()->setAdminConfig('our-venues', function ($attributes) {
                $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
                return Theme::partial('short-codes.our-venues-admin-config', compact('attributes', 'post_types'));
            });

            add_shortcode('all-venues', __('All Venues'), __('Add All Venues'),
                function ($shortcode) {
                    $attributes = $shortcode->toArray();
                    $categories = app(CategoryInterface::class)->advancedGet([
                        'condition' => ['status' => DboardStatus::PUBLISHED],
                        'with'      => [
                            'post' => function ($query) use ($attributes) {
                                return $query
                                    ->latest()
                                    ->where('status', DboardStatus::PUBLISHED);
                            },
                        ],
                    ]);
                    return Theme::partial('short-codes.all-venues', ['shortcode' => $shortcode,'categories' => $categories]);
                });
            shortcode()->setAdminConfig('all-venues', function ($attributes) {
                $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
                return Theme::partial('short-codes.all-venues-admin-config', compact('attributes','post_types'));
            });
        }
//        add_shortcode('single-banner-sections', __('Single Banner Sections'), __('Add Single Banner Sections'),
//            function ($shortcode) {
//                return Theme::partial('short-codes.single-banner-sections', ['shortcode' => $shortcode]);
//            });
//
//        shortcode()->setAdminConfig('single-banner-sections', function ($attributes) {
//            return Theme::partial('short-codes.single-banner-sections-admin-config', compact('attributes'));
//        });
//        add_shortcode('about-us', __('About Us'), __('Add About Us'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.about-us', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//        shortcode()->setAdminConfig('about-us', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.about-us-admin-config', compact('attributes','post_types'));
//        });
        add_shortcode('single-section-page', __('Single Section Page'), __('Add Single Section Page'), function ($shortcode) {
            return Theme::partial('short-codes.single-section-page', ['shortcode' => $shortcode]);
        });

        shortcode()->setAdminConfig('single-section-page', function ($attributes) {
            return Theme::partial('short-codes.single-section-page-admin-config', compact('attributes'));
        });

//        add_shortcode('dsc-different', __('DSC Different'), __('Add DSC Different'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.dsc-different', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//        shortcode()->setAdminConfig('dsc-different', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.dsc-different-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('news-event', __('News And Event'), __('Add News And Event'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                $posts = $post_types->post()->orderBy('id', 'DESC')->Paginate((int)Arr::get($attributes, 'number_of_slide'));
//                return Theme::partial('short-codes.news-event', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//        shortcode()->setAdminConfig('news-event', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.news-event-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('all-news-event', __('All News And Event'), __('Add All News And Event'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->Paginate(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                $posts = $post_types->post()->orderBy('id', 'DESC')->Paginate((int)Arr::get($attributes, 'number_of_slide'));
//                return Theme::partial('short-codes.all-news-event', ['shortcode' => $shortcode,'posts' => $posts]);
//            });
//        shortcode()->setAdminConfig('all-news-event', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.all-news-event-admin-config', compact('attributes','post_types'));
//        });

        add_shortcode('note-box', __('Note Box'), __('Add Note Box'),
            function ($shortcode) {
                return Theme::partial('short-codes.note-box', ['shortcode' => $shortcode]);
            });

        shortcode()->setAdminConfig('note-box', function ($attributes) {
            return Theme::partial('short-codes.note-box-admin-config', compact('attributes'));
        });

//        add_shortcode('photo-gallery', __('Photo Gallery'), __('Add Photo Gallery'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.photo-gallery', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//        shortcode()->setAdminConfig('photo-gallery', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.photo-gallery-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('banner-sections', __('Banner Sections'), __('Add Banner Sections'),
//            function ($shortcode) {
//                return Theme::partial('short-codes.banner-sections', ['shortcode' => $shortcode]);
//            });
//
//        shortcode()->setAdminConfig('banner-sections', function ($attributes) {
//            return Theme::partial('short-codes.banner-sections-admin-config', compact('attributes'));
//        });

//        add_shortcode('upcoming-news', __('Upcoming News'), __('Add Upcoming News'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $category = app(PostInterface::class)->advancedGet([
//                    'condition' => [
//                        'post_types_id' => Arr::get($attributes, 'post_types_id'),
//                        'status' => DboardStatus::PUBLISHED,
//                    ],
//                    'order_by' => [
//                        'created_at' => 'DESC',
//                    ],
//                    'take'      => 1,
//                ]);
//                return Theme::partial('short-codes.upcoming-news', ['shortcode' => $shortcode,'post' => $category]);
//            });
//
//        shortcode()->setAdminConfig('upcoming-news', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.upcoming-news-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('our-team', __('Our Team'), __('Add Our Team'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.our-team', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//        shortcode()->setAdminConfig('our-team', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.our-team-admin-config', compact('attributes','post_types'));
//        });
//
//        add_shortcode('testimonial-all', __('Testimonial All'), __('Add Testimonial All'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.testimonial-all', ['shortcode' => $shortcode,'posts' => $post_types->post()->paginate((int)Arr::get($attributes, 'number_of_slide'))]);
//            });
//
//        shortcode()->setAdminConfig('testimonial-all', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.testimonial-all-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('partners', __('Partners'), __('Add Partners'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $post_types = app(PosttypeInterface::class)->advancedGet([
//                    'condition' => ['post_types.id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 1,
//                    'with'      => [
//                        'post' => function ($query) use ($attributes) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED)
//                                ->limit(Arr::get($attributes, 'number_of_slide'));
//                        },
//                    ],
//                ]);
//                return Theme::partial('short-codes.partners', ['shortcode' => $shortcode,'post_types' => $post_types]);
//            });
//
//        shortcode()->setAdminConfig('partners', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.partners-admin-config', compact('attributes','post_types'));
//        });
//        add_shortcode('resources-news', __('Resources News'), __('Add Resources News'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $category = app(PostInterface::class)->advancedGet([
//                    'condition' => ['post_types_id' => Arr::get($attributes, 'post_types_id')],
//                    'take'      => 3,
//                ]);
//                return Theme::partial('short-codes.resources-news', ['shortcode' => $shortcode,'posts' => $category]);
//        });
//        shortcode()->setAdminConfig('resources-news', function ($attributes) {
//            $post_types = app(PosttypeInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
//            return Theme::partial('short-codes.resources-news-admin-config', compact('attributes','post_types'));
//        });

        add_shortcode('faq-option', __('Our FAQ Option'), __('Add FAQ Option'),
            function ($shortcode) {
                $attributes = $shortcode->toArray();
                $faqs = app(FaqInterface::class)->advancedGet([
                    'condition' => ['category_id' => Arr::get($attributes, 'category_id')],
//                    'order_by' => [
//                        'created_at' => 'DESC',
//                    ],
//                    'take'      => 1,
//                    'with'      => [
//                        'faqs' => function ($query) {
//                            return $query
//                                ->latest()
//                                ->where('status', DboardStatus::PUBLISHED);
//                        },
//                    ],
                ]);
                return Theme::partial('short-codes.faq-option', ['title' => $shortcode->title,'image' => $shortcode->image,'faqs' => $faqs]);
            });

        shortcode()->setAdminConfig('faq-option', function ($attributes) {
            $categories = app(FaqCategoryInterface::class)->allBy(['status' => Dboardstatus::PUBLISHED]);
            return Theme::partial('short-codes.faq-option-admin-config', compact('attributes','categories'));
        });
//        add_shortcode('contact-us', __('Contact Us'), __('Add Contact Us'),
//            function ($shortcode) {
//                $attributes = $shortcode->toArray();
//                $contact = app(MentorInterface::class)->advancedGet([
//                    'condition' => ['status' => DboardStatus::PUBLISHED],
////                    'take'      => 1,
////                    'paginate'  => [
////                        'per_page'      => Arr::get($attributes, 'number_of_course'),
////                        'current_paged' => 1,
////                    ],
//                    'with'      => ['slugable'],
//                ]);
//                return Theme::partial('short-codes.contact-us', ['title' => $shortcode->title,'image' => $shortcode->image,'contact' => $contact]);
//            });
//        shortcode()->setAdminConfig('contact-us', function ($attributes) {
//            return Theme::partial('short-codes.contact-us-admin-config', compact('attributes'));
//        });
    }
});

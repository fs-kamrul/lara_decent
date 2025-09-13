<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- Phone & Email -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 text-center">
                    <div class="card-body">
                        <div class="mb-3 fs-1 text-primary">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h5 class="card-title mb-2">{{ theme_option('site_phone') }}</h5>
                        <p class="card-text text-muted">{{ theme_option('site_email') }}</p>
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 text-center">
                    <div class="card-body">
                        <div class="mb-3 fs-1 text-success">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h5 class="card-title mb-0">{{ theme_option('address') }}</h5>
                    </div>
                </div>
            </div>

            <!-- Working Hours -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 text-center">
                    <div class="card-body">
                        <div class="mb-3 fs-1 text-warning">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h5 class="card-title mb-2">{{ theme_option('working_hours') }}</h5>
                        <p class="card-text text-muted">{{ theme_option('off_day') }} @lang('Closed')</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

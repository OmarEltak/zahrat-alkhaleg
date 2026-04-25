<?php get_header(); ?>

<main id="main-content" tabindex="-1">

    <?php while (have_posts()) : the_post(); ?>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php if (has_excerpt()) : ?>
                <p><?php the_excerpt(); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Page Content -->
    <div class="page-content-wrap">
        <div class="container">
            <div class="page-content-inner">

                <div class="main-content">
                    <?php the_content(); ?>
                </div>

                <!-- Sidebar -->
                <aside class="sidebar" aria-label="الشريط الجانبي">
                    <!-- Call Widget -->
                    <div class="widget sidebar-call-widget">
                        <h3>اتصل بنا الآن</h3>
                        <p>خدمة فورية على مدار الأسبوع في جميع أنحاء الرياض</p>
                        <a href="tel:0558436313" class="btn btn-primary" style="width:100%; justify-content:center;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
                            </svg>
                            0558436313
                        </a>
                    </div>

                    <!-- Services Widget -->
                    <div class="widget">
                        <h3 class="widget-title">خدماتنا</h3>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/services')); ?>">فك وتركيب سبليت</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services')); ?>">غسيل المكيفات</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services')); ?>">تعبئة فريون</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services')); ?>">صيانة مركزي</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services')); ?>">تمديد نحاس</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services')); ?>">تركيب كاست</a></li>
                        </ul>
                    </div>

                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php endif; ?>
                </aside>

            </div>
        </div>
    </div>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>

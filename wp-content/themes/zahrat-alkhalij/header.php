<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip Link (Accessibility) -->
<a class="skip-link" href="#main-content">تخطي إلى المحتوى الرئيسي</a>

<!-- ========================= HEADER ========================= -->
<header class="site-header" role="banner" id="site-header">
    <div class="container">
        <div class="header-inner">

            <!-- Logo -->
            <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> - الصفحة الرئيسية">
                <div class="logo-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 8C8 10 5.9 16.17 3.82 19.82C3.3 20.7 2 20.32 2 19.32V5a1 1 0 011-1h6.17a1 1 0 01.71.29l1.12 1.12A1 1 0 0012 5.7V3a1 1 0 011-1h5a1 1 0 011 1v6a1 1 0 01-1 1h-1zm-5 0v2.5l-2 2V9c0-3.31 2.69-6 6-6v2c-2.21 0-4 1.79-4 4z"/>
                    </svg>
                </div>
                <div>
                    <span class="logo-text-main">زهرة الخليج</span>
                    <span class="logo-text-sub">لصيانة المكيفات - الرياض</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="primary-nav" role="navigation" aria-label="القائمة الرئيسية">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'menu',
                    'depth'          => 1,
                    'fallback_cb'    => function() {
                        $links = [
                            '/'         => 'الرئيسية',
                            '/services' => 'خدماتنا',
                            '/about'    => 'من نحن',
                            '/blog'     => 'المدونة',
                            '/contact'  => 'اتصل بنا',
                        ];
                        echo '<ul class="menu" role="list">';
                        foreach ($links as $path => $label) {
                            $url    = esc_url(home_url($path));
                            $active = (untrailingslashit($_SERVER['REQUEST_URI']) === $path) ? ' aria-current="page"' : '';
                            echo '<li class="menu-item"><a href="' . $url . '"' . $active . '>' . esc_html($label) . '</a></li>';
                        }
                        echo '</ul>';
                    },
                ]);
                ?>
            </nav>

            <div class="header-cta">
                <!-- Phone (shown on tablet+) -->
                <a class="header-phone" href="tel:0558436313" aria-label="اتصل بنا على 0558436313">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
                    </svg>
                    <span>0558436313</span>
                </a>

                <!-- Hamburger (mobile) -->
                <button class="nav-toggle" aria-controls="mobile-nav" aria-expanded="false" aria-label="فتح القائمة">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

        </div><!-- .header-inner -->
    </div><!-- .container -->

    <!-- Mobile Navigation -->
    <nav class="mobile-nav" id="mobile-nav" role="navigation" aria-label="القائمة المحمولة">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu',
            'depth'          => 1,
            'fallback_cb'    => function() {
                $links = [
                    '/'         => 'الرئيسية',
                    '/services' => 'خدماتنا',
                    '/about'    => 'من نحن',
                    '/blog'     => 'المدونة',
                    '/contact'  => 'اتصل بنا',
                ];
                echo '<ul class="menu" role="list">';
                foreach ($links as $path => $label) {
                    $url = esc_url(home_url($path));
                    echo '<li class="menu-item"><a href="' . $url . '">' . esc_html($label) . '</a></li>';
                }
                echo '</ul>';
            },
        ]);
        ?>
        <a href="tel:0558436313" class="mobile-call-btn" aria-label="اتصل بنا على 0558436313">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.47 11.47 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z"/>
            </svg>
            اتصل الآن: 0558436313
        </a>
    </nav>

</header>
<!-- /HEADER -->

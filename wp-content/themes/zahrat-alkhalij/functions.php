<?php
defined('ABSPATH') || exit;

/* ---------------------------------------------------------------
   Theme Setup
---------------------------------------------------------------- */
function zak_setup() {
    load_theme_textdomain('zahrat-alkhalij', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('custom-logo');
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => __('القائمة الرئيسية', 'zahrat-alkhalij'),
        'footer'  => __('قائمة الفوتر', 'zahrat-alkhalij'),
    ]);
}
add_action('after_setup_theme', 'zak_setup');

/* ---------------------------------------------------------------
   Enqueue Assets
---------------------------------------------------------------- */
function zak_enqueue() {
    // Google Fonts - Cairo (Arabic optimised)
    wp_enqueue_style(
        'google-fonts-cairo',
        'https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'zahrat-alkhalij-style',
        get_template_directory_uri() . '/assets/css/main.css',
        ['google-fonts-cairo'],
        '1.0.0'
    );

    // Theme JS
    wp_enqueue_script(
        'zahrat-alkhalij-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'zak_enqueue');

/* ---------------------------------------------------------------
   LocalBusiness Schema JSON-LD
---------------------------------------------------------------- */
function zak_local_business_schema() {
    if (!is_front_page()) return;
    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'LocalBusiness',
        'name'            => 'زهرة الخليج لصيانة المكيفات',
        'description'     => 'شركة متخصصة في فك وتركيب وغسيل وصيانة جميع أنواع المكيفات في الرياض',
        'telephone'       => '+966558436313',
        'url'             => home_url('/'),
        'image'           => get_template_directory_uri() . '/assets/img/og-image.jpg',
        'priceRange'      => '$$',
        'currenciesAccepted' => 'SAR',
        'paymentAccepted' => 'Cash, Credit Card',
        'areaServed'      => [
            ['@type' => 'City', 'name' => 'الرياض'],
        ],
        'address'         => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'الرياض',
            'addressRegion'   => 'منطقة الرياض',
            'addressCountry'  => 'SA',
        ],
        'geo' => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => '24.7136',
            'longitude' => '46.6753',
        ],
        'openingHoursSpecification' => [
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday'],
                'opens'     => '07:00',
                'closes'    => '23:00',
            ],
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name'  => 'خدمات المكيفات',
            'itemListElement' => [
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'تركيب مكيفات سبليت']],
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'غسيل مكيفات']],
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'تعبئة فريون']],
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'صيانة مكيفات مركزي']],
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'تمديد مواسير نحاس']],
                ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'تركيب مكيفات كاست']],
            ],
        ],
        'sameAs' => [],
    ];
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'zak_local_business_schema');

/* ---------------------------------------------------------------
   SEO Meta Tags (fallback – use Yoast/RankMath if installed)
---------------------------------------------------------------- */
function zak_meta_tags() {
    if (is_front_page()) {
        echo '<meta name="description" content="زهرة الخليج لصيانة المكيفات بالرياض | فك وتركيب وغسيل جميع أنواع المكيفات سبليت ومركزي وكاست | تعبئة فريون | اتصل: 0558436313">' . "\n";
        echo '<meta name="keywords" content="صيانة مكيفات الرياض, غسيل مكيفات سبليت, تعبئة فريون, تركيب مكيفات, صيانة مكيفات مركزي, زهرة الخليج">' . "\n";
    }
    echo '<meta name="robots" content="index, follow">' . "\n";
    echo '<meta property="og:site_name" content="زهرة الخليج">' . "\n";
    echo '<meta property="og:locale" content="ar_SA">' . "\n";
}
add_action('wp_head', 'zak_meta_tags', 1);

/* ---------------------------------------------------------------
   Custom Excerpt Length
---------------------------------------------------------------- */
function zak_excerpt_length($length) { return 25; }
add_filter('excerpt_length', 'zak_excerpt_length');

function zak_excerpt_more($more) { return '...'; }
add_filter('excerpt_more', 'zak_excerpt_more');

/* ---------------------------------------------------------------
   Widget Areas
---------------------------------------------------------------- */
function zak_widgets_init() {
    register_sidebar([
        'name'          => 'الشريط الجانبي',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'فوتر - العمود 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'zak_widgets_init');

/* ---------------------------------------------------------------
   Disable Emoji (Performance)
---------------------------------------------------------------- */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* ---------------------------------------------------------------
   Security: Remove WP Version
---------------------------------------------------------------- */
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

/* ---------------------------------------------------------------
   Add RTL body class
---------------------------------------------------------------- */
function zak_body_classes($classes) {
    $classes[] = 'rtl-site';
    return $classes;
}
add_filter('body_class', 'zak_body_classes');

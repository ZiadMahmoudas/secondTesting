
    <?php
// Enqueue theme styles and scripts
function my_theme_styles() {
    wp_enqueue_style('font-awesome', 'https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css', array(), '6.7.2', 'all');
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/style.css', array('font-awesome'), time(), 'all'); // استخدم time() لمنع الـ caching
}

function my_theme_scripts() {
    wp_register_script('my-theme-script', get_template_directory_uri() . '/script.js', array(), time(), true); // استخدم time() لتحديث النسخة
    wp_enqueue_script('jquery');
    wp_enqueue_script('my-theme-script');
}
add_action('wp_enqueue_scripts', 'my_theme_styles');
add_action('wp_enqueue_scripts', 'my_theme_scripts');


// Register custom menus
function register_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'text_domain'),
            'Footer-menu' => __('Company Menu', 'text_domain'),
        )
    );
}
add_action('after_setup_theme', 'register_custom_menus');


// تفعيل Custom Elementor Widgets
function register_custom_elementor_widgets() {
    // تأكد إن Elementor شغال
    if (!did_action('elementor/loaded')) {
        return;
    }
    
    // تسجيل مجلد الـ Widgets
    require_once(__DIR__ . '/elementor-widgets/hero-section-widget.php');
    require_once(__DIR__ . '/elementor-widgets/digital-presence-widget.php');
    require_once(__DIR__ . '/elementor-widgets/services-widget.php');
    require_once(__DIR__ . '/elementor-widgets/pricing-widget.php');
    
    // تسجيل الـ Widgets
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_Hero_Section_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_Digital_Presence_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_Services_Widget());
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor_Pricing_Widget());
}
add_action('elementor/widgets/widgets_registered', 'register_custom_elementor_widgets');

// إنشاء Category خاصة بيك في Elementor
function add_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'raqmiat-widgets',
        [
            'title' => __('Raqmiat Widgets', 'text-domain'),
            'icon' => 'fa fa-plug',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');
?>



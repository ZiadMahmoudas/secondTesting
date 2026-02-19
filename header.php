<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Scroll to top button -->
    <button class="scroll-to-top" id="scrollToTop" style="display: none; opacity: 0; visibility: hidden;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <header class="navbar">
        <div class="logo">
            <a href="<?php echo home_url(); ?>" class="logo-text">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.webp" alt="Logo">
            </a>
        </div>

        <!-- Toggle Menu Button (for mobile view) -->
        <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navigation Menu -->
        <nav class="primary-nav" id="nav-links-menu">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu', // تحديد الموقع (Primary Menu)
                    'container' => false, // إزالة الـ <div> التي تحيط بالقائمة
                    'menu_class' => 'nav-links', // تعيين الفئة الخاصة بالقائمة
                    'depth' => 2, // السماح بعرض القوائم الفرعية
                    'fallback_cb' => false, // عدم إظهار روابط ثابتة إذا لم يتم تخصيص القائمة
                ) );
            ?>
        </nav>

        <!-- Contact Button -->
        <a href="https://wa.me/963980461245" id="contactBtn" class="contact-btn desktop-contact-btn">تواصل معنا</a>
    </header>


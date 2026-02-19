<footer class="main-footer">
    <div class="footer-container">

        <div class="footer-col">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.webp" alt="">
                </a>
            </div>
        <div class="footer-col logo-links-col">
            <h4 class="column-title">روابط سريعه</h4>
<ul class="quick-links">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'company-menu',
            'container' => false,
            'menu_class' => 'quick-links',  
        )
    );
    ?>
</ul>

        </div>

        <div class="footer-col">
            <h4 class="column-title">كن على تواصل</h4>

            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>الرياض، السعودية، الدمام 155 شارع مكة</span>
            </div>

            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <a href="mailto:sales@raqmiat.digital">sales@raqmiat.digital</a>
            </div>

            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <span><a href="https://wa.me/966536502126">+966 12 345 6789</a></span>
            </div>

            <div class="social-links">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
     <p><?php bloginfo('name'); ?>&copy;<?php echo date('Y'); ?>جميع الحقوق محفوظة</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_footer()?>
</body>
</html>
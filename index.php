<?php
get_header();
?>

<section class="my-account-page">
  <div class="container">
    <?php
    while ( have_posts() ) :
      the_post();
      the_content(); // 👈 هذا السطر سيعرض الكود القصير
    endwhile; // End of the loop.
    ?>
  </div>
</section>

<?php get_footer(); ?>
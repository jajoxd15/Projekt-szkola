<?php
/* Template Name: Strona Glowna */
get_header();
?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

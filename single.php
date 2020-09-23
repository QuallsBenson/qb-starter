<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage qbstarter
 * @since qbstarter Theme 1.0
 */

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="sections interior single-php">
  <div class="section-wrapper">
      <?php the_content(); ?>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>

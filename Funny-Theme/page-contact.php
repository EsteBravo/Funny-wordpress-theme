<?php
/**
 * Fall back template file
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches the post type query.
 */

get_header(); // Load header.php logic in our file ?>
    <?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>
<?php get_footer(); // Load footer.php logic in our file ?>
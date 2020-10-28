<?php
/*
Template Name: Empty page
Template Post Type: page
*/
get_header();
?>
    <main>
<?php while ( have_posts() ) :
    the_post(); $post = get_post();?>
    <?php the_content();?>
<?php endwhile; ?>
    </main>
<?php
get_footer();
?>

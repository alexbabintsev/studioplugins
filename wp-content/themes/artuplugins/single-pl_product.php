<?php
get_header();
?>
<?php while ( have_posts() ) :
the_post(); $post = get_post();?>
    <main class="<?= get_field('css_class'); ?>">
        <?php the_content();?>
    </main>
<?php endwhile; ?>
<?php
get_footer();
?>

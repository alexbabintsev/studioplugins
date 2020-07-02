<?php
get_header();
?>
<?php while ( have_posts() ) :
the_post(); $post = get_post();?>
    <main class="<?= get_field('css_class'); ?>">
        <div class="section-decor section-decor-product"><img src="<?= get_theme_file_uri( '/img/home/section-decor.svg' )?>" alt="section-decor"></div>
        <?php the_content();?>
    </main>
<?php endwhile; ?>
<?php
get_footer();
?>

<?php
get_header();
?>
<main class="">
    <?php while ( have_posts() ) :
    the_post(); $post = get_post();?>
    <section class="account-section">
        <div class="container">
            <h2><?php the_title(  ); ?></h2>
            <?php the_content();?>
        </div>
    </section>
    <?php endwhile; ?>
</main>
<?php
get_footer();
?>

<?php
/*
Template Name: Policy page
Template Post Type: page
*/
get_header();
?>
<main>
    <?php while ( have_posts() ) :
    the_post(); $post = get_post();?>
    <section class="politic">
        <div class="container">
            <h1 class="politic__title"><?php the_title(  ); ?></h1>
            <div class="politic__main">
                <div class="politic__section">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
</main>
<?php
get_footer();
?>


<?php
/*
Template Name: Account page
Template Post Type: page
*/
get_header();
?>
<main class="account-page">
    <?php while ( have_posts() ) :
    the_post(); $post = get_post();?>
    <section class="account account-section">
        <div class="container">
            <div class="account-grid-2">
                <?php the_content();?>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
</main>
<?php
get_footer();
?>


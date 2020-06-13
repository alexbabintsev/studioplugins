<?php
/*
Template Name: Login page
Template Post Type: page
*/
get_header();
?>
<main class="login-page">
    <?php while ( have_posts() ) :
    the_post(); $post = get_post();?>
    <section class="login account-section">
        <div class="container">
            <div class="account-grid">
                <div class="account-grid__left">
                    <h1 class="title login__title">Log <span>in</span></h1>
                    <h2 class="subtitle login__subtitle">Manage your licences and downloads</h2>
                </div>
                <div class="account-grid__right">
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


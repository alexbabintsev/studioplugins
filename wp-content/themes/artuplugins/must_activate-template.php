<?php
/*
Template Name: Confirm email page
Template Post Type: page
*/
get_header();
?>
<main class="confirm-page">
    <?php while ( have_posts() ) :
        the_post(); $post = get_post();?>
    <section class="confirm account-section">
        <div class="container">
            <div class="account-grid">
                <div class="account-grid__left">
                    <h1 class="title confirm__title">Confirm <span>your email</span></h1>
                    <h2 class="subtitle confirm__subtitle">
                        We’ve sent the confirmation link to <?php if(isset($_GET['email'])):?><a href="mailto:<?= $_GET['email']?>"><?= $_GET['email']?></a><?php else:?>your email<?php endif;?>
                        <p>If there isn’t email in your inbox please check spam folder.</p>
                    </h2>
                </div>
                <div class="account-grid__right">
                    <div class="account-grid__illustration"><img src="<?= get_theme_file_uri( '/img/confirm/confirm.svg' )?>" alt=""></div>
                </div><a class="account-grid__back-to-main" href="<?= home_url( '/' ) ?>">Main page</a>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
</main>
<?php
get_footer();
?>


<?php
/*
Template Name: Reset password page
Template Post Type: page
*/
get_header();
?>

<?php if ( isset( $_GET['updated'] ) && 'checkemail' == $_GET['updated'] ):?>
    <main class="resetcheckmail-page">
        <section class="resetcheckmail account-section">
            <div class="container">
                <div class="account-grid">
                    <div class="account-grid__left">
                        <h1 class="title resetcheckmail__title">Check <span>your mail</span></h1>
                        <h2 class="subtitle resetcheckmail__subtitle"><?php _e( 'We have sent you a password reset link to your e-mail. Please check your inbox.', 'ultimate-member' ); ?></h2>
                    </div>
                    <div class="account-grid__right">
                        <div class="account-grid__illustration"><img src="<?= get_theme_file_uri( '/img/confirm/confirm.svg' )?>" alt=""></div>
                    </div>
                    <a class="account-grid__back-to-main" href="<?= home_url( '/' ) ?>">Main page</a>
                </div>
            </div>
        </section>
    </main>
<?php else:?>
<main class="reset-page">
    <?php while ( have_posts() ) :
        the_post(); $post = get_post();?>
    <section class="reset account-section">
        <div class="container">
            <div class="account-grid">
                <div class="account-grid__left">
                    <h1 class="title reset__title">Reset <span>password</span></h1>
                    <h2 class="subtitle reset__subtitle">Enter your email and we sent recovery link on your email</h2>
                </div>
                <div class="account-grid__right">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
</main>
<?php endif;?>
<?php
get_footer();
?>


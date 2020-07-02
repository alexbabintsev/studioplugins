<?php
/*
Template Name: Home page
Template Post Type: page
*/
get_header();
?>
<main class="main-home-page">
    <div class="section-decor"><img src="<?= get_theme_file_uri( '/img/home/section-decor.svg' )?>" alt="section-decor"></div>
    <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('main');?>
</main>

<?php
get_footer();
?>


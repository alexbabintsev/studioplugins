<?php
/*
Template Name: Home page
Template Post Type: page
*/
get_header();
?>
<main class="main-home-page">
    <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('main');?>
</main>

<?php
get_footer();
?>


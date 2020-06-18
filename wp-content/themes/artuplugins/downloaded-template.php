<?php
/*
Template Name: Downloaded page
Template Post Type: page
*/
get_header();
?>
<main class="downloaded-page">
<?php while ( have_posts() ) :
    the_post(); $post = get_post();?>
    <section class="downloaded">
        <div class="container">
            <div class="downloaded-banner">
                <div class="downloaded-banner__left">
                    <h1 class="title downloaded-banner__title"><?php the_title(  ); ?></h1>
                   <?php the_content();?>
                </div>
                <div class="downloaded-banner__right">
                <img src="<?= get_the_post_thumbnail_url();?>" alt="">
                    <?= get_field('mobile_text')?>
                </div>
            </div>
            <div class="downloaded-prods">
            <?php $i = 0;foreach (get_field('products') as $prod):?>
            <div class="downloaded-prods__item downloaded-prods__item-<?= $i%2==0?'1':'2'?>">
                    <div class="downloaded-prods__item-img"><img src="<?= get_the_post_thumbnail_url( $prod, 'full' );?>" alt=""></div>
                    <div class="downloaded-prods__item-text">
                        <p class="downloaded-prods__item-text-title"><?= get_the_title($prod);?></p>
                        <p class="downloaded-prods__item-text-p"><?= get_the_excerpt($prod);?></p>
                    </div>
                </div>
            <?php $i++; endforeach;?>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
</main>
<?php
get_footer();
?>


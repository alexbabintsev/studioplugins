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
            <!-- for WINDOWS -->
            <div class="downloaded-banner">
                <div class="downloaded-banner__left">
                    <h1 class="title downloaded-banner__title"><?php the_title(  ); ?></h1>
                   <?php the_content();?>
                </div>
                <div class="downloaded-banner__right">
                    <div class="downloaded-banner__video-wrapp">
                        <div class="help-video-btn downloaded-banner__video-btn" data-video-id='i57p-G0Xs2M' data-video='<iframe width="1280" height="548" src="https://www.youtube.com/embed/j4Q9y4gXaTQ?enablejsapi=1&amp;wmode=transparent" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>'>
                            <div class="help-c__media-txt-block" style="background-image:url(<?= get_the_post_thumbnail_url();?>)"></div>
                        </div>
                    </div>
                    <?= get_field('mobile_text')?>
                </div>
            </div>
            <!-- for WINDOWS -->
            <!-- for MAC OS -->
            <div class="downloaded-banner">
                <div class="downloaded-banner__left">
                    <h1 class="title downloaded-banner__title"><?php the_title(  ); ?></h1>
                   <?php the_content();?>
                </div>
                <div class="downloaded-banner__right">
                    <div class="downloaded-banner__video-wrapp">
                        <div class="help-video-btn downloaded-banner__video-btn" data-video-id='i57p-G0Xs2M' data-video='<iframe width="1280" height="548" src="https://www.youtube.com/embed/psL_5RIBqnY?enablejsapi=1&amp;wmode=transparent" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>'>
                            <div class="help-c__media-txt-block" style="background-image:url(<?= get_the_post_thumbnail_url();?>)"></div>
                        </div>
                    </div>
                    <?= get_field('mobile_text')?>
                </div>
            </div>
            <!-- for MAC OS -->
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


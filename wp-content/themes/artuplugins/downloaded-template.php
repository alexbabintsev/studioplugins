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
            <?php if(!isMac()):?>
            <!-- for WINDOWS -->
            <div class="downloaded-banner">
                <div class="downloaded-banner__left">
                    <h1 class="title downloaded-banner__title"><?= get_field('title_win')?></h1>
                    <?= get_field('content_win')?>
                </div>
                <div class="downloaded-banner__right">
                    <div class="downloaded-banner__video-wrapp">
<!--                        <div class="help-video-btn downloaded-banner__video-btn" data-video-id='i57p-G0Xs2M' data-video='--><?//= esc_attr(get_field('video_code_win'))?><!--'>-->
                        <a href="#" class="help-video-btn downloaded-banner__video-btn">
                            <div class="help-c__media-txt-block" style="background-image:url(<?= get_field('video_image_win')?>)"></div>
                        </a>
                    </div>
                    <?= get_field('mobile_text_win')?>
                </div>
            </div>
            <!-- for WINDOWS -->
            <?php else:?>
            <!-- for MAC OS -->
            <div class="downloaded-banner">
                <div class="downloaded-banner__left">
                    <h1 class="title downloaded-banner__title"><?= get_field('title_mac')?></h1>
                    <?= get_field('content_mac')?>
                </div>
                <div class="downloaded-banner__right">
                    <div class="downloaded-banner__video-wrapp">
                        <div class="help-video-btn downloaded-banner__video-btn" data-video-id='i57p-G0Xs2M' data-video='<?= esc_attr(get_field('video_code_mac'))?>'>
                            <div class="help-c__media-txt-block" style="background-image:url(<?= get_field('video_image_mac')?>)"></div>
                        </div>
                    </div>
                    <?= get_field('mobile_text_mac')?>
                </div>
            </div>
            <!-- for MAC OS -->
            <?php endif;?>
            <div class="downloaded-prods">
            <?php $i = 0;foreach (get_field('products') as $prod):?>
            <a href="<?= get_permalink($prod)?>" class="downloaded-prods__item downloaded-prods__item-<?= $i%2==0?'1':'2'?>">
                    <div class="downloaded-prods__item-img"><img src="<?= get_the_post_thumbnail_url( $prod, 'full' );?>" alt=""></div>
                    <div class="downloaded-prods__item-text">
                        <p class="downloaded-prods__item-text-title"><?= get_the_title($prod);?></p>
                        <p class="downloaded-prods__item-text-p"><?= get_the_excerpt($prod);?></p>
                    </div>
                </a>
            <?php $i++; endforeach;?>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
</main>
<?php
get_footer();
?>


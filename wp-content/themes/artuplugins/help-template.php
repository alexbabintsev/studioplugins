<?php
/*
Template Name: Help page
Template Post Type: page
*/
get_header();
?>
    <main>
<?php while ( have_posts() ) :
    the_post(); $post = get_post();?>
        <section class="help-c">
            <div class="container">
                <h1 class="help-c__title"><?php the_title(  ); ?></h1>
                <div class="help-c__header">
                    <div class="help-c__header-title"><?= get_field('head_title'); ?></div>
                    <div class="help-c__header-btns">
                        <div class="help-c__header-btns-title">Available for</div>
                        <a class="btn" class="down_win" href="<?= get_field('download_link_for_windows'); ?>">
                            <div class="btn__inner">
                                Download for Windows<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99275 0H0V8.99275H8.99275V0Z"/>
                                    <path d="M20.5377 0H11.5449V8.99275H20.5377V0Z"/>
                                    <path d="M8.99275 11.8369H0V20.8297H8.99275V11.8369Z"/>
                                    <path d="M20.5377 11.8369H11.5449V20.8297H20.5377V11.8369Z"/>
                                </svg>
                            </div>
                        </a>
                        <a class="btn" class="down_mac" href="<?= get_field('download_link_for_maos'); ?>">
                            <div class="btn__inner">
                                Download for MaOS<svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7057 2.08667C12.2579 0 14.4468 0 14.4468 0C14.4468 0 14.7652 1.96628 13.2131 3.85231C11.5415 5.85872 9.67098 5.53769 9.67098 5.53769C9.67098 5.53769 9.3128 3.93256 10.7057 2.08667Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87006 6.90215C10.666 6.90215 12.1784 5.77856 14.1285 5.77856C17.4716 5.77856 18.7849 8.18626 18.7849 8.18626C18.7849 8.18626 16.198 9.51049 16.198 12.7207C16.198 16.3323 19.4217 17.6164 19.4217 17.6164C19.4217 17.6164 17.193 23.9566 14.1683 23.9566C12.7754 23.9566 11.7008 22.9936 10.2282 22.9936C8.7159 22.9936 7.24335 23.9566 6.28818 23.9566C3.50228 23.9968 0 17.9775 0 13.122C0 8.34677 2.9451 5.85882 5.731 5.85882C7.52194 5.81869 8.91489 6.90215 9.87006 6.90215Z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="help-c__main">
                    <div class="tabs help-c__main-grid">
                        <div class="help-aside">
                            <?php $is_first = true; $mb_index=0; foreach (get_field('main_blocks') as $m_block):?>
                                <div class="help-aside__item">
                                    <div class="help-aside__item-title"><?= $m_block['title']?></div>
                                    <ul>
                                        <?php $b_index=0; foreach ($m_block['blocks'] as $block):?>
                                        <li class="<?= $is_first?'is-active':'' ?> tabs-nav__item" data-tab-id="<?= $mb_index."_".$b_index;?>" data-page-id="{&quot;media&quot;: 767, &quot;id&quot;:&quot;how1&quot;}"><?= $block['title']?>
                                            <svg width="9" height="14">
                                                <use xlink:href="#icon-arr-right"></use>
                                            </svg>
                                        </li>
                                        <?php $b_index++;$is_first = false; endforeach;?>
                                    </ul>
                                </div>
                            <?php $mb_index++; endforeach;?>
                        </div>
                        <div class="help-c__content-list">
                            <?php $is_first = true; $mb_index=0; foreach (get_field('main_blocks') as $m_block):?>
                                <?php $b_index=0; foreach ($m_block['blocks'] as $block):?>
                                    <div class="tabs-content help-c__content<?= $is_first?' is-active':'' ?>" data-tab-id="<?= $mb_index."_".$b_index;?>" data-page="how1" id="<?= $block['html_id']?>">
                                        <div class="mob-page-header">
                                            <img class="mob-page-header__logo" src="<?= get_theme_file_uri( '/img/logo.svg' )?>" alt="logo">
                                            <div class="mob-page-close" data-page-close>
                                                <svg width="20" height="20">
                                                    <use xlink:href="#icon-close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="help-c__content-title-mob"><?= $block['title']?></div>
                                        <?= $block['text']?>
                                    </div>
                                <?php $b_index++;$is_first = false; endforeach;?>
                            <?php $mb_index++; endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="help-c-footer">
                    <div class="help-c-footer__txt-block">
                        <div class="help-c-footer__title"><?= get_field('footer_title'); ?></div>
                        <?= get_field('description'); ?>
                    </div>
                    <?= do_shortcode('[contact-form-7 id="'.get_field('form').'" html_class="help-c-footer__form main-form"]');?>
                </div>
            </div>
        </section>
<?php endwhile; ?>
    </main>
<?php
get_footer();
?>
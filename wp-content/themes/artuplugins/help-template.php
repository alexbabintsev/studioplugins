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
                        <a class="btn" href="<?= get_field('download_link_for_windows'); ?>">
                            <div class="btn__inner">
                                Download for Windows<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.99275 0H0V8.99275H8.99275V0Z"/>
                                    <path d="M20.5377 0H11.5449V8.99275H20.5377V0Z"/>
                                    <path d="M8.99275 11.8369H0V20.8297H8.99275V11.8369Z"/>
                                    <path d="M20.5377 11.8369H11.5449V20.8297H20.5377V11.8369Z"/>
                                </svg>
                            </div>
                        </a>
                        <a class="btn" href="<?= get_field('download_link_for_maos'); ?>">
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
                    <?php var_dump(get_field('main_blocks'));?>
                    <div class="tabs help-c__main-grid">
                        <div class="help-aside">
                            <?php $is_first = true; $mb_index=0; foreach (get_field('main_blocks') as $m_block):?>
                                <div class="help-aside__item">
                                    <div class="help-aside__item-title"><?= $m_block['title']?></div>
                                    <ul>
                                        <?php foreach ($m_block['blocks'] as $block):?>
                                        <li class="<?= $is_first?'is-active':'' ?> tabs-nav__item" data-tab-id="1" data-page-id="{&quot;media&quot;: 767, &quot;id&quot;:&quot;how1&quot;}"><?= $block['title']?>
                                            <svg width="9" height="14">
                                                <use xlink:href="#icon-arr-right"></use>
                                            </svg>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                            <?php endforeach;?>
                        </div>
                        <div class="help-c__content-list">
                            <div class="tabs-content help-c__content is-active" data-tab-id="1" data-page="how1">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <div class="help-c__content-title">Before You Start (H1)</div>
                                <p>If you are using WordPress.com, then you cannot install plugins. We often get complaints from users saying that they can’t see the plugins menu in their WordPress dashboard. It is because you are using WordPress.com, which has its limitations. You cannot install plugins on WordPress.com unless you upgrade to their business plan. On the other hand, you can install any plugin you want on your self hosted WordPress.org website right out of the box (See the differences between self hosted WordPress.org vs WordPress.com).</p>
                                <div class="help-c__media-wrap">
                                    <div class="help-c__media-prev help-video-btn" data-video-id="i57p-G0Xs2M" data-video="&lt;iframe width=&quot;1280&quot; height=&quot;548&quot; src=&quot;https://www.youtube.com/embed/j4Q9y4gXaTQ?enablejsapi=1&amp;amp;wmode=transparent&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen=&quot;&quot;&gt;&lt;/iframe&gt;">
                                        <div class="help-c__media-txt-block" style="background-image:url(img/video-bg.jpg)">
                                            <div class="help-c__media-title">Video name</div>
                                            <div class="play-btn"><svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g style="mix-blend-mode:overlay">
                                                        <circle cx="50" cy="50" r="49" stroke="white" stroke-width="2"/>
                                                    </g>
                                                </svg>
                                                <svg width="28" height="30">
                                                    <use xlink:href="#icon-play"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>If you want to switch from WordPress.com to WordPress.org, then read our tutorial on how to properly move from WordPress.com to WordPress.org. That being said, now let’s take a look at how to install a WordPress plugin on your website.</p>
                                <div class="help-c__section-title">How to Install a WordPress Plugin (H1)</div>
                                <p>If you are using WordPress.com, then you cannot install plugins. We often get complaints from users saying that they can’t see the plugins menu in their WordPress dashboard. It is because you are using WordPress.com, which has its limitations. You cannot install plugins on WordPress.com unless you upgrade to their business plan. On the other hand, you can install any plugin you want on your self hosted WordPress.org website right out of the box (See the differences between self hosted WordPress.org vs WordPress.com). If you want to switch from WordPress.com to WordPress.org, then read our tutorial on how to properly move from WordPress.com to WordPress.org. That being said, now let’s take a look at how to install a WordPress plugin on your website.</p>
                                <div class="help-c__subtitle">Install a Plugin using WordPress Plugin Search (H2)</div>
                                <p>The easiest way of installing a WordPress plugin is to use the plugin search. The only downside of this option is that a plugin must be in the WordPress plugin directory which is limited to only free plugins. First thing you need to visit the Plugins » Add New page inside your WordPress admin area.</p>
                                <ul>
                                    <li>You will see a screen like the one in the screenshot above;</li>
                                    <li>Find the plugin by typing the plugin name or the functionality you are looking for;</li>
                                    <li>After that, you will see a bunch of listings like the example below.</li>
                                </ul>
                                <div class="help-c__media-wrap">
                                    <div class="help-c__media-prev">
                                        <div class="help-c__media-txt-block" style="background-image:url(img/help-contacts-1.jpg)">
                                            <div class="help-c__media-title">Image name</div>
                                        </div>
                                    </div>
                                </div>
                                <p>You can pick the plugin that is best for you. Since in our search, we were looking for WPForms which is the best WordPress contact form plugin, we’ll click the ‘Install Now’ button next to it.</p>
                                <p>For more detailed instructions, see our guide on how to properly uninstall a WordPress plugin.</p>
                                <div class="help-c__media-wrap">
                                    <div class="help-c__media-prev">
                                        <div class="help-c__media-txt-block" style="background-image:url(img/help-contacts-2.jpg)"></div>
                                    </div>
                                </div>
                                <p>You may also want to see our plugins category where we write about the best WordPress plugins that you can use to accomplish whatever you’re looking to do. Each of those articles comes with step-by-step instructions on how to set up individual plugins.</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="2" data-page="how2">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>2</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="3" data-page="how3">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>3</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="4" data-page="how4">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>4</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="5" data-page="how5">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>5</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="6" data-page="how6">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>6</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="7" data-page="how7">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>7</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="8" data-page="how8">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>8</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="9" data-page="how9">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>9</p>
                            </div>
                            <div class="tabs-content help-c__content" data-tab-id="10" data-page="how10">
                                <div class="mob-page-header"><img class="mob-page-header__logo" src="img/logo.svg" alt="logo">
                                    <div class="mob-page-close" data-page-close>
                                        <svg width="20" height="20">
                                            <use xlink:href="#icon-close"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="help-c__content-title-mob">How to install plugin on Windows</div>
                                <p>10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="help-c-footer">
                    <div class="help-c-footer__txt-block">
                        <div class="help-c-footer__title"><?= get_field('footer_title'); ?></div>
                        <?= get_field('description'); ?>
                    </div>
                    <form class="help-c-footer__form" name="form-help-contacts">
                        <div class="input-group">
                            <div class="input-group__label">Email</div>
                            <input type="email" name="email">
                        </div>
                        <div class="input-group">
                            <div class="input-group__label">Text</div>
                            <input type="text" name="mes">
                        </div>
                        <button class="btn" type="submit">
                            <div class="btn__inner">Send</div>
                        </button>
                    </form>
                </div>
            </div>
        </section>
<?php endwhile; ?>
    </main>
<?php
get_footer();
?>
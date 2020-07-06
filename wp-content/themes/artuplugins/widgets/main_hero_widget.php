<?php
class main_hero_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_hero_widget_artu',
            __( 'Hero widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="hero">

            <div class="hero-video">
                <video poster="<?= get_theme_file_uri( '/img/main-poster.png' )?>" loop="" playsinline="" muted="" data-keepplaying="" class="main-video" data-ratio="1.7777777777778"  preload="metadata" data-src="/wp-content/themes/artuplugins/video/main_video.mp4">
                    <source type="video/mp4" data-src="/wp-content/themes/artuplugins/video/main_video.mp4">
                </video>
            </div>
            <div class="container hero__container-decor">

                <div class="hero-content">
                    <div class="hero-content__left">
                        <div class="hero-content__subtitle">
                            <img src="<?= get_field('subtitle_image','widget_'.$args['widget_id'])?>" alt="">
                            <h2><?= $instance['subtitle']?></h2>
                        </div>
                        <h1 class="hero-content__title"><?= $instance['title']?></h1>
                        <div class="hero-content__descr">
                            <?= get_field('description','widget_'.$args['widget_id'])?>
                        </div>
                        <div class="hero-content__downloads hero-content__downloads-desc">
                            <?php if(isset($instance['win_link'])&&$instance['win_link']):?>

                                <!-- был такой href <?= esc_attr($instance['win_link'])?> -->
                                <a class="dwl_link" data-dwl="<?= esc_attr($instance['win_link'])?>" download href="<?= esc_attr(get_field('file_win','widget_'.$args['widget_id']))?>"> Download for Windows<img src="<?= get_theme_file_uri( '/img/home/windows.svg')?>" alt=""></a>
                            <?php endif;?>
                            <?php if(isset($instance['mac_link'])&&$instance['mac_link']):?>

                                <!-- был такой href <?= esc_attr($instance['mac_link'])?> -->
                                <a class="dwl_link" data-dwl="<?= esc_attr($instance['mac_link'])?>" download href="<?= esc_attr(get_field('file_mac','widget_'.$args['widget_id']))?>"> Download for MacOS<img src="<?= get_theme_file_uri( '/img/home/apple.svg')?>" alt=""></a>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="hero-content__right">
                        <a class="hero-content__video-icon hero-video-link" data-modal="modal-video" href="#">
                            <svg class="videoplay-svg" width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="videoplay-svg__path1" d="M77.0732 128.604V70.8014C77.0732 69.2572 78.7487 68.2956 80.082 69.0744L132.858 99.9024C134.223 100.7 134.167 102.691 132.76 103.41L79.9835 130.385C78.6527 131.065 77.0732 130.098 77.0732 128.604Z" fill="white"/>
                                <g style="mix-blend-mode:overlay">
                                    <path class="videoplay-svg__path2" d="M100 199C154.676 199 199 154.676 199 100C199 45.3238 154.676 1 100 1C45.3238 1 1 45.3238 1 100C1 154.676 45.3238 199 100 199Z" stroke="white" stroke-width="2"/>
                                </g>
                            </svg>
                        </a>
                        <div class="hero-content__video-text">
                            <p>watch demo</p>
                        </div>
                    </div>
                    <div class="hero-content__downloads-mob">
                        <p>Available for</p>
                        <?php if(isset($instance['win_link'])&&$instance['win_link']):?>
                            <a class="dwl_link" data-dwl="<?= esc_attr($instance['win_link'])?>" download href="<?= esc_attr(get_field('file_win','widget_'.$args['widget_id']))?>"><img class="hero-content__downloads-mob-win" src="<?= get_theme_file_uri( '/img/home/windows.svg')?>" alt=""></a>
                        <?php endif;?>
                        <?php if(isset($instance['mac_link'])&&$instance['mac_link']):?>
                            <a class="dwl_link" data-dwl="<?= esc_attr($instance['mac_link'])?>" download href="<?= esc_attr(get_field('file_mac','widget_'.$args['widget_id']))?>"><img class="hero-content__downloads-mob-apple" src="<?= get_theme_file_uri( '/img/home/apple.svg')?>" alt=""></a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput
    }
    public function update( $new_instance, $old_instance ) {

        $instance = $new_instance;
        return $instance;

    }
    public function form( $instance ) {
        ?>
        <div class="main-widget">
            <label>
                Title
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'title' ))?>" value="<?= esc_attr($instance['title'])?>"/>
            </label>
            <label>
                Subtitle
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'subtitle' ))?>" value="<?= esc_attr($instance['subtitle'])?>"/>
            </label>
            <label>
                Link for Windows
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'win_link' ))?>" value="<?= esc_attr($instance['win_link'])?>"/>
            </label>
            <label>
                Link for MacOS
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'mac_link' ))?>" value="<?= esc_attr($instance['mac_link'])?>"/>
            </label>
            <label>
                Video Link
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'video_link' ))?>" value="<?= esc_attr($instance['video_link'])?>"/>
            </label>
        </div>
        <?php

        $this->admin_print_script();
    }
    static $done = false;
    public function admin_print_script() {


        if ( $this->done ) {
            return;
        }
        if($this->number!=='__i__')
            return;
        $this->done = true;

        ?>


        <?php
    }
}
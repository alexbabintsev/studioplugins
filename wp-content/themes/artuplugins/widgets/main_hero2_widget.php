<?php
class main_hero2_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_hero2_widget_artu',
            __( 'Hero 2 widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="hero-2" style="background: <?= $this->hex2rgba(get_field('main_color','widget_'.$args['widget_id']),0.9)?>;">  <img class="hero-2__img" src="<?= get_theme_file_uri( '/img/tranim.jpg' )?>" alt="">
            <div class="section-decor"><img src="<?= get_theme_file_uri( '/img/home/section-decor.svg' )?>" alt="section-decor"></div>
            <div class="container">
                <div class="hero-2-content">
                    <div class="hero-2-content__left">
                        <div class="hero-2-content__subtitle"> <img src="<?= get_field('subtitle_image','widget_'.$args['widget_id'])?>" alt="">
                            <p><?= $instance['subtitle']?></p>
                        </div>
                        <h1 class="hero-2-content__title"><?= $instance['title']?></h1>
                        <p class="hero-2-content__text"><?= $instance['text']?></p>
                        <div class="hero-2-content__links">
                            <a class="btn" href="<?= esc_attr($instance['buy_link'])?>"><?= $instance['buy_link_text']?></a>
                            <a class="hero-2-content__video hero-video-link" href="<?= esc_attr($instance['video_link'])?>">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2686 31.3338V18.5713C19.2686 17.7993 20.1063 17.3184 20.7729 17.7079L32.4256 24.5145C33.1081 24.9132 33.0801 25.9087 32.3763 26.2684L20.7237 32.2242C20.0583 32.5643 19.2686 32.081 19.2686 31.3338Z" fill="white"/>
                                    <circle cx="25" cy="25" r="24" stroke="white" stroke-width="2"/>
                                </svg>
                                <p>watch demo</p>
                            </a>
                        </div>
                    </div>
                    <div class="hero-2-content__right"><img src="<?= get_field('main_image','widget_'.$args['widget_id'])?>" alt=""></div>
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
                Text
                <textarea class="widefat" name="<?= esc_attr( $this->get_field_name( 'text' ))?>"><?= $instance['text']?></textarea>
            </label>
            <label>
                Buy link
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'buy_link' ))?>" value="<?= esc_attr($instance['buy_link'])?>"/>
            </label>
            <label>
                Buy link text
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'buy_link_text' ))?>" value="<?= esc_attr($instance['buy_link_text'])?>"/>
            </label>
            <label>
                Video Link
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'video_link' ))?>" value="<?= esc_attr($instance['video_link'])?>"/>
            </label>
        </div>
        <?php

        $this->admin_print_script();
    }
    public function hex2rgba($color, $opacity = false) {

        $default = 'rgb(0,0,0)';

        //Return default if no color provided
        if(empty($color))
            return $default;

        //Sanitize $color if "#" is provided
        if ($color[0] == '#' ) {
            $color = substr( $color, 1 );
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
            return $default;
        }

        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if($opacity){
            if(abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(",",$rgb).')';
        }

        //Return rgb(a) color string
        return $output;
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
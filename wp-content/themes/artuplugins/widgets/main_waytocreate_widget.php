<?php
class main_waytocreate_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_waytocreate_widget_artu',
            __( 'Way to create widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="waytocreate">
            <div class="section-decor"><img src="<?= get_theme_file_uri( '/img/home/section-decor.svg' )?>" alt="section-decor"></div>
            <div class="waytocreate__bg"><img src="<?= get_theme_file_uri( '/img/trapeze2.png' )?>" alt="waytocreate-bg"></div>
            <div class="container waytocreate__container">
                <div class="waytocreate-content-wrapper">
                    <h2 class="waytocreate__title title"><?= $instance['title']?></h2>
                </div>
            </div>
            <div class="swiper-container waytocreate__slider">
                <div class="swiper-wrapper">
                    <?php foreach (get_field('slides','widget_'.$args['widget_id']) as $slide):?>
                        <div class="swiper-slide waytocreate-content">
                            <div class="waytocreate-content__inner">
                                <div class="waytocreate-content__left">
                                    <h4><?=$slide['title']?></h4>
                                    <?=$slide['description']?>
                                </div>
                                <div class="waytocreate-content__right"><img src="<?=$slide['image']?>" alt="waytocreate"></div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="swiper-pag waytocreate__pag"></div>
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
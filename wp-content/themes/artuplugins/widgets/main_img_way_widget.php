<?php
class main_img_way_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_img_way_widget_artu',
            __( 'Img way widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="img-way">
            <div class="section-decor">
                <img src="<?= get_theme_file_uri( '/img/home/section-decor.svg' )?>" alt="section-decor">
            </div>
            <img class="img-way__img" src="<?= get_field('main_image','widget_'.$args['widget_id'])?>" alt="">
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
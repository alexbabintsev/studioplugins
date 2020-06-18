<?php
class main_requirements_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_requirements_widget_artu',
            __( 'Requirements widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="requirements">
            <div class="container">
                <div class="requirements-inner" style="background-color: <?= get_field('main_color','widget_'.$args['widget_id'])?>; background-image: url(<?= get_theme_file_uri( '/img/requirements/bg-blue.svg' )?>)">
                    <h2 class="requirements-title title"><?= $instance['title']?></h2>
                    <div class="requirements-grid">
                    <?php foreach (get_field('blocks','widget_'.$args['widget_id']) as $block):?>
                        <div class="requirements-item">
                            <div class="requirements-item__ic-container">
                                <div class="requirements-item__ic-wrapper">
                                    <div class="requirements-item__ic"><img src="<?= $block['image']?>"></div>
                                </div>
                            </div>
                            <div class="requirements-item__text"><?= $block['text']?></div>
                        </div>
                    <?php endforeach;?>
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
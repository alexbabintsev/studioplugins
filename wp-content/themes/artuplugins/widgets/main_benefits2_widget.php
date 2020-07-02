<?php
class main_benefits2_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_benefits2_widget_artu',
            __( 'Benefits 2 widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="benefits">
            <div class="container benefits__container">
                <h2 class="benefits__title"><span class="title"><?= $instance['title']?></span></h2>
                <div class="benefits-list">
                    <?php $i = 0;foreach (get_field('bocks','widget_'.$args['widget_id']) as $bock):$i++;?>
                        <div class="benefits-list__item benefits-list__item-<?=$i?>">
                            <div class="benefits-list__item-inner"><img src="<?=$bock['image']?>" alt="">
                                <h4><?=$bock['title']?></h4>
                                <?=$bock['description']?>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <a class="btn btn--white" href="<?= esc_attr($instance['link'])?>">
                    <div class="btn__inner"><?= $instance['link_text']?></div>
                </a>
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
                Link
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'link' ))?>" value="<?= esc_attr($instance['link'])?>"/>
            </label>
            <label>
                Link text
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'link_text' ))?>" value="<?= esc_attr($instance['link_text'])?>"/>
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
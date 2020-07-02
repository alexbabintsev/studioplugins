<?php
class main_nitrozime_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_nitrozime_widget_artu',
            __( 'Nitrozime widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="nitrozime">
            <div class="container nitrozime__container">
                <div class="nitrozime__titles">
                    <h2 class="title nitrozime__title"><?= $instance['title']?></h2>
                    <h3 class="nitrozime__subtitle"><?= $instance['subtitle']?></h3>
                </div>
                <div class="nitrozime-cards">
                <?php $i = 0;foreach (get_field('blocks','widget_'.$args['widget_id']) as $block):$i++;?>
                    <div class="nitrozime-cards__item nitrozime-cards__item-<?=$i?>">
                        <div class="nitrozime-cards__item-top">
                            <?= $block['top_text']?>
                        </div>
                        <div class="nitrozime-cards__item-bottom">
                            <?= $block['bottom_text']?>
                        </div>
                    </div>
                <?php endforeach;?>
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
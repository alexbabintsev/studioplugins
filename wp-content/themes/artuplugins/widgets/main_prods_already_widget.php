<?php
class main_prods_already_widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'main_prods_already_widget_artu',
            __( 'Prods already widget', 'artu' ),
            array(
                'description'                 => __( '', 'artu' ),
                'customize_selective_refresh' => true,
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <section class="prods-already">
            <div class="container prods-already__container">
                <h2 class="title prods-already__title"><?= $instance['title']?></h2>
                <div class="prods-cars">
                <?php $i = 0;foreach (get_field('products','widget_'.$args['widget_id']) as $prod):?>
                    <div class="prods-cars__item <?= $i%2==0?'prods-cars__item-animations':'prods-cars__item-transitions'?>">
                        <img src="<?= get_the_post_thumbnail_url( $prod, 'full' );?>" alt="">
                        <p><?= get_the_title($prod);?></p>
                        <a href="<?= get_permalink($prod);?>">See more
                            <svg class="arr-right" width="9" height="14">
                                <use xlink:href="#icon-arr-right"></use>
                            </svg>
                        </a>
                    </div>
                <?php $i++; endforeach;?>
                </div>
                <div class="prods-login">
                    <div class="prods-login__left">
                        <div class="prods-login__left-wrap">
                            <h2 class="title prods-already__title-2"><?= $instance['login_title']?></h2>
                            <p class="prods-login__text"><?= $instance['desc']?></p>
                            <div class="prods-login__links">
                            <?php if(is_user_logged_in()):?>
                                <a href="<?php echo esc_url( um_get_core_page( 'account' ) ); ?>">Account</a>
                            <?php else:?>
                                <a href="<?php echo esc_url( um_get_core_page( 'login' ) ); ?>">Log in</a>
                                <a href="<?php echo esc_url( um_get_core_page( 'register' ) ); ?>">Register</a>
                            <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="prods-login__right"><img class="desk" src="<?= get_theme_file_uri( '/img/home/prod/gallery.png' )?>" alt=""><img class="mob" src="<?= get_theme_file_uri( '/img/home/prod/gallery-mob.png' )?>" alt=""></div>
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
                Login title
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'login_title' ))?>" value="<?= esc_attr($instance['login_title'])?>"/>
            </label>
            <label>
                Description
                <input class="widefat" type="text" name="<?= esc_attr( $this->get_field_name( 'desc' ))?>" value="<?= esc_attr($instance['desc'])?>"/>
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
<?php function custom_um_add_submit_button_to_register( $args )
{
	$primary_btn_word = $args['primary_btn_word'];
	/**
	 * UM hook
	 *
	 * @type filter
	 * @title um_register_form_button_one
	 * @description Change Register Form Primary button
	 * @input_vars
	 * [{"var":"$primary_btn_word","type":"string","desc":"Button text"},
	 * {"var":"$args","type":"array","desc":"Registration Form arguments"}]
	 * @change_log
	 * ["Since: 2.0"]
	 * @usage
	 * <?php add_filter( 'um_register_form_button_one', 'function_name', 10, 2 ); ?>
	 * @example
	 * <?php
	 * add_filter( 'um_register_form_button_one', 'my_register_form_button_one', 10, 2 );
	 * function my_register_form_button_one( $primary_btn_word, $args ) {
	 *     // your code here
	 *     return $primary_btn_word;
	 * }
	 * ?>
	 */
	$primary_btn_word = apply_filters('um_register_form_button_one', $primary_btn_word, $args );

	if ( ! isset( $primary_btn_word ) || $primary_btn_word == '' ){
		$primary_btn_word = UM()->options()->get( 'register_primary_btn_word' );
	}

	$secondary_btn_word = $args['secondary_btn_word'];
	/**
	 * UM hook
	 *
	 * @type filter
	 * @title um_register_form_button_two
	 * @description Change Registration Form Secondary button
	 * @input_vars
	 * [{"var":"$secondary_btn_word","type":"string","desc":"Button text"},
	 * {"var":"$args","type":"array","desc":"Registration Form arguments"}]
	 * @change_log
	 * ["Since: 2.0"]
	 * @usage
	 * <?php add_filter( 'um_register_form_button_two', 'function_name', 10, 2 ); ?>
	 * @example
	 * <?php
	 * add_filter( 'um_register_form_button_two', 'my_register_form_button_two', 10, 2 );
	 * function my_register_form_button_two( $secondary_btn_word, $args ) {
	 *     // your code here
	 *     return $secondary_btn_word;
	 * }
	 * ?>
	 */
	$secondary_btn_word = apply_filters( 'um_register_form_button_two', $secondary_btn_word, $args );

	if ( ! isset( $secondary_btn_word ) || $secondary_btn_word == '' ){
		$secondary_btn_word = UM()->options()->get( 'register_secondary_btn_word' );
	}

	$secondary_btn_url = ( isset( $args['secondary_btn_url'] ) && $args['secondary_btn_url'] ) ? $args['secondary_btn_url'] : um_get_core_page('login');
	/**
	 * UM hook
	 *
	 * @type filter
	 * @title um_register_form_button_two_url
	 * @description Change Registration Form Secondary button URL
	 * @input_vars
	 * [{"var":"$secondary_btn_url","type":"string","desc":"Button URL"},
	 * {"var":"$args","type":"array","desc":"Registration Form arguments"}]
	 * @change_log
	 * ["Since: 2.0"]
	 * @usage
	 * <?php add_filter( 'um_register_form_button_two_url', 'function_name', 10, 2 ); ?>
	 * @example
	 * <?php
	 * add_filter( 'um_register_form_button_two_url', 'my_register_form_button_two_url', 10, 2 );
	 * function my_register_form_button_two_url( $secondary_btn_url, $args ) {
	 *     // your code here
	 *     return $secondary_btn_url;
	 * }
	 * ?>
	 */
	$secondary_btn_url = apply_filters('um_register_form_button_two_url', $secondary_btn_url, $args ); ?>

    <?php if ( isset( $args['secondary_btn'] ) && $args['secondary_btn'] != 0 ) { ?>
    <div class="submit-wrapper main-form__submit-wrapper">
        <button class="main-form__submit-btn" type="submit"><?php esc_attr_e( wp_unslash( $primary_btn_word ), 'ultimate-member' ) ?></button>
    </div>
    <div class="main-form__login"><a class="main-form__login" href="<?php echo esc_url( $secondary_btn_url ); ?>"><?php _e( wp_unslash( $secondary_btn_word ),'ultimate-member' ); ?></a></div>
    <?php } else { ?>
        <div class="submit-wrapper main-form__submit-wrapper">
            <button class="main-form__submit-btn" type="submit"><?php esc_attr_e( wp_unslash( $primary_btn_word ), 'ultimate-member' ) ?></button>
        </div>
    <?php } ?>

	<?php
}
remove_action( 'um_after_register_fields', 'um_add_submit_button_to_register', 1000 );
add_action( 'um_after_register_fields', 'custom_um_add_submit_button_to_register', 1000 );

function custom_um_add_submit_button_to_login( $args ) {
    /**
     * UM hook
     *
     * @type filter
     * @title um_login_form_button_one
     * @description Change Login Form Primary button
     * @input_vars
     * [{"var":"$primary_btn_word","type":"string","desc":"Button text"},
     * {"var":"$args","type":"array","desc":"Login Form arguments"}]
     * @change_log
     * ["Since: 2.0"]
     * @usage
     * <?php add_filter( 'um_login_form_button_one', 'function_name', 10, 2 ); ?>
     * @example
     * <?php
     * add_filter( 'um_login_form_button_one', 'my_login_form_button_one', 10, 2 );
     * function my_login_form_button_one( $primary_btn_word, $args ) {
     *     // your code here
     *     return $primary_btn_word;
     * }
     * ?>
     */
    $primary_btn_word = apply_filters('um_login_form_button_one', $args['primary_btn_word'], $args );

    if ( ! isset( $primary_btn_word ) || $primary_btn_word == '' ){
        $primary_btn_word = UM()->options()->get( 'login_primary_btn_word' );
    }

    /**
     * UM hook
     *
     * @type filter
     * @title um_login_form_button_two
     * @description Change Login Form Secondary button
     * @input_vars
     * [{"var":"$secondary_btn_word","type":"string","desc":"Button text"},
     * {"var":"$args","type":"array","desc":"Login Form arguments"}]
     * @change_log
     * ["Since: 2.0"]
     * @usage
     * <?php add_filter( 'um_login_form_button_two', 'function_name', 10, 2 ); ?>
     * @example
     * <?php
     * add_filter( 'um_login_form_button_two', 'my_login_form_button_two', 10, 2 );
     * function my_login_form_button_two( $secondary_btn_word, $args ) {
     *     // your code here
     *     return $secondary_btn_word;
     * }
     * ?>
     */
    $secondary_btn_word = apply_filters( 'um_login_form_button_two', $args['secondary_btn_word'], $args );

    if ( ! isset( $secondary_btn_word ) || $secondary_btn_word == '' ){
        $secondary_btn_word = UM()->options()->get( 'login_secondary_btn_word' );
    }

    $secondary_btn_url = ! empty( $args['secondary_btn_url'] ) ? $args['secondary_btn_url'] : um_get_core_page( 'register' );
    /**
     * UM hook
     *
     * @type filter
     * @title um_login_form_button_two_url
     * @description Change Login Form Secondary button URL
     * @input_vars
     * [{"var":"$secondary_btn_url","type":"string","desc":"Button URL"},
     * {"var":"$args","type":"array","desc":"Login Form arguments"}]
     * @change_log
     * ["Since: 2.0"]
     * @usage
     * <?php add_filter( 'um_login_form_button_two_url', 'function_name', 10, 2 ); ?>
     * @example
     * <?php
     * add_filter( 'um_login_form_button_two_url', 'my_login_form_button_two_url', 10, 2 );
     * function my_login_form_button_two_url( $secondary_btn_url, $args ) {
     *     // your code here
     *     return $secondary_btn_url;
     * }
     * ?>
     */
    $secondary_btn_url = apply_filters( 'um_login_form_button_two_url', $secondary_btn_url, $args ); ?>

<?php if ( isset( $args['show_rememberme'] ) && $args['show_rememberme'] ) {
            UM()->fields()->checkbox( 'rememberme', __( 'Keep me signed in', 'ultimate-member' ), false ); ?>
            <div class="um-clear"></div>
        <?php }

    if ( isset( $args['secondary_btn'] ) && $args['secondary_btn'] != 0 ) { ?>
    <div class="submit-wrapper main-form__submit-wrapper">
        <button class="main-form__submit-btn" type="submit"><?php esc_attr_e( wp_unslash( $primary_btn_word ), 'ultimate-member' ); ?></button>
    </div>
    <div class="main-form__links">
        <a class="main-form__forot-pass" href="<?php echo esc_url( $secondary_btn_url ); ?>"><?php _e( wp_unslash( $secondary_btn_word ), 'ultimate-member' ); ?></a>
        <?php if ( $args['forgot_pass_link'] != 0 ):?>
        <a class="main-form__forot-pass" href="<?php echo esc_url( um_get_core_page( 'password-reset' ) ); ?>"><?php _e( 'Forgot your password?', 'ultimate-member' ); ?></a>
        <?php endif;?>
    </div>
    <?php } else { ?>
        <div class="submit-wrapper main-form__submit-wrapper">
            <button class="main-form__submit-btn" type="submit"><?php esc_attr_e( wp_unslash( $primary_btn_word ), 'ultimate-member' ); ?></button>
        </div>
    <?php }
}
remove_action( 'um_after_login_fields', 'um_add_submit_button_to_login', 1000 );
remove_action( 'um_after_login_fields', 'um_after_login_submit', 1001 );
add_action( 'um_after_login_fields', 'custom_um_add_submit_button_to_login', 1000 );

add_filter('um_account_page_default_tabs_hook', 'my_custom_tab_in_um', 100 );
function my_custom_tab_in_um( $tabs ) {
    $tabs[800]['myproducts']['icon'] = 'um-faicon-pencil';
    $tabs[800]['myproducts']['title'] = 'My Products';
    $tabs[800]['myproducts']['custom'] = true;
    $tabs[800]['myproducts']['with_header'] = false;
    $tabs[800]['myproducts']['show_button'] = false;
    $tabs[800]['myproducts']['clean_content']= true;
    return $tabs;
}

/* make our new tab hookable */

add_action('um_account_tab__myproducts', 'um_account_tab__myproducts');
function um_account_tab__myproducts( $info ) {
    global $ultimatemember;
    extract( $info );

    $output = $ultimatemember->account->get_tab_output('myproducts');
    if ( $output ) { echo $output; }
}

/* Finally we add some content in the tab */

add_filter('um_account_content_hook_myproducts', 'um_account_content_hook_myproducts');
function um_account_content_hook_myproducts( $output ){
    ob_start();
    $user = wp_get_current_user();
    $products = get_field('products',$user);
    $comps = get_field('comps',$user);
    ?>
    <div class="<?php if($products):?>account-grid-2__products account-grid-2__products-2<?php else:?>account-grid-2__add-prod<?php endif;?> fn_all_products_list">
        <h3 class="account-grid-2__products-title linked__title">Connected devices</h3>
        <p class="linked__subtitle">You can use Studio Plugins on 2 devices at the same time <span class="linked__count"><?=$comps?count($comps):0?>/2</span></p>
        <div class="linked-os">
        <?php if($comps)foreach ($comps as $comp):?>
            <div class="linked-os__item">
                <?php if($comp['os']=='win'):?>
                <div class="linked-os__item-img"><img src="<?= get_theme_file_uri( '/img/linked/winicon.svg' )?>" alt="win-os"></div>
                <p class="linked-os__item-title">Windows PC </p>
                <?php elseif($comp['os']=='mac'):?>
                    <div class="linked-os__item-img"><img src="<?= get_theme_file_uri( '/img/linked/macicon.svg' )?>" alt="mac-os"></div>
                    <p class="linked-os__item-title">MacOS </p>
                <?php endif;?>
                <p class="linked-os__item-subtitle"><?=$comp['name']?></p><a class="linked-os__item-link fn_unlink_os" data-id="<?= esc_attr($comp['inner_id'])?>" href="#">unlink</a>
            </div>
        <?php endforeach;?>
        </div>
        <h3 class="account-grid-2__products-title linked__title linked__title-2">Products</h3>
    <?php if($products):?>
            <?php foreach ($products as $product):?>
            <div class="account-grid-2__products-item account-grid-2__products-item-animations">
                <div class="account-grid-2__products-img"><img src="<?= get_the_post_thumbnail_url($product['product']);?>" alt=""></div>
                <div class="account-grid-2__products-text">
                    <p><?= get_the_title( $product['product'] )?></p>
                    <div class="account-grid-2__products-links account-grid-2__products-links-blue"><a href="#">How to use</a><a href="#">See features</a></div>
                </div>
            </div>
            <?php endforeach;?>
            <div class="account-grid-2__add">
                <a href="#" data-modal="modal-act-code">Add new product</a>
            </div>
    <?php else:?>
        <a href="#" data-modal="modal-act-code">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M60 0H40V40H0V60H40V100H60V60H100V40H60V0Z" fill="white"/>
            </svg>
            <p>Add new product</p>
        </a>
    <?php endif;?>
    </div>

    <?php

    $output .= ob_get_contents();
    ob_end_clean();
    return $output;
}
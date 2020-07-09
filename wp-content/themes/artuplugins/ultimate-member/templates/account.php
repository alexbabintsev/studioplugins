<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>




            <div class="account-grid-2__left">
                <h1 class="title account-grid-2__title">Hi, <span class="fn_name"><?php echo esc_html( um_user( 'nickname' ) ); ?></span></h1>
                <h2 class="subtitle account-grid-2__subtitle"><?php echo esc_html( um_user( 'user_email' ) ); ?></h2>
                <div class="account-grid-2__links account-grid-2__links-desctop">
                    <!--<?php foreach ( UM()->account()->tabs as $id => $info ) {
                        if ( isset( $info['custom'] ) || UM()->options()->get( "account_tab_{$id}" ) == 1 || $id == 'general' ) { ?>
                            <a data-tab="<?php echo esc_attr( $id )?>" href="<?php echo esc_url( UM()->account()->tab_link( $id ) ); ?>"><?php echo esc_html( $info['title'] ); ?></a>
                        <?php }
                    } ?>-->
                    <a href="#" data-modal="modal-change-email">Change email</a>
                    <a href="#" data-modal="modal-change-pass">Change password</a>
                    <a href="#" data-modal="modal-change-name">Change name</a>
                </div>
            </div>


                        <?php
                        /**
                         * UM hook
                         *
                         * @type action
                         * @title um_before_form
                         * @description Show some content before account form
                         * @input_vars
                         * [{"var":"$args","type":"array","desc":"Account shortcode arguments"}]
                         * @change_log
                         * ["Since: 2.0"]
                         * @usage add_action( 'um_before_form', 'function_name', 10, 1 );
                         * @example
                         * <?php
                         * add_action( 'um_before_form', 'my_before_form', 10, 1 );
                         * function my_before_form( $args ) {
                         *     // your code here
                         * }
                         * ?>
                         */
                        do_action( 'um_before_form', $args );
                        $current_tab = UM()->account()->current_tab;
                        $all_tabs = UM()->account()->tabs;
                        foreach ( $all_tabs as $id => $info ) {


                            if($current_tab==$id){//var_dump($info,UM()->options()->get( 'account_tab_' . $id ),UM()->account()->current_tab,$id);

                            if ( isset( $info['custom'] ) || UM()->options()->get( 'account_tab_' . $id ) == 1 || $id == 'general' ) {
                                if(!isset($info['with_header']))$info['with_header'] = true;
                                if(isset( $info['clean_content'] )&&$info['clean_content']){?>
                                    <?php UM()->account()->render_account_tab( $id, $info, $args ); ?>
                                <?php }else{?>
                        <form method="post" action="" style="width: 60%;" class="main-form account-main-form" >
                            <div class="um-account-main um-custom-acc" data-current_tab="<?php echo esc_attr( UM()->account()->current_tab ); ?>">

                                <div class="um-account-nav uimob340-show uimob500-show">
                                    <a href="javascript:void(0);" data-tab="<?php echo esc_attr( $id ); ?>" class="<?php if ( $id == $current_tab ) echo 'current'; ?>">
                                        <?php echo esc_html( $info['title'] ); ?>
                                        <span class="ico"><i class="<?php echo esc_attr( $info['icon'] ); ?>"></i></span>
                                        <span class="arr"><i class="um-faicon-angle-down"></i></span>
                                    </a>
                                </div>
                                <div class="um-account-tab um-account-tab-<?php echo esc_attr( $id ); ?>" data-tab="<?php echo esc_attr( $id  )?>">
                                    <?php
                                    UM()->account()->render_account_tab( $id, $info, $args ); ?>
                                </div>
                            </div>
                        </form>
                            <?php }
                            }

                            }
                        } ?>



            <div class="account-grid-2__links account-grid-2__links-mobile">
                <?php foreach ( UM()->account()->tabs as $id => $info ) {
                    if ( isset( $info['custom'] ) || UM()->options()->get( "account_tab_{$id}" ) == 1 || $id == 'general' ) { ?>
                        <a data-tab="<?php echo esc_attr( $id )?>" href="<?php echo esc_url( UM()->account()->tab_link( $id ) ); ?>"><?php echo esc_html( $info['title'] ); ?></a>
                    <?php }
                } ?>
            </div>


		<?php
		/**
		 * UM hook
		 *
		 * @type action
		 * @title um_after_account_page_load
		 * @description After account form
		 * @change_log
		 * ["Since: 2.0"]
		 * @usage add_action( 'um_after_account_page_load', 'function_name', 10 );
		 * @example
		 * <?php
		 * add_action( 'um_after_account_page_load', 'my_after_account_page_load', 10 );
		 * function my_after_account_page_load() {
		 *     // your code here
		 * }
		 * ?>
		 */
		do_action( 'um_after_account_page_load' ); ?>


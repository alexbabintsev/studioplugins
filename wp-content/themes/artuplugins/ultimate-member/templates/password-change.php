<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

		<form class="main-form resetcreatepass__form" method="post" action="">
			<input type="hidden" name="_um_password_change" id="_um_password_change" value="1" />
			<input type="hidden" name="user_id" id="user_id" value="<?php echo esc_attr( $args['user_id'] ); ?>" />
			<input type="hidden" name="rp_key" value="<?php echo esc_attr( $rp_key ); ?>">

			<?php
			/**
			 * UM hook
			 *
			 * @type action
			 * @title um_change_password_page_hidden_fields
			 * @description Password change hidden fields
			 * @input_vars
			 * [{"var":"$args","type":"array","desc":"Password change shortcode arguments"}]
			 * @change_log
			 * ["Since: 2.0"]
			 * @usage add_action( 'um_change_password_page_hidden_fields', 'function_name', 10, 1 );
			 * @example
			 * <?php
			 * add_action( 'um_change_password_page_hidden_fields', 'my_change_password_page_hidden_fields', 10, 1 );
			 * function my_change_password_page_hidden_fields( $args ) {
			 *     // your code here
			 * }
			 * ?>
			 */
			do_action( 'um_change_password_page_hidden_fields', $args );

			$fields = UM()->builtin()->get_specific_fields( 'user_password' );

			$output = null;
			foreach ( $fields as $key => $data ) {
				$output .= UM()->fields()->edit_field( $key, $data );
			}
			echo $output; ?>

            <div class="submit-wrapper main-form__submit-wrapper">
                <button class="main-form__submit-btn" type="submit"><?php esc_attr_e( 'Change my password', 'ultimate-member' ); ?></button>
            </div>

			<?php

			/**
			 * UM hook
			 *
			 * @type action
			 * @title um_change_password_form
			 * @description Password change form content
			 * @input_vars
			 * [{"var":"$args","type":"array","desc":"Password change shortcode arguments"}]
			 * @change_log
			 * ["Since: 2.0"]
			 * @usage add_action( 'um_change_password_form', 'function_name', 10, 1 );
			 * @example
			 * <?php
			 * add_action( 'um_change_password_form', 'my_change_password_form', 10, 1 );
			 * function my_change_password_form( $args ) {
			 *     // your code here
			 * }
			 * ?>
			 */
			do_action( 'um_change_password_form', $args );

			/**
			 * UM hook
			 *
			 * @type action
			 * @title um_after_form_fields
			 * @description Password change after form content
			 * @input_vars
			 * [{"var":"$args","type":"array","desc":"Password change shortcode arguments"}]
			 * @change_log
			 * ["Since: 2.0"]
			 * @usage add_action( 'um_after_form_fields', 'function_name', 10, 1 );
			 * @example
			 * <?php
			 * add_action( 'um_after_form_fields', 'my_after_form_fields', 10, 1 );
			 * function my_after_form_fields( $args ) {
			 *     // your code here
			 * }
			 * ?>
			 */
			do_action( 'um_after_form_fields', $args ); ?>
		</form>
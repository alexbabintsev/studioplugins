<?php
define( 'DOING_AJAX', true );

require_once 'wp-load.php';///dirname( __DIR__ ) .

send_origin_headers();

header( 'Content-Type: text/html; charset=' . get_option( 'blog_charset' ) );
header( 'X-Robots-Tag: noindex' );

// Require an action parameter.
if ( empty( $_REQUEST['action'] ) ) {
    wp_die( '0', 400 );
}

send_nosniff_header();
nocache_headers();

$action = ( isset( $_REQUEST['action'] ) ) ? $_REQUEST['action'] : '';

if(!has_action( "wp_sc_ajax_{$action}" )&&(!is_user_logged_in()||!has_action( "wp_sc_ajax_logined_{$action}" )))
    wp_die( '0', 400 );
if ( is_user_logged_in() ) {
    // If no action is registered, return a Bad Request response.
    if (  has_action( "wp_sc_ajax_logined_{$action}" ) ) {
        do_action( "wp_sc_ajax_logined_{$action}" );
    }

}
    // If no action is registered, return a Bad Request response.
    if (  has_action( "wp_sc_ajax_{$action}" ) ) {
        do_action( "wp_sc_ajax_{$action}" );
    }


// Default status.
wp_die( '0' );
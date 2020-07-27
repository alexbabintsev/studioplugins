<?php
require get_template_directory() . '/classes/head_nav.php';
require get_template_directory() . '/classes/footer_nav.php';
require get_template_directory() . '/classes/um-functions.php';
require get_template_directory() . '/classes/metaboxes.php';
require get_template_directory() . '/widgets/main_benefits_widget.php';
require get_template_directory() . '/widgets/main_benefits2_widget.php';
require get_template_directory() . '/widgets/main_hero_widget.php';
require get_template_directory() . '/widgets/main_hero2_widget.php';
require get_template_directory() . '/widgets/main_img_way_widget.php';
require get_template_directory() . '/widgets/main_nitrozime_widget.php';
require get_template_directory() . '/widgets/main_prods_already_widget.php';
require get_template_directory() . '/widgets/main_prods_already2_widget.php';
require get_template_directory() . '/widgets/main_subscribe_widget.php';
require get_template_directory() . '/widgets/main_waytocreate_widget.php';
require get_template_directory() . '/widgets/main_requirements_widget.php';
if ( ! function_exists( 'theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function theme_setup() {
        load_theme_textdomain( 'artuplugins', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        //set_post_thumbnail_size( 1568, 9999 );
        add_theme_support(
            'html5',
            array(
                //'search-form',
                //'comment-form',
                //'comment-list',
                'gallery',
                'caption',
            )
        );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 50,
                'width'       => 150,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
        add_theme_support( 'menus' );
        register_nav_menus(
            array(
                'heder' => __( 'Heder Menu', 'artuplugins' ),
                'footer' => __( 'Footer Menu', 'artuplugins' ),
                'login'=>__( 'Login Menu', 'artuplugins' ),
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'theme_setup' );
function artu_init()
{
    register_post_type('pl_product', array(
        'labels' => array(
            'name' => 'Продукты',
            'singular_name' => 'Продукт', // админ панель Добавить->Функцию
            'add_new' => 'Добавить продукт',
            'add_new_item' => 'Добавить новый продукт', // заголовок тега <title>
            'edit_item' => 'Редактировать продукт',
            'new_item' => 'Новый продукт',
            'all_items' => 'Все продукты',
            'view_item' => 'Просмотр продуктов на сайте',
            'search_items' => 'Искать продукт',
            'not_found' =>  'Продукт не найдено.',
            'not_found_in_trash' => 'В корзине нет продуктов.',
            'menu_name' => 'Продукты' // ссылка в меню в админке
        ),
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => 'pack',
        'menu_icon' => 'dashicons-cart', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'show_in_rest' => true,
        'supports' => array( 'title', 'excerpt','thumbnail','editor')
    ));
    register_post_type('pl_key', array(
        'labels' => array(
            'name' => 'Ключи',
            'singular_name' => 'Ключ', // админ панель Добавить->Функцию
            'add_new' => 'Добавить ключ',
            'add_new_item' => 'Добавить новый ключ', // заголовок тега <title>
            'edit_item' => 'Редактировать ключ',
            'new_item' => 'Новый ключ',
            'all_items' => 'Все ключи',
            'view_item' => 'Просмотр ключей на сайте',
            'search_items' => 'Искать ключ',
            'not_found' =>  'Ключ не найден.',
            'not_found_in_trash' => 'В корзине нет ключей.',
            'menu_name' => 'Ключи' // ссылка в меню в админке
        ),
        'public' => false,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => false,
        'menu_icon' => 'dashicons-post-status', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'show_in_rest' => false,
        'supports' => array('custom-fields'),
    ));
}
add_action( 'init', 'artu_init' );
function teheme_styles_scripts() {
    $tversion = wp_get_theme()->get( 'Version' );
    $gkey = get_option( 'google_api_key','');
    wp_enqueue_style( 'artu-lib-style', get_theme_file_uri( '/css/libs.min.css' ), array(), $tversion);
    wp_enqueue_style( 'artu-style', get_theme_file_uri( '/css/styles.min.css' ), array(), $tversion);
    //wp_enqueue_script( 'artu-map-google', 'https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&key='.$gkey, array(),false, true );
    wp_enqueue_script( 'artu-lib-js', get_theme_file_uri( '/js/libs.min.js' ), array(), $tversion, true );
    wp_enqueue_script( 'artu-scripts', get_theme_file_uri( '/js/scripts.min.js' ), array(), $tversion, true );
    wp_enqueue_script( 'artu-rs', get_theme_file_uri( '/js/rs.js' ), array(), $tversion, true );
    //wp_enqueue_script( 'ya-share2', 'https://yastatic.net/share2/share.js', array(), false, true );
    wp_localize_script( 'artu-rs', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );
}
add_action( 'wp_enqueue_scripts', 'teheme_styles_scripts' );
function my_get_template_part($template, $data = array()){
    extract($data);
    require locate_template($template.'.php');
}
add_action( 'wp_ajax_check_prodcode', 'check_prodcode_callback' );
function check_prodcode_callback() {
    $rez=[];
    $rez['result']=false;
    $cur_user_id = get_current_user_id();
    if($cur_user_id){
        $user = wp_get_current_user();
        $code = $_REQUEST['act_code'];
        $keys = get_posts(array(
            'numberposts'	=> 1,
            'post_type'		=> 'pl_key',
            'meta_query'	=> array(
                'relation'		=> 'AND',
                array(
                    'key'	 	=> 'key',
                    'value'	  	=> $code,
                    'compare' 	=> '=',
                ),
                /*array(
                    'key'	 	=> 'owner',
                    'compare' => '=',
                    'value' => null,
                ),*/
            ),
        ));
        if(count($keys))
        {
            $key = $keys[0];
            if(get_field('is_baned', $key))
            {
                $rez['is_ban']=1;
            }
            else if(get_field('owner', $key))
            {

            }
            else
            {
                update_field('owner',$user->ID,$key);
                $rez['all_list']=um_account_content_hook_myproducts('');
                $rez['result']=true;
            }
        }
        else
        {
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => "https://api.envato.com/v3/market/author/sale?".http_build_query(['code'=>$code]),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 20,

                CURLOPT_HTTPHEADER => array(
                    "Authorization: ".get_option('envato_login')." ".get_option('envato_token'),
                    "User-Agent: Checking code for the 'Animation Studio' After Effects extenion"
                )
            ));
            $data = curl_exec($ch);
            curl_close($ch);
            $strVer = json_decode($data, true);
            if(array_key_exists('item', $strVer))
            {

                $itemName = $strVer["item"]["name"];
                $buyer = $strVer["buyer"];
                $item_id  =$strVer["item"]["id"];

                $products = get_posts(array(
                    'numberposts'	=> 1,
                    'post_type'		=> 'pl_product',
                    'meta_query'	=> array(
                        'relation'		=> 'AND',
                        array(
                            'key'	 	=> 'item_id',
                            'value'	  	=> $item_id,
                            'compare' 	=> '=',
                        ),
                        /*array(
                            'key'	 	=> 'owner',
                            'compare' => '=',
                            'value' => null,
                        ),*/
                    ),
                ));
                if(count($products)==0)
                {
                    $products = get_posts(array(
                        'numberposts'	=> 1,
                        'post_type'		=> 'pl_product',
                        'title'=>$itemName,
                    ));
                    if(count($products))
                    {
                        $product =$products[0];
                        update_field('item_id',$item_id,$product);
                    }
                }
                if(count($products))
                {
                    $product =$products[0];
                    $key_id = wp_insert_post( array(
                        'post_type'     => 'pl_key',
                        'post_status'   => 'publish',
                        'post_author'   => 1,
                    ));
                    update_field('key',$code,$key_id);
                    update_field('produnct',$product->ID,$key_id);
                    update_field('owner',$user->ID,$key_id);
                    update_field('is_baned',0,$key_id);
                    $rez['all_list']=um_account_content_hook_myproducts('');
                    $rez['result']=true;
                }

            }
        }
        //var_dump($keys);die;
    }
    echo json_encode($rez);
    wp_die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}
add_action( 'wp_ajax_test', function (){
    echo 'test ajax';
    $user = wp_get_current_user();
    //f940d0a6-cd0d-4cf7-960a-0d1cd5a44cf9
    //Transitions - 22834323
    /*$ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://api.envato.com/v3/market/author/sale?".http_build_query(['code'=>'f940d0a6-cd0d-4cf7-960a-0d1cd5a44cf9']),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,

        CURLOPT_HTTPHEADER => array(
            "Authorization: ".get_option('envato_login')." ".get_option('envato_token'),
            "User-Agent: Checking code for the 'Animation Studio' After Effects extenion"
        )
    ));
    $data = curl_exec($ch);
    curl_close($ch);
    $strVer = json_decode($data, true);*/
    var_dump(getUserProducts($user));
    wp_die();
} );
add_action('wp_ajax_cp_change_email',function(){
    $rez=[];
    $rez['result']=false;
    if( wp_verify_nonce( $_REQUEST['_wpnonce'], 'cp_change_email') ) {
        $cur_user_id = get_current_user_id();
        if($cur_user_id){
            if(isset($_REQUEST['email'])&&$_REQUEST['email'])
            {
                if(!is_email($_REQUEST['email']))
                {
                    $rez['msg']='Wrong email!';
                }
                elseif (email_exists( $_REQUEST['email'] ))
                {
                    $rez['msg']='Already exist';
                }
                else
                {
                    $user = wp_get_current_user();
                    //if(wp_update_user(['ID'=>$user->ID ,'user_email'=>strip_tags($_REQUEST['email'])]))
                    //{
                        $rez['result']=true;
                        $rez['email']=strip_tags($_REQUEST['email']);
                        //um_user( 'user_email' );
                        //var_dump(update_meta_cache( 'user', [$cur_user_id] ),um_user( 'user_email' ));
                        //UM()->user()->email_pending();
                        delete_user_meta( $user->ID, 'new_email' );
                        add_user_meta( $user->ID,'new_email',$_REQUEST['email'], true );
                        UM()->user()->assign_secretkey();
                        //UM()->user()->set_status( 'awaiting_email_confirmation' );
                        UM()->mail()->send( strip_tags($_REQUEST['email']), 'checkmail_email' );
                    //}
                }
            }
            else
                $rez['msg']='Email can not be empty!';
        }
        else
            $rez['msg']='No user';
    }
    else
        $rez['msg']='Nonce error';
    echo json_encode($rez);
    wp_die();
});
remove_action( 'init',  array( UM()->permalinks(), 'activate_account_via_email_link' ), 1 );
add_action( 'init',  function (){
    if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'activate_via_email' && isset( $_REQUEST['hash'] ) && is_string( $_REQUEST['hash'] ) && strlen( $_REQUEST['hash'] ) == 40 &&
        isset( $_REQUEST['user_id'] ) && is_numeric( $_REQUEST['user_id'] ) ) { // valid token

        $user_id = absint( $_REQUEST['user_id'] );
        delete_option( "um_cache_userdata_{$user_id}" );

        um_fetch_user( $user_id );

        if ( strtolower( $_REQUEST['hash'] ) !== strtolower( um_user( 'account_secret_hash' ) ) ) {
            wp_die( __( 'This activation link is expired or have already been used.', 'ultimate-member' ) );
        }
        $status = get_user_meta( $user_id, 'account_status', true );
        if($status=='awaiting_email_confirmation')
            UM()->user()->approve();
        else if($status == 'approved')
        {
            $new_email = get_user_meta( $user_id, 'new_email', true );
            //var_dump($user_id,$new_email);die;
            if($new_email)
            {
                if(!email_exists( $new_email ))
                    wp_update_user(['ID'=>$user_id ,'user_email'=>strip_tags($new_email)]);
                delete_user_meta( $user_id, 'new_email' );
            }
        }
        $redirect = ( um_user( 'url_email_activate' ) ) ? um_user( 'url_email_activate' ) : um_get_core_page( 'login', 'account_active' );
        $login    = (bool) um_user( 'login_email_activate' );

        // log in automatically
        if ( ! is_user_logged_in() && $login ) {
            $user = get_userdata( $user_id );
            $user_id = $user->ID;

            // update wp user
            wp_set_current_user( $user_id, $user->user_login );
            wp_set_auth_cookie( $user_id );

            ob_start();
            do_action( 'wp_login', $user->user_login, $user );
            ob_end_clean();
        }

        um_reset_user();
        /**
         * UM hook
         *
         * @type action
         * @title um_after_email_confirmation
         * @description Action on user activation
         * @input_vars
         * [{"var":"$user_id","type":"int","desc":"User ID"}]
         * @change_log
         * ["Since: 2.0"]
         * @usage add_action( 'um_after_email_confirmation', 'function_name', 10, 1 );
         * @example
         * <?php
         * add_action( 'um_after_email_confirmation', 'my_after_email_confirmation', 10, 1 );
         * function my_after_email_confirmation( $user_id ) {
         *     // your code here
         * }
         * ?>
         */
        do_action( 'um_after_email_confirmation', $user_id );

        exit( wp_redirect( $redirect ) );

    }
}, 1 );
/*add_action( 'um_after_email_confirmation', function($user_id){
    $new_email = get_user_meta( $user_id, 'new_email', true );
    //var_dump($user_id,$new_email);die;
    if($new_email)
    {
        if(!email_exists( $new_email ))
            wp_update_user(['ID'=>$user_id ,'user_email'=>strip_tags($new_email)]);
        delete_user_meta( $user_id, 'new_email' );
    }
} );*/
add_action('wp_ajax_cp_change_name',function(){
    $rez=[];
    $rez['result']=false;
    //if( wp_verify_nonce( $_REQUEST['_wpnonce'], 'cp_change_name') ){
        // обрабатываем данные формы
        $cur_user_id = get_current_user_id();
        if($cur_user_id){
            if(isset($_REQUEST['name'])&&$_REQUEST['name'])
            {
                $user = wp_get_current_user();
                wp_update_user(['ID'=>$user->ID ,'nickname'=>strip_tags($_REQUEST['name'])]);
                $rez['result']=true;
                $rez['name']=strip_tags($_REQUEST['name']);
            }
            else
                $rez['msg']='Name can not be empty!';
        }
        else
            $rez['msg']='No user';
    //}
    //else
    //    $rez['msg']='Nonce error';
    echo json_encode($rez);
    wp_die();
});
add_action('wp_ajax_cp_ver_password',function(){
    $rez=[];
    $rez['result']=false;
    if( wp_verify_nonce( $_REQUEST['_wpnonce'], 'cp_ver_password') ){
        // обрабатываем данные формы
        $cur_user_id = get_current_user_id();
        if($cur_user_id){
            $user = wp_get_current_user();
            if(isset($_REQUEST['current_password'])&&$_REQUEST['current_password']){
                if(wp_check_password( $_REQUEST['current_password'], $user->data->user_pass, $user->ID ))
                    $rez['result']=true;
                else
                    $rez['msg']='Wrong password';
            }
            else
                $rez['msg']='Password can not be empty!';
        }
        else
            $rez['msg']='No user';
    }
    else
        $rez['msg']='Nonce error';
    echo json_encode($rez);
    wp_die();
});
add_action('wp_ajax_cp_change_password',function(){
    $rez=[];
    $rez['result']=false;
    if( wp_verify_nonce( $_REQUEST['_wpnonce'], 'cp_change_password') ){
        // обрабатываем данные формы
        $cur_user_id = get_current_user_id();
        if($cur_user_id){
            $user = wp_get_current_user();
            if(isset($_REQUEST['current_password'])&&$_REQUEST['current_password']){
                if(isset($_REQUEST['new_password'])&&$_REQUEST['new_password']){
                    if(isset($_REQUEST['confirm_new_password'])&&$_REQUEST['confirm_new_password']){
                        if($_REQUEST['new_password']==$_REQUEST['confirm_new_password']){
                            if(UM()->validation()->strong_pass( $_REQUEST['new_password'])){
                                if(wp_check_password( $_REQUEST['current_password'], $user->data->user_pass, $user->ID ))
                                {
                                    wp_update_user(['ID'=>$user->ID ,'user_pass'=>$_REQUEST['new_password']]);
                                    $rez['result']=true;
                                }
                                else
                                    $rez['msg']='Wrong old password';
                            }
                            else
                            {
                                $rez['msg']=__('Your password must contain at least one lowercase letter, one capital letter and one number', 'ultimate-member' );
                                $rez['errors']=['new_password'=>__('Your password must contain at least one lowercase letter, one capital letter and one number', 'ultimate-member' )];
                            }

                        }
                        else
                        {
                            $rez['msg']='New password and Confirm password not equal!';
                            $rez['errors']=['confirm_new_password'=>'New password and Confirm password not equal!'];
                        }
                    }
                    else
                    {
                        $rez['msg']='Confirm password can not be empty!';
                        $rez['errors']=['confirm_new_password'=>'Confirm password can not be empty!'];
                    }
                }
                else
                {
                    $rez['msg']='New password can not be empty!';
                    $rez['errors']=['new_password'=>'New password can not be empty!'];
                }
            }
            else
                $rez['msg']='Password can not be empty!';
        }
        else
            $rez['msg']='No user';
    }
    else
        $rez['msg']='Nonce error';
    echo json_encode($rez);
    wp_die();//UM()->validation()->strong_pass( $args[ $key ] )
});
add_action( 'wp_ajax_unlink_pc', function (){
    $rez=[];
    $rez['result']=false;
    if(isset($_REQUEST['id']))
    {
        $cur_user_id = get_current_user_id();
        if($cur_user_id){
            $user = wp_get_current_user();
            $comps = get_field('comps',$user);
            foreach ($comps as $in=>$comp)
                if($comp['inner_id']==$_REQUEST['id'])
                {
                    delete_row('comps',$in+1,$user);
                    $rez['result']=true;
                }
            if(!$rez['result'])
                $rez['msg']='Id not found';
        }
    }
    else
        $rez['msg']='No Id';
    echo json_encode($rez);
    wp_die();
} );
function artu_widgets_init() {

    register_widget(  'main_benefits_widget');
    register_widget(  'main_benefits2_widget');
    register_widget(  'main_hero_widget');
    register_widget(  'main_hero2_widget');
    register_widget(  'main_img_way_widget');
    register_widget(  'main_nitrozime_widget');
    register_widget(  'main_prods_already_widget');
    register_widget(  'main_prods_already2_widget');
    register_widget(  'main_subscribe_widget');
    register_widget(  'main_waytocreate_widget');
    register_widget(  'main_requirements_widget');
    register_sidebar(
        array(
            'name'          => __( 'Main', 'artuplugins' ),
            'id'            => 'main',
            'description'   => __( 'Blocks on main page', 'artuplugins' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

}
add_action( 'widgets_init', 'artu_widgets_init' );
add_action('wp_sc_ajax_get_plugins_list',function (){
    if(!isset($_REQUEST['login'])&&$_REQUEST['login'])
        wp_send_json( ['result'=>false,'message'=>'Login must be not empty'] );
    if(!isset($_REQUEST['password'])&&$_REQUEST['password'])
        wp_send_json( ['result'=>false,'message'=>'Password must be not empty'] );
    if(!isset($_REQUEST['hwd_info']))
        wp_send_json( ['result'=>false,'message'=>'hwd_info must be not empty'] );
    if(!is_array($_REQUEST['hwd_info'])||!isset($_REQUEST['hwd_info']['hwd_id'])||!isset($_REQUEST['hwd_info']['name'])||!isset($_REQUEST['hwd_info']['os']))
        wp_send_json( ['result'=>false,'message'=>'hwd_info must be an array([hwd_id,name,os])'] );
    $user = get_user_by( 'email', $_REQUEST['login'] );
    if(!$user)
        $user = get_user_by( 'login', $_REQUEST['login'] );
    if(!$user||!wp_check_password( $_REQUEST['password'], $user->user_pass ))
        wp_send_json( ['result'=>false,'message'=>'Wrong login or password'] );
    $status = get_user_meta( $user->ID, 'account_status', true );
    if ( $status=='banned' )
        wp_send_json( ['result'=>false,'message'=>'User is inactive'] );
    $comps = get_field('comps',$user);
    if(!is_array($comps))
        $comps =[];
    $reged_pc = false;
    foreach ($comps as $in=>$comp)
        if($comp['id']==$_REQUEST['hwd_info']['hwd_id'])
            $reged_pc = $comp;
    if(!$reged_pc&&count($comps)>=2)
        wp_send_json( ['result'=>false,'message'=>'Install limit reached'] );
    if(!$reged_pc)
        add_row('comps',['id'=>$_REQUEST['hwd_info']['hwd_id'],'inner_id'=>generateRandomString(),'name'=>$_REQUEST['hwd_info']['name'],'os'=>$_REQUEST['hwd_info']['os']],$user);
    $rez = [];
    foreach (getUserProducts($user) as $prodd)
        $rez[] = ['prod_name'=>get_field('packName',$prodd),'item_id'=>get_field('item_id',$prodd)];

    wp_send_json( ['result'=>true,'list'=>$rez] );
});
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function getUserProducts($user)
{
    $keys = get_posts(array(
        'numberposts'	=> -1,
        'post_type'		=> 'pl_key',
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	 => 'owner',
                'compare' => '=',
                'value' => is_object($user)?$user->id:$user,
            ),
            array(
                'key'	 => 'is_baned',
                'compare' => '!=',
                'value' => 1,
            ),
        ),
    ));
    $prods_ids = [];
    foreach ($keys as $key)
    {
       $p_id = get_post_meta($key->ID,'produnct',true);
       if(!in_array($p_id,$prods_ids))
           $prods_ids[]=$p_id;
    }
    if(count($prods_ids)>0)
    {
        $products = get_posts(array(
            'numberposts'	=> -1,
            'post_type'		=> 'pl_product',
            'post__in'=>$prods_ids,
        ));
        return $products;
    }
    else
        return [];
}
add_filter('manage_pl_key_posts_columns', function ($defaults){
    $date = $defaults['date'];
    unset($defaults['title']);
    unset($defaults['date']);
    $defaults['key']='Ключ';
    $defaults['product']='Продукт';
    $defaults['owner']='Владелец';
    $defaults['date']=$date;
    return $defaults;
}, 10);
add_action('manage_pl_key_posts_custom_column', function ($column_name, $post_ID){
    switch ($column_name)
    {
        case 'key':
            the_field('key', $post_ID);
            break;
        case 'product':
            echo get_field('produnct', $post_ID)->post_title;
            break;
        case 'owner':
            $owner = get_field('owner', $post_ID);
            if($owner)
            echo $owner->nickname;
            else
                echo 'Нет';
            break;
    }
}, 10, 2);
add_action('show_user_profile','cf_show_users_keys' ,10);
add_action('edit_user_profile','cf_show_users_keys' ,10);
function cf_show_users_keys ($user) {
    ?>
    <div>
        <h3>Ключи</h3>
        <?php $keys = get_posts(array(
            'numberposts'	=> -1,
            'post_type'		=> 'pl_key',
            'meta_query'	=> array(
                'relation'		=> 'AND',
                array(
                    'key'	 	=> 'owner',
                    'value'	  	=> $user->ID,
                    'compare' 	=> '=',
                ),
            ),/**/
        ));
        if($keys)
        {
            ?>
            <table class="widefat fixed">
                <thead>
                <tr>
                    <th class="manage-column column-columnname" scope="col">Ключ</th>
                    <th class="manage-column column-columnname" scope="col">Продукт</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($keys as $key):
                    $produnct = get_field('produnct', $key);
                    //$owner = get_field('owner', $key);?>
                    <tr>
                        <td class="column-columnname"><a href="<?=admin_url('post.php?'.http_build_query(['action'=>'edit','post'=>$key->ID])); ?>"><?= get_field('key', $key)?></a></td>
                        <td class="column-columnname"><a href="<?=admin_url('post.php?'.http_build_query(['action'=>'edit','post'=>$produnct->ID])); ?>"><?= $produnct->post_title?></a></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <?php
        }
        else
            echo 'Нет ключей!';
        ?>
    </div>
    <?php
    //var_dump($keys);
}
add_action( 'admin_init', function (){
    register_setting(
        'general',
        'envato_login',
        array(
            /*'show_in_rest' => array(
                'name' => 'title',
            ),*/
            'type'         => 'string',
            'description'  => __( 'Envato Login' ),
        )
    );
    register_setting(
        'general',
        'envato_token',
        array(
            /*'show_in_rest' => array(
                'name' => 'title',
            ),*/
            'type'         => 'string',
            'description'  => __( 'Envato Token' ),
        )
    );
    add_settings_field(
        'envato_login-id',
        'Envato Login',
        'myprefix_setting_callback_function',
        'general',
        'default',
        array(
            'id' => 'envato_login-id',
            'option_name' => 'envato_login'
        )
    );
    add_settings_field(
        'envato_token-id',
        'Envato Token',
        'myprefix_setting_callback_function',
        'general',
        'default',
        array(
            'id' => 'envato_token-id',
            'option_name' => 'envato_token'
        )
    );

} );
function myprefix_setting_callback_function( $val ){
    $id = $val['id'];
    $option_name = $val['option_name'];
    ?>
    <input
            type="text"
            name="<? echo $option_name ?>"
            id="<? echo $id ?>"
            value="<? echo esc_attr( get_option($option_name) ) ?>"
    />
    <?
}
function isMac()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_array     = array(
        '~(macintosh|mac os x)~i',
        '~mac_powerpc~i',
        '~iphone~i',
        '~ipod~i',
        '~ipad~i',
    );
    foreach ($os_array as $regex)
        if (preg_match($regex, $user_agent))
            return true;
    return false;
}
add_filter( 'um_admin_views_users', function ($views){
    if ( isset( $_REQUEST['status'] ) && sanitize_key( $_REQUEST['status'] ) == 'banned' ) {
        $current = 'class="current"';
    } else {
        $current = '';
    }
    $views[ 'banned' ] = '<a href="' . esc_url( admin_url( 'users.php' ) . '?status=banned' ) . '" ' . $current . '>Banned <span class="count">(' . UM()->query()->count_users_by_status( 'banned' ) . ')</span></a>';
    //var_dump($views);
    return $views;
} );
add_filter( 'um_admin_bulk_user_actions_hook',function ($actions){
    $actions['um_ban']         =array(
        'label' => __( 'Ban', 'ultimate-member' )
    );
    $actions['um_unban']         =array(
        'label' => __( 'Unban', 'ultimate-member' )
    );
    return $actions;
});
add_action( "um_admin_custom_hook_um_ban", function ($uid) {
    $user_id = um_user('ID');
    $status = get_user_meta( $user_id, 'account_status', true );
    if($status!='banned'){
        delete_user_meta( $user_id, 'pre_ban_status' );
        add_user_meta( $user_id,'pre_ban_status',$status, true );
        delete_user_meta( $user_id, 'account_status_name');
        add_user_meta( $user_id,'account_status_name',__( 'Banned', 'ultimate-member' ), true );
        delete_user_meta( $user_id,'account_secret_hash');
        UM()->user()->set_status('banned');
    }
});
add_action( "um_admin_custom_hook_um_unban", function ($uid) {
    $user_id = um_user('ID');
    $status = get_user_meta( $user_id, 'account_status', true );
    if($status=='banned'){
        $old_status = get_user_meta( $user_id, 'pre_ban_status', true );
        UM()->user()->set_status($old_status);
    }
});
add_action( 'set_current_user', function (){
    global $current_user;
    //var_dump($current_user);die;
    if ( ! empty( $current_user ) ) {
        if ( $current_user instanceof WP_User ) {
            $status = get_user_meta( $current_user->ID, 'account_status', true );
            if($status=='banned')
                wp_set_current_user( 0 );
        }
    }

} );
add_action( 'init', 'log_out_banned_user' );
function log_out_banned_user() {
    if ( ! is_user_logged_in() )
        return;

    $user = wp_get_current_user();
    $status = get_user_meta( $user->ID, 'account_status', true );
    if ( $status!='banned' )
        return;

    wp_logout();
    wp_redirect( home_url( '/' ) );
    exit;
}
remove_action( 'um_submit_form_errors_hook_login', 'um_submit_form_errors_hook_login', 10 );
function um_custom_submit_form_errors_hook_login( $args ) {
    $is_email = false;

    $form_id = $args['form_id'];
    $mode = $args['mode'];
    $user_password = $args['user_password'];


    if ( isset( $args['username'] ) && $args['username'] == '' ) {
        UM()->form()->add_error( 'username', __( 'Please enter your username or email', 'ultimate-member' ) );
    }

    if ( isset( $args['user_login'] ) && $args['user_login'] == '' ) {
        UM()->form()->add_error( 'user_login', __( 'Please enter your username', 'ultimate-member' ) );
    }

    if ( isset( $args['user_email'] ) && $args['user_email'] == '' ) {
        UM()->form()->add_error( 'user_email', __( 'Please enter your email', 'ultimate-member' ) );
    }

    if ( isset( $args['username'] ) ) {
        $authenticate = $args['username'];
        $field = 'username';
        if ( is_email( $args['username'] ) ) {
            $is_email = true;
            $data = get_user_by('email', $args['username'] );
            $user_name = isset( $data->user_login ) ? $data->user_login : null;
        } else {
            $user_name  = $args['username'];
        }
    } elseif ( isset( $args['user_email'] ) ) {
        $authenticate = $args['user_email'];
        $field = 'user_email';
        $is_email = true;
        $data = get_user_by('email', $args['user_email'] );
        $user_name = isset( $data->user_login ) ? $data->user_login : null;
    } else {
        $field = 'user_login';
        $user_name = $args['user_login'];
        $authenticate = $args['user_login'];
    }

    if ( $args['user_password'] == '' ) {
        UM()->form()->add_error( 'user_password', __( 'Please enter your password', 'ultimate-member' ) );
    }

    $user = get_user_by( 'login', $user_name );
    $status = get_user_meta( $user->ID, 'account_status', true );
    if ( $status=='banned' )
    {
        if ( isset( $args['username'] ))
            UM()->form()->add_error( 'username', __( 'User is banned', 'ultimate-member' ) );
        elseif ( isset( $args['user_login'] ))
            UM()->form()->add_error( 'user_login', __( 'User is banned', 'ultimate-member' ) );
        elseif ( isset( $args['user_email'] ))
            UM()->form()->add_error( 'user_email', __( 'User is banned', 'ultimate-member' ) );
        else
            UM()->form()->add_error( 'user_password', __( 'User is banned', 'ultimate-member' ) );
    }

    if ( $user && wp_check_password( $args['user_password'], $user->data->user_pass, $user->ID ) ) {
        UM()->login()->auth_id = username_exists( $user_name );
    } else {
        UM()->form()->add_error( 'user_password', __( 'Password is incorrect. Please try again.', 'ultimate-member' ) );
    }

    // @since 4.18 replacement for 'wp_login_failed' action hook
    // see WP function wp_authenticate()
    $ignore_codes = array( 'empty_username', 'empty_password' );

    $user = apply_filters( 'authenticate', null, $authenticate, $args['user_password'] );
    if ( is_wp_error( $user ) && ! in_array( $user->get_error_code(), $ignore_codes ) ) {
        UM()->form()->add_error( $user->get_error_code(), __( $user->get_error_message(), 'ultimate-member' ) );
    }

    $authenticate_user = apply_filters( 'wp_authenticate_user', $user_name, $args['user_password'] );
    if ( is_wp_error( $authenticate_user ) && ! in_array( $authenticate_user->get_error_code(), $ignore_codes ) ) {
        UM()->form()->add_error( $authenticate_user->get_error_code(), __( $authenticate_user->get_error_message(), 'ultimate-member' ) );
    }

    // if there is an error notify wp
    if ( UM()->form()->has_error( $field ) || UM()->form()->has_error( $user_password ) || UM()->form()->count_errors() > 0 ) {
        do_action( 'wp_login_failed', $user_name );
    }
}
add_action( 'um_submit_form_errors_hook_login', 'um_custom_submit_form_errors_hook_login', 10 );
remove_action( 'um_submit_form_register', 'um_submit_form_register', 10 );
function um_custom_submit_form_register( $args ) {
    if ( isset( UM()->form()->errors ) ) {
        return false;
    }

    /**
     * UM hook
     *
     * @type filter
     * @title um_add_user_frontend_submitted
     * @description Extend user data on registration form submit
     * @input_vars
     * [{"var":"$submitted","type":"array","desc":"Registration data"}]
     * @change_log
     * ["Since: 2.0"]
     * @usage
     * <?php add_filter( 'um_add_user_frontend_submitted', 'function_name', 10, 1 ); ?>
     * @example
     * <?php
     * add_filter( 'um_add_user_frontend_submitted', 'my_add_user_frontend_submitted', 10, 1 );
     * function my_add_user_frontend_submitted( $submitted ) {
     *     // your code here
     *     return $submitted;
     * }
     * ?>
     */
    $args = apply_filters( 'um_add_user_frontend_submitted', $args );

    extract( $args );
    $unique_userID = UM()->query()->count_users() + 1;
    if ( empty( $user_login ) ) {
        $user_login = 'user' . $unique_userID;
    }

    if ( ! empty( $username ) && empty( $user_login ) ) {
        $user_login = $username;
    }

    if ( ! empty( $first_name ) && ! empty( $last_name ) && empty( $user_login ) ) {

        if ( UM()->options()->get( 'permalink_base' ) == 'name' ) {
            $user_login = rawurlencode( strtolower( str_replace( " ", ".", $first_name . " " . $last_name ) ) );
        } elseif ( UM()->options()->get( 'permalink_base' ) == 'name_dash' ) {
            $user_login = rawurlencode( strtolower( str_replace( " ", "-", $first_name . " " . $last_name ) ) );
        } elseif ( UM()->options()->get( 'permalink_base' ) == 'name_plus' ) {
            $user_login = strtolower( str_replace( " ", "+", $first_name . " " . $last_name ) );
        } else {
            $user_login = strtolower( str_replace( " ", "", $first_name . " " . $last_name ) );
        }

        // if full name exists
        $count = 1;
        $temp_user_login = $user_login;
        while ( username_exists( $temp_user_login ) ) {
            $temp_user_login = $user_login . $count;
            $count++;
        }
        if ( $temp_user_login !== $user_login ) {
            $user_login = $temp_user_login;
        }
    }

    if ( empty( $user_login ) && ! empty( $user_email ) ) {
        $user_login = $user_email;
    }



    if ( empty( $user_login ) || strlen( $user_login ) > 30 && ! is_email( $user_login ) ) {
        $user_login = 'user' . $unique_userID;
    }

    if ( isset( $username ) && is_email( $username ) ) {
        $user_email = $username;
    }

    if ( ! isset( $user_password ) ) {
        $user_password = UM()->validation()->generate( 8 );
    }

    if ( empty( $user_email ) ) {
        $site_url = @$_SERVER['SERVER_NAME'];
        $user_email = 'nobody' . $unique_userID . '@' . $site_url;
        /**
         * UM hook
         *
         * @type filter
         * @title um_user_register_submitted__email
         * @description Change user default email if it's empty on registration
         * @input_vars
         * [{"var":"$user_email","type":"string","desc":"Default email"}]
         * @change_log
         * ["Since: 2.0"]
         * @usage
         * <?php add_filter( 'um_user_register_submitted__email', 'function_name', 10, 1 ); ?>
         * @example
         * <?php
         * add_filter( 'um_user_register_submitted__email', 'my_user_register_submitted__email', 10, 1 );
         * function my_user_register_submitted__email( $user_email ) {
         *     // your code here
         *     return $user_email;
         * }
         * ?>
         */
        $user_email = apply_filters( 'um_user_register_submitted__email', $user_email );
    }

    $credentials = array(
        'user_login'    => $user_login,
        'user_password' => $user_password,
        'user_email'    => trim( $user_email ),
    );

    $args['submitted'] = array_merge( $args['submitted'], $credentials );
    $args = array_merge( $args, $credentials );

    //get user role from global or form's settings
    $user_role = UM()->form()->assigned_role( UM()->form()->form_id );

    //get user role from field Role dropdown or radio
    if ( isset( $args['role'] ) ) {
        global $wp_roles;
        $um_roles = get_option( 'um_roles' );

        if ( ! empty( $um_roles ) ) {
            $role_keys = array_map( function( $item ) {
                return 'um_' . $item;
            }, get_option( 'um_roles' ) );
        } else {
            $role_keys = array();
        }

        $exclude_roles = array_diff( array_keys( $wp_roles->roles ), array_merge( $role_keys, array( 'subscriber' ) ) );

        //if role is properly set it
        if ( ! in_array( $args['role'], $exclude_roles ) ) {
            $user_role = $args['role'];
        }
    }

    /**
     * UM hook
     *
     * @type filter
     * @title um_registration_user_role
     * @description Change user role on registration process
     * @input_vars
     * [{"var":"$role","type":"string","desc":"User role"},
     * {"var":"$submitted","type":"array","desc":"Registration data"}]
     * @change_log
     * ["Since: 2.0"]
     * @usage
     * <?php add_filter( 'um_registration_user_role', 'function_name', 10, 2 ); ?>
     * @example
     * <?php
     * add_filter( 'um_registration_user_role', 'my_registration_user_role', 10, 2 );
     * function my_user_register_submitted__email( $role, $submitted ) {
     *     // your code here
     *     return $role;
     * }
     * ?>
     */
    $user_role = apply_filters( 'um_registration_user_role', $user_role, $args );

    $userdata = array(
        'user_login'    => $user_login,
        'user_pass'     => $user_password,
        'user_email'    => $user_email,
        'role'          => $user_role,
    );

    $user_id = wp_insert_user( $userdata );

    /**
     * UM hook
     *
     * @type action
     * @title um_user_register
     * @description After complete UM user registration.
     * @input_vars
     * [{"var":"$user_id","type":"int","desc":"User ID"},
     * {"var":"$args","type":"array","desc":"Form data"}]
     * @change_log
     * ["Since: 2.0"]
     * @usage add_action( 'um_user_register', 'function_name', 10, 2 );
     * @example
     * <?php
     * add_action( 'um_user_register', 'my_user_register', 10, 2 );
     * function my_user_register( $user_id, $args ) {
     *     // your code here
     * }
     * ?>
     */
    do_action( 'um_user_register', $user_id, $args );

    return $user_id;
}
add_action( 'um_submit_form_register', 'um_custom_submit_form_register', 10 );
add_filter( 'manage_users_custom_column', function ($val, $column_name, $user_id){
    //var_dump($column_name);
    return $val;
}, 11, 3 );
remove_action( 'um_submit_form_errors_hook_logincheck', 'um_submit_form_errors_hook_logincheck', 9999 );
function um_custom_submit_form_errors_hook_logincheck( $args ) {
    // Logout if logged in
    if ( is_user_logged_in() ) {
        wp_logout();
    }

    $user_id = ( isset( UM()->login()->auth_id ) ) ? UM()->login()->auth_id : '';
    um_fetch_user( $user_id );
    $status = um_user( 'account_status' ); // account status
    switch( $status ) {
        case 'awaiting_email_confirmation':
            UM()->form()->add_error( 'username', __( 'Your account is awaiting e-mail verification.', 'ultimate-member' ) );
            UM()->user()->assign_secretkey();
            UM()->mail()->send( um_user( 'user_email' ), 'checkmail_email' );
            exit( wp_redirect(  add_query_arg( 'err', esc_attr( $status ), '/confirm-email/' ) ) );
            break;
        // If user can't login to site...
        case 'inactive':
        case 'awaiting_admin_review':
        case 'rejected':
            um_reset_user();
            exit( wp_redirect(  add_query_arg( 'err', esc_attr( $status ), UM()->permalinks()->get_current_url() ) ) );
            break;

    }

    if ( isset( $args['form_id'] ) && $args['form_id'] == UM()->shortcodes()->core_login_form() && UM()->form()->errors && ! isset( $_POST[ UM()->honeypot ] ) ) {
        exit( wp_redirect( um_get_core_page( 'login' ) ) );
    }

}
add_action('um_reset_password_errors_hook',function ($post_form){
    $user = "";

    foreach ( $_POST as $key => $val ) {
        if ( strstr( $key, "username_b") ) {
            $user = trim( $val );
        }
    }
    if (!( ( ! is_email( $user ) && ! username_exists( $user ) ) || ( is_email( $user ) && ! email_exists( $user ) ) ))
    {
        if ( is_email( $user ) ) {
            $user_id = email_exists( $user );
        } else {
            $user_id = username_exists( $user );
        }
        $status = get_user_meta( $user_id, 'account_status', true );
        if($status=='awaiting_email_confirmation')
            UM()->form()->add_error('username_b', __( 'Your account is awaiting e-mail verification.','ultimate-member') );
        //var_dump($post_form);
    }
    //die;
});
add_action( 'um_submit_form_errors_hook_logincheck', 'um_custom_submit_form_errors_hook_logincheck', 9999 );
add_filter('acf/update_value/name=is_baned', function ( $value, $post_id, $field ) {
    if($field['name'] == 'is_baned'&&get_post_type($post_id)=='pl_key'&&!get_field('is_baned', $post_id)&&$value)
    {
        $owner = get_field('owner', $post_id);
        if($owner)
        {
            $status = get_user_meta( $owner->ID, 'account_status', true );
            if($status!='banned'){
                delete_user_meta( $owner->ID, 'pre_ban_status' );
                add_user_meta( $owner->ID,'pre_ban_status',$status, true );
                delete_user_meta( $owner->ID, 'account_status_name');
                add_user_meta( $owner->ID,'account_status_name',__( 'Banned', 'ultimate-member' ), true );
                delete_user_meta( $owner->ID,'account_secret_hash');

                do_action( 'um_when_status_is_set', $owner->ID );
                delete_user_meta( $owner->ID, 'account_status' );
                update_user_meta( $owner->ID, 'account_status', 'banned' );
                do_action( 'um_after_user_status_is_changed_hook', $owner->ID );
                do_action( 'um_after_user_status_is_changed', $status, $owner->ID );
                //UM()->user()->set_status('banned');
            }
        }

    }
    return $value;
}, 10, 3);
/*function pl_key_custom_filters() {
    global $typenow;
    global $wp_query;
    if ( $typenow == 'pl_key' ) { // Your custom post type slug
        $products = get_posts(array(
            'numberposts'	=> -1,
            'post_type'		=> 'pl_product',
        ));
        $current = '';
        if( isset( $_GET['pl_product'] ) ) {
            $current = $_GET['pl_product']; // Check if option has been selected
        } ?>
        <select name="pl_product" id="pl_product">
            <option value="all" <?php selected( 'all', $current ); ?>><?php _e( 'All', 'wisdom-plugin' ); ?></option>
            <?php foreach( $products as $key=>$value ) { ?>
                <option value="<?php echo esc_attr( $value->ID ); ?>" <?php selected( $value->ID, $current ); ?>><?php echo esc_attr( $value->post_title ); ?></option>
            <?php } ?>
        </select>
    <?php }
}
add_action( 'restrict_manage_posts', 'pl_key_custom_filters' );
function pl_key_custom_filters_callbeck( $query ) {
    global $pagenow;
    // Get the post type
    $post_type = isset( $_GET['post_type'] ) ? $_GET['post_type'] : '';

    if( is_admin() && $pagenow=='edit.php' && $post_type == 'pl_key' ){
        $meta_query = $query->get('meta_query');
        unset($query->query['pl_product']);
        unset($query->query_vars['pl_product']);
        if( isset( $_GET['pl_product'] ) && $_GET['pl_product'] !='all' ){
            if(!$meta_query)
                $meta_query=['relation'=>'AND'];
            $meta_query[]=[
                'key' => 'produnct',
                'value' => $_GET['pl_product'],
                'compare'=>'==',
            ];
        }
        if($meta_query)
            $query->set('meta_query',$meta_query);
    }
    var_dump($query->get('meta_query'),$query);die;
    //return $query;
}
add_filter( 'pre_get_posts', 'pl_key_custom_filters_callbeck' );*/
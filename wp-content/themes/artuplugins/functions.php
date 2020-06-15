<?php
require get_template_directory() . '/classes/head_nav.php';
require get_template_directory() . '/classes/footer_nav.php';
require get_template_directory() . '/classes/um-functions.php';
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
    register_post_type('pl-product', array(
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
        $post = get_post( $_POST['product']);
        if($post)
        {
             $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, 'http://envato.nitrozme.com/check_pursh/chpurnitrozme.php?purchase='.urlencode($_POST['act_code']).'&packName='.urlencode(get_field('packName',$post)));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //curl_setopt($curl, CURLOPT_POST, true);
            $out = curl_exec($curl);
            curl_close($curl);
            if(in_array($out,['102#','101#']))
            {/**/
                add_row('products',['product'=>$post->ID,'pur_Code'=>$_POST['act_code']],$user);
                $rez['all_list']=um_account_content_hook_myproducts('');
                $rez['result']=true;
             }
             else
             {
                 if($out=='Ahhh man! You are pirate now... You are breaking the law now! The best way for you is - purchase this package on videohive.net/user/nitrozme once and enjoy regular updates and customers support')
                     $rez['is_ban']=1;
             }/**/
        }
    }
    echo json_encode($rez);
    wp_die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}

add_action('wp_sc_ajax_get_plugins_list',function (){
        $user = get_user_by( 'login', $_REQUEST['login'] );
    if(!$user)
        $user = get_user_by( 'email', $_REQUEST['login'] );
    if(!$user||!wp_check_password( $_REQUEST['password'], $user->user_pass ))
        wp_send_json( ['result'=>false,'messege'=>'Wrong loginor password'] );

    $rez = [];
    foreach (get_field('products',$user) as $prodd)
        $rez = ['prod_name'=>get_field('packName',$prodd['product']),'pur_Code'=>$prodd['pur_Code']];

    wp_send_json( ['result'=>true,'list'=>$rez] );
});
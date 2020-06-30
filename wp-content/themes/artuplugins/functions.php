<?php
require get_template_directory() . '/classes/head_nav.php';
require get_template_directory() . '/classes/footer_nav.php';
require get_template_directory() . '/classes/um-functions.php';
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
    $user = get_user_by( 'login', $_REQUEST['login'] );
    if(!$user)
        $user = get_user_by( 'email', $_REQUEST['login'] );
    if(!$user||!wp_check_password( $_REQUEST['password'], $user->user_pass ))
        wp_send_json( ['result'=>false,'message'=>'Wrong login or password'] );
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
        add_row('products',['id'=>$_REQUEST['hwd_info']['hwd_id'],'inner_id'=>generateRandomString(),'name'=>$_REQUEST['hwd_info']['name'],'os'=>$_REQUEST['hwd_info']['os']],$user);
    $rez = [];
    foreach (get_field('products',$user) as $prodd)
        $rez[] = ['prod_name'=>get_field('packName',$prodd['product']),'pur_Code'=>$prodd['pur_Code']];

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
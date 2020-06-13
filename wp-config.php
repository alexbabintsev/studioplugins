<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'artuplugins' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X@$:PUl0_T[ITl/&Qo3j=}5skFT,BBJ9OgFLIA1YSp{^u9:YNaxaY/1v#BU,Ngo;' );
define( 'SECURE_AUTH_KEY',  'e2yZ<XZsj`{nK6&>=^n1=S/.K?R;kp.73D/s{SYk2:joEcAvY6Vo^|u6IRhY>Jhc' );
define( 'LOGGED_IN_KEY',    'Z>n]g]uW-:Xc[W yWT#/O7v<sgn)&@ g+h?Db!>#24kB/.5r+J3}pxIbL?u_3Piv' );
define( 'NONCE_KEY',        'RO+35swbJ$a59Mco=;;Z:qCS?XQGz#hc4cn3 ;mTgL:*@ddZx>IFI6vjRT_9<zx!' );
define( 'AUTH_SALT',        '=zN~!w;^eID5k%|q5k]uWs9CJV_nfgx:)xxS}`fyH[X&T,aVOQ95fKprbbl^Z3Mv' );
define( 'SECURE_AUTH_SALT', 'O~ubp7<uaw-?g@-&Fs4Q{buv65q$]`($cKd(b^olte~f@Jw>/=[]oiO**|qkD]}z' );
define( 'LOGGED_IN_SALT',   'RP];rgd20$1XVOd!u:>e!!lW6/LYh@:qSG(pQ`=<}2G)=Gqx7@Sn4+ttST(+Z=]?' );
define( 'NONCE_SALT',       '_ -JaR_LQq|xSuyuz7Wf>`~E!1Muj-8Yr(oUFAohRRg&A7GuWR&IeqJQpN2C6w+R' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

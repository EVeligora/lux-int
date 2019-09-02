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
define( 'DB_NAME', 'luxium-wp' );

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
define( 'AUTH_KEY',         'dv`Y#$<b$kJ_NDsfTs2WF}<)F[xcb]H~fwd<}.h8|!iIM7a-vyBYE!cq+9e{Wu/b' );
define( 'SECURE_AUTH_KEY',  '8&mg8E%OT[G29 KOG+J<wgzSIAEL%=f-+sB~(eVN*WIYv9jqjM@3q)[Wl$VU^NSl' );
define( 'LOGGED_IN_KEY',    'IJ?^?%21D44JR>o#*zpsuA-[x ncsw:{]v!WDE2|/;<w0<*Mx#?J#Q)xnlWSz+iQ' );
define( 'NONCE_KEY',        'XySQL2hlYzjAoHmoW?E5foff}J@d2iLQHzBAN)|R&A7[/ZH@.?1h5w+>(k>5ER=@' );
define( 'AUTH_SALT',        ':yav- }dF$DIY*:bVT+Ru=o<75@EB*WZXhfR*X./y8br=G69^GrkUtU~8Zbw2O`b' );
define( 'SECURE_AUTH_SALT', 'yNj{c<|u,v9h|p)(Xw#:t1-{9`(q!VLaG(!ZW280$@sDUn4FE$m%vD?~1STG<|B5' );
define( 'LOGGED_IN_SALT',   ' eHVg4p(D2|Ay%*z1{Ir`%ArndF5c/)h1IWHDN6ss6/2GYQLryhsD/2C<vhOUyW-' );
define( 'NONCE_SALT',       'w({=Evp|>uH%@.9b}R}QvzHA&_&a@!Lwag-HgY%zivc pNKm5QhCuS[_-/86hGN*' );

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

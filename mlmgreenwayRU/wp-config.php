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
define( 'DB_NAME', 'mlmgreen' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mlmgreenRU' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '9NOsGwPmFuGKYKeS' );

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
define( 'AUTH_KEY',         'LTwsjU/a5zH/Sxup+in6r?s`vVS~Gvc{~gCb440BkL!3U_lB9kJwc5v&?2j04 or' );
define( 'SECURE_AUTH_KEY',  'u0:2c^~;VQ.zlK]$Ot@E6r_NeP|QHc58NcgY0LI-fbdwZnOV*`/n^uMG[)AZ]*FQ' );
define( 'LOGGED_IN_KEY',    'jfYF EUfg>P6&Za5J[CAflD$V;dR}}h~ZLGN(OH0-0S*f8=>tm$NnzeE{L~MXD=A' );
define( 'NONCE_KEY',        'FYl|S ]~+h,{&W:`VhIOwk>cm;P7GeD:pd[D8X3]Q^n@F|&y-(HQ[q{U7faAY^!Q' );
define( 'AUTH_SALT',        '.|J%c$s4$4-EO^s,s]MY>)0aq]JkG~Glh=LN?tF2L_FJ{I/bU{Yue`x NyQSc3~ ' );
define( 'SECURE_AUTH_SALT', 'hbgj10S_[%tPjdi%|d?*a77lR0Z_@;^/xt{wq&Hy2h69z+wF#DCx{XKkiHUC$N>m' );
define( 'LOGGED_IN_SALT',   '1KDvU4&^s!J|FLfVaLUYLgN:>rp.c[dO$, -J_z.e},qI3Z22EwjiQg 7Pjz%5``' );
define( 'NONCE_SALT',       'K>jSXB^wjVv!q6vABhZm1.hkqk2+B1lh6T,f/s$+AYVd%t4DoZO%/w<Xa_KvEYn(' );

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

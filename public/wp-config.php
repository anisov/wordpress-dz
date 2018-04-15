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
define('DB_NAME', 'wp-loft');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ae3cif!OHU]^m,E}^:ixo4z^ m7>hbe{w ^8X;^Pv~I1%+=}0>;%IN%fpkpPP~W#');
define('SECURE_AUTH_KEY',  'E$J`tS!:otL!S;PThVx-QYS}~l57H%:lb=I v=lmWDJAXyDe``[c,(`m`GsIriHI');
define('LOGGED_IN_KEY',    '-VZso@ 8g?A-{zsAkY]A<7yzqa(mY@HOAT*/~SA%_WtM{eHjIqrdy2idmY4Sw]dT');
define('NONCE_KEY',        '6,@B+;5Z@`o_w`Tydob:hk%a<j`D6U-h!qDSqHRfG~Q(cb!mhVVMp!D.4b:U:U0-');
define('AUTH_SALT',        ';8-=.xIH_v4|VOwG0nQlruaGFh:XVJJ[0`s.uGrP:<`^B4;B4N,Xf*ox#Ej_U>0Z');
define('SECURE_AUTH_SALT', '39UDE4t&&,2}EAG^</Fc_sEgefEqcu{;(8alK!>WzhHp6BU65G_ l-W{IvI+Dtty');
define('LOGGED_IN_SALT',   'dU#|qn:_|<O0pbg%^*(P^FYtL=3!REa791hf.J N(5El!V*X2Cxrvw!1U<OT% {L');
define('NONCE_SALT',       'Eh; Q%!IH?I+/?2)wiQ4,<<@1Cw8cq0;Bvd[2g]/j kYwU&-GwF`;rOro-xtEI[(');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

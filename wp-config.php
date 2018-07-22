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
define('DB_NAME', 'wptestdb');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '`&&8YfF<JW9wIpfTRaGV>Ua%|TXUqsW4l(qAI760*z)FJ_[Z1>#^:<82}(JZ`Z>d');
define('SECURE_AUTH_KEY',  'GtTUd t3e+u o%kOXI[qdzq1!+gN?rx_I~~qx>$|Hw?<=t[~iR+>S% }IP0XVy*,');
define('LOGGED_IN_KEY',    'ox1*S=`Yxl@l8w6HYQ%.#+kb%Xnr2$Vt^DINzwz=hU$``6ls%:AF; lod,_*PYkr');
define('NONCE_KEY',        '!ae|X1m$wUW//duRZ(3C>U]Z!Je5xrTq4?1xd6Kqxz<wLpPS}io1|pbREfJfgRyc');
define('AUTH_SALT',        'FEa5^pRvW8=Lf4_Uk?~Hp89)vw@K|CFXeX5{[) 2(L,VqFh+?PkurYD&u8EfT(HV');
define('SECURE_AUTH_SALT', 'S<t~lsz*slJI2=ulaZ48MfCN^~ Z>E] 2$acxyVsS[4Y{DRq`_;tubZbW<(9D<H0');
define('LOGGED_IN_SALT',   'Mje@6M^_5Pu]02zu>3v7&iN4ueb!C#H*obvaAe>B#9YvN+!Kw+yOnT!Ng>WzyLq$');
define('NONCE_SALT',       'O!;>J7bjO`K25|^+5O}+sSKBC|o`%y; -t%,j/T-SW&fymH nA0vdw4.b5S44h)F');

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

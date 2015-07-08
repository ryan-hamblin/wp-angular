<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wp-angular');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'wp-angular');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'Leeryan1!');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n}p~$(R|xIINU=@I7v$sg{Qw)J(Tj&u(JG;lvJWP}Ec|9.TJ()|.z-VtS]#`n$OU');
define('SECURE_AUTH_KEY',  'qe|k,DH0u`,dc$aLFzQml9BpTg_HV3I70t T8Gi5(<<uR,LtO.r9s<u1sNq6!B9m');
define('LOGGED_IN_KEY',    'I+8AmzlZ+J=#$uu.W>);?Rub|nH!xSXt;+@hsy8.L>i&guWy2V{%@il^uu74^Hqc');
define('NONCE_KEY',        '--wQ{F|&FC  FZG_a_+JLAlR|+IZ_>9eE HG08&.&Ok!]4MoQYGK}pID@M}3C~?3');
define('AUTH_SALT',        '::iuAfiju})A?Q&aM_0fR8Y|CC#P m!+pI}+:23{=26qZO/7#0XFpHzmO(xYdN+M');
define('SECURE_AUTH_SALT', 'V,Mu4Z^, qtIkWaHp^k]V;X*ZA(k],>`/|Sj-/-tpJG.>Y5M7BWH8t.op:/DM5|f');
define('LOGGED_IN_SALT',   'fotZ}]24A|7<cmon)m|>f;sWhhc% :]f#%0(@]cq@fB9[-N9Z4J(8-|uskrqi%t*');
define('NONCE_SALT',       '=>oQCPikwX.[eOAcw4:0(ESDeVT7Wq.9Sy7kiD)}|IMc=;iuj+e$>Y@XrmcJ%OEc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

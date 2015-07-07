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
define('AUTH_KEY',         'B1wxBzHG@=@B||}]>n/ (oa-|XEj> FEIf0@xntHi2;/0cBw?5fdb_Wof9;*~hH|');
define('SECURE_AUTH_KEY',  '<+*T!1!r6^tPkQv[xOM%c|*f+^3#Q-VH:S<pDHQs`tG+?mgme+Yb+`RSn<,}Cx(V');
define('LOGGED_IN_KEY',    '&$>[b8qAzo{7+CU8,4LrJon62)2j=.coY-c471n-)L`[+Nepg5Ln}3R,MUg|YA%/');
define('NONCE_KEY',        '|DQdVknyCm+>Ux]O(gKj4qqWo-96f%wFTyNmt, J0|QDW#oVVcJZ.paKWA=nhNDh');
define('AUTH_SALT',        'V/Fw<|EHFv!%G=AIt9mwLfoK]U2/h0XO5*8!aTh:g/dL-F7gHIXwMfFC7{BSP%Sb');
define('SECURE_AUTH_SALT', 'k#y~`O!u?;yfw`mmC2#n;?g+3|3q%U([m8A6DNERor<fk WU7ckqZ@_D Gl9f-X{');
define('LOGGED_IN_SALT',   'G)cb+y6]V#d7=65g)&zl`~=R}0C~_[J~f/dS+LM4j,@Gl_ya>EY-<|jN~%Wbg86=');
define('NONCE_SALT',       'LE>Go0F-9J1Rbd~;Cwl:|kI9s#pc5K5_N3-HF,)Y7t*ut&,~<MXkwO ZS-H1`#^b');

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

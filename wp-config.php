<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'online_shopping');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v= n}S>Nk8j3iSq;8,Xk;$0. %g`?S.ZZC3js)FDWbr89U4k,VW+ tl1NM40__>m');
define('SECURE_AUTH_KEY',  'xwH,B4~Q`iEF&{e81Gf{2W VzSgy8XBhkDA?8lV0BiH<k{5o8-P*6]s!936d^e.?');
define('LOGGED_IN_KEY',    'L!RT?LL0v2w?N[oMHR:UM4XGC*rokl6u]fY]s^u1<Rv4irx]izy/N.:.L=72|}?I');
define('NONCE_KEY',        ' ()@9N#2Qo-t!(3ixjyg2h .C]Ii)C>;%u=3HNs:]t{:<B0{m?a6r(FRj[A(WrrB');
define('AUTH_SALT',        '3RmKlfPeV{)$FG4MA=eTK2B|8]-81of-W_O.<1n*-K+1^$j9)*9|^33[AHkg}ugZ');
define('SECURE_AUTH_SALT', '-$<A$.>YbjSDaPiKz~%Hz}2.p{{(ND{eA^uHA;we]~/hxXq.&?/uc,l~ZVKeH!&r');
define('LOGGED_IN_SALT',   '{~_>>3X:h2FSTjH5Te<;EVMOhA`jIDW#{JZg_WfEomy1<U3.$SHBlOh]M!>`Ci,8');
define('NONCE_SALT',       '~p[}};tLXHIV(?.R]s{U{8Of4c@Z0/T$By37S]|xny%&gl9tazbnuT#m,{;Lpr2&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

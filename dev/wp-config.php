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
define('DB_NAME', 'db643292777');

/** MySQL database username */
define('DB_USER', 'dbo643292777');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         '(b#7]!MNok[mTe6ds91M,16TXzZQ[+^WTn~5U$imjO$LX6bq}zjaoc`XdM}8<[3|');
define('SECURE_AUTH_KEY',  '*SnOB>~b8*`OyFo=p |2npa0xs*{2(9a6-xfxU6zpr-h{:=CYXYz;qg!TeiWq8#I');
define('LOGGED_IN_KEY',    'hvs5)w`V:lU#/dCMqaj@Rc>CS=h7<tdn2.TXrQStiTjm/gCS+mi&z.1H_qj-@+=7');
define('NONCE_KEY',        'o{zCgDTaJ%Eo_4Y{l_w}??OYvJ-L2$qYq0vi? -K2*e{9/5X}~RRwusj{kfo:IM[');
define('AUTH_SALT',        'X%:H(?sPRwAXWNW.=tgy~q$vS unb}7u6e0qfb6jwnz&BtmS[g+IkzYl%_<dx^]b');
define('SECURE_AUTH_SALT', ':?lVaPdTl .q/(D[;)L>|p@ [J20)68bb8~w]u8>jB<WXL[$,^;e*PL!_1P{|L5u');
define('LOGGED_IN_SALT',   '):wTXn!y0[v>`z|hs=G}C~RGL7K0fryFW9/^fF%JE}kC|J5~D8W7|9.{{pY<rQnM');
define('NONCE_SALT',       'N?[,8[dFg.xTSOXB2CumhC8qtq+.>XfyeM1e+zloBHDgS2vDn|&M`Gq|%q%:8wL_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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

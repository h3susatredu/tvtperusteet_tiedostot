<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eportfolio_malli' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GS*~E/bJ8`c5orD6@xAjw~o)5vW!z5`UJE4NR|9mQr6a;+!+&h+u>abPrIZD~*?l' );
define( 'SECURE_AUTH_KEY',  'S[m-pdY-Lc/1mC&]|dWR<!H8]|gY?1Ll%w/ dDu1s_B_swAW=:fA8YGf}|op4Tir' );
define( 'LOGGED_IN_KEY',    'Z*(?[Cy2GOSGa6/-X[.^6L@ON4Ud>}VG2BAVZITY;r4KA[$Uirjpa}!e@SMMQ@$u' );
define( 'NONCE_KEY',        '0qQ+:j8*Y%)?Sj}z0(-=!Bgo}b(Z8unN<7za5~cFYX%5nLj.g@70HrlJ]j2xDC[I' );
define( 'AUTH_SALT',        'X7{D!x=Y9e#co*K;nRQT*`7F3.Y7K5j6czImcmycdwzn3!bIP*.U</*z](It;NTm' );
define( 'SECURE_AUTH_SALT', '+:8Uw`DZ2#TDR9uXp;:Qd<#!2<Z4%@OcskI]#3a>|p3++aQ1Mj5m!=}Voe_/]OyP' );
define( 'LOGGED_IN_SALT',   '|r?Xgzfm5KJ*f85`@/lu/hjmaT/+66ib3(qKSJqy,(E[tE2JPp/C3s/_qX*){aGe' );
define( 'NONCE_SALT',       '4#3HD(mhd`)B3C?7@Ye;u~yg6^)G#6`rpU@aK8G!cIP[1!ls$]qFS5BT@~B6{+iu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

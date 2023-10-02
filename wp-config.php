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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk2/1982093/www/wpexercise.eu5.net/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '1982093_wpress1208de1d' );

/** Database username */
define( 'DB_USER', '1982093_wpress1208de1d' );

/** Database password */
define( 'DB_PASSWORD', 'DVQTgX2k7BGwS^P}' );

/** Database hostname */
define( 'DB_HOST', 'fdb1013.runhosting.com' );

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
define( 'AUTH_KEY',         'nglGv)~}$xWPJQ}ms@UhqJ]Zb{uoA0fmXEEoy4P,1n^Y[fD/jWtM<mG]S]1qhfT/' );
define( 'SECURE_AUTH_KEY',  '8Sq^].[yjQFzI%8%?5k4E^=4W:/QFZu>5yY*0!122Gn|Q8VX@OPqu?2U}vIU[(._' );
define( 'LOGGED_IN_KEY',    'ri+REQm^_Hc&ZdaKj?Ced]BhK~9.%xc`IEJRTy.1?v=ot{ui0AX}r%V{qTWTgDfR' );
define( 'NONCE_KEY',        'nEDi.Q~R^A.JdCSJ{&&tOR2}R/&s s[[XA_y^sZE/`#!BGnN3!)4{YT@:}@A8;j^' );
define( 'AUTH_SALT',        ';?=WPi>87n?skY(L2A9!@mw=R&5Tr}1YMPB_oI0MDTB5sEun-Hfur:A)tixH.<hk' );
define( 'SECURE_AUTH_SALT', 'v$( +DG-rO,`5T]?e</ppjO[E$-}6$ko[~ ^XB=e=qZ0BUq}aV2R~(ZS~{xe4(C#' );
define( 'LOGGED_IN_SALT',   'CA4X>EI>JWRtmxL{0>N(Y.%O.!A2m+o4<C`T1]t|p2)9b=:W*5>RulC=R*+v^Bpr' );
define( 'NONCE_SALT',       ':&B;fTv6_F-a,}6j@IC.Ay7$G3+O?v<q7maI=.W;l(C78,GU+Q2kK:OI;~qjXyi]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

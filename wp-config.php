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
define( 'DB_NAME', 'aboutus_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']QU7x|ci<s0;|J@mL4Y|?xmzu{O3e_>ck;5IuP_48Zr=Kk9neC^,GN_&j? sdnfl' );
define( 'SECURE_AUTH_KEY',  'k:uL`Itla|b]TK*G_+_{JOcH9I5<YhzHv@J$8aTpKKkT!AecAv @X*~VIuE4M1o7' );
define( 'LOGGED_IN_KEY',    'uzz6d!nrNT*8hDVJ(V57]6*7i-y5zO4*xm^q!XkV4uorKT,g2|erCG!deaRM{1#%' );
define( 'NONCE_KEY',        'i@,3}.7+$3WJ>VuQ|`r~:97EI]ow9(pbWd&301 cPJ0cYw(/vy?/I(Un|w*Ij]ta' );
define( 'AUTH_SALT',        'd@SpO)0 V#=7#Mj@}PzKGc[Lh|`HN})VRfO_~*TFtq6p4-Z3^GL]q%e(o4: UKH.' );
define( 'SECURE_AUTH_SALT', 'potuq{R-kVU?p8lRsW EXh[8Wq6Qy9_R1>]_k)3cLVu>:T 1mD$UczbC90e9o/G8' );
define( 'LOGGED_IN_SALT',   '8P$j9SXNk^Ae~EDdPS4P{GbB{*_=bk,*HcE:.{eV{L2WQ6GH|@Kz<unaAF=X4L%u' );
define( 'NONCE_SALT',       'Wh?,C2WnpgCb5Oa2/~J&&2 M^i=R0!qmL~T)VEJ9N{YH&R-,mpY/D2mD]}u{,h<Y' );

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

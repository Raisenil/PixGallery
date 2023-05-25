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
define( 'WPCACHEHOME', 'D:\Study\Web\WordPress_Learning\Photo_Gallery\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'photo_gallery' );

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
define( 'AUTH_KEY',         'W#F9MtsEqh[?Y[$GH<gi?[bO!G1v_UBCj.cflxQ(5g@DKp RcR>LJ<vzbe_>2ZvE' );
define( 'SECURE_AUTH_KEY',  'R;WuP{) b(l@ib=!HM_o5NcpVOfj%ZHF76|4>9Ml05Y@n)(AYvGl_B#fp9?ehF6a' );
define( 'LOGGED_IN_KEY',    '!SMz8<MhC,1%9taOxi:d9HnP65[sFU[kXJ_B2>2#.PD=FaLZZ2?TXOJt,Mv%]Fcu' );
define( 'NONCE_KEY',        'K5$->y{Caj^os^[G754*W:Quxgh.=.HCHEMO9#r;ne-awJbsm@_tJ*htc+4rdX%D' );
define( 'AUTH_SALT',        ' yD1_tuGc;Jc^O%6HHv+l5wWE;9}-MqIqxuq{B@gaq5+6 j=5/.u7$;8<Ub,?Go)' );
define( 'SECURE_AUTH_SALT', ';+EjXw;EB_|Z@lt.e`-_%{HO*ZekX[)Cv?D#oYl+$ukI~-mo(O-Z7Aok:&%`ryj]' );
define( 'LOGGED_IN_SALT',   ')E76dAEgskKNSew5YXAy!>jLYMmTqmdQ~f]dRFt_1fY(Y5N0AQ7mx#y&e+LVDz&X' );
define( 'NONCE_SALT',       '{1FuSMBoRc3#}*g<0V:C3h>,XKxB}bQAo$_AT,k{r]j`?4-<(o9k:u,a$}UVh_{:' );

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

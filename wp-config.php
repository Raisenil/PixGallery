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
define( 'DB_NAME', 'pixgallery' );

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
define( 'AUTH_KEY',         '@1 -7MZ[%VtuM$[D|,%~Gs$ }.DWZ&.`~6x33B#]X_yM],dwftMreBqKi+^%.73m' );
define( 'SECURE_AUTH_KEY',  '[e}eqCzUnx6e~e3U5J]*r1C%oP95:8s7n`&OOgM(oH+#/As2n>8d(IE$i>9D72{S' );
define( 'LOGGED_IN_KEY',    'bw3O_h2,25&`bV{J{G5p!3<I.~39++p|qc$Z[Ul)jw<DM-KD24[iyC$gDG6NU lg' );
define( 'NONCE_KEY',        ']oOJdOl.KBKOwXsI;Z5!//38m+,B(],xev$YD6a1[bx!t)VI5A^8$`{NdpD,0S,x' );
define( 'AUTH_SALT',        '0iYzzCD~W{QaN9Z!rU1|>46YeSIPhy4H,}+!Y TENv>z{wQ&_]7Uz3;guC80}@*N' );
define( 'SECURE_AUTH_SALT', 'w|IR6B#<jg^3}G&3X=mvP`8M{Xd!v$;UBQoVDPEW_`XhLB >$Hqe0|aL1 t{mQ?C' );
define( 'LOGGED_IN_SALT',   '2A!5R(VwsC_W,b*F#<c3YwKU{p?<3{olxXFe1|-k_8$M8h{^J05RZ(gn=AX*v`PK' );
define( 'NONCE_SALT',       'w&2$r`%.=Sk,YpW8CAU;#;kK*7=(MOu;dCu3O6V>]EUK=Z432ltJj+.UA,N[ncil' );

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

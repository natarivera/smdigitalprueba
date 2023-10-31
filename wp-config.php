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
define( 'DB_NAME', 'smdigitalprueba' );

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
define( 'AUTH_KEY',         'hwlP6v&v=jxnRNTv;@B^Ah+;R~|_c4c nB~J>V6ZX19R6r<Abm[4upv|VNi`QW&I' );
define( 'SECURE_AUTH_KEY',  'ggXjImLO{[JRUkpt,FV<HClE8Au{~RlJRD!SeB08AMH*ER0no86F:]Q+&r~VG7Ya' );
define( 'LOGGED_IN_KEY',    '7~6iW~&F#pj2_$PP:t}`g*gAK72v;M`L-{#kLjcb]PYm_PAJw]Cm|VY3I4Rl$L4U' );
define( 'NONCE_KEY',        '5IgKQ;P~tNe5G2r[g]#uJS`r{~va(}j;ar!>G~//51}6;nYM2hhr|DU]f$[H|uxV' );
define( 'AUTH_SALT',        'uE99L6XWt?}S*6wBQQ)fI7FM8m]<-hEgq~^28._|&ULQ,m|-oYpDok<3oQ*}hX8o' );
define( 'SECURE_AUTH_SALT', ':jA1.~MNvN15Q}5-N69$w_TV6<{CD}`+pnOArdyFtD:1j@-,g(=Y`KYwu!*l)En_' );
define( 'LOGGED_IN_SALT',   'UxiBW3!L*`sEf7C}TM[wSUSR486snw@(ALJKO8X:8)6j9uFbsY95ek/< Gm$+*}G' );
define( 'NONCE_SALT',       'D2|_Q.84gE|L~4(lS.fc5;<=0A2)w%0tyZ*VMVF,[.~T VBD>B!X!`>w{!cn;^{>' );

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

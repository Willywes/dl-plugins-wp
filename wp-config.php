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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '8YI+b4rm!iCFDgKtElHQ`>)&hkHd;3;]uq_Wu%&mw>|}5Q0| 2u%s6r2QRooBgxd' );
define( 'SECURE_AUTH_KEY',  '{@:)6UQPGTZlH@`lI-;n>kgZwraCv*=CsmH3}x(q.0ZBLLgcUrYky@s#J~nFB:B2' );
define( 'LOGGED_IN_KEY',    ' wQhUqPQiW|D{`aU&.so*2t1%<F55X0#m=1q@M};A6ZX;gH@XC)=ws`:`tDv$`AF' );
define( 'NONCE_KEY',        '$%14a9r(e=!{Z8Q<Q+*<Q2jg.5Tr -@*j0xLs0U9ib#amI|%NJ|$#}*o#l.SQ&s|' );
define( 'AUTH_SALT',        '6*xI@W<f`uneJHtqv}T(TD_Hnm7%hfzo_Bc//M 7?=mc9590G7BeLi.G:TP0A:=m' );
define( 'SECURE_AUTH_SALT', 'ApNiIH3-WitX!-:|,xj)KRBQrJY8BN`2Ioa$1?c[l:w-j}+Nc/`b%+E;JI{bX-A#' );
define( 'LOGGED_IN_SALT',   '9_*cGm8oMA4jxXdS#k}(K{I{`6!oF4*!q0|N)!#:D}5;@#w,e;a6.e3WO2E5le^6' );
define( 'NONCE_SALT',       '*EZh-P.DiNPJnr6w e/X.D%!7M_cta]YJ3&F2ARBPfzB@O8opL;PUN+ xChj}Pbt' );

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

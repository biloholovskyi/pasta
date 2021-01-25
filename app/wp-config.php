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
define( 'DB_NAME', 'pasta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8yMVGap5*S6^+NcUB^W3aXqu6/qZrBp7XrA2#UM A?]%xDyQO%{W%cfabpjEx5_0' );
define( 'SECURE_AUTH_KEY',  'tfp urYb82>FZqu04SDHXJ=0zr_~fcWX#u^;|.bS`ED]vxP#U*@*`()1(#Vl5RtG' );
define( 'LOGGED_IN_KEY',    'VUxDW7*,I4`{8)?W^]J<1i_=]_}e{g^RuDWODY>pugSI8o}-rb$}_kOF?f_=lw[>' );
define( 'NONCE_KEY',        '@{_%zzL-,=#J[W/!Lz5Mqb{bxf77po(ad!>VELBZPs%&_th*c?|ycK9>$]h:b}Eg' );
define( 'AUTH_SALT',        'Z2&!pj:U;^zz._BQHMcFQ/`pP,xPp[^;Od8#dytlU[H ~Rl*)jz#<1W)~k7!sLN`' );
define( 'SECURE_AUTH_SALT', '~K?+Y.@]]+HJ{6,DE)M4~=^Hoq!j6mt:,wR.`QPsS#!3bMs}r*2Yw@k?}S/_xqS{' );
define( 'LOGGED_IN_SALT',   '^Ghx_c|8X~J`v$8-*QUCO>)&SD9@aXF&}yWFSa6.:G{lDem2[W&bD2[qXV8O}]48' );
define( 'NONCE_SALT',       '$,7N_|F!A7SG+%y0g;-ye$MwK,[[$XV)5Sc=D]HN$g{~4P&3Ynky>VuS@_lqx%0(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

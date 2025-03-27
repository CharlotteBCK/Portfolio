<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'pVPgH!9b-uz jZ>(Z4@}h_o->}2(:hoz<p<hY=}CGhQ~u9Ve`JrgA~mWK3{nK5+#' );
define( 'SECURE_AUTH_KEY',  'u8$Wn6_p{gPCgo+R:c:=T^J{m|0<Gbln(Qkk2#VbR;_No(IT8/!Z%UqXaDd4;@Sm' );
define( 'LOGGED_IN_KEY',    '+,;0|jEqB9t^N0Hw1I!&6B;C7=]v`?MF+cBzlTL7_p}/Qpk=ERIJc[p4hc,KnG]T' );
define( 'NONCE_KEY',        'Hrsmh{mWO#>`8/Ym/[`>+E55 `M{6`DM}J(@7u(*!w n nc}$pRs0!G:8Odwr`fK' );
define( 'AUTH_SALT',        'KMBQ:qDn9&,m:8v;[[6aofV,w94tTO| D_gLl_GpY !$GT7o?DS[~H|H+,s|=O#C' );
define( 'SECURE_AUTH_SALT', '`h$_2,/C~?zkOjZkxV[b5?Ga%MK]0+wP=C[z=vhPx$sVt@g8k5{s ;6!k&`94OE0' );
define( 'LOGGED_IN_SALT',   '7DkDUqQAEPlf}&$NV4.r]dCoWU,)e!-bISH-f]<._*Q5~H,P9-+R7KUfn<BK4aS%' );
define( 'NONCE_SALT',       'uUHWIpL^<{?/$HL7qlIK/rjFrXWKxn$|fH81Nb};`7GIN-uns^REFxIW3m/9;U~O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

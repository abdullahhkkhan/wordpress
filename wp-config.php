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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'BBgkX=HnES3MbbtwY8JU) f37yTJ_<x9OG$|llIg@y] }1w+R5C(VgP}!bYN@wkX' );
define( 'SECURE_AUTH_KEY',   'bn(E@3?QN_I>$W$YG,8pE!$y.vueiBgUv3Az6qH|S()m4re?<Q;G$6NDtBm2asg5' );
define( 'LOGGED_IN_KEY',     'OzFLLZqUDkcwGm y?@ Vu:#Z3pu-8i[#y`JY5__l3]opW%Ca#}-$/Ne1m{3Gq+j/' );
define( 'NONCE_KEY',         '%F@YD`>Y!Y@tmV{DDX3UxikQ97a*Kh4WfJ~ l~!d@T*xe;$l^[RAKl76kW=XOPKw' );
define( 'AUTH_SALT',         '<p?W/K`A%jdzOcIJNpAT%syWj.IpmOk7d@B7uL )Jb:&sl?E}NX2@M#Gb0Q2*t9+' );
define( 'SECURE_AUTH_SALT',  'i(?wz}:(iZpZvAb6.s/E1^Z2Gvw40`k@7n>`<g(;i3%q6.fcCP%?>cHMy@hRh8l]' );
define( 'LOGGED_IN_SALT',    ' -|*> mKpZ}*~wpD>{AWvkIj^g!8wlm-u$>=``}NbAS^{tV4}^+>uA,`#/`ThTWl' );
define( 'NONCE_SALT',        ',X+;1N%+3$|af7d3=KeRzFX,_nDoI!Z1]5ht `tHdhp):3#[8d@_{(.jBC#|%jjY' );
define( 'WP_CACHE_KEY_SALT', '[cuOiCd]1MU@Cm,7syE(.bbm;KQ9M te>,v^i?GkGy3(~.Vul~w,pLf*Xf$%b6fZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

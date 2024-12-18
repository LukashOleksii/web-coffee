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
define( 'AUTH_KEY',          'sIT!CxO]uUP~]f9j[ ]^(RG<C?m>YA_BbXoxWvv0 keT5}C%p>fSo,x ~qbc=uVB' );
define( 'SECURE_AUTH_KEY',   '@1:gVxknWKm76@C{a%P1}R.w:N@PQZ$oL&<<uHY+(}h<uSUPF$|wwfRglWxs@mC5' );
define( 'LOGGED_IN_KEY',     '?=NA.M!?%CSq3wuaNSB}[|/|>Gd6&-xck)DIcqKEKUW65!!vkxZAZ*p!xkiAxhES' );
define( 'NONCE_KEY',         'X&e}hg*HCO;}CE=?9s]-f`=VRle2}]j^t1x0nyQ(_k?y7v(Xwa)j<TPs`[Iid~n|' );
define( 'AUTH_SALT',         'GH#lqB;=llPFMJc4[TCm3S2gL_U]$C|}OyK~jc,X$e:,T%!bqXs`slC15awjffsp' );
define( 'SECURE_AUTH_SALT',  '1[7N<el+1I(p`;A0>!{SEA|MPQ>KAGlw7m<Mtwv}lW}bs8&Fv,eZC,;jo=G56ZGJ' );
define( 'LOGGED_IN_SALT',    'oqWeP5B;xg7I@bP872!SD5.}o?B~E*D^O+*ICQKp{,DmQYRg|/N8u:<1W.f,)u<7' );
define( 'NONCE_SALT',        'Qs5}sQ8ijgt$!Dcust`yQhe$1(yMw.5wD}1yWz$0c|dl-}Y4=B+Qbma_C|5TwIA8' );
define( 'WP_CACHE_KEY_SALT', 't~(9xkjFu~+8E}PRHmib Akzc,k7}[),DN|=v]Gz/O(^je0m;.z~H,GXDS(d[nJ^' );


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

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_smoothmaker' );

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
define( 'AUTH_KEY',         '{A^!poSEtssfu+dx#_}AYxc$F<-A7o>l2|:}>V8P3V8;TscaHD>;o+;]2Muc]YXQ' );
define( 'SECURE_AUTH_KEY',  'vRQ5V.+Zc(.Tb~3(]6wxsiJ0VC(&5ST0Q#s-*`KreQ`xEbPyG1esiS4[m|tYc9M}' );
define( 'LOGGED_IN_KEY',    'kBc5~6_dD6(!8I^iMq90i.6&tZ`>*Eik|U+9cDYhPYYs_p3w~F(>}NA5=x #F@^h' );
define( 'NONCE_KEY',        'dtzp@m033k6[)@|xWAjqkl<noLE1N/%^JFjB >@h,HVRo)ueP0$khKm!WD6I_,`x' );
define( 'AUTH_SALT',        '#B[Q0Hu[z4,%P8=0gVd$7_c2pl$I(MgI-ccGHbNWB]ca#lFvWb{e,fjkAp1r^]PU' );
define( 'SECURE_AUTH_SALT', '<Y46h(4DFl+;;nI!htzC_g&7)>9~[NC]T){EMNw[w7I;J4PviC6R129/2r>xK:.[' );
define( 'LOGGED_IN_SALT',   'o>GVd2u66}|pSRo):}U^k[+`ModAqIS(90X+Xt)k5{-GB_(,z)=kG7x|K*t~7sa>' );
define( 'NONCE_SALT',       'ieByNd2AhJzhd:p8md;]d8hNwQh+W}_=AiJCZ3cG$L>A^Da`sr*D%Z4QW.R,Moqr' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

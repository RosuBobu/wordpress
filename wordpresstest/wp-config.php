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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         '2GXDfzn4bEPv*G7$:x6/j`1n-fc(;Mg|q=5+1z~Jr=u#/&&-R50<)l e^T+wk$1@' );
define( 'SECURE_AUTH_KEY',  ';f@DRZ11%:{$w@ KN44D@x<7kRD0xx-U+IH|BU1)Nt08mGr&tI4lG}2[@)D%6Avj' );
define( 'LOGGED_IN_KEY',    '2T>?## rRxV~kxsVU*j0Lq.KJq3~>:[R6:yF9l1.JwE<O.;;-KeccyF9rCW@FX,*' );
define( 'NONCE_KEY',        '[IyA78o;whNrLJe1_ -z$x^i{ZYbKk&xJ~CI.0;~/f}kGnZw2qZ6WgvB^.y*h~5f' );
define( 'AUTH_SALT',        '#[|S>;->]XGDz;9*%G>IqfgR~F{<3LTEmE9HanxT^B:l<$7aup_:2,aYq2*`jq+{' );
define( 'SECURE_AUTH_SALT', '] 2md-&hBO-[j4+zT(ueKYyC0&-x+BlT:k4`G;F d*1R-<xw!>@Bpi1??dq+_pJb' );
define( 'LOGGED_IN_SALT',   'c1G}prnM$]J-7yhof2`^%3{&E&`%q|QGjxXMB8dTvoo<vY.}HhyM!`8u3L-8M(hR' );
define( 'NONCE_SALT',       'yR% 4VU_FADs1cTZ1q(KA<jE=`a6n4FJ|pa 1t.F* $^r?)@KLrz]},Oa#f,d_-r' );

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

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
define( 'DB_NAME', 'wp_divi' );

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
define( 'AUTH_KEY',         '*zB<DP!5p+ cuo%VCYYNG$dT8Md4=hQ3wXbbQAJv{aX1V!F!MZDf:w2;0n!ioajh' );
define( 'SECURE_AUTH_KEY',  'Qj)jkd|g$34|4(0Fs:<eM<0M8;q+,l{pQCm??b$$5H5=3N~?nZ.*S]{8MrlaOGr)' );
define( 'LOGGED_IN_KEY',    '7tJb_5Bny[K?#+]H`09@%}bZk>qLQycq%Y[Osl8BJ5kTuz#A!Y*|Js4J:nf@1uW(' );
define( 'NONCE_KEY',        'H|PS,ey,r1=g VP*OS~Xa!7KSVN6*c:?tA!{E`aC(#LH_J#p;KauVJ pCstV=3L&' );
define( 'AUTH_SALT',        '~USbt&[8>U3sXn@8)5r0Y&]zly#|bl87ua}u;]{&W6%J&e!TtvWUx<:v<1lA4Dd?' );
define( 'SECURE_AUTH_SALT', '$)<ukhvs6>6; l~/MS~M:*wrVJj<GR/|(5inf-.^1uDpO^5vo1a8R~n~;E 0iNL|' );
define( 'LOGGED_IN_SALT',   'xtj_4%=.].^zaD;4hr~8W0zK12SoGU}yoZjWV([a^u{@;^]ip3q6HMy];^y2MEkw' );
define( 'NONCE_SALT',       '(VjF&r5+it6b[j.^(5 PM!%GsET@@@S+i@MHy*B^C=^}0IK1tvCO,J3=Tj0PZ9`@' );

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

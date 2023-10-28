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
define( 'DB_NAME', 'mohammed' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*Z!{bri/m@<fN&RxQ$iHUC1`>Ltt!ZA):Q]L/^E=A(MQ!M6GsDsWwKMzSMlaghd0' );
define( 'SECURE_AUTH_KEY',  'U}auvLh[&W27L<]f?O ~(1P?^n_MrD]Qds0de/OU4U.Ic U6NHk&MAR=P3:CjsRF' );
define( 'LOGGED_IN_KEY',    '<d:cu`6z`Dom^6o/[N;$6tO4r9*sX0<<pT9N<Bs}asB[xBfpPOSa{(q&IZdx6RJ%' );
define( 'NONCE_KEY',        ';gJKqW)3uUfiUi/|SoEN[*_*.,K|KN`~lQ}/9hWrmor%N&gnDh{U%v,mF5ea7&&s' );
define( 'AUTH_SALT',        '%+wtMB|qzdV`,l3nxo`+2/V,J`2,Lc)aXl7>aZjj|wkKc]xdO?IodTB9un*r>I!5' );
define( 'SECURE_AUTH_SALT', '#mb!y52zMHqd2kZ#dY!C..+j<x[T$rUB;i[?Alo)z{KbSBNgx&`HE[)aU~c?[:Qt' );
define( 'LOGGED_IN_SALT',   'xJ(#^eZ2~IKf`:-EW#_`SSMBvszm1*S2I**Z %AkWH;X/-9J$uw&`g)ZC]GXRj/+' );
define( 'NONCE_SALT',       '~2oevvB[x-Q1+t&.q[}2^3-R[M[~&{f~#=;+bR0v-(w!2%=V749jtIP*^Cn,pqKd' );

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

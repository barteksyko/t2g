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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// define('AUTH_KEY',         '%`.:Dk#Z(/14S_Q[!&mdZb4U345rEzbYDoGtXM,a?}pT2X{QN*+ |gk#$X0yTcu2');
// define('SECURE_AUTH_KEY',  'wf<bd}Asc@y<d^FU8bGWSg0O&c,kTq-d [A_Q`8JISz(Vjqi{3u&4pZi^<-Oy~c~');
// define('LOGGED_IN_KEY',    ':(o-`xF7+d+.iAAr{Bl>6l@<}{+ER2P_QkjIj+t-[5l1j /,hW<4A^y/W|j+WoT=');
// define('NONCE_KEY',        'vY *vNYr/?Ky.e-m<z3WO?cM<UF>A5;_[}s^{V5|jjZnBfAc!%%XLIX1FUNh|I|s');
// define('AUTH_SALT',        'l.qkyx>)&X2B_Nm=5Z||7+9`-Kc&#.fUpNeG2>MfG{e;$yk* fQJI1PO$5$nha@}');
// define('SECURE_AUTH_SALT', 'P&FCbH/.=T+eOc~A-!nTSGYj?h%fX15&c0L{U;`y A.iV}v|=BQX`{cc=Z4vUZP+');
// define('LOGGED_IN_SALT',   'Y=%w-`DBJ=5[CW!>#L;&e09V8dWci 1dI?a+#?s:$^PX%[7{H5x~f#c*vJx*AN#[');
// define('NONCE_SALT',       '|$f:99GtctNM>zJtPPK6I_]A[zJ<ynNA7|vr-Z+Z$lBqtb,z?vT)u][Rr?8X,Ho)');
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

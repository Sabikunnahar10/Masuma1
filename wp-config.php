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
define( 'DB_NAME', 'Sabikun' );

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
define( 'AUTH_KEY',         'uD|~UZglE_USWnxBO]<=JLnRl=nrdp *ZQE/5?15l5hk|Dq$IsH WQ&nIp-?_k}g' );
define( 'SECURE_AUTH_KEY',  '>_XRyy0y^FkfxOX2`42)7c]=lGR;$sJ,~&E3w1_7$SXBGbbIGq~?)W2$`CfyKC# ' );
define( 'LOGGED_IN_KEY',    '07Av/2(Z3n$n*kn.~Vsk}mL,PPFX7ZEs&28rSOftc8j.[CW$KWk&5DbiRJnv ,.U' );
define( 'NONCE_KEY',        'H>eS|$MyjeUg=+&Ve4EEC{!u>ZB]Y_kOJ):/JSb3R&NQANQJL(dL;?60y--QyS6p' );
define( 'AUTH_SALT',        '?6~sm7DdPOS^d+i!lH,Bri}V}`4Y|yZW^gd4n]J3G%g1X<mp#LB!(&`G0X;%Xnqr' );
define( 'SECURE_AUTH_SALT', 'Vr*riZi|yC/>M{1>f@6(x9cYKH/xOYuB]P5I&bT&Qjr{^r<|XCzZ00#s j5C[W>*' );
define( 'LOGGED_IN_SALT',   ']>?ti%*7SSk${mrC.kj;-PSm+$7!%7c(]5A~EvPSL#oLnNy-k?N:oX2 j21}1]<]' );
define( 'NONCE_SALT',       'FJ7UURL5z0JCUpwD)!c3|~1GLo^AM9zCB}l)N<FYpK-[ADc5Us5q go%Ntg^2~_~' );

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

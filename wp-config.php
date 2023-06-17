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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '5( B}M*BgDqr[7`a?IhlID2b0lX,4o-SV5UT (_o-rC3GJd~FWJlO^17Q|W|u~>o' );
define( 'SECURE_AUTH_KEY',  '6FE?pzL__~j%.2|S{^onRBv!/}pWS?sj$iN-q%#+oYpAj/S~d&^1OU#<]oP+u^Iz' );
define( 'LOGGED_IN_KEY',    '~X*cR{*{{a>xAQpbvE@*)#:N&2s]Y$Z5Y4`jw#(25r#TB;Wa}F|:k5xbEVA|ke53' );
define( 'NONCE_KEY',        'L}P$.H6Z,n5BB=ZOMUsIAvL?l*]g3]JeD#(c|c-Am5aIrU|Uy.<W;~y)-qwvO;vh' );
define( 'AUTH_SALT',        'hmt#.SVzuOh|O.Z*`cW7X<R{she:|hRNtv+9HLfr,$kba DB4P;mYLw*/eh3Ky0Q' );
define( 'SECURE_AUTH_SALT', ':Y2*`xw1&?Ww9icy*;gP^cJh xJr*u5=#rIIR,[*}ed.j,A!fbt*rJQDbN~h^TQy' );
define( 'LOGGED_IN_SALT',   'O00lX<Xjwf,35&9Ur@P); }uJU8i+}}?bGl(4R;4c7cA]ux?Q#h.&G=:>5er/19|' );
define( 'NONCE_SALT',       'MhWltjLt[q9]eOCMEo|/HW#=z,sRl,5e#bqIqbzGIo%s2-&A7&NtOW!B4;=Pd%8b' );

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

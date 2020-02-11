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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Q[5*79sm7*9x<r+g;nA+oSj2xnv7QU,!r]T^P2XHZ;~#2tt6E|n)Y#.:`H&3%DF ');
define('SECURE_AUTH_KEY',  '#!430L-iyJT/ r<&b>edvyP-{w<AeJ#4 -DhpN[q?JpjN:1N lGc/otb}V7l,|zT');
define('LOGGED_IN_KEY',    '-D-h[*L.oP*(*>MA/X0lx}RAt4QhfZ:/<{$zq!yJ11(T>(.88?J5v~;RbL?$B]d4');
define('NONCE_KEY',        '}8VB`QTSlV.N)-Yep%jp9VA&+A<$NA.J0S?ibK;q$Y<.]~({&qv>v;Z/m+ZL.Smu');
define('AUTH_SALT',        'rP-%9)Ts;3-`|T>?8ymNa0;~C~e?po{:sOFcWXf^}ig{)C%Q7@s)?en;y-mBjN:Y');
define('SECURE_AUTH_SALT', ',!sQnTRHDT[i|8}xT6PwU^sjf^rfQ54I)nuWT,VU+^-w:b|0~f|U`+X^1~NCER>!');
define('LOGGED_IN_SALT',   ')m^mO-pgx$s%||#~Y5+DVpthJ7>ZwEd*_aR|a,Y-_IAkTH_9f52#u#ZYdno-}~a*');
define('NONCE_SALT',       'Lg/NW:mX|wJAh``RVm56 R5n*{9x-l#+Y9{+(k-7*myt@bg:P+5QR=#9lE8O5%X:');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

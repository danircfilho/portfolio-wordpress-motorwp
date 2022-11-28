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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'motorwp' );

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
define( 'AUTH_KEY',         '/7;Jz=@d3S&wLc4l+laKoe+tu288ip>H~0+)&#.ubm3zpBc?9_:W}oQ35rv+vN6f' );
define( 'SECURE_AUTH_KEY',  'iPsU cvBkV|~7V?~=S- `3TS*:9=Xi/7nC=D(HCu4Gge 5jeT!n|7wBk;{^DO:10' );
define( 'LOGGED_IN_KEY',    '[O,8TOFS+$S,DUf`L6nX@J/q{& 5D-WhX8`5hIRI@81}T=>&D#$Kk2W^iX]JC=C-' );
define( 'NONCE_KEY',        '.(^;|4w#:er[may!>1f#]B/|OFooGJ@s-x,d_)T+o}!`LquuXF}1X7JSDAaEL2j5' );
define( 'AUTH_SALT',        '>jVl^N^?1QvW$M!o(u30:d>_(h1vTJl%08y17:{B(s}gn:UuFA>sI}48ZW`<j2ri' );
define( 'SECURE_AUTH_SALT', ' {0 nWI%J@?~qENGY}H#242NuxIM!%dpl?n]lO`RS,P#sNYq:.v[;5<rXmMf<6,s' );
define( 'LOGGED_IN_SALT',   'yC(X@dDAsJ!I/e) /g|jr$UUW7O0^s&U)c3$GuL4ZBJs`@E@rA{Qr(@(&[eL#eVd' );
define( 'NONCE_SALT',       'oO{pqQjkqDPUA}B]}L-|4)#QSDQ4CkI~XbXL+,=0D?b3AX-11Rd>6#Ney~V~W/I6' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

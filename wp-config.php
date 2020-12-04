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
define( 'DB_NAME', 'coolmat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@t.=c[M1qa(1=hip|T^p>)+vSDryl[UkIuq#O-ggeoAASmOh[<xqfjo+DCeONE*5' );
define( 'SECURE_AUTH_KEY',  'Js.sK{n~dG)=_*`^b%5~8dp- oiD{RH,5reTySoO#plerI#W*BY4b@i!%[lvvqfh' );
define( 'LOGGED_IN_KEY',    'AuaV>[fo<)(e#Ouu>`N</EB#O>tHi]QwbikKKEL4%>-C+^ja>qwL,EShE0LmdDR2' );
define( 'NONCE_KEY',        'oIJY/8N*So$A[wQCiYZ~vMKmSC@WSzfZ.pwQ+*b1L>K}{>4^rf0 -=A=uVLq-N|L' );
define( 'AUTH_SALT',        'PDggF,F= ixW/f,NoUB;bRRYcc^+}{;tb#Oz7)nO BD6kC;Ad.YQl1Wmh&k=4SnY' );
define( 'SECURE_AUTH_SALT', 'yWDCW%*4NfY(.=~_?eC~k>5Iw]CFgnfF=c$OYo*Dlj/75Gze{)r!wd-J!C7fYQGi' );
define( 'LOGGED_IN_SALT',   '}0s3FkJN`*XknhVQiITOnx%9t#*.O*2fA~/0GC{<~s`U_3fK-{BK=?3PLiP.vd[I' );
define( 'NONCE_SALT',       'eE)gNxU29PusL~K59Q^!>iM,3T`3HDx `^sp8YQRg4(g5+~*9LK+ L[pgY*u[_by' );

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

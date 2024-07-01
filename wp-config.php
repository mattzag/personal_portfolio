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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'bp8bPop*aJqrP+:Gl.oC}^U(BF2r|xXpYKh[c/PKtSq_i{G4jwJjXE1a+{KT&@fd' );
define( 'SECURE_AUTH_KEY',  '9+D2&_9$GEhN(z>_5[76c_LGAN@b8%8/xKEVQn.MiOg:D<f%8^pD?!=HB3gMJ(K#' );
define( 'LOGGED_IN_KEY',    ':hUWo=[rrgHWo?qHnH^VGczH% <opQvJ]DbppqH`7piNuP<V=FlKTOa=G@~&qf}!' );
define( 'NONCE_KEY',        '_;_{~a1>?!3>BA+k[oN d$06[;U_NM3Ixp|Pu[E:g 3}xK*|sq-BCxy8I)H%dv!L' );
define( 'AUTH_SALT',        'Ua{pANKSy$u<DQ?hGxap52y5;p56ojxdRQPN[VHAm-,^xo8V|YrYue{%>d2U,(Kr' );
define( 'SECURE_AUTH_SALT', 'ums.Btti&_bg}!iE^]7buA_8O3fDCoB:4$et#M!Q hHBDbM2V:>7l~4h1@OdqEg1' );
define( 'LOGGED_IN_SALT',   'p[teh(549`lsDrpO.gWjR4J~D%@VT|ky~G5~7YP02`;m`uW%^<p/1}-9fw$OK%00' );
define( 'NONCE_SALT',       '`}Z@VfMbaz152Ux7_<Q @h~wS~nqb.1,P/z#KaCKJVoWM)-]U%zxIMU+q<$-X%m@' );

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

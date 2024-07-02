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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'bG]XC5N^g<;-;EoK?aGEqm<FL<oNuT`=^=zeu5eRktjHaT~t{$/kV8xnQv RFG(d' );
define( 'SECURE_AUTH_KEY',   'a,9H5O+cPvJn*U,>/,34rO57.{cjf@aGic *&b$Rjh(1H9METZ<kdOa0@my[w*xd' );
define( 'LOGGED_IN_KEY',     'S&;(.Bnjln9KiNR]0W`14Y}3h&*5@Cs7htXt@{<0/%/G~b&7C6jH3(W:?aQ<*(U%' );
define( 'NONCE_KEY',         'Z5IIH)7#2/23?de$bAnKfz!sp+{^7dg(w-j>byfF%hQ4!-K,6^i:Bg;(hG0_XNXN' );
define( 'AUTH_SALT',         'xoPkVZ_QT8q>_*8]0b5wcFR,*dFsps9t`6_FrrT0^~TJ[$2pX2:aO%pdFEc46c.{' );
define( 'SECURE_AUTH_SALT',  '8bLF5Cb:yjLw@A 7`=SR.+uN`Rlzng!8$YBz5&onGW[q|/qD+Q5gB`Ozm5y>Gp9u' );
define( 'LOGGED_IN_SALT',    '7c7=s:r4j;_P+(vH_T0>{K[1il@u50rcDN~0` %wFXPV[r]HvGLYBm!7Lsn/2zRp' );
define( 'NONCE_SALT',        'Q*C4mHpyYHF6Hy;8}cK9# <dzq:C&+u>*FY{=Rr@63_5_5Vx-}xPZO0d2KP#s&Xx' );
define( 'WP_CACHE_KEY_SALT', 'k;WhS>lv?5@.{5tbs)p:L4=`Gd2d2b8^4^OhXDsG?1L;rONo;KjG3+=vf/xYD/r0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

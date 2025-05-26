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
define( 'AUTH_KEY',          'O)e@P`mhr7^<9Qi <9Gf-:g=&C&~beXYXc*]n0441}LfM@LpY%4$]V2YQ>a+~a$Y' );
define( 'SECURE_AUTH_KEY',   'Zmf]LZ_5zHYqQ)yQg!RGZd/vZ`aE-b$N2q5w*Tn6OVuf!DrN` ^`m_j&}Z~oo}+/' );
define( 'LOGGED_IN_KEY',     '`L*YyctG9lG_RZN~A9}5Rja[MI,J0Q,e2z}@/:TTp`%h..cS9q$Uo`%GdM)~Jl{{' );
define( 'NONCE_KEY',         'wtTiDcTOY(}A8TsNcSa{TW9#vsI%Sb_pu^Uo 2eV.rR?X2AxIz<^3Hi.ZRc-UyXm' );
define( 'AUTH_SALT',         '_vpf^LLq4-?-a_lSY&YYU7Ae}2xs0[dF|T`]&x0h>_u4.*Y_>{ltbL&FFyskZSLk' );
define( 'SECURE_AUTH_SALT',  'VVMS2-z^2Q[/`7bqKwj,kF`sp`98JUTgS& B4*`R^>p-q>7uO111tG}7ZeTED2on' );
define( 'LOGGED_IN_SALT',    '=~lJep6A-GPH Y0:HZ]?<I*SZhpTFSl02EDGZ{wFn >Mx,CMY!sH`p4nm&3b4`,o' );
define( 'NONCE_SALT',        '0R;@J[~ur>^xjd 00NHXkSCw#vUJ&dNp lwH.)T?&^OlvZIJnt.J/d7D}ON66{ni' );
define( 'WP_CACHE_KEY_SALT', 'UUk9FS$]zcc*9L:87|~TZo!<0meIS:3[(dg.z9.WcpXI.agBY[.)EWqC3X}p|QcR' );


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

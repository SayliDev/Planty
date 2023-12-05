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
define( 'AUTH_KEY',          ':aBXwj8LcyCk9R.PMcKdZ!%NDRHmYWZP)]mkwhzlm@{o;FG*t..toXtEd#l~i<uV' );
define( 'SECURE_AUTH_KEY',   ',lgGaZ3uY)(kb^ncq?#I4F9@bQZSK6!CX$BNXIA(J#xc+zhoJv`z;?:suu=!jG4E' );
define( 'LOGGED_IN_KEY',     'R*~,$Q}uROaQ{D3ocUJwEjb&r8L?j;,j;3{8ys_WG[7$s}Q$qXO>#{+] _.m B-a' );
define( 'NONCE_KEY',         '2%m~(}Q fq&,r{T&Fift8*:EwtBx8H3E!^pU3a,QZ[6>cs>CYo7w|e=}[D$Ouf`b' );
define( 'AUTH_SALT',         'XT[=z307~2) 3+iUKC(->xnD N;NchZ_ujkipsfz=In=#]+w`:VMZPwyG:_^pv;^' );
define( 'SECURE_AUTH_SALT',  'aN/ m16NdqG;{7gdkr99e!Gr:!M=.?4!yk:lv5+]jVdQ8Jv% N`YV7i%yTathS!k' );
define( 'LOGGED_IN_SALT',    '((.a<VL..w2Wb6;>Ma;q(!]0r?-@Sn)Q?m{CD9#)-kT-WXP6#keD33}J|]0df>SN' );
define( 'NONCE_SALT',        '6+=o_*0mQ%pZGsjV[%t~B(&6M4=&QCH;52E9,YF3VXs2?r:d:A6VuRZVwcS89>kZ' );
define( 'WP_CACHE_KEY_SALT', '8%FJb%y 1zhs.rJ%/?+/3>d86o;DfVeFk6(^(>`Tg8*ViqO?PIM9wHM@;I&ZoN!|' );


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

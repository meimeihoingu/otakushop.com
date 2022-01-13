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
define( 'DB_NAME', 'mywebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')hm/rvdC[*>AzaRk]CEv&fUXFB!Liq/_oa1MbG683M>mW_L>2DdK Jm|N,MdWoLo' );
define( 'SECURE_AUTH_KEY',  'RD&|u,2YtN <iycP;KbMrF8&qxFv%d5z9~IyozGUQn^r%%JZH#t*#(,M/+ibF6ya' );
define( 'LOGGED_IN_KEY',    'h@PrG!pS&*f@#!8D$% t]y8}+.ppm#b&cK9Fw:CLRQ4>HfFPLX{yvTP^=p[oD_7c' );
define( 'NONCE_KEY',        'xhr9gAk:`Q/_0iU^3sAj_YqejMzAMeC{J5@>aW*[/e[98p}/w-G,&Zl-jrfVagjq' );
define( 'AUTH_SALT',        '59`Fg8-HcEW6q&*jg8i.]8u0zqm^DVGkH*aN>@$AR:-Ze&EH|>~K#CJdZY*(sA: ' );
define( 'SECURE_AUTH_SALT', ':O6My*(?cU55+;JStZM_C~]aJ)l}pM*l2%:vY;e;nLQm;Z-#h#p;sXyy)0F)/2qP' );
define( 'LOGGED_IN_SALT',   'w_~chNqHNn9P)9AA^y&pA<OneT&dau$3:+G 5wWIrEXj>FHLi>h+,f|&j6)RrH$%' );
define( 'NONCE_SALT',       'MZu6z1>`53=`%9dSYl/~!jui XmDaTG5vg:?K(y0<.geh}=2T{YORF%xLL,9nJXL' );

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

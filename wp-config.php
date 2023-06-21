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
define( 'DB_NAME', 'bariroh' );

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
define( 'AUTH_KEY',         'TfL$Jzrnq[+H`]v*01C3?+gW,&/Qn}i7|T>>X_NW6i00#x$h/m%u9bR{;.N2(-7<' );
define( 'SECURE_AUTH_KEY',  '{[_w.:%!op.= }TM-QfC6)?tq,rCl$YPnV26YE@12/QsFsyR4WV`=#VF)`VTJl,_' );
define( 'LOGGED_IN_KEY',    ')`h d=-vWY!|>*H~4?}ww/$gz/`[K]I.`&uwn Dr$96_jk>RC8jTea~^NUP1ApA#' );
define( 'NONCE_KEY',        'S<Ou<q:nQ!3W*4Ay:;hKJ_!Kp%#@]?hMt97{WL)4@;L1v,)<tCkb9.@Pgt8lM2h_' );
define( 'AUTH_SALT',        '+_M9Dyt&n(P^xtB+]dX3=nIC<5p7Y/e#5<W_oD3wC0ZZ!/hK mxT3Xib9C[*.[N3' );
define( 'SECURE_AUTH_SALT', '7f0Z[ea-94^%#CnL_v:`WBg>t+#GxNM}DW7pk$sKs^v`{9@avN}H,|.&-2< `#1r' );
define( 'LOGGED_IN_SALT',   'r.elLzBLKUpjJ{:W[L>^s#t=H!($hP5K|Jb*%@VOHlQ*KBzs,[*A5(23tc#d#,HE' );
define( 'NONCE_SALT',       'C*Bc7gaD3~>`Gj.QDAFo( ?) *ETZ:=%9?9H.Cf]Q3q;C3|QT@Y*j^wgXVz6T(gV' );

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

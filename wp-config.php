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
define( 'DB_NAME', 'Mobile' );

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
define( 'AUTH_KEY',         'c2#SveNJB9%%L9<|]:TdC_4MO1N1x8wi=]`#)qg-$#8#gEudj!5,j-7;ikO;N`)!' );
define( 'SECURE_AUTH_KEY',  'c,_TqsG!Web?7$D]3yG!O-e3:p1KHV9&fk6~)> TzC8||`d@66<H,CPl4iQwfQ !' );
define( 'LOGGED_IN_KEY',    'FnS]+a}cOyI`A}HM)ACe{Xv=`&J_9e^WK}r9%M$LcXOBR[e_~cgkf7lPd5X+$^&f' );
define( 'NONCE_KEY',        '4U55qd|c *bdAp*C,oKBM!jOR9d@bn(NlnMBjRC,nO%_^R`WF<neJF4qSftED4&[' );
define( 'AUTH_SALT',        'gb%a$!uSpKkA7Ypm6m$^-7g ebo`DzKib-T29K4JDD L9D7=%;LtJ:>W@My|T:!`' );
define( 'SECURE_AUTH_SALT', 'u!Gydl|7paEA2HIT@VQbjEJHnT32Tf]C^6?n0U~~rxX]CNxJisl8u/:pSC4@Zw?!' );
define( 'LOGGED_IN_SALT',   'xqz{P#z(#@/d89e42>x5x8$n;yxnjvRlxJc`E!>*a=5C~E_Kz$nX?C3{3Hv$9hHo' );
define( 'NONCE_SALT',       'p2FV*I{;viq9}^0SjQmOh-#y=r/O:kUP=lR0I9{.u,O9 oCzn4| -1s!<W#@mR`s' );

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

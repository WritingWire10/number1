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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'number1_db' );

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
define( 'AUTH_KEY',         'TN%s@*pILi8jA^_sM$(rVNUq-@H24I=*dejADCX<p`tlK?m5nD3QIf*(gZ{E-Fud' );
define( 'SECURE_AUTH_KEY',  'A|l@{IFWfKdWS^-ia3wH4Z[W{dp~(;_]:Wdh/j]14WY#%x<@7Pa#Z,O:>DHa0p)`' );
define( 'LOGGED_IN_KEY',    '~`Xe!sabj!Nc<u]9UC9#.TU0{4yfjo6`5p>* wilmS3DTQF6PtHC>2I=1@YGA[Jz' );
define( 'NONCE_KEY',        '!DK4V>e7?awT6ZLhPKWJx`uq9e][Nz6P5s-IJDYr6|EHRU~&rW^E_w$ebKoWI)fM' );
define( 'AUTH_SALT',        'oo.4-]_u5)!MT!t/BC5;4r i,+?^3]z]_X[VrnBy+904X,L<S=z4#bgmVs*pxG0r' );
define( 'SECURE_AUTH_SALT', '694olwx,R1$-HFAVYJ_WPY:4dq@tG[c,*&}ZYYUh}h9rVo%kEE)S&_VwXX(Mk^5f' );
define( 'LOGGED_IN_SALT',   'c=R$|b]0]h+j& dTBQMm<9 MEW@WY`b%?cSl:<!LR#>1#wvS7%IMA#tO-xD$EnzV' );
define( 'NONCE_SALT',       '.dEdh+h(%fWp:M/9#QVUSs5HBw/hQHRD_MB<*HBkE2&p]J2JyqC1%L/yt{xp.B_W' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

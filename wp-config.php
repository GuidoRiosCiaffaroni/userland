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
define( 'DB_NAME', 'complete' );

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
define( 'AUTH_KEY',         ',wr1_V*)T{:}|`7#iKSIU?B_})EX<JY?& GO~P[qv)g&i_Rbr_|]URF!~{)hph0E' );
define( 'SECURE_AUTH_KEY',  '7GaqKVHmPp@&h8NqJc1;e*N}{@Ld|EuVMI;~P#xY}vD$A#W%jkR*?)3_7~Pz<uy]' );
define( 'LOGGED_IN_KEY',    ':kyxpsr:`*z_y5uw`:/2!*hN+x<HPubVI,uTOa|n7P{2;}VO`7=<Y<T6xIeKiPM ' );
define( 'NONCE_KEY',        'Dg2(%(E:UHcGnoxlLV/jqs#(!vN4[DAEUi4LtIJ.p<Gm>}LS5*o=YT2/V{i-r:SD' );
define( 'AUTH_SALT',        ':`jun;Lab }oS$dZx&*r{v4XtCsez :n!xj&6}In`#Fbc]+gqNMF2D}KG=FEetr3' );
define( 'SECURE_AUTH_SALT', '>/,hLL^jd2:i27!)Q`.=(l??t9.h1;3@LI0+/oqZ?#De)*j?WMb0@V6!S-bqbzP`' );
define( 'LOGGED_IN_SALT',   'SXwiHxc341A))#b3Yct;p<8D8Jkq9`HZkbJ~ly,3cS<qj~iXE%+&DIZIb9/W 5[2' );
define( 'NONCE_SALT',       'Y`ZyJBk(]=h73b,?>Slm&*tPN^/kO2y8--fNSvxzYC}S/^^d!?p9>!PgY3s.8.v9' );

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

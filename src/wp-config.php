<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u344751218_kWzPH' );

/** Database username */
define( 'DB_USER', 'u344751218_oi3m2' );

/** Database password */
define( 'DB_PASSWORD', 'mfHzKXUHAf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'hd*DtB+5@k^%epYW*zG~/7jK]o>abW.^`,^x!iShE1x*%%V$YQ4o99`_ZM{I?]mt' );
define( 'SECURE_AUTH_KEY',   'J(%d-R0=j5|BHLx_wArZ```6_iXEum%{89;#HprRL<Wn%8(]4]k6/fq-}LK)-emD' );
define( 'LOGGED_IN_KEY',     '@g^,#H8pjxqm]2ReCtuu#4>BXUyQv_=M2CPIbg8q:&T@2%h]0z%J{H%?!`T|dXb;' );
define( 'NONCE_KEY',         '/mIb;gkMa`!xX3IUqfruF_m4Sd2h)0l;sy6OI2Z63lj5CD(3(^*R;!.v$*3F$$Ya' );
define( 'AUTH_SALT',         'rhIh!+`{.G+=UY6E6P3mT}ea=t6eZdm711SPV*fQATQWNic diwNr#Kv}sS}$GxU' );
define( 'SECURE_AUTH_SALT',  'Y{=`8dsi^|fFeMpVeNExt4lRYF^gz3h9S=.W)qL%noNE)D/Zw;H)ep@q`:c&!]&K' );
define( 'LOGGED_IN_SALT',    '.~u!GDx6nJ|re:m][UxnwEKn ExK3+5U7{3h1//)>q{>D?We^T|1Pkf> zl:d#~H' );
define( 'NONCE_SALT',        '+DA6jwsNbn{t-Kgu{O7f%Xt+_l!#c4SOl?*CjU!4*Fm>s_3Q3;.K<.K.h92fFJ0O' );
define( 'WP_CACHE_KEY_SALT', 'tc?UO7[vBfxign1n?4T)v i}SrDYNz-Iyqjg.|cMxh?j&]hH_^BX6B)<516;R1;~' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

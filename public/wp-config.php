<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q&0jCz)r51<v_h{_{qDJ:ZTS!d/Hp<77b1h9i^R1caqn>Q{ho71&Y*eM2LV;%FUf' );
define( 'SECURE_AUTH_KEY',  'Bl_h|$T&mSU*k?~#mn2^dth8`w2MRj,V#HND@;+syN7G.^m)8HKL<$V 5@^7}aZ0' );
define( 'LOGGED_IN_KEY',    '2FZ^+alJ4`cw{>NUl/ li[z~=p!-u%xSUN~>RwLh}5tSMDSbM;t}LVSx:9`PE/mv' );
define( 'NONCE_KEY',        '4-@v4[906 pWAf6/8bYydE[Vl5_Fp;{)r K3sou[5I[;-VaL%8d%;P]ptfJkS14j' );
define( 'AUTH_SALT',        'F#2o>E}bx=p^Tfo$}rmsac@%I>{cC@Q!P#<-=4,e;*uSo(o[Ixl-J9 9:W1|z(7N' );
define( 'SECURE_AUTH_SALT', 'U,P:AXiY@H%%7eA!r&=1$?@u@kLq]wFz5C Sw2ccm{^a@rwBuIFMD@<TrE(jB;Pn' );
define( 'LOGGED_IN_SALT',   '#wbvLGb^ZE>.`.b=ij.tXD^C7gN*&kui3tL/|63_2s(YRX!Qc 1<&.@uoy0cs,rz' );
define( 'NONCE_SALT',       '?*_D&sar(8jNoL]-F!oU9tM7olm>y2D0N^Rf=5@oB?13]556+EhBb7`$nb d;G*R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
// REMEMBER TO SWITCH TO FALSE WHEN COMPLETE
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

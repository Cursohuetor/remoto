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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         '=XhV-%JN{JJj5Ik4N38>CX2A-qXI3n`~#.{t/E`oagx2S4~S[R_4i$QCbAD%xsCV' );
define( 'SECURE_AUTH_KEY',  't3AD>]MT>_-[mg0I}*b)5{.Xf!uS/1Df,W73D_pzw&DgT<:j%--^;*C+2/F<tf*A' );
define( 'LOGGED_IN_KEY',    ',-A;2wypM}a:-v%Prud.sr2q+id{#HsKey`G94t;/#*<t{QR}yUv&{m1A(>m#WaL' );
define( 'NONCE_KEY',        'qoWY1rH7bl_7W|o/9!>A9c(^T5A?RwJp B `1{IYf@O!Rx4!i!bTaZB)3U>b+BlO' );
define( 'AUTH_SALT',        '[XE.|m$ub/r{Hi/r|=[-CIo`KP CmS1KJq_qNiG7n7h5QO q7E)KV4u|4awbm/8=' );
define( 'SECURE_AUTH_SALT', 'H6f/mFYHwD8-f&bk*^)wpma>`*Z&z9S`&Iqg9}Hccui%Wa3>Wna3EpSf`[/+BPCB' );
define( 'LOGGED_IN_SALT',   '#JMO0XzY{gc{S!>JYjf~`PBCWJ3CuOPF>wml+aQRIN/b[zIxTD>u=c kYwdpZ2T_' );
define( 'NONCE_SALT',       'i)c=6|Qm<d5k31-.vL- ` /.`[qaBLaI%o_rjR*F$|vc ASY@nGdKK:tV_@wd! R' );

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

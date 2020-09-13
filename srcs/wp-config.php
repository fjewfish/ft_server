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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'fjewfish' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'L>Pnv>$aN@=g09`1 Hxn9pi9,Mz<q/.!i&)jA3uBuGR]qMG.#OjX382k[Bj-3R/n');
define('SECURE_AUTH_KEY',  '&]{iR=nD-9yP(QTsJ#K|__:E-:q/o!z4l*IH5zY<F8=7Ak*%I7WmA$1o F}:_3#X');
define('LOGGED_IN_KEY',    '7bx?)c:-Ox2uZ+KTVcSqNdy%4Q>&IPKTNJC o;b,+2qmyx8Y1&,t62l90`Rt!HFD');
define('NONCE_KEY',        '2%koWk->QmVR~`gqG2 i;.%H)*A ^0{qzCL)3]Ho.tzl,*-b;1<lT6BBV>Gg:)Y4');
define('AUTH_SALT',        '~G4NMcuAo_zup0,3%b9;]1?[X}|1XF`vrD}?6|N8jlP*<+Yr>24jC-&SAC#eOUCE');
define('SECURE_AUTH_SALT', 'J/(n#* i:*b!mX9!&=j<X9NXD[40< [bU3[[s@v<|R?i09jZ%C5<^%eViH(0K0|C');
define('LOGGED_IN_SALT',   'Ww-XQ)J&+=DT[`g3g!7nX}_[TxhXtPmt1KVl@=?Q,-6L(Tg$ly.EwK$VOG{#oH2_');
define('NONCE_SALT',       'Di`{&q8i_fDEs9ixvD_V-{v94>y~T>rM@TB%Fo;O,XrFlH&Z? )kKWk+sPU~%P_s');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

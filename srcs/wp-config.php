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
define( 'DB_USER', 'root' );

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
define('AUTH_KEY',         'i6+MJB#yU:kmiDt;&XfxHL|O`PZ:1o!eQdBv,B8d-7#)!7SnAa/*[8Y[6:b40|--');
define('SECURE_AUTH_KEY',  'iy8x0?nDrc<C)wc+iX>*qZkUR.yoal-+RuU7M>Y`|cU!MW9vbBGPoq~t$E(,KY91');
define('LOGGED_IN_KEY',    ';^np.I8GrD2:anHV!m-|EwTJMqL^06>M@R;W(T4`&c+G-+E,yopFA3J|8DzAkvtG');
define('NONCE_KEY',        '/YSTkmrI7#q<7sZ~6o/w#Ny[i|_Y)a gT3+:j} >Oh,*icv`K]_DoyK:LJYa t5r');
define('AUTH_SALT',        '69=CkE_gr].sVjw1{N=mInh~1-[bKuNeW(Pu&OiC7q>-2WQ#%lWZa|@h/]:Ts8HJ');
define('SECURE_AUTH_SALT', '.nrgqss&v1ptNk02H(8 bG_aHzL4t3:4%:+/<}!|Q`+Vf-$G{1|V|z)[AQ1-EDq+');
define('LOGGED_IN_SALT',   'B.RYx_YCUw.i0l:m>oJ%xC!>a4,!2|8C!}|bY-KUN1sFIaZU,Px5gQx$:+ Ffv_o');
define('NONCE_SALT',       'ZG$H2<B 8#_8Ex]I]&$jsR$)>x6F2V,7PprRU]@o7L~pP-`gmR-|vJ;PVP|%#YCg');

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

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
define( 'DB_NAME', 'WordPress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aharif' );

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
define('AUTH_KEY',         'H:`9:?r)Op<2KnIZuS;U/na!oC5#OihN17aj$sFs0.@3Y9gMvIh+h6j+.Yl`Nz9;');
define('SECURE_AUTH_KEY',  'D_Xs--@m-sy+RL&:8[8S)K[Hl`51D-kEB-vQ5Wybl47X|S]2[2|36{xD<Oi3?Pk&');
define('LOGGED_IN_KEY',    '5o*_XUCX{qXWY+{g9[EmQiPcNAq<Wq9|q=Zuk,Kx8Al$T#}80,[:}A,FN#v`}.Vj');
define('NONCE_KEY',        'e0p-6(#$b8Ro5|AM/a,fZW-$~>wZay6yM]&.y+V.s-13s,r5K{4?(GA8zm>$xO)@');
define('AUTH_SALT',        'V-@}(.F9nHU@ltePrv-Bnq7T;a?,@gp|/XWt]c7G`:Hhb.g> MV^n[[t+ 5q]F8i');
define('SECURE_AUTH_SALT', '?da{_NEiUD9~7-RuVaRMqZiG?$|@^*d_lhF2VL<^]xX{plR58@-<calUr%zVmyf.');
define('LOGGED_IN_SALT',   'R}*U6V/Mm-c&-%z@Q$,Tt&zc2t(E%/T{sVfcD26D!bw1<~~Wdg/k=_TEacaB+<]V');
define('NONCE_SALT',       'y?--.Z6-5{])g&jh@8aiSx88B+ `i.wC*p}2xn71?:T@wk8#Yr~(HTl&uQ0Dg~)5');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('FS_METHOD', 'direct');
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

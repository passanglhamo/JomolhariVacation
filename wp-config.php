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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '1Z4;o!*mabotfX/E[Ow.K%kP0{Ni`!LJ8`3K!2_uMUrg1LyAU[+<qM;I~.q+;fAs' );
define( 'SECURE_AUTH_KEY',   'MU<o3t)#RAfZjP;I&Ak?%}KeXvW^+J5+`$xs~t>>F)m0t3bp}F4YvK9Do1(G)=DI' );
define( 'LOGGED_IN_KEY',     '|uqpZJnn`%?;UT/SH_F_pGMtqD.a#EG@^)uiSdUrbAPbhwh.AwoCBHpc!e8fVgG+' );
define( 'NONCE_KEY',         '}jh/N5mYbj/MT6/%X2[?t31@uyt!1i/tf%ebWd0<J@+C!Cyp/KC}>5]yghqg4Y-w' );
define( 'AUTH_SALT',         'w#+,$`-ZF`)xPuC^m-:hyDLdj%zLV]1ji?0;w8*z1]4L2viDNo$7~fAZUHWt=qlt' );
define( 'SECURE_AUTH_SALT',  '2oxiNO?<?}f[LM Jb3l8*DudM I~87;;01zzOg9D]>@x<PeB9E}H49u(2Bn|hVB+' );
define( 'LOGGED_IN_SALT',    ']6C-[G1MbsxV$o?4],]55$}:-T4emOOSPOb&P&uZ6b+*_hy2+fq^ku3rFDD5a4!P' );
define( 'NONCE_SALT',        '/rB[kQ&*8?:^`@U[W{>Oa+pU`RG.srA}^PPc|<_0y~3-#Io=YkFv}K-ln7~XVw/.' );
define( 'WP_CACHE_KEY_SALT', 'tXsA,Zu(?8Z47ucqnbw]To4-IT:P|h (,zW:)/ ML8HNs)Y#TRzq6ro;=w*`/iO)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

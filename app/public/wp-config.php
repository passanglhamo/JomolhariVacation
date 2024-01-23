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
define( 'AUTH_KEY',          'Hz[j?hUnjrIJKK#P>S[t:;/5Ee^F2;2f9H:PGyXC&MS,SuHJp$g|XVd8.nW9t(P%' );
define( 'SECURE_AUTH_KEY',   'yc?4(McyA/uWc8GjB`{Y0`nChp2W_%z.H3DBp~=1+,r 6C=6IPu3i{C@&&aA%fMm' );
define( 'LOGGED_IN_KEY',     '=%-w~n,VW|>G+*/F:q(~,$HL<9s)B:4SFUxr]O0$*K/iW2ZX9ama(3&|owVCehD1' );
define( 'NONCE_KEY',         '+ne1mwFFBIM^)Fqc,(7 Rj.;sb#.W[H{8@|ewLcTJwyB)))g(JNnlz&!>V%QU.cL' );
define( 'AUTH_SALT',         'UM1@{W1a4]C}JY(rjO];KayPh,Jd[)Nh0+r}`xy^C-w.ewSv.}3*?MV,4>{NNY0!' );
define( 'SECURE_AUTH_SALT',  ']ZbJr53OW1Zg(q}7xE0bokJ(P55l.,H2xC(>R[TJK3mW?=?`TFKLc!ukfg:NiyD ' );
define( 'LOGGED_IN_SALT',    'xv,fW]d29Aj2fD Y}W9>%*AOI4m&`mZ$!m1#:){wpLXS(SiynXKynfaX:e/<!g@v' );
define( 'NONCE_SALT',        'f&hpD#+Q $$;vfLX>_Mp@:k:^B2&s??KU.:pPN3SI%1/6U?}3)?ZENuUs(T$3jrp' );
define( 'WP_CACHE_KEY_SALT', 'g(2i9N#yg+|O8.#=(v$cXCfkRzq<!g$@6Uk0eH>;R,na<Zat?le!E<qb13xb&Hq<' );


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

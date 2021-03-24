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
define( 'DB_NAME', 'testb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`0oJ:=MD;kb=!F[x gGm&*YpG7c<H8zm<n-CzjsSe)4C^!,}212j(Gbb :tI$U&i' );
define( 'SECURE_AUTH_KEY',  'N5(ix<{~o=}O;bx+;HeMS{jw(PE$Sba9e=8_ynXtVn~g8!XR336PV*;2,j;E1l!E' );
define( 'LOGGED_IN_KEY',    'RWw]9}5Q4E~-5*epe,)%ZX^uB,g~40UZmFhFmhDZWu%|-v=`2a8HP2sgOf_(RE4:' );
define( 'NONCE_KEY',        '`3r &ngooB{_nv@.!w,llD<;IeT2HdBNbki}l;oZ9at&l:Lke?Z4N KOM_6xo4Uz' );
define( 'AUTH_SALT',        'nk,M|]n-mWMiEsCe<PX}^mGSm)^aEGj13SQhcSH94AHa- P-P6N!^Vc)bOt0##SZ' );
define( 'SECURE_AUTH_SALT', 'h5KI$JQid)|HvH2X(+0pV%~#{{>W6!XE;#>u*IvYEgsx:XWtdU0ZWP6b2>o[<bWA' );
define( 'LOGGED_IN_SALT',   '81Uub0M2:P&756M;Z78(!B~|FrD`<nc2@$U<h<9Jk,sZ6CF]] ![(N*j7NW?ob(?' );
define( 'NONCE_SALT',       'lL8DB1ARvF(4fjnPJ<zTFIt2q}Suk+5jS)>$jzr0Q@bP.?W=s0Zj%x{A0#.q,2z)' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

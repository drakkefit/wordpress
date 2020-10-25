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
define( 'DB_NAME', 'braznews' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '=RC>>A(4{l?tUPjJE[43Q1Qj9OQV2zTGuqT~:&)~8Sr-t?.#/B{N1-zI+yc`>zHi' );
define( 'SECURE_AUTH_KEY',  'B%xc7GwRLtm~Fd8@3(ja=/lu6) @Yeah3R(};_y?EV_WV429@{# an([p5j?GFh+' );
define( 'LOGGED_IN_KEY',    'Xix[g)EG5vT*PuSPS@ZFu$4W+WW{NXx+JU%9t$mT<4<0GDkEjL|{;.+Z,XM mt>>' );
define( 'NONCE_KEY',        '}EzU9B.lpkrci6i<:lWtmHeCn#35VJgXkM/0eCaL{)fLS]^ 2|T.k#,k][UzH8(R' );
define( 'AUTH_SALT',        ' =]U_+T-5M2H^Rq:)T+0^p/g<M;g00>pELltK[c64rzS>e14;R]SY4nn[b`M#^^S' );
define( 'SECURE_AUTH_SALT', 'y,d 9-e_}.67!N<>j/=1lS~0Phr4}]9?S&ueE{66sG=.yKzD@Ll? GT5O;|a7k(3' );
define( 'LOGGED_IN_SALT',   'B;0~FE*=Josync-+eby=Me!ov;^8@d8mOy=A&wd`I/b>9KKP&8~ftIxL4$/3C%w>' );
define( 'NONCE_SALT',       '$5#>nW#B,+!!13da#3p~Ac&jqiW}LF*AA>Y0X/pCTyI72kFz$?|MzC3Q4hcbN}4H' );

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

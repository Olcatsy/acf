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
define( 'DB_NAME', 'acf' );

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
define( 'AUTH_KEY',         '{cw>wUYxK#=K[{EH|vzHsXBJ@?Z]31FJ,E$sWPyxF(&bk9n4kFXqMa/^1JL=h9fK' );
define( 'SECURE_AUTH_KEY',  'O#RUp{nF Y:JQV|UC0P1Kcd:q^51@Dc)IciDu{lq*Wb_/1m)Z@;7[2xa0B^.Hg]I' );
define( 'LOGGED_IN_KEY',    '1aj.iWG3f#vOW}l4zFdG~=LaxS1hn29XRFty9=Hj`3).HG5ffWq:I(N/Ef,W!*3Q' );
define( 'NONCE_KEY',        '`,wOZUo~HQGXsW3.n}yNMDDGY`&-$cq_;?O.&&uof$yn?s)yrvas$pTqQMC1eb>v' );
define( 'AUTH_SALT',        '8W(D;D4uZ]A#)9%7HmH<rvf]ORL%$-aUAE77*#7`%O$s5wUTozBc q/JIUd-|`7a' );
define( 'SECURE_AUTH_SALT', ')8d!8uNv{AXG1H#`6vZ?uF[S2SgAGH{9=iKH)#hLy?!2%+kr*`vylO,jVa&8/C0+' );
define( 'LOGGED_IN_SALT',   '82>hvTLgc#JV#6<A<G<B-zMj82a^I=7@NgvU,ynwNG2=V>S8p6ZVPX#m:Tz%H9!<' );
define( 'NONCE_SALT',       'T]4*!r`yIs6ug)JZ`k6CE~V!VaNUYW @m$SH hEeDO9,W)L(:V0HOIers@nFRo4u' );

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

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
define( 'DB_NAME', 'wordpress-test' );

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
define( 'AUTH_KEY',         '$2r3}*8zx@uccVM*?nRcA%@Kj/|D_#?&rHUhh_+6,STh@%w|0pc 9rK.`-`86ZN0' );
define( 'SECURE_AUTH_KEY',  'pVX)aJyap St.B>jPr;hNmxE^SXC1_B#2-<lgZnP:2moG{=*E{ &^g +B]WhnO?H' );
define( 'LOGGED_IN_KEY',    '>9&QG(d Q f;bc.x^PAwM^dQS:VB1j/0QupzaD~WF_IvnEAAEc1x70RqE/UxIViX' );
define( 'NONCE_KEY',        'v4eVy7oLUa6Eb]GxEjXJRfaI0qs!tq}b;V7AaApwqV(=Y.1^`TG1l4cjil8df^ZY' );
define( 'AUTH_SALT',        '&:`a,x:X!1z&Wn/E^jm,*8TCop#97|29kB6d}c:0~=6abK)a n`N)-06+ejVqn,B' );
define( 'SECURE_AUTH_SALT', '>1 ZU5q/Y_{Ce+I}mVf.6aj0-tJW]=&;~H>@1Kk`c-#y$3yW2k?2y54)x?&c5Q=/' );
define( 'LOGGED_IN_SALT',   'J[nIZn&=QgF6AO-~0@qxy3d}tGMuWHl]@0gzw/iDYT[/Zo,Xc&T.X|=kIPP}x];T' );
define( 'NONCE_SALT',       'l%?{<Zp?+w_QQ.:eA^7S9%x;pjw!WKs).fUI?5_a/O{!kt~{/-oM)b!/Kh3w q.P' );

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

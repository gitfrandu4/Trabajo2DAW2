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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password1234' );

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
define( 'AUTH_KEY',         '^-AUHxX@Jrll:9eYrUF?8d4Yk)yI{ZYZ#)!0IH*`^zokIMr7_sp0}%D%l[)?5307' );
define( 'SECURE_AUTH_KEY',  '4NG?M#huxGiU^!4|=#VEv.B;epD&u:O+<9KY`$~w hcxI56ay<x@,/VnfH6o&n&o' );
define( 'LOGGED_IN_KEY',    '2izO7C?4WQPY([pq-Vt8H$uJci }F<qb7Q;xkoT-Rr&~rj~{7LQql2T!n2:lBR<B' );
define( 'NONCE_KEY',        'RxI9iFzg:*y$%V#C2%;`eQCCJ!uQ`W{Z,a+Y6O^Y8=J/f(KP[S<xa0*]uP%M7lMt' );
define( 'AUTH_SALT',        'm8G)@14U]HBa(YHhl(m$0J9nF9uAY?jg9gTx3@|Z-R; h~;/).;I,VJ f}*!^<et' );
define( 'SECURE_AUTH_SALT', 'YnqwTR{oBUhjNJ3PeufBo{~ LYF56Db7mt)uB2F|pkkca3jzyxwEb^#6l+y*4I|r' );
define( 'LOGGED_IN_SALT',   'g[)$U>Q|(UPX4$U9O8}ZD,P^v{jl*jA}]!S*e4n+0<)]HK(+P8Vc8k(J=VF0.&v3' );
define( 'NONCE_SALT',       '-l;+5]7EVr1<x[jsY^D-y5y[~c{Qx@/J,Q]>Ic l;[:a}xoB[8!1^z[~(dG-&x6X' );

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

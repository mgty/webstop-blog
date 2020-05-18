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
define('DB_NAME', 'webstop_blog_wp');

/** MySQL database username */
define('DB_USER', 'wp-admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I&t$mm<bkFXn|8ZRQ_PG&3Hy[SkN0?7|Rks$D78ZtQf)rHZHj[VS&m[GDj,yV;zb');
define('SECURE_AUTH_KEY',  'y 6QR0UfIa{CQMjzuDq[(!kjP?N:*<E95N~.9)+qI4t8U89^Pm8})@Mrru#~PL}!');
define('LOGGED_IN_KEY',    'uO|t@ :V}UWb%y@OI%2b(9r..UFLb5m?Ut8gWQY@2_#/j2[Rx%e$s~C:`/GQ)Q45');
define('NONCE_KEY',        '6UWu`2vL|dzOJJh`H~%m&m5fPZx`>Bm4i[)2*fW]>0EfEb~@BWjH(Su^{brZ!O.A');
define('AUTH_SALT',        'W=x`Z.@nvF0I:tvJpEh 1%n>Zb9K7lYT*>uplPhjW(GrCiICkUs9A-C0f`Rt)OSr');
define('SECURE_AUTH_SALT', 'Dn/su2Qe.!;CHx@25i,t)]m6&j6(gB<b z?>Jm[$M$<zkZc7eae< [?+tsz?)=`h');
define('LOGGED_IN_SALT',   ':oxt?H&$zUle~#5rqrV4Jli{pUnE@!^uU7&21dB%ofAS>56wqKE<5*%amAy4V)-A');
define('NONCE_SALT',       ':p 275yr51E-`9y)*lQliYE?8Dn~xg>1}:EY=N2$5hZ.$f$+2wu^z~^|8[^1l){B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

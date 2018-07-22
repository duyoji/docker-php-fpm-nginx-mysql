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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'hogehoge');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         'Tw^yJb#!9|AANK|/Fzj+<OK#3c0A,]Fm&%=U]{J*[2/Pm+2]v,V>#AsS%yRX_5q,');
define('SECURE_AUTH_KEY',  '16+9f0EzfLH!AdrQxV!`~m&.yS+D,qR;:`MHy9Nb}d P<R[#X-D@k}Wlleokjp5X');
define('LOGGED_IN_KEY',    '&|4<+Xtz!Gx1Q1VmXbNOQ^Xn+,-=:PEoDB4&EFYej8VQ9s43U*lZ~$-IkN:6zn *');
define('NONCE_KEY',        '`L1Qk)a34_g.OZYL]~U.7;ZhwkQqIWBr ,sI/}>c)1,x3Dj[jO RD*9+_IMi6.#*');
define('AUTH_SALT',        '`,[vn2u+LcyKLxs=t>~+G[a3]Dks).ivyPR`Pw3,8|)GbJhE*1NCR}g{h,tK+J>C');
define('SECURE_AUTH_SALT', '*Up-+h|#U=% &:^SiY-{&theYQQGYINK4&}L!RWVjF4*A[*IfM=K`YhGGt4Q~x0:');
define('LOGGED_IN_SALT',   'G_a[Uo$t+M#ubnjy).f^.gk;uN.4DC9w5SQ}r]~R}R >H8 u+b]$ >3a$Yv5XMz[');
define('NONCE_SALT',       'Ut9U0h_:)h_-Ft$3j(_%U(uXCH_-5RbWxnRZ7ijY{zc<ux^~G@m=u{]hYFq+(KA{');

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

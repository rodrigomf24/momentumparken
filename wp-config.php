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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'M@M3n7umP@rK3n');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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

define('AUTH_KEY',         'i69 (|lIpY3?c}/ppvu}%}WM.`O#c.84Y<.|j |Y!R2Q8jkotI%2dPkpAWef4lL~');
define('SECURE_AUTH_KEY',  '7+,HqG~xyNJ!7rB[7?L1b!2m0x@P.~>m$$s=fyP_jj>L7k~VLF&fK)& C4I s<fO');
define('LOGGED_IN_KEY',    'R||pJ:vpA/]DHK+YM(BSV^^iCDX45@*ub]:f&[Z9;oQ0kqy]W&: |mw3<-xGhLmN');
define('NONCE_KEY',        'm4y&ZU+%0e(eSLxaX[%}4BVJ+p. J9Zyf-6y}I@s=L6saSTo6XeLftKlA)Z?AgIJ');
define('AUTH_SALT',        'M.3<@lr}u^-C0|E+q1WJDX>.^{Ou:KNP&&dz=Ys1V|6DO*lx]!~EKWS+=.ESC3TP');
define('SECURE_AUTH_SALT', 'HdU),JJ.^ZZdUn {i+6dn^AWQkkqAbujGU0OYid@x@RE--R.N6IC[wtv@?->yd[H');
define('LOGGED_IN_SALT',   '+^jy,N.oHM,L|%!wQ97:64.rSof151/C`,-@Q=WH5&`tNUHbm!F_ykui!M-7 ]m6');
define('NONCE_SALT',       'q:gG}]](okg=w,Ts4# IUl0LUY69R(>b]-0-L$A+}]-)Bcy~tbA1pL)Uc7Q%b~e2');

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
/*define('WP_HOME','http://46.101.135.206');
define('WP_SITEURL','http://46.101.135.206');*/


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


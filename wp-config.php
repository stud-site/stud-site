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
define('DB_NAME', "u167814_vitte");

/** MySQL database username */
define('DB_USER', "u167814_vitte");

/** MySQL database password */
define('DB_PASSWORD', "Vitte2015");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'BgsR9bqRaC92HJLLb2%Gforr%2t7tMBs9w35mY^O!k^)l!cL7Vg8WdARLKPN0J#2');
define('SECURE_AUTH_KEY',  '(8TLT(0u!23XMT3Pc9L29e%cwIptTCiVYsIoMASx2hP*d5)c636DopcL%N7sMWk2');
define('LOGGED_IN_KEY',    'Dn%n#GzdGC3NZaq2V@#J57r3NIntW!P&yzd9%m(blWBGM%Of4g07#@5r^b4Wq1t6');
define('NONCE_KEY',        'i3%2XedBAOYgxiqmVwAE1b3rMRl!ckjsm&2B8RjgqS7irRd(ceuK&xWkEdJ2pzcq');
define('AUTH_SALT',        'LMz%Mxo*JxKhpFuhBkePV(A292FrIyMKy3gb%vnvwf75K6ECWQODZxCxxH5PPeW9');
define('SECURE_AUTH_SALT', '3bl8zQ7IdE02O7HO4Tc*XEjjPLAy3Zk58QIYjYw7eN1b^QjId&ACTDAru4Qr9juI');
define('LOGGED_IN_SALT',   '5#MX4On!ZOj0^1&J!3JqE!c8LePzdV%O&R7cVQ@t^EN^Lb7Qi9T6BGXJw%sjEaxr');
define('NONCE_SALT',       'YRW@%f*s&Kt#o3q^#wv6vkLgDh9R%l1wkq7)4TA*Zh3(XkLTUU8n2z2MPCqhla(U');
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define ('FS_METHOD', 'direct');

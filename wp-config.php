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
define('DB_NAME', 'jespernpedersen_dk_db');

/** MySQL database username */
define('DB_USER', 'jespernpede_dk');

/** MySQL database password */
define('DB_PASSWORD', 'asherystrasz12');

/** MySQL hostname */
define('DB_HOST', 'mysql29.unoeuro.com');

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
define('AUTH_KEY',         'R0uN0FsE_J[t1ob6M*;Q/[BNi(%Dw!&m%T)st0)m6EKxCh2c7NbIX-a?cY9=n,+S');
define('SECURE_AUTH_KEY',  'g5v,[-+[T@bm&`o| <|vt|Sg+Lf>Zwt=GE[(Ugf/<wFD7O!i_$57g8@P|9!ZA2`P');
define('LOGGED_IN_KEY',    'eNfW,cIJhKInXyc-&8QTCB;AR^P2JvV:y=h++67v;r$1LiXwKY}1W~WyDL*-Y,DB');
define('NONCE_KEY',        'I(tOq!egZ6{<Z:rcW`P7m^Ve.v:,R)EqCFwD<+Br+-HUiiR#nma g=)g._Au2U/C');
define('AUTH_SALT',        'XcPrtJD0oZtMq%9KNeMt+&sut*#~0wi&/FWN>YqCW*14M{ox~;rJK31|&S<Ua2a&');
define('SECURE_AUTH_SALT', 'gI1I`2JpnEd8t<MDM&a,`@)ODqYJSNb~_hYE6sr70+|-T.>>/ndlt5*uS(0#Tu5{');
define('LOGGED_IN_SALT',   'N.pJ`hT`-W&a3kei? GI<zE&,Yav]z-L!T4 Sn)j]K`>bfVJ=dsY}j^;3JC(4Z]r');
define('NONCE_SALT',       'R_/:QHfnzgMU@H${Nc$ds=[F!<>yU&Z^`v(Jxb^3W.P.I6]S3BbxRk!~BDyZk!.g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_pf_';

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

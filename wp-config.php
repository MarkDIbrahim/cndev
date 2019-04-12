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
define('DB_NAME', 'cnbackup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME','http://localhost:8888/cndev');
define('WP_SITEURL','http://localhost:8888/cndev');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g iEW_TQX DhJmQ]CK8|D-5G<*(>QxNs4T_2bRY88)>c~SPHOZ*,I+~et|co/L*q');
define('SECURE_AUTH_KEY',  'X|~5nY3VU8jwjl4|x9x]kFj(OmSikLdytOo,)J((nZJ3=yR?ecSl=|3M2iDj+mbm');
define('LOGGED_IN_KEY',    'badd[ fn%(_P7SB+y!|Hm~zx0 &T/gI.[of@d2PuOGX4p20 4{<Z|d-X+4pX&b`i');
define('NONCE_KEY',        'cd.3e[a;*-idQzNlGbusN 9 De3hXUT,@|/UMJ<;c|+vBf<lptwen~PdzS_W!mCD');
define('AUTH_SALT',        'aGJF5iYfaNF/<F:O1xiLf_o|/b/lD{(hzLX*$?fqJ b;/)}qQlMPE4V/</,ZCm)/');
define('SECURE_AUTH_SALT', 'imeB!d?a`I69`0`A5FT7:!EXtm..`+~$clTVB0zg.N}pr[!O/#0J>#}dbR? ;I`[');
define('LOGGED_IN_SALT',   ':1QMcdhk bjV3(@F#gJSqgYa8j$&Lz(w#2K6yKA?DsQ*<.v71r^$8P[k(jpmzO)~');
define('NONCE_SALT',       ',=e}j6EG>C!B[kb[8*D@9<:ucNTdY%5ZWLeV>lB9X9L*iA)Gl]I>lQFgf<W)QD-e');

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

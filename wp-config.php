<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DbTrkL8c<*-ETM3Ke[{{w0|d%K1rq)P PBXeldr2+t9P*%*{|ong9+Wu*1pBm$lD');
define('SECURE_AUTH_KEY',  'FA4~C+i-e<jKkY,ThvFs, %*Jc0{$X#&Aby5f>f%QxodB,hENm-0&jV0sL0W]Z:L');
define('LOGGED_IN_KEY',    '^|:6?pf: Dx^clQk/`mnsC$uA-Ngy<E3O- K`>zbNy94Cz;KD+(xK|En1TfjY^LM');
define('NONCE_KEY',        '$+=?1H3`NNsqtvIo-|C{|&dJarB4OgS#U!9`ZY*/-w)j%+VVyug&>%c&J(Q@|4v,');
define('AUTH_SALT',        't9#P,~X+C2w_t&5*J^)GodY6zE+tKjIyyM:Mac5~1K5%N7Dd`,6PDQ+wyd,[8[.$');
define('SECURE_AUTH_SALT', 'h&QtPYiZc#H}6tokTR|lhGU9jUEM$`D/z=$R19pE-xFPmR*|5e^PM9$=|B+^/e]z');
define('LOGGED_IN_SALT',   'tkpHP-|gfN#Wm}46{PT60lxmrCBJaNZ6:l!BPH:|@b44IE:%aCB8[nHnT$t?MJ9i');
define('NONCE_SALT',       '&?Oi.^5jF/o)z;kadndu%mpDHRWqCG2k=n<q/R?8_a4x$X%e=/:B >u.l,BJH6Lq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

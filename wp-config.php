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
define('DB_NAME', 'wp-running');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%?NdQ1M?zS=FonN6zakchT`A5Z&O;4&9.70-utR<PvtXjoS0)$)~[v#_>p4&4gyy');
define('SECURE_AUTH_KEY',  'qvGw~9G&2dj9H9]AWm.N)v|WDS %>ud&%tU]&xi{OB3Xf.X^*j^^c:<Aofmy:{4Z');
define('LOGGED_IN_KEY',    '@CoCk*?.g7,8DTZH^G6TB/FcRGZ&V1OC9Q+E#YawMeS.4cpl_wXJ =O$2u!XEOdY');
define('NONCE_KEY',        '=1-Qd`K%>ua;U Y[Tvv{+Rm$%K$ QP+vuj/j}@x.`rc}3inw4xI}=*8)P=:G W|Z');
define('AUTH_SALT',        'diFq*w(XbC?i(|/7,:nQ?Ik|ls-8;;:P%fW>xLhW{)v^$!K#G&wOT5HSxo04k%ch');
define('SECURE_AUTH_SALT', '+^M@DISyhI=umeQbr{ >,_g8l|=_KY-B6sF-fWCsXM4b=3AvVnV=_qGdXt!FwS#B');
define('LOGGED_IN_SALT',   'y#J00|2%]`07@QQ3UDD0j90uVO.;,;0niL}hv[U{|%$0(+_4SAM/b}=;BTkS)H8J');
define('NONCE_SALT',       'iGbo>xF;u[]iX+j7a514{W/#=-oUs$Cz&/6lr9)EkqgzRG+gVZ:Q-GIi~gsvl ch');

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

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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '-.}iprBh$q654UtD.FaOVeMWzq==%UeN8!,;CF+u6;Kn^qu5S+PvLm<#vL^)h{#f');
define('SECURE_AUTH_KEY',  'C`-r^#Y0[ZmxLa@df>}C;q@%z0t50/bESIKJX6(6Dl@_|]Qc7=s+?aMjwzm]3s3F');
define('LOGGED_IN_KEY',    'DP:?kcR/A7<* g$o[#@D0/sFl-8K12DFBP#t&QbnuCrdz*d_xw5@[*KnQ.I~{P=N');
define('NONCE_KEY',        'z-VEoOfe<>y&=[KHT|)~|jeA2e|@-_X],;Rgh&p(-t7%$V|K4;)&:Gl|rg$K]jDL');
define('AUTH_SALT',        '_HG5C:rV;qn[/n(h.ex]=-*-xCRk9sSxoGoV=KlM:=_~AGhA+]QdZPOy+`Hh8U[)');
define('SECURE_AUTH_SALT', 'y#xA:CBE?<;j|S)mq|$[D+>g6-)5<I.2Ut;z*L+$WxXZ#r7Y7ol-xIV4|j$L+&0+');
define('LOGGED_IN_SALT',   '[UX93Fb}Qun;_!Aw#^!iWruZ<!@_*3$&<{iVsxbd>+:J:+oW~v]0k&OvGuPC5d+>');
define('NONCE_SALT',       'o8,U3luiqf}-mB|nv+Pj0h50c+JNYX> }oL}:#9bS70oBGy7DA{R@I?QK~eEF0Kr');

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

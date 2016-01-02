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
define('DB_NAME', 'WordPressProject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'N|-]pVyatBV}.WB`>SrW.vy2)/pn5nl[uIaLL#R@F-?e&0!?U3c@82 kF+c8SiPS');
define('SECURE_AUTH_KEY',  '$n0rUVL8L8](V~~*rmzB>uS<XESi;3>8%!zk~9dUmvly^C_zBy%d,zRPMjL;&PkQ');
define('LOGGED_IN_KEY',    'W=Y< 1;Mk-ePN-y1l-6nYSe^Mi/`F97{ htI5#aiE}{!X@eZVcHX$ fPaI*m^v{K');
define('NONCE_KEY',        'I>VR-$am4nYLfMK11;JskB{Z#o~#j(V7~WR 0x<b7*nm/%d!a^$Cxny6LTF+y/.E');
define('AUTH_SALT',        'B&7]3(uuZ*BiJ*8pS}q~t6 ;&cnk^*uPeW[8JO-%G&7u9$zQTI)s$U+mI)b3&zf`');
define('SECURE_AUTH_SALT', '84E`}Pw~gAm;=vUgaH5+TW%Fg-G.c^!x{I tE[JiMb/L]?}:SY-3A5b2H0~V%lSt');
define('LOGGED_IN_SALT',   'V0B`o,Ij#%v;M+BOk@SNZq=NU[33[}!Kk}m5:%{G7Hw;LmnazVkg&!M.Ie_BS{Zv');
define('NONCE_SALT',       '![<afgsnx.#&{5YX~_[h|+ui&q;HZwBD${%+q]=xUxeH=wbWW<ZgJ9}!<dwS}#92');

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

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
define('DB_NAME', 'db_wp_event');

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
define('AUTH_KEY',         'XC`%~h+G^vUFA6LIv379#]%FtC]gwlBng~Sq.5L&5Tprsm6I[V?lkOx583s_Nkv3');
define('SECURE_AUTH_KEY',  '`4E~lJlL_w<gX..P/>c-8aw*,bOv]S!~bi!S+NWlRgCl*sl:%fligGv ~7q5~~+8');
define('LOGGED_IN_KEY',    'd}AJrgqqwvqF<K|^q!}yn,Q{h_fD.K[wzNE<W%D3t2}jenVN_q&#sh:z)p6@gt7U');
define('NONCE_KEY',        'h#3!G/puj`f0@uA5y&QBX #&%e^.o1[Y(=TKS_}X}]ox)e46(,{49X3^A)f*f5o ');
define('AUTH_SALT',        '-OhLS_e82=.Djq&A9E=2LE?hEtR~4mCSYne){ZoqBZ7<V2AX:?w[i:#}R`}}Z =)');
define('SECURE_AUTH_SALT', 'Nsr-6O3A^SX>`C{w<=MEjmoDt1NvN0W#RN}l4C Sokvbp*Stw9jUYAs.Mt$tv?dn');
define('LOGGED_IN_SALT',   'r5C=qq[N@i j *wz*bY_Yoih9@m9.U40xj#O?*JGPLbd]Vql1%eHDC~L>[xV;^bu');
define('NONCE_SALT',       'f+Mmlu:V{k#CP+J#v[MmI?d!8SpLOT*7}rY1_(R_mS%cnx7[c~TCEu#R6`@BkZeR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_event';

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

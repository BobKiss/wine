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
define('DB_NAME', 'winecoelix_malboro');

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
define('AUTH_KEY',         '9 GG|IoU60rv<Y.pF%IV|# |-OAN.zfznuE^9C]Dqo}X`ao*bQ#,N*5n&Km969`q');
define('SECURE_AUTH_KEY',  'Yx3WF}tg38kkv=pe2 }K*i21VrPSC|cpr96)4}q7n8GClT{%XfN$8LAG=06W&M_C');
define('LOGGED_IN_KEY',    '2_-}M&+FMj>]x6:k(/-0QLJ,.Noy4}!rdWs{tk(gTfM`o.gr$S-B*U1VyVP@q-[3');
define('NONCE_KEY',        '#oBh?9^QS6O^WO1]e<Nxa$^i1vOm3#=kXWZ3&M2/I8RT-n;]#[IXk3qi`zr3@=k}');
define('AUTH_SALT',        '!y)^6LMTmfW*kTr37~_i^{IJ{7-fI>lA @cUF|Er9AtI^4ha}V.H>_CAmUMMO E@');
define('SECURE_AUTH_SALT', 'k_q~~k^tlc+wb(Dn{7FU8[9sRVS_BeFW-sYvD4&U^!G6KW]D.%BR8MW=}Xi]J0 &');
define('LOGGED_IN_SALT',   'n+?Xf?`c-ds0]/b1,BkJZDQp@l^x#};HW!/}>T[(_YA.Vl#_ATQfO)CQ2 QfvV;*');
define('NONCE_SALT',       '_I&ma/|bR)8@E|U:}U]tmC`={!tIEAEB$c]l&^n>HG.$Jmr27?{OT-dnD?/vR,fw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wi_';

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

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
define('DB_NAME', 'webofpatio');

/** MySQL database username */
define('DB_USER', 'webofpatio');

/** MySQL database password */
define('DB_PASSWORD', '100T@uRe');

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
define('AUTH_KEY',         'g2SfZF,a*<#rDrThIOT;Fy)./Pqfw4M,|J)(}YSO~F:e:?:eI<^p;]NYh0;% d%5');
define('SECURE_AUTH_KEY',  '/LRM%ERH)]zPL#N*8NJR0c:0ahk^KDf%wR;<nGM/r7_H-R1U|5Ue^PE2:,qX$42[');
define('LOGGED_IN_KEY',    'Lz1F_ijzzJ/_jF1%WPzzr*t0OOUNFOsMA[s} 1N!q&CrUMUk@+!Tbh|Gy.m5$.bq');
define('NONCE_KEY',        '<=_Q8OKZF6`c&cldXztX+@d*OE&SPX+=4-$u9`j0{,/Q4mp-&D8_L]?pFRqeX v_');
define('AUTH_SALT',        'HjvoczM%_mK]L?^)k%9!!9+E}Nx,*zS(VG^p:ysEgF0q`Pi,Q[EjuD4n,C)eISfA');
define('SECURE_AUTH_SALT', 'FKwLd)mfyK.-Jx*XFq/$Y<2x!4XW9J#SM!#Gnx<Sjpb~j(9_}$8opkgYi0{7bZ8H');
define('LOGGED_IN_SALT',   '.m}7ok_-QH+%N6S= VNBh]kLjU{&BA2jX@OJKXSB@.aJRw$CZY|T*wxHZvSm,,rV');
define('NONCE_SALT',       'd[m.|[RbTNuT|;pckBg)2`[K VA$L@1&k<3Qbqvbv;2Cq`tcqMp7u07fje$a#9&i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp3969_';

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

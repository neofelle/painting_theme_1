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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\luke\git\home-contractors\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'painting_theme_1_db');

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
define('AUTH_KEY',         'bDqyCQW.MJ7,z`4PycBD?AC<h&SiPmK %e&KeOO[HB6M0B* Vs[#`xV#Mu p.XYU');
define('SECURE_AUTH_KEY',  'R)WIn!ip3X5~/_ 7$,eQI/CoNnA=Ly)VF6W8@Hez~`{h9s/_0m,Nz{i`g7R8fDqy');
define('LOGGED_IN_KEY',    '{j$I`W~OQQ9VgkU_(.1KN0],JzQ2r8A2TZ<14uB0~Gomz5~W1q[qCi@TMJJY3EK1');
define('NONCE_KEY',        'TdUr7^?<YNWiR<iPTaM2rm{42LqB0zZ!0*bk;g^F]}M$Y~tmY-;sM[<aERFs]?2!');
define('AUTH_SALT',        'Z7J9:sg:YY_t?q}+[Z5Z|$mJ|JS.,(U%P*d o%SV }h}.r+c4gUpmG!u+_umM<z$');
define('SECURE_AUTH_SALT', 'G.3G-xqz^4Jb=8v:M>^5_08BU?]<0u7N,2$r@w?QyMeau]Sg0CyRY4hAtbAA_t.t');
define('LOGGED_IN_SALT',   'N8R04e,fAfnA6;lsdyUCL?.aOg5[F$;+AO5$;Luta5Ue#O!t|YpyhvUDRX>u(]c)');
define('NONCE_SALT',       'YoygK},B;~z~vxsPD{K{ao4 ypIw-TB*^oeJiw5YM05*ziu*Z/$MNmgf@(8L1Z,4');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

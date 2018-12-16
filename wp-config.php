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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'l~we}X(2Q%DT?3pePn+T*=AujzY)k!X9a=1x QF0zhIXhrA erB,BK7W</g$= tR');
define('SECURE_AUTH_KEY',  '!H+R_]pO(?Q}W(cl]5YJ-oymXnE+,v~U013)Ea8#sz`[3EL&)k6FirUWcOoo*r5_');
define('LOGGED_IN_KEY',    'R3ptSJ,iM~PRp,]&D*8~K*U.PNLx$01#MD4%V<[=@&lytm7t,25N#4;0>$dwTC.%');
define('NONCE_KEY',        '(h*.sDM]S%LU]%[D+v-eH*@/9%/=eB:7Z>_9VV&,Hu^yu4dUL>25lw_Mr[P|,!fx');
define('AUTH_SALT',        'NnBHKuZ2Y5./M4.~c6D*#9~-jVXAtTgRpIzI2`A|Cgs9ZJ-<6aSBv`ox5/uv!Gqj');
define('SECURE_AUTH_SALT', '33sb4<#q5jxF*bY>XzO|!Kn19?c/jI.|^hFsbHc-xSmu$ZR#T8BPyi%$vHr<s_Lw');
define('LOGGED_IN_SALT',   ' %(lU(R5 $JsA0x?s^dV%<vfW!KWGfVuMggD,UD[v`_Et{CRSn~n3+8/YqIu(Kr8');
define('NONCE_SALT',       'RAkZA(f u_2JYVOFvo?+(%wk:1Ku#f >EJ]&j&mbcZoj6^x^v;Re,z|-(t00nMqo');

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

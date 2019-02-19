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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         ' xz{eH?.xGnWNm0>e1b-4o+sxc_y+so:FfiCC^ M-SsXCfl ;[APaki-JSe?>&Zt');
define('SECURE_AUTH_KEY',  '{6E#~,G?S;`2@C>O G2vlCW62VJu4gHOq#-7htXrv:J)H)Cq<^O+JjOyCVT/DQaN');
define('LOGGED_IN_KEY',    'OS!FHYJO,<y`LT1XWY/@;xTs<dr2@/^zoby&MOV8f6@!r r(t.CwO.X3T>]8j1d,');
define('NONCE_KEY',        '5&t+^sJar}?d`B?gtMFWTJ&OzH;ls2-r3UpaVxL`C5riWO[XNb+iGR+~^N4Vy|sF');
define('AUTH_SALT',        'df.O,S0$3KXRFY#6p=qav@!QRbKq))z`hQaLoJ2DCGMtjTy:<3+wIR)Nc8RVS:$c');
define('SECURE_AUTH_SALT', 'G,2PH,VexH1y0M]{]]8,mOpqk(HT`7fSI sw;81<xN2/?Y2cbo=Dd%KKD<qpH^`^');
define('LOGGED_IN_SALT',   'A+T]P[-G0R2J}bh?<=C0^W4uIhz}`r/o7.HEkkFzXm0>Bs3PV!M?kUQ9sKA:B/Sq');
define('NONCE_SALT',       'l4&Py`!9#M D-rsqMJv&QCGt.gH00~F[t|NR1#g>0,m8 rH|p`au>-8URHtnhN}8');

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

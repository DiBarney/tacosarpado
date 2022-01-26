<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tacosarpado' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'barneyEsAdmin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hK3I9fGb-G`YqI`_1<%=_tt{B e34E.{h9}hO&&*-{._4G+&Y1j]C&._mEQ^6jA>' );
define( 'SECURE_AUTH_KEY',  'I67/v=F$gZX0d/,!bJ%#&F,zpqCUk7+ywmc3F(XMeJGYnh 7hkb)/@`+S5XIU-oJ' );
define( 'LOGGED_IN_KEY',    'W*Rj@r+FuwW_<My,2*/%R$46FI/zxoHNjN#D><fR)u0HlGu3smJ>.M/*VD%N^WJG' );
define( 'NONCE_KEY',        '`T{k`Urz/tOVG}oX^I}*KeaRH?5_YQCDSD~]Ox^+NIzF46O8gzss]c?0PZ0;CW-c' );
define( 'AUTH_SALT',        ' Np,f[%w?$qAh}xM}Net|aQoeNsVXxuAVeXi_24{B>?cb=wFS>kM*qwb#lEbca/M' );
define( 'SECURE_AUTH_SALT', 'ZfDiOPm@M?-tT|JZ3&2MS4|uJ]PUEZ =G?Q_X.Zg#O3AYomA9`ia<wu5HM9:AGIb' );
define( 'LOGGED_IN_SALT',   'gWZFSwTw}ie{7+/W[ZLc`PFT_8nY$a+1Z65U;)Vc[%Had^:9y-3!B9j=J;;|$VjD' );
define( 'NONCE_SALT',       'Cql{;p)s)35{efduqiGIC.4ZHL<SX.J7Qb]g|U?F%TrRB9-,&#{IlxupZ/Jl(P=L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');

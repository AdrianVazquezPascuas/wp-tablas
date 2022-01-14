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
define( 'DB_NAME', 'wp-tablas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3@q$@p]X.*,>XgPd1c{KEX7+Kt7tJx[XYI3^uz4>tihDwpO~(8`OB!`f z2luImZ' );
define( 'SECURE_AUTH_KEY',  'Z,U^x9SQv=Y24T@,w/Ln#,G-f|XKC4vNC~IHNJvE+3v7<i3;dQl%-=^1y##K{)t=' );
define( 'LOGGED_IN_KEY',    '[+EO=QLkBrfYUTzx6xvt(QU9S*whXuZ%Ox~vLws=*3VNU99*63fdS>us#>H8o52w' );
define( 'NONCE_KEY',        '`P(V>o3ivebFhR3]^|:sSy.]FuaR%YSWcaC1Wa/?@Ru%h)w$B>D5AE`TP7=f7r4?' );
define( 'AUTH_SALT',        ' AWZYYba_15%6-~#41O$?CAm|-61mw|oRrz2gt,ii~[#cwrV1u%U>Nz4efEjp,NA' );
define( 'SECURE_AUTH_SALT', 'R;k*$*!h71:0Dq^z0/wuH.MnXn&Vn2NTD}GeS%fsh)UDcibr?vx)cpEv-T_w+#xR' );
define( 'LOGGED_IN_SALT',   'yk]CtV5{I-2 4WRsHoglYlJn]kd;8[WR,~^7J|MMbaO?.{~].>lcspKh_b0L`K5O' );
define( 'NONCE_SALT',       '69`9^.$nFk]q;@3hO7bIWs<m)l<6~fAy,c*dy.^n&p~f>NIBm{/RY9X?[5x4(pOR' );

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

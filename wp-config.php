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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scotchontherockesDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nx@=D}<pf+3^VJxI8bK.Kx&Jai?K!E&|-c+MO&Gn$_81^!Q?*RZU*Z}qPgT;pZkE' );
define( 'SECURE_AUTH_KEY',  '26)]^=NhKAOPp:T%T-4(#MstaRi1d:Cd%$=8[2:g$Lulg%;}8R KN+s+VR(]8Xk&' );
define( 'LOGGED_IN_KEY',    '.V1Cub@xAOw+Eu*Of%M9R[U?}=rP|Y(JYl:YS*%ekiC`n?JgcQrgB{f4n^)Gp[2 ' );
define( 'NONCE_KEY',        ' j_jv-WolWs`e7dLvKd09|B^p&,uouw57.2,s(*9LDZFUzhcab}2WuTm/xJgu_XI' );
define( 'AUTH_SALT',        'MgziaVVo5R2;#Epx^Ledt85/[N3lkAp|5#zAKW1mOwnD<7 ztKcLOJRK`0b}5F %' );
define( 'SECURE_AUTH_SALT', 'eiGU@Rni,_;^}C5ZG1p$7VYlLyx04Y?Y#fUA&n{[s-7%*WDGhEps&.4*ev>!$#Ce' );
define( 'LOGGED_IN_SALT',   'y?|6cdWCg:#{Z2{L Cg_Hox,K0FctZSt8C;3v9F8`Vof)wg({.wV.P^9bwMRe^h3' );
define( 'NONCE_SALT',       'O([JA9kKe]qa$|<y56gv0DQt]FJ`a[X-8I,ju^/geWi,t4/R-0)cNi(T}&yNxA}^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

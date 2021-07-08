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
define( 'DB_NAME', 'scotch_on_the_rockes_Db' );

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
define( 'AUTH_KEY',         '58+<oNMm?0@^R)tS*+~)7vI%D,TC`ySmI36SfVBB7(nNBC]{,V[`AXt|rC!OPf7m' );
define( 'SECURE_AUTH_KEY',  'z@Q;5eifQx}:XMY|aak7vSAxV5g.2vx:[q@J&_FQa-`wV.YB]GdYnwb$pE:#`Q$+' );
define( 'LOGGED_IN_KEY',    'm2nw~1OGmOc)&G$^evzFLqkglD}3@v}y=Nbq{-1!p?{JI>P&GO.|dR~|EU_C^e?q' );
define( 'NONCE_KEY',        'zx7M^%Id{AQCw5A@p.4k0V ho0|0eQWb&lW~lNgz(zn.f#OjksXP==`l%r,_IH~S' );
define( 'AUTH_SALT',        '.#6u.{vAMpdPSM~oH0:Chq!5eC{Q#whIv7AXo,O40?,P/tmUm/]X=4W.?o4-XN2-' );
define( 'SECURE_AUTH_SALT', 'M_jGO @wsL@G[&= J[9BXvb+#FZ6#8N&vpqRM)ZrsA(Fp;cB8`pBHl/I5p!C|Xq-' );
define( 'LOGGED_IN_SALT',   'L/:i.um6n)4YJp$_%*E&.)5E-J)uY.PRjfvXFsnI c-bFQ/21oSB8moSErA98h+`' );
define( 'NONCE_SALT',       'P(sk5a!$U[`1D?NwijnhQWPfTwHQpc^aNe4VuMzYT#l_do^Rwax kuCt*]PO%IIi' );

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

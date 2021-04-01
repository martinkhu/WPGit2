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
define( 'DB_NAME', 'martinwebstore1' );

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
define( 'AUTH_KEY',         'A9pcp&-$SA5u7$`QW^?aCD0UEk[?9HDKJ(iXBt4Eo(G8=W=P<=tw1]g(FzVgNcU ' );
define( 'SECURE_AUTH_KEY',  'dHsQX3x+?.Q+@_`U{eTGm%CO;P7yY- P_i4[7q/uhOCe>Ugz5Y:q6?{yvigFP/Z*' );
define( 'LOGGED_IN_KEY',    'Z>Y+1+^j&:#[:*7!&m3uC3 BaCPM[>Ts:DhbM5T?3r+V-0Cpo3]9V6HOBr@gbaZm' );
define( 'NONCE_KEY',        'P3tI*>lh:1ck|>.9lQ_};9f/_+SPK^luNF#, 2wK;yIk$9nki3A$@B;J.OI~z`! ' );
define( 'AUTH_SALT',        'eY6:$HJKp?i$b3hm6rJw-AqKT,2pQ^>Nv[@j<) K<gM%7HXK[L2f!@b~Y?!saY%p' );
define( 'SECURE_AUTH_SALT', '/{c@I,srz(|BFUCdLbO,462/%bVK34bV,9M2W6iP xmS+s6-?4-(.DT`Mu~;Ou<-' );
define( 'LOGGED_IN_SALT',   '``nR0G,u]f<.()F2[zv5ZFuugbVOa6;6E=nZud2h~(kCVP,OUv8?(0FebeW6-_jN' );
define( 'NONCE_SALT',       'Q4LCiUf&t_%XJg7sg18.uQ7lN-ZVQ-4@;Ztj8;jM|9jmX_QV+:dZaOcA#}u#t]5l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mk_';

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

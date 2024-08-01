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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'T_N$9S>t_O6vgSp&)V9vBpvuBO2pguh9ND.Q|]vf9kmT%(U:R><&(pdw&6+-eCwo' );
define( 'SECURE_AUTH_KEY',   'yE9*f|S[kvYCTWPO4C$uBX)Gol(u]%OmLQTwC&6/2d<va4C<k$ItMd+jBWR$.Iu^' );
define( 'LOGGED_IN_KEY',     'v7AZ}GYS(0l3b)0=v_zt&5z6PZvuzqztbzS#3aGm*lKn/)ck%un4QYb]I?ZOAz) ' );
define( 'NONCE_KEY',         'UF8`$j,P+Mp0K>O[eoL@2Si)Q]q?hz^uywKzG7kv* D.IfT&Q[V]WE_:nn-A`ytc' );
define( 'AUTH_SALT',         'wJyz>dR-PW~0wK+ %^}2R]]5ndtd/hYNY(wzQlnDCcn7e9V(_P8dE7oA[pc%<:G[' );
define( 'SECURE_AUTH_SALT',  'BD8*,MWYUOv]}.&%loN_A;f;.eIz`;:k3yT~:aY`7a=l#;!f. |Eihcv)GYB0/D:' );
define( 'LOGGED_IN_SALT',    ',%4hW]~xOc6V&0dS:y`MQKs7`,TnX{G1~|;!EpF<Si6!YZ#<g{.v()&:E&Z#%t/B' );
define( 'NONCE_SALT',        '%@|t5U).fh@xf#Cbnp7GP$*~D>[1>G<VO@Bk^OiUZc%e* VNp.fO|J1vM{H_GQ7&' );
define( 'WP_CACHE_KEY_SALT', '`dz%/599*ZE0l~Gb]L>HKV9{LRFu4JRTA>x2d,O&O;VwAa$He]T9GXry.*O@Njd0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

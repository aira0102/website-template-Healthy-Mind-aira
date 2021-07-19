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
define( 'DB_NAME', 'aira' );

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
define( 'AUTH_KEY',         'GLPIYUJOU-E5Q!>->5$CWKoMA=q#Rm!]LS@Vm_FOT9=*TddTPkSW|k@E z$1mquL' );
define( 'SECURE_AUTH_KEY',  '@&G-?_j0oanA{zj4;+^f#F9CX>:/Q*`#5@=5GMt~9.wDTy]+egJH)&^$MVi#ozPc' );
define( 'LOGGED_IN_KEY',    '7M^{P`Cw(tBMk-M}WfB,xi`u5FqVEj4*=+I#WJl&[pUq]hfl%T}NHP/Q4o)yIT#B' );
define( 'NONCE_KEY',        'dsP1Bh!hj0E]7<-RFK;U&6E>?FKk{eX6}+E;[ymXtR%h#ad959?yCy(=JAzV4<3G' );
define( 'AUTH_SALT',        'GbmhDFA7OQ[3W|chtcwTD {+RHa(6bA;ZXXWk#7Bn[$+|n2#&,-ZgspX.pj%4}T8' );
define( 'SECURE_AUTH_SALT', '=_!O/Py+j1meB&7^Es0SGT3b:rOzAt<#uXL #7J5j=M*AJ>;zH/jL+{Jd],kK6xZ' );
define( 'LOGGED_IN_SALT',   'a1^gQ[.Ef7*9I8ZI/sKcd_0OYX/H&ys9#NiU{,r^%N^IiK$;5Tb^67`uRd,$W2RC' );
define( 'NONCE_SALT',       'j~&N@fc-eHt$-UP`67Y&=.Y2/n8R8cFD1Q97pyzq~yc^USCP$=xURzQCWU9QPv!_' );

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

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'growthnatives' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'JYaGghl+la}.{zn$VD&o@T$or%{1Vg0]VwNkD=]R]?/4ge>=]Ayk-[78GMQ5m(|9' );
define( 'SECURE_AUTH_KEY',  'VcfoW8adFC3h^LZ*#9g[3gPrOUzn!2c)p?_4d<3`fqcW|2[YX2e!SsIrVPTRa=sj' );
define( 'LOGGED_IN_KEY',    '&w81pyI!-,I+MD8RTO|}}E6#(W/99y(qUauV?DioE` ~`0/fe3p#w7D&Xk4&q6o(' );
define( 'NONCE_KEY',        'P$XFitd3=$[0oMfh[]Q+jXsQ#R*8nEUFs-!CEPb 7#^[.+a/5fBY@7Kg)/(o-;-G' );
define( 'AUTH_SALT',        '*#9]o=|<)81Z~ i_59d.gSJo:eN7X JW$IcGs,<<fNluz!qj[kJX]fZCzO@+o5p<' );
define( 'SECURE_AUTH_SALT', '{.r2l+08o.e2r{1yh{j$|Z+X&U`B@/aHdb3wrt|iZlZ|Yz$t1AU]fQ$:,36&Qs7K' );
define( 'LOGGED_IN_SALT',   'O9}OzQ[g%deTi}eb+Np^N*,aq%W)t!sda!FMx7DxYwIwW:7H8pWVs54*N?u`@HS5' );
define( 'NONCE_SALT',       ')Weye! T@C9&^YMt.uwr&|1tB?[>=wL99[L,x;gVCL%Rs^~<?nW05N7yZ9z`m-Vh' );

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

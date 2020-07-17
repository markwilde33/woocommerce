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
define( 'DB_NAME', 'lindas_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1?}nL{~5IBQX:`5m5Z2gVtzni:Gul,A_Pb<T84Ap9l/4XQ2>OE=;J+ECTO8|8SB-' );
define( 'SECURE_AUTH_KEY',  ' 4T2nc)i4Xm7.A4iKc#xrAGzyj?39dYbvz&/M5&!ARbk32S~ZCe>d>4Mb`Mpme ?' );
define( 'LOGGED_IN_KEY',    'f0(Fhd<bwY$[)+xWk^6)bVE>SpV6w}><?f;~9}ZhKT]US_3[/ib(|1k(PzRP#[1V' );
define( 'NONCE_KEY',        'X]ORYz}o{H?[8PZo{R=/s2+.})G[Z_O@[}Y3!OmUVQ;`=P4&co}c_$BKwEfXjTB{' );
define( 'AUTH_SALT',        'SMT!pYe7gjWqL].wIRfzZ:J2z|%ey !(7A4Z@rF85+UBc[2lDGgGKHPa/AxU#4N-' );
define( 'SECURE_AUTH_SALT', '@jtd.o6A[q1/9DYZU^P]hU+FD)jJA^GiKuI?y]]QU0F*}(#j#hwRZa)gb0]Md[O[' );
define( 'LOGGED_IN_SALT',   'Xp8{lTJ3)E7j=h`HC@R,rJWzA{BH>~{R3V.}2b:M/B5{(}`CMSPcqltkj3$*E[c:' );
define( 'NONCE_SALT',       'V)S1)PnfZIMQoZIxl~1?Q_THDqEN#:n%h_@Os8MQ8Fb6J8/7@iaD))o!QE:Ah/Ns' );

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

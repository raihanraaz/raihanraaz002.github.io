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
define( 'DB_NAME', 'raihanraaz_db' );

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
define( 'AUTH_KEY',         '<w~ff!=4)[Xpc)MS5?.}7LxM,4nr+dHgJ~_y,GOZEzdYanx%$Ijl~~mfIgPF<R-r' );
define( 'SECURE_AUTH_KEY',  'PGAXH2Dc`aKscaaHQ0A|*MGJMKp{+Q!Kqxx-TAxvfJ79.0+*eYu:5+YL7{DsS|-9' );
define( 'LOGGED_IN_KEY',    'G`&o.02h}fF%{0?f1-+AmV8HG)_,h.WB(x;E8OdbLsgi! k01vGHTg-nG1waE=n%' );
define( 'NONCE_KEY',        '}(Ps/^,kIYpdHxTAQKH0Q>G|-&[+vqF07ADaIQ8NmqSJBSTnqAkGZV.bJx]-M4y#' );
define( 'AUTH_SALT',        'nIvc%975<hvPncXi}a>tbNXr?9:V;4D~n=4zm88/>c5uUZJr`9uo1rld7N7w8*E>' );
define( 'SECURE_AUTH_SALT', 'g8;Oy+d!b4Bk4hWQi/R?mFN#XV&5%q<6N@dc%_fFJc|1C&5P3VwnS^)xqLhz7nXu' );
define( 'LOGGED_IN_SALT',   ';W`Ks O0A~7%LQO`Z@5P2_<.,Ub(`s7cFR-x^xSrHT7BJ6*AOxu:b/I$ny&Vr!OV' );
define( 'NONCE_SALT',       '(,z,0&rO3we:_dwXz`i#;psn.nK e155#V:1#)w&%]I<g`Ty1G)Ew=3mC6jup%fd' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

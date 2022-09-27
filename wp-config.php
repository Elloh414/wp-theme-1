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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'NCdRDUHI5uutgS3r21E3fs8vY7rAejafxZ2oQ44seqtQzgIF3aGIlHY7FjzZ4vyY' );
define( 'SECURE_AUTH_KEY',  'kh8Z6U2XB1jwMpzaAE9C79elneM5ysIuR2rLoyyiTC0eUi3g5c6VlkgtqV6VL0FS' );
define( 'LOGGED_IN_KEY',    'zRjqBfQ3rZvSbLEwkhUOeUOarteTmw1iUmS2BTQoQXi2qAK1Ks1cWKPE9yH6t7mU' );
define( 'NONCE_KEY',        'D66v5xw8aFsZ02GS0O6QSu6akzQHRDwF38eEejrqtM0Qw9VNILGhgWNIcFUaSTFn' );
define( 'AUTH_SALT',        'NNSMKLJP5jzTqVp8jzWYYG9II5OfJl4cplcP3xDP8GzmSZJXuBiNjdPQ16ZClR9J' );
define( 'SECURE_AUTH_SALT', 'iDrQN8cRxb2mbeIdqOSbFtFGW4maBhVIkToGb7WyMwJbNgbqAN4xptrRvgTLnMQZ' );
define( 'LOGGED_IN_SALT',   'KOjL4a1tVJFCn8x5DdHE6x2WPMmVyOsMpucvyMR3rDQQT1SFOhvkF2FawAxk2gN1' );
define( 'NONCE_SALT',       'Tw74JodbOnNwE2gjNYyMaJ5vdhjsqxZkMHaGm14r5wgnfRGOA88QJiIik1CMuefl' );

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

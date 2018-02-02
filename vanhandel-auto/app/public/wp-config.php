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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4waWtb/uuV606I8rclMw78OlI4jsq1n5nK4fHesC0dqjN8jotndh/mWSmbm8AsgwQece/ebVooISITJ7XVNp9A==');
define('SECURE_AUTH_KEY',  'YhWe1ntYS8F2wIH5NaZudWwxOy81rPhrtKoX6MyODqpUHwCDhO/sDvQQ6iafWdENQv6GPJNutMwE2Wi0F1GqIw==');
define('LOGGED_IN_KEY',    'VhHISiFaNCQfdMQTAPymhAUsI9EuneRs+lq9p8KrEKqAqD4dY/gGZQ4dKA76gIx8PnVgo9Hu4s4oq87IJg4Cjw==');
define('NONCE_KEY',        'B1LrufTZ5HlJikBLOPrke6v8xbrsrL5T+9uT1ZD+eovNuBV//VGhLc2+6W2pspi/WUlruoqPpvKlDlFMVBXKmA==');
define('AUTH_SALT',        'tbCmSZgf7Abej8MIZ7RpcXlmnafWWPN7IiK2B02Gi+veku0T7ef6uUdGgZNu+4wZursYii9MR988/Cr5uMRxdA==');
define('SECURE_AUTH_SALT', 'OV3iBLAle+Bf1bCr31O8+Oi+OVGrLWQCGBx467pcnp3zc6t5iKrIq6o+eSGYGbFQr+Uj75L7ftaK9hG53fXlQg==');
define('LOGGED_IN_SALT',   'zmbUTRvQVip4LQ3R+AReHWmyeRX6p6iGgwmN1QsU9l7/6w+xaWcUHXgAGD1Et92wpgt9Cv+fkkFSAif/pY7lAQ==');
define('NONCE_SALT',       'vWQOrOFp2rwWuX7aJWEchP9ye58+An2PhZzbu2nvFKllz7sSioyaYLCdhzoVX13jqoYAgvKIkpgWoDf3X7zU7w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

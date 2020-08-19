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
define( 'DB_NAME', 'CV' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nXvjTTW6qUZRImp1XwHZzANQUdCsji7cy5rkrH8ebODkKV7lingerhkRY2OllKrI' );
define( 'SECURE_AUTH_KEY',  'w2vRi1dBcypz3fIkQdqDBTkehBEqFyy8hGRYhKL3Ap427mN14FC0XKfXeVqWUjOK' );
define( 'LOGGED_IN_KEY',    'sh9TTAzEAB57YCoiB6iGB5KCt3ckQnlY7UQZmd5ZYvPHwrlOg2rJ8FmAKOG1GOto' );
define( 'NONCE_KEY',        'lIpS6w7tVZl39LPDTxBmroA0vkZEz1s6xDCu4LbPlf6PwL3vxxCQlfMR3gkhLBLp' );
define( 'AUTH_SALT',        'C6MG6eKPTfk9yx5tBSyt4ctXxg9VJ5AUUcQctzC8LhANxfeD4ezEw0togUp264FX' );
define( 'SECURE_AUTH_SALT', 'VjvzszeoVaIPJwxVKC4XORXCKl4MlkntHegpijewaFClXvjTvMaVCrQgKZ8z7eY9' );
define( 'LOGGED_IN_SALT',   'lQAKrv6NaIFTZnWSIZLVa3NHBX7XMoQV9dvHIPCqBtJa4OTCIJm8laYzcMigQjPP' );
define( 'NONCE_SALT',       'YlJkOk1tJcYxRzKznNN8nraVtoQBVGjI48Y5uXb33rXqEII5yLr0y5eZ8bbIIIZi' );

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

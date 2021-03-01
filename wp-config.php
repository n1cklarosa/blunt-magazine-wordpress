<?php
define('WP_CACHE', false);
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
define( 'DB_NAME', 'wp_blunt' );
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
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D9rqO75SQhHjba0Tbz5sxDsQRiBrYVCAf83lCmCkm0LHRJ6OTQrMHciq5JkdCnFG');
define('SECURE_AUTH_KEY',  'lX3Tve4BhlwxwPGhRfX4uNGIqg3hg4ILmHtEn3dLLqgNkadKkyBJAOSLojyhY460');
define('LOGGED_IN_KEY',    'ZFU5X2QUqW4jBCX2sEhEin4o33KmqHlb3n9bJ7H0rgYUUI98wmLAhxN9xHfsx9rB');
define('NONCE_KEY',        'pmgaTc3c9ZPQN7jnFSA7ej2ET9svcZacc5YljTKCJuMivfjojPGPGwaeBjvzjJSw');
define('AUTH_SALT',        '3DE5VPFAZzuWRq2zUzD4p4sMrP7xy3M5aE6A98PtuzeA8lFvvbop0Nt9mdjqeHfK');
define('SECURE_AUTH_SALT', 'kg0ZbK1hcekkqw2fuiSYKw09riHN64LqpagMTeOlZwRcaFgaEkC2KZ4TV0iYrNZb');
define('LOGGED_IN_SALT',   'VGno1BIJl4bV3M4v5SNZGvUbB4BRLeVB3cr7dbqS04gkYGNaa0hFdENrBwFSMby5');
define('NONCE_SALT',       'vcE4v1CU0oczHf0zq8U255bzE4JfBWimDS6yBV377OtkIyth5VzZMsLO8fEHt73i');
/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');
/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ze5w_';
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

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
define('AUTH_KEY',         'VrEh0DhDt/PSQWMuagaLzS5c/3a5UAQ9i2cdKI7dcrfz8OEp9d80g3pCxnQwe0GsBEjTf0rx4RwiFu0Wy8yrkg==');
define('SECURE_AUTH_KEY',  'CzH7D2tDvlEnAjaOA9ncnD4UJ5glMY0XNmIpWFkILgwpOUOHIxKc8fRlBX1jjxyJf+e99Im30kiTfTZiS9x0gg==');
define('LOGGED_IN_KEY',    'nWUNeJc2HlRMohEozslUE4gmtPk4q0mNH4oC8mmkkfQyigfx1ePxdCvloY8en0ItI/u5vieKmwDilgKvupsPPQ==');
define('NONCE_KEY',        '0oqVZ/7ObgowTepqu7tDJ345NXGNnItrA0jfBoLMvMefJvTxnFTnQNVdYo62oY6oiK/FsNJ3Gs2qIIICZANYEA==');
define('AUTH_SALT',        'ENmPSF7jnEB0vVtWpEP0L73iNQpDC9jqBLnjiovbbYyIyHm34Cr8DheeU4JKPuqveRlD+siYYc047kXPwqBv3A==');
define('SECURE_AUTH_SALT', '9YeeETNMGzvu0VwKy0Q0o03mGw4p00d8VxVNDH0CbZ3xhKCh9h0ERj7dF+P3H7MvqOzLPSzX29wKvkqgFbeVrw==');
define('LOGGED_IN_SALT',   'JGiRW7AjqzvaTpuASZ1crvrVv5XbVmn9SgOUvNC5dhDE/JrN7z2DfZPWZob6O1JyvAMp4qQgKwOl8tpgqVyT3Q==');
define('NONCE_SALT',       'mBkDEu//gFvxXQL5temYARrv/Q0/HcaBhEEos1AdtOs/I/cTU8PnPh+PY4Zc0tt2gaKKi2earApSv3AA134m0Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

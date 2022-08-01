<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'virelaic_sallyw' );

/** Database username */
define( 'DB_USER', 'virelaic_sallyw' );

/** Database password */
define( 'DB_PASSWORD', 'v5S2p!@67S' );

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
define( 'AUTH_KEY',         'ofldrp1ceejt64ef5esuelx7pxb5gxb9y1rkxklq8qjgc0m5ieb9nhkh8isus3lu' );
define( 'SECURE_AUTH_KEY',  'jrm5lv2pa8dtj5p6vedj71getyz01ywf3jzkbafaabq8i8lkaryi63oczz1cwtew' );
define( 'LOGGED_IN_KEY',    'audr2xqvyeddyy0zgadyoykvicdv1vgv3ixjk4ce7sbjajrrjjga74bjkorrbte4' );
define( 'NONCE_KEY',        '2vrrq1qgen2rgvruikzktck6qslvez7x9k1zjvx84lazh6ysy2hm7y8uj8pckvgp' );
define( 'AUTH_SALT',        'fk9bz3rf4vnbxs7ujh3m8tbh084tgwq75mrbwkgdcnsyhfumg5h9024h5lyex5mb' );
define( 'SECURE_AUTH_SALT', 'ahxe39z3ojrtgicz9tbaf7bfm4qn6lhczzagjgg3acrgfomrybcdi43b19kdvna4' );
define( 'LOGGED_IN_SALT',   'sq5tutktiawmcsavnvorus1luobnkr2kqxaytwfj8yrp0rpu9vweuoqze6etkihk' );
define( 'NONCE_SALT',       'q2ut0q603avfs4rwje4aoxaftnnvvjmhuqzj40ej9v4dmylirzgem8nfb9mfstfk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1sid_';

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

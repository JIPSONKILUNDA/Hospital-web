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
 * @link https://support/article/index.php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydailyc_wp586' );

/** MySQL database username */
define( 'DB_USER', 'mydailyc_wp586' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iS-L84p0(d' );

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
 
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x5buprj3jx7porhmdyglnwigwun12e12d4yfn7irzb43fifisdkb2fsfp8nbkg1g' );
define( 'SECURE_AUTH_KEY',  'rnqotjpczapeavqyirswbxr2cbva5hxq5st6mlwn4mbipcqhzqjpqgkrg1vqexdh' );
define( 'LOGGED_IN_KEY',    '6rjysu0iqchjarrzorjghyu4axfqqgtqcxdpgprbdehw1eb1yibgnc1mtrbspknp' );
define( 'NONCE_KEY',        'ds3jzymhp1gmszorf4lg60zn6bliwzsxpf54ih9oegxqqjyficcgpepztz7zfnkt' );
define( 'AUTH_SALT',        'sqz5ri8ebhkhenualqbdna0lbtmxfhy7r6pmmpq9ixtotmqkqncxj4dft0gumvly' );
define( 'SECURE_AUTH_SALT', '0oe2ayimjogahkiq0qncf8hxa48sjbz3jdjx90ricwoycj49odzht8fevlnqq7a6' );
define( 'LOGGED_IN_SALT',   'wocxwvlknxb1su175qa2aebidcwijjknw49bw6w6g8igsdxbunureilzslwlnatt' );
define( 'NONCE_SALT',       'fhbhcdbyrsikt8w9tdy3z5ml3wbezq2v1rhtvxs4a2qq6ckc2fdox3ceppbexxrd' );

/**#@-*/

/**
 
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpki_';

/**

 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * 
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

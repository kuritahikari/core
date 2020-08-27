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
define('AUTH_KEY',         'O1medS6ab7SIImhiOKTNPDr0prqOdjNNCbAt7sDI4xpvoo4XmskxcJOrqE/0+EtNTygp+jaxlXYV4xvoq5L6RA==');
define('SECURE_AUTH_KEY',  'uH21aH5SsSoe9pNCCmhEZNAy8mkQieRxpXRUcqpkbhbsSNa4FpQW/APeNWDlUZTaihvGTIyr7Eea+boFuAthaA==');
define('LOGGED_IN_KEY',    'x4ERSmJEJCRI3pTzYqXFCt5F7kg4b4vXrfXvEzj6kORtccDAWxINPKAmpJ7WvLh4EPDMjRXUyaXkbn8eMhvDUw==');
define('NONCE_KEY',        'w2cPbnNvLTQzkYFwUc5M0Vvv4EtW8H+Y3v7jP3iL4j9DvtZcVKOYhFfcSobU4Qw6srdEYDAJ+R70/H7ulT26Xw==');
define('AUTH_SALT',        'VylPMsyWB0Z/GCRkWcaodAf8yyTHiIA8pHMwvLVQvoHNSMJoaMsb7JRZhaha4oM09ntr3HV3/zcH0gt5suDSGw==');
define('SECURE_AUTH_SALT', 'fuHiR4TgsfaWvKO+b7skhG7FWrcw4BiA52Hw3HCKR43T1WgxAVKJpnayMKXs9ldc2jdvh2KWxEor10mG4lUvDQ==');
define('LOGGED_IN_SALT',   'c3ATz3/dPy+Djpg/lBL7mBU5Jfw33LivvtGYbq5MUH0PxucgbbuV1JGHN3v7xIdKJqlnmRa9SfIguXAfVavmIA==');
define('NONCE_SALT',       'z0ZgsDTvXOZmZaL28CEDV+LkMEbSKpanmxRs9MTFZQpW2zb1BHUCzEIn6mNaVdx1DzpZsXUJdw5rjask4QpVZg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

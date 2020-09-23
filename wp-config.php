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
define( 'DB_NAME', 'host0401_wp801' );

/** MySQL database username */
define( 'DB_USER', 'host0401_wp801' );

/** MySQL database password */
define( 'DB_PASSWORD', '5.95p2@S61' );

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
define( 'AUTH_KEY',         'eelf6ysdek7kxpowhf1u3ec0agc30tupmguqxnrsmhc6ljeup04lp3mfhppw5cl2' );
define( 'SECURE_AUTH_KEY',  'uvwl5idms0n2f1pqotwpeiceunia8qcrnlblm0kvahn1mdsraq4pqss15cwoyuae' );
define( 'LOGGED_IN_KEY',    'u0ut758kjlatdeuw3gccspccbepdh8o1lcfe1tfgwrjtdmxypzkvuh8kbgi4kikf' );
define( 'NONCE_KEY',        'srpchyxisucl1xk8hs0auzb08iqqdagd0ggyadbit9lmu98fcrhuj6wlr7zafwbe' );
define( 'AUTH_SALT',        'xhvbsa5kj6ksygegb6f6ehy7zfaeqnntpa4s4oxitjb0kppcpigqe2ge4arargih' );
define( 'SECURE_AUTH_SALT', '9flq3ysmiw2w2afonnmuoqgprbybwoxbs6ffkpbky0vwv62pe3estbq4enh9ato9' );
define( 'LOGGED_IN_SALT',   'yoio1rrentlwencaewecbrjzdvqi0znxsqockvsloposivfwpngx7brsndndrfgy' );
define( 'NONCE_SALT',       '3ovokcrgelneppzmp2a1gupo3bcprem3iab5sojbs6g71lygzjxmxyj3cenjgf4o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3dlq_';

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

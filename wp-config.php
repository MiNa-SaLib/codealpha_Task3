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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_34784943_wp322' );

/** Database username */
define( 'DB_USER', '34784943_1' );

/** Database password */
define( 'DB_PASSWORD', 'pQS1[t[90V' );

/** Database hostname */
define( 'DB_HOST', 'sql113.byetcluster.com' );

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
define( 'AUTH_KEY',         'dz0pcc0teiee2twikt3p6dkwyjnyhotrdisbe0pmxwlf6vu8w2lzogvbx76ts93j' );
define( 'SECURE_AUTH_KEY',  'kg7um2dde81xarhnufzimuqei3xs9qzbkz5ec151fhf4a53swlbak7wi2rowm4fu' );
define( 'LOGGED_IN_KEY',    'ca9gusc9nz1wxqitshxnwax1nygzvu114fnvf1t1kjxhnaurujeujzlksedxyose' );
define( 'NONCE_KEY',        'e5varoz1fqbaiyvk5nuwidqwermet3v0r6sdeqepaszaqhxd8biso36o8del3aph' );
define( 'AUTH_SALT',        '9frkqt7ws20jspvxy3sgsfixag634mf7lyyqml9btutzguqfg3b8la0vwztlfybe' );
define( 'SECURE_AUTH_SALT', 'xhgmco5jddesw1wp6lcpgmdgkoj3d6q5qttd0qxf0ioh6i0kxkxa6qoj0kezjnx0' );
define( 'LOGGED_IN_SALT',   'bwqnh5b4qf8c7eh9gt3cg6htno3gn5t6yvamjnyroerr0bfo4chvzqcsvni1keqa' );
define( 'NONCE_SALT',       'buuhgb71bcu80ei2d7dw2dqpdr1aisd3yothlgtb9nczgpi9i7i9hkvlfykfiham' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3k_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

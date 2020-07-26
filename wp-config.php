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
define('AUTH_KEY',         'HN50AJ5/ulXjRM6Ln2D5rVfy93BhffZWlC9KRIxQW4iKPUpaplkylTiaTmiKLTEuVgxA7OxJp4TIUDoZNF+4+w==');
define('SECURE_AUTH_KEY',  'VaWkS/KyGIPeyGSmQfVKJg7TguSN+LVTQuktVThPQNi1JnVn6tXnGBr8jnjLrJxmuuBs5AF8W+P/n97pwTcong==');
define('LOGGED_IN_KEY',    'HZlB9t6OuUdMub1afxXUce0MNSNuF14pgcDa0rqOcgUQtJ8gCw7hGdJJawg4v1W5iCyc3EbPn1Jbwpiba7QfaQ==');
define('NONCE_KEY',        'JcC7xvGPHG7TQPtrMc31cB8N83zTFi2dar3UG1aCELmdvjdoWaB2KUQMNiKHhgt+5IFYjMK1KN4Wo0TH4nogPQ==');
define('AUTH_SALT',        's4/0xfFbZI+g+0rK2RC1S+uW5ffxsuBfKTvP/d/m7GSesff1yRPepJ0ETRIS2dmQuOGskiS4udToWxHpyaFrZA==');
define('SECURE_AUTH_SALT', 'G7P3o3T8iRfkqFYCMLtkJ/lDAsAKh0iJhyibRbx5CERrpnUOnXv39BD2LpTIBvccb2E5Nrl1asqSdvFN+hMuog==');
define('LOGGED_IN_SALT',   'OLX4r/ak38EzaykOVIM5kX0GTXpbGjJv3wlsE6SK0HKVjG/1JWiFiwkMARKKFd2EEghLiEUkYo2Y137oRFxtbQ==');
define('NONCE_SALT',       'ypQ24cK//dln5bwgz/xY/0E9OmkIfKesHmzhVNBx5bjuf/zogXWg7UB/BXzZCmVk6miSAeuwCJdxrdoVIZzozA==');

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'movie-library' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'K}>;pKE2#v=uDDoYeILw`|2y|S4>w3:4<nhXfpHW/xxIyU)1-.$7CQ:cHuq?)XX$');
define('SECURE_AUTH_KEY',  'T3)Qj7x>o{y$6Zvj>;QJWu+D5zy~Y7IS}t+)%^H|L~#8+Mm5_#B4XBj1bA+1+H&y');
define('LOGGED_IN_KEY',    'eM_=~7L_|~:NLDh_TdbGd)J;]qa<mYFv:RWv>`{Pg@o1G7(EKaHd~)j-Z![h|ML*');
define('NONCE_KEY',        '?sMnHg XEJLj%d @$:bq?)4PR(Y/kx]YaOwW>$-9<W(XX,~a(=|nw]@zh{x~kl]q');
define('AUTH_SALT',        '=mpNLeJ;|f7cIrqtL*.{j-+2g8P8=mb|LF,UX~+-K/F J,`w_!:p0tUb}+F0SIGd');
define('SECURE_AUTH_SALT', '1m<-Ex#}^<uygBU`xW8z-40|ClLkL+dx|TI[|k8aAox|>KE</-,vbht$:8Mm+H4n');
define('LOGGED_IN_SALT',   'v(mm,g,~3#u#Mzm-.u&a~z,}N*{E<B}nZ|?jI 8+?z{n|_G0kK.ZQqLlK(m][-^d');
define('NONCE_SALT',       '@+|u7*fLEr4nhY/+O+{#*[Pvh=lR,?$7-S>Pw6n*8W!e!.rQKiv|Aa8aJHI{}UrC');



/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
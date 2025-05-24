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
define( 'DB_NAME', '231017' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':7[!nz&}Lbcq&e!J7w5]e4oHikzhGv-Wy.(M4)M>zws$X @>sZ.j_;p} ,P/L88f' );
define( 'SECURE_AUTH_KEY',  'i$Xf*VI;o*S#TIFg0qXnH(|-P+c%_gBS=^Y=x0JnWv%~ q1.emf,b9{nWYWH*$`w' );
define( 'LOGGED_IN_KEY',    'k|?]$D>tmzYB}&k%=#7(!d:c%-{WRvDP#fW(iN6S[0Y5-W]nKo ,)joGNuv9GG@y' );
define( 'NONCE_KEY',        '- bZ(g5fQ)IyR<5XtXin)}dF,X31p{eZbVKVKXiaH/YliEvr<tjpUzLC4r&}@Pn<' );
define( 'AUTH_SALT',        ':dPB*RoP)_>hPk_CxJ_RR/%e,&xz=> #G3JJ/Ird#:9<3_xb`|4=3OJy/+aTks7~' );
define( 'SECURE_AUTH_SALT', 'gB 4TYVAOEOpsi}h6eD~gKK],?>XOw*v4 m FN[KVw(qV,KnO1Z O5hEEYX2wfm[' );
define( 'LOGGED_IN_SALT',   '`V*] M5iJS)up&K6@Ch6S6$1w>OO`JRv<0 `v~tD^qJHaHe(ryg]|&SD.-pQ>^JM' );
define( 'NONCE_SALT',       'a`%2n$:^FWIlB8w91$uuCna@-drlH,8d>r%IQim:6| yexc5v2N kp|0<q:<+A$4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

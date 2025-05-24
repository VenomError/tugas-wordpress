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
define( 'DB_NAME', '231021' );

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
define( 'AUTH_KEY',         ':_;S^IP7lnQ<z;g$ <$t_ qKDj/PLO]dA/#ow~!PUJuLk474EX$tE,jk}wlxS)df' );
define( 'SECURE_AUTH_KEY',  ']BD~xVR]<38Mh}iRntAwRveP]uwcQ`gdTV:uWB?z0{{M]D~A4iakk$HqSnM[_1`M' );
define( 'LOGGED_IN_KEY',    '2iE/`Vr.o#Zqjl`5t>Fx46Hg%uZFA^]%JA%OnbIY###4PkJ|5J~H mMW7^D1ZOgz' );
define( 'NONCE_KEY',        'U~^!w?uk41=3E}*wY@b0)u5?%HuwF*~Pfcmr8V<sr#bk9=gdRNm{NuH47kH[iFdR' );
define( 'AUTH_SALT',        '}rq!XPO8kB2dVMwI6Ha-!T;X?ng :ff1wcoe/)QXEJ<k&.~VV9ZXt{kvOC*wa0Xs' );
define( 'SECURE_AUTH_SALT', 'im7Wy8_>OqIoqKb1$v!k+2Sb&cm9ch/UGb/{5+^;-XN^pLyWO::uF;sZ?3%tTKS$' );
define( 'LOGGED_IN_SALT',   'x~Y8HP:JwLx/nPG#xDJ KF%9IenA`UV}pp8p~$9gv8k[ciAG%<W>nESy]J#]3Hjl' );
define( 'NONCE_SALT',       'K#uY7/2&7..+nU,NMZw[;MA;OP=D:,^H1p62%B72y$![d_--K#{E9pr{eoX+U1Np' );

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
$table_prefix = '231021_';

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

<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', '231014' );

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
define( 'AUTH_KEY',         'iIM5TT?lnR7u814N]6NV}&;jU,E88)OEP0/bK2Ukh+ VDqQt*pBM)cxuk>V@p,4M' );
define( 'SECURE_AUTH_KEY',  '`k#dTsI%7=G]_xuxv@QMtJ^h}Ri aWLTl@jC9anEFnkPYebHpB`{3#>u_Qq`X|D?' );
define( 'LOGGED_IN_KEY',    'd=PB3PtoFvxf|wVQ*T+ujDLX2RFhyuLbs? xR^9+EUP,.Q+v%Euo(?F{q)?JtO*I' );
define( 'NONCE_KEY',        '*r*GNz+za$Bf%UHe8X&1%W46kg05n8Fp+-j@d^p`q8@~nTIS>wQF+?Qh;Q -#;zS' );
define( 'AUTH_SALT',        '&5<=Unx~cWN?d{wer>##z?E#eaPwph^Zd N>0d!}E1wnwfmE|4KPM4%@Y0b<t6Jx' );
define( 'SECURE_AUTH_SALT', '`{@i 0keEsu_p=KKi eX7p]i?>I::}p8r3L^-d*D~KB_fW@H9D,kw+|!5YN}ugUn' );
define( 'LOGGED_IN_SALT',   'D!FM%evLCUJW?v0PD?fZR<o~Oc[|8 u#S]iWT^,jIEX*tu QQSe19kTl%t{6QGX*' );
define( 'NONCE_SALT',       '^.~Z*%1Ly;frQktyh8Y]g@H>=^KL4G6#`@,ICe6F1 Z[D{~g|ect/hPO34O-7qy1' );

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

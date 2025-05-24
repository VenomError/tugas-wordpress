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
define( 'DB_NAME', '231013' );

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
define( 'AUTH_KEY',         'c=SoOm1gcj~oxSVf,T4u ~db`I;1Erj3!{_[`{KH+$5znf[A0GoGP<1,JrltoA}>' );
define( 'SECURE_AUTH_KEY',  'RoGrPW2v`2:$Z|YO4`d{)hQ]{>*nZJeqfax0}KZ21rvfy-umDnrq9&#YZeF):zIt' );
define( 'LOGGED_IN_KEY',    'wpqe-UE_^5*4*7Jqa*$BiW@02v*a5?6#_PLF(*)g^W5wo9,u=G(.9%Cw7H C*PlL' );
define( 'NONCE_KEY',        '?kAleLhBVkBK7S*{L+D-V6`XNn|gX9F,CRLC6gC$DGl71Y2}R``I;*3ht]M/6fS)' );
define( 'AUTH_SALT',        'nK_t*K|FC,j^4.2ti`]s7_yw]v_<rC-O<KNsZoyUf:^GL*Bc]g7O_w!{W?~XN-G&' );
define( 'SECURE_AUTH_SALT', 'dXv,Z%?8b|u, [PZNZPa{yVKy:>t*/>b$oATEh>NLl~%)SuA<55E-iY(rZvqttDY' );
define( 'LOGGED_IN_SALT',   'Z2j053Z)<Gh%t^r8TC>-f$yNg/DdSLGIfmFZ;Z]E$3sIB{9Jbu) Y[RW+F#oovA(' );
define( 'NONCE_SALT',       'UNE:TuAtZGW*!7Y:^p?:i~gO,z,b8>]Hp)+m`/(M=3To;|}3BX<Y*n+]72CDJm/V' );

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
$table_prefix = '231013_';

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

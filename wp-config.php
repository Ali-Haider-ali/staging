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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         '-dz(Bn]q8[PG!^ueEPz$&avzzD$t}tm0#,-<4?nx]X~H[IhiPXc$KmoZsa}|_2Lp' );
define( 'SECURE_AUTH_KEY',  '4~Njd>F!*w1!@s$5+e~H{16?%J6~PjW04g@T<v6r#}Cd3N9T[|B#<1<|I%LESfMX' );
define( 'LOGGED_IN_KEY',    'tKz)j?05|T{9Jc|,0DZNr4q$;in8[of$r!}0_0 DCO.4m.j-DkhaQRN,ELIB^g:@' );
define( 'NONCE_KEY',        ']ymk,)7 9y-F1`OG*-{X;FuguFeAW7T1eK&_Yj*6gS[?R!/yTn4>{^(B^AD!iDO&' );
define( 'AUTH_SALT',        'MHmwukw,h3[Jz`2||+<DgX{,m&UYlwzsZnm(>;0lw):AsbvG%p?mXaS5Db=,n@4B' );
define( 'SECURE_AUTH_SALT', '{iDTh%g07ySnOpar/zsU$t.c ~y(Mgs8;F3a:IQ>Vz,Pt+8L,VCqjRp8J*2riw|h' );
define( 'LOGGED_IN_SALT',   'DInkg7TrSsIs|P4$%ABa/KCoFR_p-S>6XV,0*Y0a5 m3dm&15=O_6ZI{<uv(4}hm' );
define( 'NONCE_SALT',       'D{kO1krv]D> x5;8T;L#.xraSY#X>~UeX-4Ir9K&*}=UdnMsm800;~31IiJw*@?<' );

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

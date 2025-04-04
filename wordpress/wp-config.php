<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'pgdca_data' );

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
define( 'AUTH_KEY',         '>$h_fo;Q>=D2xPnVe;,m>pfye 7@`e|e3R N0??BE?PA>,5Zk[xdB>u+ByvB8M06' );
define( 'SECURE_AUTH_KEY',  'aAr2g-lGh,{t&36:F-xD/Ndh,&LGiu0h H=([serkW`vDiD:dAEk7<%jo:VDu n2' );
define( 'LOGGED_IN_KEY',    'jjS{-_xJraZ_xnqMzFIK<~@PB]os:$4 ^(YC!xB9[9P$zP0M1L-$B@Fr)~wkk6i9' );
define( 'NONCE_KEY',        '16DZdb:I(NAw|rRla:DsGtQSlwdAgdM1$;VC<;~#QJKW&_Q~$({7zil&Ik&v#Un}' );
define( 'AUTH_SALT',        '^W4F:F2#b[(+{mSPsjUtA3DPc%m6/?P-+11DP$,UmC6/5bCBN5`z$i3#O|BUrE@-' );
define( 'SECURE_AUTH_SALT', '!sSGD?7&G1&*ndq+d#&a4eBPxpUB1;QSn:<< QBPZu-V2G 7X{jj/u/PT:de{1n7' );
define( 'LOGGED_IN_SALT',   'gU>UZh+XDGEN91:{+4tGBD !JaK#As9wqS+N;8oh5z+Eu^WXNaYS7g>Ghq@,L<UZ' );
define( 'NONCE_SALT',       '|XUp0L]|XmGX_Lb[NUDwRiD_:,,IRA}ji1P;LV1M[pP6#P^S]NgG`]Gj;ud#mr.S' );

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

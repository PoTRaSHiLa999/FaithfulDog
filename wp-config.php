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
define( 'DB_NAME', 'FaithfulDog' );

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
define( 'AUTH_KEY',         's,TxDUsX-PpAb@GFihn9<#c{;$/&2{JP>OsB,Al>>kUc:y!r,ZAy-RxD]<Vl@SrZ' );
define( 'SECURE_AUTH_KEY',  'JdnC5il3*h`F`~W9XtW~E(&]!lS)Pe(afO,_%])xj4*yc~gm3xkv.=/X}=Eo)?%B' );
define( 'LOGGED_IN_KEY',    'F`JlZ>>LH~[[8Qq9K.^U,1?V06E ./t1pSxw)+35Ej|doDG/_)mi~6$1>_?c}O`g' );
define( 'NONCE_KEY',        'JgP=dD%/qd,}< Fpm7*.!fZ9amv 3[8:#y8|{E7HEp}&aj<NGG?aq}YEE.M]E2%E' );
define( 'AUTH_SALT',        'Dr]Pg?%}iyn~*;|-B.mOG?ap}`ZQC&qT8+G`s2?9JA_&QSw|4zaQ/Ch:oN:-LIRC' );
define( 'SECURE_AUTH_SALT', '/m2vfI#@jJcK9y[dwjt,t^5aQ>#8rUo6&Y8v$&Mm$zAx_&YrQe&AW/t0*7z8mzaW' );
define( 'LOGGED_IN_SALT',   'QnD)MtJ5?P/Ni.u2vk$JL[=%/sz.M+p6~2dLCSruyR?GjoVf/ChvRNI+-6f~91fv' );
define( 'NONCE_SALT',       '7Cq_Pb XDEC?.F}8T{aAg!(WzH.nm0zBJOn-3HBBp/60[B:i0?vonc3Cy>dF1,H[' );

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

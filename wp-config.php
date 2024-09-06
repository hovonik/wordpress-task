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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'nm ZIJ z^Z>`(}#S#^!YqQFb O6$wR2=z^;W_0Q/4AVG;NJkTs&EQj8<30[lJ_BI' );
define( 'SECURE_AUTH_KEY',  'cE[OA,+;4bFc8Wy^1N0fU[!C<7lwpc)0}hn^:%ul/KILG!P4BFC`S^>ArnZUY~``' );
define( 'LOGGED_IN_KEY',    'a./U>^[)8Q)JOIpK.nd9@7L7k/OXr5x/adU#sNFa/Zh4fr-C)6%YS[[Y1.5gCO<P' );
define( 'NONCE_KEY',        ']Qb0ESQ*[flWb[KF;1ZAk%u)[S=i?50:kLD7meL!HAMOs8)[qJOBdNLesD)aqP<k' );
define( 'AUTH_SALT',        'tQnz^o77l>,F>ZPebr>73rL60~Sb-~u+,D5QxmDf3V68_Brr&|*VtBJ#X>Hq 26#' );
define( 'SECURE_AUTH_SALT', 'N|Ugkn>bf?aiQ-40A={=AqcSqtGE(l7xlrKQXADrg;}X:$Jgo8TCFw=|z%fra7%v' );
define( 'LOGGED_IN_SALT',   '!u#Yni$T,iu7L*<oE3A%.tCk63x[pn)_^Y.V{X7I<9`RZl!ftq);TZI|:]ucA.JJ' );
define( 'NONCE_SALT',       'fE&2eA*:d Q`95/+gM3Tswm E}_KLvm7[erm/Z)VGSq3vR<P&mJi9(QbJ~SQI]lb' );

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

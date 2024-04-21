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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assessment' );

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
define( 'AUTH_KEY',         '!_kqOmZQsNnvlc?;vLu2(rtowWa}=Cbc5qjq_1Wb?k2qbGtxuZ(-)U-*6-79CL<1' );
define( 'SECURE_AUTH_KEY',  '`x- _7+&Q#4 )Y.!mG>25?X_i)mJ&|79W|:QSxDc4!C3toW/SdIUC+o6Cd$-G?Kl' );
define( 'LOGGED_IN_KEY',    'zY+*zfL .`/8IW*XIZNBr.:SnEGRg+3Qd>?(>vpWvCMg.vcWVJu<H92R}8:hS%T=' );
define( 'NONCE_KEY',        '<XtNoHc3^XU##4F&BM@/7h2:x,3*Gt{4I#r-fW@@-[)/Z3*k6[SQ3KTG^Gy5uJUg' );
define( 'AUTH_SALT',        '$S4/Em2=E|EpkAA/BT)G#S,1Y_`ykUf4@W+D.I2$rz{xlN@Qfy[aiHF%eJE`^`3|' );
define( 'SECURE_AUTH_SALT', '-lPn>`|@r[?cXR{^oSFdK6erus(_k*GHtz#Ex[|+/1[=L+JECGbOqpb-W=!@|o%m' );
define( 'LOGGED_IN_SALT',   ',c)BM~C0g$ ie-XR6~s?TsxtAx(MmU#~;C+{I4U}]b!42Ft=mg0_rFL#TTw!@5s)' );
define( 'NONCE_SALT',       '8X|[3c)/>d6z}mT6KKJe-Y{0rZQgk[~:1t4q Oy#Y7I2jM/}/;Gz_  ^*4opqv01' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

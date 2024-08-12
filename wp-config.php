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
define( 'DB_NAME', 'SitePlanty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'G=!{;>GeNxV2UxO_32>PyVgQtP^DFbw6wz@%^u8,nl5btV!>gpqygpCxHC~P$F7u' );
define( 'SECURE_AUTH_KEY',  '9X+zV 1K.*luakC sVcS4g^wY=6*e/Ch(U*wlGB&9?[`0OIi8C=k2[G=]{})~9!S' );
define( 'LOGGED_IN_KEY',    'eoum)Ck#*FT^c4Wz<(TGv N9Jzk2EV6N&,&blPhz(>um9s(uhn@pjDGAr7>!Cj/x' );
define( 'NONCE_KEY',        '+UR3@iOsj*Gh;gsX%*0b!O-W(TL3]x^YJ>=tKTl30{HRp[@/y ygaYF!H,T/9AKK' );
define( 'AUTH_SALT',        ']-R]U`9<G9EErc6MA8;e%nT);=iJ}#vQ]pC^/3!+lDz:|:&woj]VwWqH_{$?[D64' );
define( 'SECURE_AUTH_SALT', 'am3~s^|),n BQm[eV3:eRW<fj`R5i#UPAX#:c/-d+Ws9s8jL9t1co0V+jOisn,G9' );
define( 'LOGGED_IN_SALT',   'jlG9}W8N-Tk3Z<!9{`c8V*=>0DBqF&8WAJvSl9RwL)U{&N-#?evy&Jsx~8zHaiIQ' );
define( 'NONCE_SALT',       '$GmjWFvn ;$rZHhBI%Zy*Abla/+q]Bn9<e:F)$lvYmRq%e8LZ{*ul)D5J_J5(C)F' );

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

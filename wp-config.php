<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yoga' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SQ>`g7/)m>:e3+v^p(pS<J`_;?gc%#?/j#hL=3z^l8wykj*p7)CV6P.MCt[/kkb ' );
define( 'SECURE_AUTH_KEY',  'pUt*(}r~*Q/CGp25NBvU0}hi9BCaRTJ7}Dl{xzuYdX)<5sf+e%?V1?lq.|QZP,LJ' );
define( 'LOGGED_IN_KEY',    '%rwZI?OXfo<s}]P[FI5z9[9#Su3/Q%bKcjygIu-`]EH^^{`>98)Te|gi*2Kvvj))' );
define( 'NONCE_KEY',        'iotPQd&`~)hXo?HSv3U^96JLh%yOxAZRwVG=S$,UfZaxhF#Eo6>,YEN[90EQeU)&' );
define( 'AUTH_SALT',        '/s))9l2kL<BTxE;;D%T|1h-U 7&+%`>yhe26O=Q*l 4.`FV>:[RN4Fq$I%|DGXL}' );
define( 'SECURE_AUTH_SALT', 'U0`7-Vw[r3$U^geZF<3~LLZJy}ZE1n>Rq&+s^-,AN-HE#$QxETx 6gL:u:,TA1^H' );
define( 'LOGGED_IN_SALT',   'zJ>U:&fAinA/ 3}h7B-6,Xb{f:5jdO{N-W3|?_coh<#1BgU><0yZ 0Pf6rz^+c&j' );
define( 'NONCE_SALT',       'Vzs5I9>RrvvTGW1Pxxy)E5n-s.NEyslJmPf-j~Q*Z2EZSA)Uy6!?Q1(U&tLi%Ou5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

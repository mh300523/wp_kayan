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
define( 'DB_NAME', 'wp_kcc' );

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
define( 'AUTH_KEY',         ';v*I6k/Jxi(`KPFDE^ P@`i)t##-S7M.~p$)1aOAS=J>=8wdaBe6B (,M3?F]q_)' );
define( 'SECURE_AUTH_KEY',  '{TK#|xCJm4.@S4zA]w-H*.9%%vkI}o$MYzqyx`Bg&E-I}spXpkVgA+;u^=T.p$V(' );
define( 'LOGGED_IN_KEY',    '=a%mrHP1WNaraM_2Z6rUHEBxq1+m9x@0/AXQ,r}+=oBdW>H|K~=v.CIQI#l**GEz' );
define( 'NONCE_KEY',        '-#.CW:!]eS V={=>2pD`X11#.HCK8g}FLWeFmp4tr-5DWc 9EiJ[g_SPQ6pfu_gf' );
define( 'AUTH_SALT',        '^6BJ+@<tLO3A}~+_l[Y[ta@;1?_15oZ 3#R9kP=huR:/&O `>Wy}i256:[[~TzcG' );
define( 'SECURE_AUTH_SALT', 'KNLcNUgX@C>ixMr(N#(_wRtz/>MFy?.nlbOBz,#LE0yH5Y*j0]d6d+lA{l6UEC:_' );
define( 'LOGGED_IN_SALT',   '?O$;}IbKS%-D(E^(vom@u$ (LG6aO:#kj_W4 F&C(HmO2-g2Q03%1/nnBdEV$XDs' );
define( 'NONCE_SALT',       'K*D?~sIEzxS8{uXD^D44az;misG{^+Q9)QcaN*rCt3XiF;r!G r7),H1}K@p+6P(' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_DEBUG_LOG', true );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

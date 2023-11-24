<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'amcoffee' );

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
define( 'AUTH_KEY',         'K7o&({ Dd{IvYj^`<pN;spn?KADPNcRE05AH!Uxn? zc4M0R?w9}%p2|xrTP}.aj' );
define( 'SECURE_AUTH_KEY',  '#Q5w7w&Q@{NbnJKD?O+58mGI;7b>A#c@*]Q--2wv`8k[LYbQ|1~;hA~p_^e,~!7s' );
define( 'LOGGED_IN_KEY',    '6~wt*!|zS27k{)9|%xQ$xwh_fD_,[!*T+Loc@pSKmoc1LTChDES<6+=qP#zdFQ!D' );
define( 'NONCE_KEY',        '9Uo6uqJSNSCe;!N[oPbb0+7]NCSa=0FSIOi|2}/SXqspqf0;`+9p2j<5`#o@?i}>' );
define( 'AUTH_SALT',        '7Jk8MG:YPAp+dEz0E,l@@SK94j>iTNYQF *rIs(R?J-T6NaD7@*0+A+tG;!G]G-g' );
define( 'SECURE_AUTH_SALT', 'lX@S;o{.;h}n,|EGO+)UMbmFe^T ~ZU<#l?>K3>*`si9,MC{`_C6WGXT02(Z7wE$' );
define( 'LOGGED_IN_SALT',   'Mm/K9-%Q1hJtHgYMmL7&}J)8yv9M^h|~cN=|4m*z>.LPu9<C^52&v9bC;e9xpS,|' );
define( 'NONCE_SALT',       'F4jdT| qiixnGV^v~-f&W}A%dkBr0z4HvU^Q)9!-Q2B@P^GrS 6llFY&@.v)Y=`%' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

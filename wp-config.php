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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'netflix' );

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
define( 'AUTH_KEY',         ':Gz A4VkP-Fn|XiTUL41X=93UC&h`c!,4c*%Ct6>!+VS1q_>#SqCrUIR/T3N jJw' );
define( 'SECURE_AUTH_KEY',  'VZFMQrmza)923P|a:ZZI>Hz<csRth]ES*n;~n{2MvI_}T,<:cJg^_TVI? pFix5>' );
define( 'LOGGED_IN_KEY',    '}09cES(l&`1}|Ji}1A.CDhbyZD{tH4zF![Y5{%jO|d-fS;fT6j{j*.bi{ycZH5Q/' );
define( 'NONCE_KEY',        'p<{dk7?^|Y6B|y~RFZ8bp+c?=x3^,H*qoKJG^?Hckx`,Uc$6-<~@t@JLe[h~I{?7' );
define( 'AUTH_SALT',        'g%GpXrfq2FvYJfgxhWv$A-{+3c$~R:Dp9g|aJuRQt-{5NV!{X_G}9dd:xdf8>7?-' );
define( 'SECURE_AUTH_SALT', 'B*TboDuB%HT|xb t&Lthkd,SFWo<44DPPXkDd9O!f~N{*Ms W?T,btL+Em.yx$CE' );
define( 'LOGGED_IN_SALT',   '?BNf%-90/o1m6kkRI_LdlyW]u;(L~0%q{@?>R4J/-&3#U=^XFcwx6ro#%zmswVF7' );
define( 'NONCE_SALT',       'x1t&XPKUU2}S<L.YJ[cz~6c2oOB107z~t7^5h<TZP}R{/Q^Jh7K>w!?S2du<{(JL' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

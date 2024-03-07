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
define( 'DB_NAME', 'marcenaria' );

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
define( 'AUTH_KEY',         '* @7qszSMM8r#?DreQ.=o=jGrzE1XRs7$!#OJt IPam1LKj_v`qOhp$e{GTgp5%;' );
define( 'SECURE_AUTH_KEY',  'P%>MV_9[jBf`pT*)4z1J!LZ&JT%N}D-tM`K~vJU)fnpj}>dx~TUp.9:.wh{X^P#M' );
define( 'LOGGED_IN_KEY',    'Xk~WMl|.wnk <+iCb4urWXWI|+|~{nS;@ZE(9aH]f+:P`a8_R/(O)[l7cjWlP@7 ' );
define( 'NONCE_KEY',        'YcF@,W$K&g]7QJ=#jxX[v8d_=?q<pU,5vw?z:q:Y Z1qzT]lmt6m},zNzc}`xraS' );
define( 'AUTH_SALT',        '@2S+D/upN+7Ki)n)|e5,H@TnM{o[%i+5z]5k#[{)<$j]=t9$-7(E e2-VrxC3},F' );
define( 'SECURE_AUTH_SALT', 'h*C2YIf|r8l)195)TU^JTgYs,Rf{^:uNm#)o|_.DE=-IfdC8*RXvZ9GyAaLT0skR' );
define( 'LOGGED_IN_SALT',   'Y&6^lO|X)qqNO2nclW8 !(cH6=L7i0GyCy|bkpo@j3$pLNm=mn.|Xl/t3N0{dTim' );
define( 'NONCE_SALT',       'F2%X3tAWvJC]XN<LMoVn,cNs8)*z#%D %-0*Dwk`T4`uU$6c(kZ25fnFeVD!y|.C' );

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

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'M!*+;/%}c;q=Gwr9dq- (($B |x2&I+o&M/ZKJHAv~M/j,Acx[C[5l](T,/3}d+[' );
define( 'SECURE_AUTH_KEY',   '3W7+~YBW>FeceRoi7SVuD<Bb|nk^W}~,:dg*|O=.R=Y$^-y)&kd[|-^$vR]1;( ^' );
define( 'LOGGED_IN_KEY',     '(ypY_l=A05PwNhW*Tk)+3MIyZ.qhJy9X%w3RR4X4}ztQ@[yh>_I!fEYDwuU5QYyx' );
define( 'NONCE_KEY',         'LhOiuW!%&dU=7sI%~Itg<rul#20?kwLR;v[L>A@?~JI8.kHR[?<,7{Dzh^UICi9Z' );
define( 'AUTH_SALT',         ' &1C4r[ZqYmV*j-r6N]k2e`6rLwsgoIW#UGZV:;$L/a)Gvt+lh/|o4`{v1CgrF~-' );
define( 'SECURE_AUTH_SALT',  'wqQF[Fr47S>Dcdg}H)VLhu5olOv2;c}q TWxy/cje1IGG*jzd3}UPy8&C$~+c02 ' );
define( 'LOGGED_IN_SALT',    'Vg8WZW{sJP?]]2wpW+uRaI1>mJLWo_]$]FF?;I-7lTEYLWa.>dqfn29{K*iW7|og' );
define( 'NONCE_SALT',        'DtY[GT7+nQctzQpray2vMVbO(Uw uC#oO7f_MB4FTI~EGok,3<pB547*@)=TFMWK' );
define( 'WP_CACHE_KEY_SALT', '_A$mKEF{#}]AFYh0qbRhFK;=Lk,>E[T>Nlhfi]]J@>O#D(R5d*JL(VCf7Lie-dK}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

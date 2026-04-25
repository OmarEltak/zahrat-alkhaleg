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
define( 'AUTH_KEY',          'l#^WPrFjmjrxMOoR MCgaM[;2iY6fh>GW,1@sQ,Flr!9zq*0&e6AGOjl[0X$Vz`m' );
define( 'SECURE_AUTH_KEY',   '|-Z)#fxMW8^V}]qMg[j+20zjiD[>c.gJa2<lj?q; b6F?]Z`ouk[}u(!^ISedc/[' );
define( 'LOGGED_IN_KEY',     'zC:_R/U4i&?G8Ur:yb!>/d4hjuHj>=R0[,B,6}.t6-s=A.ocgc,TDcCWz%FA$@v+' );
define( 'NONCE_KEY',         'h)&_n22ijfa$I|GwgkyOtX*Q;BE(F(rt^UFW4= O aSLe^{EHxlI<tmOA*XGy`5B' );
define( 'AUTH_SALT',         'neqd}}4hbI!J=o&okx*Hc;MhbMjcK|h2YF1hm(~YV1lX7{}ib_])#h*r#^2Ql*B}' );
define( 'SECURE_AUTH_SALT',  '4&}Hl4C_eq!6zG9)R,Zz,_JVN? (<s >r],8oQwv9~hq|0?7mW]$b_}nSIaSDg85' );
define( 'LOGGED_IN_SALT',    'cLH#*gv}s(pil.}`]wZU4X)pZLDofcOH+;#ODBAvc}L<fbHY,Y$6aq|>3^xo]V%C' );
define( 'NONCE_SALT',        'lCi@MH(6iPK</I:j rw|A: n3aH2G0?}f[?}jT>6}+j($*{f-!}y!#z6UVL@r6[0' );
define( 'WP_CACHE_KEY_SALT', 'B~KfQfy<7LqmDB:diq.~W9{7jmG?+}pOa{%L3&g1:IT7:6M28oF|!2fa2=Cml>xC' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

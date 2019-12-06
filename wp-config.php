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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crownrooms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=J0Fx_$][fMrgRJu 3p|nzui4YU[_&h(|Us3or!1ZctQx{FNiX]GWiw)E9hnIN,N' );
define( 'SECURE_AUTH_KEY',  '*,G!E<&O]7*N[>$A>L4:-E1Mg[Jb_sg=e8SLB1Mzg{Y:,gq/erINH*YVw%z{nMqA' );
define( 'LOGGED_IN_KEY',    'CDK`V<^L?L,1pp$l}D1E+EBd)9iNL6-Fz!vtw8afY+$L}Xfi0wp]s)la|%$6Cp2I' );
define( 'NONCE_KEY',        '/]R[I-n!QvsmQ%{S.m:z{g|I:lYa:V PS7!^Q?*J-t_Z(CsSJy_)*%/7c@QmHFoc' );
define( 'AUTH_SALT',        'R,i!]0OF8Xl!.>QM-(wpVD~;h)7@P-8qX_aIx-7H(08$pkn6`%{/va4P5TQ9+ QV' );
define( 'SECURE_AUTH_SALT', '2Z%9k~f,%#oa}Eqw:$)}BE+-0W>>pRq-~Fv)h3D%Onk(fj/@TH_az)2H3g%.h-+a' );
define( 'LOGGED_IN_SALT',   'Rg@!E?{0.k@/}$TB%u/U<7gbKSg=_@G-jsiDQNA^P[.dr)@%(qc8^piBGxjco[+x' );
define( 'NONCE_SALT',       'n@@FFLRtd_K.c@Q#v{X#u[pHviIMyj^I#W1,~O$!@Nz&i1J:FjUnj!dAip)FFi,(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

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
define( 'DB_NAME', 'salem_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'aUmb1wY*VB.H>@OeOGvg?3]Wy~5*nSNKukhVoMv/m-/?hX{R_18sNpMW0Urd&im!' );
define( 'SECURE_AUTH_KEY',  'r~t5)_>BsNITvRRoF8vCyRgd}H$EeR&R{}JCZms+lIL,@/h^|?Tu1Z3xupiQNmS/' );
define( 'LOGGED_IN_KEY',    'Ga8cS.(Xs@@TN4oeaxn#w>PIw[M1(D5}[iN?JEHCxo(X?:)h }qnR/m@YQrZ|(P0' );
define( 'NONCE_KEY',        'dX}VtWAvhaVVBhgpFR)G0DGEFG8(ya$Er9`Y4TJofR}{JphnYNC~/[A FVXw1^}y' );
define( 'AUTH_SALT',        '<E6%z(Vr#?g0vvp#T9i%jm[8G!U2]vk~s{wr;KGJfiSKpF-U@;<YX_@}}qV|b_Hn' );
define( 'SECURE_AUTH_SALT', 'Sdpwo0RMh8uQxvAB.%jTV91vG:2^q)-wF<aiS5(8M~oXZP]3e/3Ojbg8t@(v`QA&' );
define( 'LOGGED_IN_SALT',   'xX:!<R}{)aYi]ph{nh>Pc7ed*c R`j>vM(WR?GW3r8`pWB.!#(fwn}$/_XYd6GF=' );
define( 'NONCE_SALT',       '-Lt([|5g,PqPSKa*tx@akG`AhPA-/0HjucB+|?(~H|9nQc}A}M8]8E1[0[AcY]Ga' );

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

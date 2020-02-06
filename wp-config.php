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
define( 'DB_NAME', 'wedding' );

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
define( 'AUTH_KEY',         '~w*4$v_m2N82j3?yQ ~Pqv`[oXUPWky#_n11pk>E|u}%:#H@Nwu@qb06t32AYNyS' );
define( 'SECURE_AUTH_KEY',  '/[xNW+Ex~vo/dlbH#GJV+]j:^2Q$<U|nyobkYPk+/oK2?25#>~y;C?H.cd oxf,b' );
define( 'LOGGED_IN_KEY',    'Sv!CfsHCsa-pH{SNK1M#V[R-(s$=1B#Tz;#sD!gUe>NL[WfbTU&lNQlo/Z0R}rF_' );
define( 'NONCE_KEY',        'v,8d5&a.FeZ^=dXoQK0j.Qqw,^8@?lg,oo*za`[^>jk#;m+zr%ck_2$Rv!?[M6y[' );
define( 'AUTH_SALT',        'H&}):f)sC3h*u=ETl0B0PyJmrZ343fCK]sG-T6*PtN}D^bC0IExqbI&-6eGSg(:2' );
define( 'SECURE_AUTH_SALT', '50{[|aa&ON0Gy~${v=O?__urzcTb2a};!Rt=!}g [TWyY`1mz$U+D&Y e*&Pfe9`' );
define( 'LOGGED_IN_SALT',   'Hz9sLAMCC)*2N}XS@QRegObHO^qi7hXB>%za1m9hr2n-sXMx-Xo~@FShtJXRq5CH' );
define( 'NONCE_SALT',       'mi*$d_TFu:;pe(/rO?em{U73Q`D7EEc ~=Ct L%JL56Obe-JB`,8${0Fv8+C2kf<' );

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

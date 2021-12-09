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
define( 'DB_NAME', 'loolia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~HNV@ib-![|nau=f6<(CR]A)f+$O gx{DBs@wYCs{CT5G4Ea7[;yUUwn.$#J|*[(' );
define( 'SECURE_AUTH_KEY',  'u$.K *k25eO;xWGhE:~m&H`H6>;aR-LzK#;?/K(9{6ll`]2qTk3 6Y$rm`%#GI*u' );
define( 'LOGGED_IN_KEY',    'n^>{<-~y@3A_Lh.oiT)jmUjx*{;CeMk&K R9n?Df_{TG^6rsR8]F+A-wex&lf@Jx' );
define( 'NONCE_KEY',        '7{3ut(1FZgbQ)njkpz[P DroTOl[2{V*JH_3w@=jp^;`n$Rf[c@SJSYe|45YX`))' );
define( 'AUTH_SALT',        'U@Q#nZc7swDY_4lTKhLA>YnL.W/nc<;iQ-xfw&|WFRkf.;q&9g`2`ZnLcZgzxoEj' );
define( 'SECURE_AUTH_SALT', ')~Q5#yI^x<z[?T.?x!c_yU (>B|&L2thrIW1,E/:g>BS2v:iIVt)H#N`wPuoZ|&P' );
define( 'LOGGED_IN_SALT',   'A#|L*$!%nIZlgo/O?S,]%uj;|TW$epI:n &_y&Ye::ypwf_Pb&yp)j--gr(0,BLo' );
define( 'NONCE_SALT',       '5i?e,1I6W;[)5)ZZb(Yp{2!(Za6Uts#UkZs_TB8+a6MLxU7K0=lO29S9)x5RHkoG' );

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

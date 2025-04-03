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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'samintzy' );

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
define( 'AUTH_KEY',         'MODZvC+EZ6}JPg:Ki9@A_L[! ;IDjS0U@ ;5u4A35v/sw;2%=[/Q2lTAsF$c%mB ' );
define( 'SECURE_AUTH_KEY',  'nN[3)xB/AJTH,S^fadqn+u/1ix-D[XX%u7XMGNPxXVUcAB|&38=&)Rq+zN!t}(>$' );
define( 'LOGGED_IN_KEY',    ' 3}Pz;?&iO%[3pwcg{bcbohqL3T*PU1V^p 7#@x2qjO>TS$a.XXS2,MA32?A26RK' );
define( 'NONCE_KEY',        '?pb[(N^WMLw&`TI92$@d^^/[eU?@G*3}UY5:&xwK[3Zv`KUxC+xz<9dYhzK,t@j}' );
define( 'AUTH_SALT',        'C?G7:Pd6BU5-&j4LqY@zT7ES9b_MUlXOj@=TLITO1kx_7XS<M89fC(@JQm3 bxl5' );
define( 'SECURE_AUTH_SALT', '[-3pm6 qvZn1viZPglzTc-I:YFDPn>d._aS*R+lpK)^DW#qMAgXrWB;*<:4cuW0l' );
define( 'LOGGED_IN_SALT',   '=%1d+?|NPkkl;7L}nINx2r7TMAe_D0HvbiEVEKCX,ddP*3BlbHzn>27a,)26JUau' );
define( 'NONCE_SALT',       'X(D_Z5#a_?!#7aPYa1Su%4eC-^O1vYw%`zj87S{rrFg{Z3Y?JCcKOi)FN=iwjcqY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

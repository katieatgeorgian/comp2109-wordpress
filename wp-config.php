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
define( 'DB_NAME', 'wordpress2020' );

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
define( 'AUTH_KEY',         'A6lb)}4~i8JR/-y=sqhArka[::[:O@+%t?.$5]Dp+3;i#^_R wQR%irfGNl}Wmj.' );
define( 'SECURE_AUTH_KEY',  'In T/}ZIS<Qg9-K[OS6hX[jogsAjt{BIO>. iE`^ <<-TnK![kj<VQH7A.2HX1CW' );
define( 'LOGGED_IN_KEY',    'VR,uan{arxb>,~[#l[uYs`2`[ *W~jp/H?s<o>L6*p,K0:g}5]31c=W)-j{Y?Ed#' );
define( 'NONCE_KEY',        'p]{2BBqjpQm3z^w?tUJBc0;*gfD@E#/_].R5B)CCx.JGgZUJsG4T#uUt]V|Nbl?0' );
define( 'AUTH_SALT',        'qJ+]z9GX{P%yN-mupEmJsi1.BRxV@LC^1y{nR~o)8EQ6MeuS],3@/c0A9uFQ{Dpu' );
define( 'SECURE_AUTH_SALT', 'W{SmvZ&kG=^R7%CjR=J ;Rn fu]YMw4A*I(}FT|,#l6^7tdM@*yF3v;I0^YZz+lV' );
define( 'LOGGED_IN_SALT',   '{|1xSHD^QiRkC1$cX>Hf<f8r5mS| 7x{c`)[C#.ytBOx% %fgTb9,@:V,w:SG^=w' );
define( 'NONCE_SALT',       'T9?87Z[ZmWVv).!CM~~o1]IyCtaLy:&;TzCCH4z#9~&hjm0@g/:^U3vNo?&XPVH=' );

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

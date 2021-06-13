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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'postedio' );

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
define( 'AUTH_KEY',         'L<O#`L0OrdCjQ7oZFxNTHgF<yp)UbTrs]R;j:cS*:|#D?%wXY%_2Q,}l_Yn?%#Ob' );
define( 'SECURE_AUTH_KEY',  'b _4v[Co2Q7@F8tzoJ+kLmAAYX^9NC5P/_sd+ev|C`N{]/s,D~4Axbl;{$/-@MVz' );
define( 'LOGGED_IN_KEY',    'iFt7$({2t0]K)g[C<-Z>UD7xLYF@[8ya{=2&v%#p@[Vwi=Q5 Zo?*kQiTIC41{AU' );
define( 'NONCE_KEY',        '#}3HRljQ`-ni7;JR>gl&o+;xj^-y :V*s, gl7VpfBwi.X$|1EKDReBch8B~T/6L' );
define( 'AUTH_SALT',        ',nI<5TOZ;i_M7$.INXdj:[|8FG@7?d!w,RI^Pzk#W]D~kGEHn1|w=Zs]:Mwkm4JW' );
define( 'SECURE_AUTH_SALT', '}%OHj5`J .0y>Pw V!zk2xU0%QXFrmw(p)*vF||B!}#yrywZ1qY[Bh4#&L5yP:tW' );
define( 'LOGGED_IN_SALT',   'k w*tO5<<W_bsAk/}}l/2I%&_JJB/v_2X~3~kQEN*C=&IJ82#6&LJ}4Vt~y|~h-B' );
define( 'NONCE_SALT',       '!3feGZ jE<C|U{7VKwg2h3Nv3.?DgL2w(>i-^XOXz;bsz_UFqlSmq(`tWjGxf|f2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

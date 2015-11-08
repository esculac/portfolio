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
define('DB_NAME', 'portfolio_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DTH>_8!m1| m>=/{XCKW)4@hYx[+g-$tDXjg5_Wr/$+69z&};v#/Vx^UY+btR;Y!');
define('SECURE_AUTH_KEY',  '$-I.u+ef)H#:)XX[ axs5(LX`tZ6(p(*JieS:3+Al]N;|+pA~78[u+x0g^*[ZpS3');
define('LOGGED_IN_KEY',    '=sw<8SBr<#b{WeP5J-*?a!nbYi7FYSlDX=A)UiWNZQ2_|IVVl&^-lMMV+_-<QW[:');
define('NONCE_KEY',        't,7t)|UIOt84s*H-(5tDz>{~1rmE:^=ljn(VDDhSqu0qBc=Y?NbwksUMCtqV{L|x');
define('AUTH_SALT',        '=XMYTIhlxd9o,.ikvX~(Oqs[1J`q[[yB|>~|yq|_I<L}6AMmdAy& FTG~rEJRR^>');
define('SECURE_AUTH_SALT', 'wVpXdfm-]>WD%/F^G}s<R[[Jtv_F,?Ryz&a7mT>:WJW|0XOen=d5_GXDd3c%5NJ=');
define('LOGGED_IN_SALT',   '%wRBi8$4_yaE>=]*66rYGLoY2?czAq<[RM_I*eS=qL-]C+,$~ !@-:*M0qHZ~Lp+');
define('NONCE_SALT',       'Rs[.8<L+a$$-]Y uI~r,OClHQ.s`BD3b{Dz(2-0ep). |ylKdF^RRZux9T7i$_Mq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true); //show more errors if true, less if false. Put to false for live website.

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

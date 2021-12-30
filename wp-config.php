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

set_time_limit(300);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staging_iconla' );

/** MySQL database username */
define( 'DB_USER', 'icon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'icon' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('ALTERNATE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(b,W6M$r.D4qRyGCu^b(Tmr:`]zzfvh+_&]El]l7h?dJ[o]pbn~<Wn><_c3n%JFA' );
define( 'SECURE_AUTH_KEY',  'EmvF-_O>L+0Xm(wGc:#-*;qHl;k|.Ng52sW(L>!(|~B4TeZw}jH;K$Eb1n-G8>^@' );
define( 'LOGGED_IN_KEY',    'SNuO1JpHy[V`>8(Q=Nelo=fa!*(*Mw: ,f.Ox~aV3?$gX)&8lYf(]?%|-l<)L)-M' );
define( 'NONCE_KEY',        '@%Mi)7mz&oN1whuc~1mfz_*nPPPX%</!8W#rr@)e2KuC.2Fr)`9*VN{LT^!$K#G5' );
define( 'AUTH_SALT',        'r8n;48&)2dL2=Wu-#y_o_ (u!,s`>|csT(*Y=/T8b;?cTIJHj@JI1q8+eIlrUq^T' );
define( 'SECURE_AUTH_SALT', '] |ay?85T^i2Hw{g?6iu}GY=^spehlb/ruwgM}X#c0`5)(;;5ltt<#`D@(IRQ#?i' );
define( 'LOGGED_IN_SALT',   '6o{DvD^LxoDkm(GT/k=@T*irkA?J4sVux6UM)de/md;5cLc.q@k6~.vE2,u7r7cy' );
define( 'NONCE_SALT',       'O^[+xF3!haG9/l,C.^P:|i}uCwxYV[yVhl(w<%:I|?#xLF_u;C:;)mDvG:;JuK~p' );

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

<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u117391711_Xtcwl' );

/** Database username */
define( 'DB_USER', 'u117391711_BqxAs' );

/** Database password */
define( 'DB_PASSWORD', 'Um1mVzY0RK' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'j{&I1;=CyI`J=r+],-w*T[rG,~885L0%=)d<ka}$kLp7/?Ztz?yFB;2u$2UWD{i,' );
define( 'SECURE_AUTH_KEY',   '0h8VH@:;BO|y ,)t/UMsIxN]V{A{j9[ifRKkm<w~k8BsCB@Sx5UKLH?ut4A87P$|' );
define( 'LOGGED_IN_KEY',     'R{[!O[4jZ9FSAXvS~f+X%g.9+DNl*L0xpzwLyj+!6i[tQ0~}?v>c,.Ib>>O@9Giq' );
define( 'NONCE_KEY',         ',/2|w;m0&<ad0uFLxr#?@?D1|1Ef=sy3,*fI|$=.%9::;Bru_#mS.}?7x~Y5A.U0' );
define( 'AUTH_SALT',         'V5qi]K!2TZA%TTl[)}p/N}n(hsglMNe,WtT4I1%,);]j^e*c?E`t,F8S0AG%o^Rg' );
define( 'SECURE_AUTH_SALT',  '5h[wc6Ri|COJ7]@]Mc83c3u)h8k#<!Y8H%LMKfy~c o##:%az%?>E0140{Au2^.z' );
define( 'LOGGED_IN_SALT',    'Q)s6r*RPn!pm&RD$n}1j0_lzGPex8h|~|j}z]CA^TI5]ob-kMWp+Xw@C4Ym=t5_r' );
define( 'NONCE_SALT',        'I>CWrex,`{lr-X#<?]o:;*vOrZ2iTQ4;TnX5WGHHNPtNq71T zsxTeR^T-uG{ [P' );
define( 'WP_CACHE_KEY_SALT', '@Y/~H*@$^3kUvMyi%oi!WiPna,.?9-c-Yq_o,6|1a!fy8},8}f]H{|LPJZw,NM[8' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '9a8249dde59b717a085d0a62ede8bfb1' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

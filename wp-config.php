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
define( 'DB_NAME', 'gaston-fortin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '3<5O9v$Wa9D$6R(EKjwk2f>0U@p^wJl$CMe*f)fi&c&}+Q[WHm_v}ce7pR[,v`/i' );
define( 'SECURE_AUTH_KEY',  '!:WVi,=alot7d(12%95/m~K!a]DIZOK.VS} O+o0tc~>$Q[F~t|@@jW+CbNgc l>' );
define( 'LOGGED_IN_KEY',    '//D^hh^lxpx(v>2YiqM-k3mZ9{T(/q-bk~>K(mL,8VzqdV.hP^|*c#_WJpU^L[QG' );
define( 'NONCE_KEY',        '&K0q+QpF}@XEmeE]<%&TO2tLXB#gzExr|f9LpSq];a#XrzvjS PllJ[B?qIO:<?h' );
define( 'AUTH_SALT',        'fh24xeadX*$l8k_oyx.ZT^MtAYp`D4=]b(75pO]GEwG}26ym,F.K9sn_#3{N>W$K' );
define( 'SECURE_AUTH_SALT', 'F pUy#eIWn9{(n/}qp!`ex)pTE]X@9%uSdpMB^Lr(va(YoFiSn-j-ey.;lK?$i(=' );
define( 'LOGGED_IN_SALT',   ':%}y6#aPpE2UZ?R]l$s|msk!5$9q~SMqsuG[xX)cUr}!<iO`Hb-rj>Yo3O0|_WXT' );
define( 'NONCE_SALT',       'v<XA4-~CPD!tSYsSFk1hUM?V[I^Qp(gf?f[9w>T9bsbtMdQ_I{a)p6D+YpJqQtC4' );

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

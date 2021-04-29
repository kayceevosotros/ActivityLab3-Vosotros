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
define( 'DB_NAME', 'vosotros' );

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
define( 'AUTH_KEY',         'y*eK8HSxIor[}K!-LvXbhIYZK{$%_Xmuj#s6?<g@*&lct;Bp<COE}N-gNE}[{UP_' );
define( 'SECURE_AUTH_KEY',  'L,$MK>Yx<oVuqLpPed}6[{M;57-$D/]e[F8xk@$Y`L_*yYzN#3Y.Y;$tp]$76|Il' );
define( 'LOGGED_IN_KEY',    'x;7f<&7$&%~pA{]@%k1V`XQ[bGxUCScxD5VID/,LlHREAT!;4()IqO]([@sl9:zw' );
define( 'NONCE_KEY',        '5+G>&sAzUwbyDKuqo(hjHUp[#Fv=nj#9Gz+X[slo;]d#,j2u;5zS)e.tmgm{=Xun' );
define( 'AUTH_SALT',        '&,(bO&GWRDmL<H 49%0 %@Vt<LZ M?fWH1GbQYo~QUb-_FM9g`=28thhyVJFTz|$' );
define( 'SECURE_AUTH_SALT', '.*Zh.K*e&Vo?9q=E{d^!>^jKc+4T4]8%k3(=%00bac(sSWljZ9OA`-5%3`ro0@Sk' );
define( 'LOGGED_IN_SALT',   'pR*[LABAgi9_FF.6xK`;^!et*lmDLe]](~~q7owo))Mtlnw[N_c}DHs(_O/!BD=K' );
define( 'NONCE_SALT',       'JoY;=c$ p#Z=n1c@v1WC1PO<4-FsH~6,(swnNWJT;_xs{W_a~.L_hdBGYLmUMzs/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kc_';

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

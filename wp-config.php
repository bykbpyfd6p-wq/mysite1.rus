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
define( 'DB_NAME', 'petshotel' );

/** Database username */
define( 'DB_USER', 'tima' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'mi/0s(4?#<[dbYS6#L%4A^:l_~REtdLCFC`saWtCxLn#6Rf@EdG;6~1 fofW/O;g' );
define( 'SECURE_AUTH_KEY',  '9#58)9P )>SSW/eeTtwrMehe2i^;*4:c}B`v67=cH~x1r|*`9;Ey8l{jHli=ZfOJ' );
define( 'LOGGED_IN_KEY',    'yA0{ I_Q<>|~EvLNPWHUg%`@XGLXPDBgB!:?Qr@Twf<?0iX$e#eLTr5-&EVv;6z8' );
define( 'NONCE_KEY',        'u=*/xM4}Ukbr]Te?bkf@vUi3qEo@uS$ 5Ynq=umB.yjk+{P~=d?w9Ybc6Z+|3:22' );
define( 'AUTH_SALT',        '0Y4uUDsh+Q$mC:Q9WtByFsaP4INOY4)Ov`WYBZxt`#MtJZ*&)$z$t>{O.]BjH)ft' );
define( 'SECURE_AUTH_SALT', ';rp@Wlo&(b&3Vxy=6tz4uy|QAr-6WM:<&$3-S6rQS)Mm5S$&iM1mfC~/.|1jK9(=' );
define( 'LOGGED_IN_SALT',   '/g {RUcj[qcnzyv;fr%U|La+6H`qD_<m*2x{~^3)g+UJe)=F%@Y8,wwko56c-6sj' );
define( 'NONCE_SALT',       'Fopv.la1&?!AgwDd}YCf:mP21L=qO[rdFO,yNGl*2$kfuLiNu@X?q=WtngQUcAkq' );

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

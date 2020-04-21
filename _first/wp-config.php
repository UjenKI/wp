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
define( 'DB_NAME', 'autoservice' );

/** MySQL database username */
define( 'DB_USER', 'auto_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwertyuiop' );

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
define( 'AUTH_KEY',         '9VbX9?ag.2N]s2&;HG{f|g|t~|@i.q^>3L??Af#M]5JZA|Y@,&Q=97!3SoP(MhCi' );
define( 'SECURE_AUTH_KEY',  '3Fu LvjU#xL&sKsl}mD #PsHR~{uOkwNDI*rI7fA3GSPu*8(8lp#.W*.M>$]j|$S' );
define( 'LOGGED_IN_KEY',    'tmQgWwvZVv$]0kh1K[9=|#C-X!MRLM>q, O5^@QqAMR]dgvVC@$ucBLMeh_lM(U7' );
define( 'NONCE_KEY',        'Ded=RT,G6WpzxzK{fXu.+#BN(ceT@/mf5NS/X<!XK|{|t-Mw6>|OWh%c*pM342xq' );
define( 'AUTH_SALT',        '5EfRU$e-FC_/S[R7<,?XZ`5V{N|chF_dX)M(~JX8.pjcVh5ia5NbV=?e=1{Y~X{b' );
define( 'SECURE_AUTH_SALT', '=]j@c>bo [m]Ee?He1@fJ^sL$^xq&0RNVRI?GtiuK*v>pwpUO,2&O/9.M`$6DmQN' );
define( 'LOGGED_IN_SALT',   '-pg40`CzDo|f!.0=g3J_<:/iI/Y%w_pBhG6Aszf+mN#>&/l$ME^2t}Txv5mh v}>' );
define( 'NONCE_SALT',       'Jm1Xw++-<Ti-ibM!ygvNP/[9TlK8UOG*n^f!;Fls_*Z=5VZvq<dm>tM[vd_=K-) ' );

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

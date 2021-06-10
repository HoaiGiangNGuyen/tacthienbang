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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         'zvu`)OB=DxN v(pcL! DNhCitm-QDus]M.MF6ifE7Wji;o)QEYBQ)RD+%CUJp&N9' );
define( 'SECURE_AUTH_KEY',  '`]&TX7<fA!}vn08%=i{;%*U#>g_~jicV$NpsfY* $)T L11ZBaby(v(Rh$P([03G' );
define( 'LOGGED_IN_KEY',    '.C1z<asYyiC9/tcp>V6t>}x/YD:xmOPsb&xT`(tM&yv=O^W.3G9<Mzdd{Fd=zuv>' );
define( 'NONCE_KEY',        'ZhNP.8I$-GZB![pWdhU.hJfR$CSp4|9Y|Z{QDOy!]:84}Dz>M}BBib]@vJUq;8*f' );
define( 'AUTH_SALT',        ']Hv.vN7k4y2NU4U<`pB-wBXe]q/ 5?Jr3|<?v@P7mL/AftDz>HB>_JCekL8cCzWb' );
define( 'SECURE_AUTH_SALT', '4XUf64;WOz^sb!qMHvCWjT,|]w|sXB:No@Sq9u_dh=`2/QgOE;Up11.1w/fJyBYj' );
define( 'LOGGED_IN_SALT',   '.O6Feih&>uk7(kS>~)f0{nF2bX|_G#e3H1Pk[=-a?<X2jhq**~7N-aPAlaJkg3)1' );
define( 'NONCE_SALT',       'oS;s>nUUmTan^_:o aRg`,^TMgfGj$C,Nm?BI_2_=Vfy1Oun(Op,PcJ<?x0eI/_r' );

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

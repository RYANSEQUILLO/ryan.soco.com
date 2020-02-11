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
define( 'DB_NAME', 'password' );

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
define( 'AUTH_KEY',         'mf5<DU2)fta!0a6(+6pFj:_0cO$;/E00OVy:6yBNSuD%QcOAim*} _e?[SS{gAAP' );
define( 'SECURE_AUTH_KEY',  'H)B9zf~:PXKJ=$>|{S(:,?t}/>]#<+h(sBhOzhgUA <JVUy^V%-$+)SV.o?$XMdw' );
define( 'LOGGED_IN_KEY',    '-OdM<_>{rRxis]&if2o4XivYRB~F4n>eloL_DkVoUZd{4DnPd2gs;PE3g3)9+]C?' );
define( 'NONCE_KEY',        '$f{]xL*}F47lTCSFIQ+$L~qf7^m8:x&>J>  RWL,[Bvk6TcvRW{B6@bLnYcxdx-X' );
define( 'AUTH_SALT',        ' PEcoysoBWb:$D,WZ39wmH*#x<2[<FGV}6-!RU(*iLCdOO_818i$1Aw1gZA5ytrh' );
define( 'SECURE_AUTH_SALT', ')ITWQ/Dj+{9Q=|)9V2L06Ux?BRE{7X;5M&EkxKrQkf&_6goX*w /iIEP*fN&k>m5' );
define( 'LOGGED_IN_SALT',   '!yKW?;xxO?Er!^x:sA(oB-HO-?Vd>4B t-s@s4E<F$&&K.P~B:|@FQ&r;w`T@OoC' );
define( 'NONCE_SALT',       'jSw*W!( (2@HQPpJl)9[Gy26vG*L1[!)Kx:|$w(RgHrzP59Tf}53-a0qaggKKljw' );

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

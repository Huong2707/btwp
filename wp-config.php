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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[Ru E)d~1sc1zmu W/F66N$Hr_SHTt:W5t`}kL*0 AhBUkk,.rL=Yid0n$Q)<9Y<' );
define( 'SECURE_AUTH_KEY',  ':@g8Cez%m$(q5XX*&&F{5&7E-U<Np%VW?PLOib3oZuV2Xy>PZS(*`UmGJn=BB?I/' );
define( 'LOGGED_IN_KEY',    '<XpgG`d~AI+<S}X),l1,5zy6Z%H84iZs{@r/A,wIt-e~S@#D:mX0P?r LPNb|){]' );
define( 'NONCE_KEY',        '9*VEK<rJUCoX=5%}v+|f:sk;O{wT,*F<O+]^{X|8,iDpYkN7kchWVzWVzH&vf?Q)' );
define( 'AUTH_SALT',        'kjz0+Q8f~Z,&regv~Fw/#S1I+wtoLEbN!WLu;BsySs$GLQWW3R>E>XS0,jNDVLxa' );
define( 'SECURE_AUTH_SALT', '9dFwiJAo#|x=PHSLDd5dE@[k>p=bRoE0n`i|2pSpBQW/Rz])vS*Q`KzA!C1p9OsK' );
define( 'LOGGED_IN_SALT',   ',5:Bht#^!h*S}Fz2YXg]xL&Jv{5AIPf^lb/_(<5ix#((/T) {-#ez-r+!|*}pWnZ' );
define( 'NONCE_SALT',       ';|M{<)`xi}7|N`SwfYuTISf+S12kZ_q:.B3+5==es>8E{>q@L%V>cNJEA@uAHR[;' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

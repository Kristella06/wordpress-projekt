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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'strongpassword' );

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
define( 'AUTH_KEY',         'G(uRSlz^7=z.6(Au4]j0M5uuE!Zs[rAc@/2A)bSZA%K9,}FivITbB{[%S)-J+*Dg' );
define( 'SECURE_AUTH_KEY',  ',Ic/Sb@CT6v;?&tGy~I0MOvtsE8HjcCAE]^Uy1hERK.+KztU,XsH$fwD!Y86=BD<' );
define( 'LOGGED_IN_KEY',    'I3vhR.fwuf8t(uas9f7duO{@D@]!5rFa,ri)]t)~/!Ob4}>{burs#jr(zYh+zuy{' );
define( 'NONCE_KEY',        'el*otz~V:x2WmMf,Y!Q%vHk%C31XicZxpMk)LGYEQ|e%9yjMgc`>#zwj>s^*}+).' );
define( 'AUTH_SALT',        'rb}0 Xc94,vf0Msbb!!PspW[`=L`SyN/(lOq~:eRa<c5}4UwS2}oR9k6@9n9J;T:' );
define( 'SECURE_AUTH_SALT', 'iw6F(kpom|ic.>HUK3t0a=! ,J1pQqZT)FdE8e6,6YzA/exfg%N39SYXl[X5?Vxk' );
define( 'LOGGED_IN_SALT',   '~a#dVxVSR7gj)#p}Lq#K( Ht7vtqIp=%_tik0[vk9y!agv?:D|>U~JpJ*,8XI39$' );
define( 'NONCE_SALT',       'l:@|v[6gSM^*qX:+&^zP-K;&?;H?:R(l/Eq%Aog`DA6~MDD`jI]PQG&b/Q)-*[c|' );

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

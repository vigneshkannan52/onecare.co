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
define( 'DB_NAME', 'onecare.co' );

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
define( 'AUTH_KEY',         '-JwCd}b+uRP]s$+c4LD-PPb{9+j^1f+W)N&n`DF9):&qy3> -f|k=+tl N#Mnfu)' );
define( 'SECURE_AUTH_KEY',  'g[:_jfj^c$+^`LwA.Z2Iv).f>`N^U,1l~Y8?5PHLn7maTl>>6I^A;k>L:uuFB(A%' );
define( 'LOGGED_IN_KEY',    'bE5}b{JdL>uikz| xl1]</W@-a#)^n-nU;C#cJ.z^NM$XV&ORHqC>#3vz|m&NY`K' );
define( 'NONCE_KEY',        '9*j/~9ZZZR+(>MG?5B-bf&OFdM>?x)~nwCR%*YaXd3$$*nn.SpI!(gb-`0+*mT2O' );
define( 'AUTH_SALT',        '.O?eEMnnaqowo>[[1xEwn])g_uU>>{QG!]h?WrIjEX{rn`.8(Xv%gnO#l*@FM)wC' );
define( 'SECURE_AUTH_SALT', '-!wX,#RY0$9ea6/vk]`rt2ohP=5~P%YBF},4]WihL+:{B~#FVBs{cL(`qov-rHGk' );
define( 'LOGGED_IN_SALT',   't r>QGz,g3sNbUYQJM4|?lo)3y&6}HA%rKJe @w<dI7#`E^:f)h:DzR,Ss.Zb?/s' );
define( 'NONCE_SALT',       '-#O5jdFQn&WrCtM#|h$sV{nqyT}gQ1aOiU$zsQ./Hy.xITM#q#6SHqO=yz;r`+]q' );

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

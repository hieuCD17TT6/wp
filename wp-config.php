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
define( 'DB_NAME', 'Hieu' );

/** MySQL database username */
define( 'DB_USER', 'hieu' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '*xw1a.fbOyh_hw/=0;*d_}WMc:477{Z.v4<c_@L@~qe)EA4(fbofMR,sl*K4ooZP' );
define( 'SECURE_AUTH_KEY',  '2O7__E|sb.Cuf`pdJbF]aZ c35J6/+Cmg2h$MRcW?:.I>JJLT|n|n{#-/{)T:t_%' );
define( 'LOGGED_IN_KEY',    'NPg@/Eqo!l&`>ZGS2;+.BNY7t{ouyJYYlxyAKH#8o=,dE$:2F $nk{s{|<aQ]7?_' );
define( 'NONCE_KEY',        'GT Hr%R8@-C-!~0@1.MU+.(PjbcFduO`t&WJSkIfBDI[,YlGp`rR{4oqP}.j1MCC' );
define( 'AUTH_SALT',        'oNTz}RCvI:[Zdm}V#U-Zovf>W7?C8DmdUU(=&XmTS|XKo=U#r@9Kl1o0/>]ThOGh' );
define( 'SECURE_AUTH_SALT', 'i~}#*Um57_me|&#C%cZNSFKN!/17A(<S>$JT}`o wR<b^^XW[ 0]3|P1|3R75H;}' );
define( 'LOGGED_IN_SALT',   'zJ.LzQ{mb@G;Kv9VoESOs}C(SE&xyo2+_i9%m]hK-uuXP#Bt^J,^rFvL`qnM,L^m' );
define( 'NONCE_SALT',       'O^2P8/cY/t9`d.?8vG$E:rr~^hOrjPxa{um+#}TMU#v>k4..9(:@ HuiLh8bW(&>' );

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

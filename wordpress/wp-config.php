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
define( 'DB_NAME', 'dental clinic' );

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
define( 'AUTH_KEY',         'V3b`(W7khK ks9~cc1 o::FSAlT3y1Kt4#03GK#VA>uv/Wc0qfAE9m==}/riy*5n' );
define( 'SECURE_AUTH_KEY',  '4_yc%$noqb2(U8tDa?jB }#MF[+)9ROOPyK,H+#)}L|Sd29QRWX:<U{(aV|@+ T8' );
define( 'LOGGED_IN_KEY',    '`B|q]PP%f8y!s(X_$OqP!O,|2WDdu03YbA!~]{9qQ(Ti$1q/#%Ke|B~7aP9@?WsQ' );
define( 'NONCE_KEY',        'k,a.njjRAaeV:Sn{=<<_vt7gbs(d>f`@y3D@AVb.phWB-;!7@-#gIqu8Xda^w Q`' );
define( 'AUTH_SALT',        '>}ZZIZ%#Ll(!-F4[`|0_GD!7Y~Y%&g90,~0y=@i6KL6|CGgy[s)9V1kozh})TaD-' );
define( 'SECURE_AUTH_SALT', 'b**_6DYP818bXyycBn^.u|@J0{6@[=}*@CnlFYzg{$a+`wfuQ1+NUM{S1O_4O:8|' );
define( 'LOGGED_IN_SALT',   'kMC8~2/3xVxrmuG7wITr;]CoiBm9I:s`sp&hl4RpxfL,g61|R)G1:5#*l|he1H,x' );
define( 'NONCE_SALT',       'E>0#yZ GyxJ|rOY!R]nGivfdWy*b6Fl}V`M6/7|8i?C4NxTVlg!U(RyXW]<j!<Qk' );

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

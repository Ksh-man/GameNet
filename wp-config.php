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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gamenet' );

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
define( 'AUTH_KEY',         'NC6y A0oR6#9_f53=3.0M!d.sG0(G7cUV)CvAiNq.m&kZ[IopQ>FN&&M#CwYNkwR' );
define( 'SECURE_AUTH_KEY',  'lf9ujPBtyb(`Yn]!J|BnQmU<3.:Q,{HJW@T2i*8@I ]hPmW2e4MY_;94L.Ty5?|,' );
define( 'LOGGED_IN_KEY',    '+^_}OpE#WiI>9g-TL<]z<OQ^h>+lu3HU[Fk X%hz8gVCYO<S 4Jc-A0cVv%D~SZ&' );
define( 'NONCE_KEY',        'Jl{tUZ?V~4@!0(1 ;ms ;iwY+qLdG9J97]S:(0OlV=D(VI_tsYor1?VrR0#vF5mI' );
define( 'AUTH_SALT',        '<4$P$c:_E/o^F2ioH}$C!JOqu17uv0NS|MxS<B|{U*$[euD~bo+@Y*MS/{I04_?@' );
define( 'SECURE_AUTH_SALT', '`.bDp$zX{8y:0b^cy}fz<^Za*[Nxf~8(C)~grvoUqgff >jSy1UI`+SRS-*^d06*' );
define( 'LOGGED_IN_SALT',   '10A?^ %BG}Vm,)bJ^eM1tZ[XFz=/qPF;gY1URFkVsDozGteblweWdV$OftBo<?|5' );
define( 'NONCE_SALT',       '%;Ryo (r//~_fBa;l~XvN;wNvm.i|@EME),_=Yx_hXG9yx;0cjI{Q%q=zU7n~SN*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

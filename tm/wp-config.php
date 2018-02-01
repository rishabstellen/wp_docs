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
define('DB_NAME', 'wp_tm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p^8$aM^3IG.Stro~FF~E5,^&1vuS)tEM>JLn)S-DznQc;R)gD<X[e&Rz>.3WD_h+');
define('SECURE_AUTH_KEY',  'L-G*[D1}@L{O/n3?S9s;xT^5M_@vqWLr#zX|X.h/NV;zw0Qn 7N9ZpXs%YORy_b(');
define('LOGGED_IN_KEY',    'PVEOoD29,jSK<?N,uu)me]B/#|{dGy=7t,U0{AG&9=>I,SI^z:hL0-!)9Ey%<?R^');
define('NONCE_KEY',        'x1p<21oSsg0FHjcGpK5MMf~L;Ns!OeP<p5,v0}#xsay;  ecJZwVuX4=WP(g,nBz');
define('AUTH_SALT',        'e=|J_w]x[L2W/.jV]Pip[vG^&un6?23i&LmIEPtF2B9IQL~sn9Zxg1n0D![3DeYc');
define('SECURE_AUTH_SALT', 'Jv$wu%*&P@zH2Ughu1#%=h-?@a1!Vu@H?[](IK#<Y0|i03p?czI%L<B4mcDtfFv5');
define('LOGGED_IN_SALT',   '.-yK-cU=^+g;;nEfv#]ldHak;4;OzeFr|: 2(Y?4]][kLe!|k=!23G6h@Mb#7[@/');
define('NONCE_SALT',       '6Y+2ri* d2Xc-jG6T%PT3-:3eGESI=/?d@3zM~-r&=<J,E(k,|-xlRKJy.}:9>D,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

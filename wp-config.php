<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'M]BS)xp,jrW)b%o&d=pfXWx/;4g{HhtJV>r)yT^oDT],e*+hD39~9b<A{CPp! =H');
define('SECURE_AUTH_KEY',  'U&j vKuC_U+Vnb;fP$XwuC)[<yw|W8K^|N2pO7kTaYXSuToQqFb9}i#Ts`Qv0~*U');
define('LOGGED_IN_KEY',    'uOA~p53N;-mI)(Tky)dSzc}?eg7[~z&-nQWD2wcU@[WQK/hL2!CW%:*&5L? 2|nQ');
define('NONCE_KEY',        '1~|zJ#Y@#V/> c#FS$&W+xb+^Q2fE;]|m{L@=}Q/)6Fd%?hbh@uVKgArY=PDj(5e');
define('AUTH_SALT',        'TS%kQK&6rjikBc*fCLr~J6lMCPZtOejftYXv>FU<xKeE&Xw>&K!aNp t7jZeR#UD');
define('SECURE_AUTH_SALT', 'o-ci%r(ov IOwuk4jcw+3eNySQP^j~bw&58]`b*L+9:F@=*1kUp-lE<`{7S^>QLX');
define('LOGGED_IN_SALT',   'qv(,gqC@aq-L@a?*C&Bi_+a+y%qZvwe;J}QH-<@r>(Vn@ D|4{rtEe+pxi%_Ugk4');
define('NONCE_SALT',       '}AGm) hC1wb*]li#R[D|{`&9L2=F_Mqa(/7&H&V:0z7_Sp.x!5-Q{v^#~CK}-pUf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

	
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wp_project/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


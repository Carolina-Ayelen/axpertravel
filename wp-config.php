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
define( 'DB_NAME', 'axper' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`7XTW].}@xg`E1!MFq%2OBdd5nZ|o3O5Tk`{H(:]cU41)dvp;u,*Csvbb*(~!SYN' );
define( 'SECURE_AUTH_KEY',  '0c{$qkSd&vu7nG<0G7C7yE$q(yc92r-1x|a^}oZ$<CVYAdgcQ5jB$pG6o@Bb;+n&' );
define( 'LOGGED_IN_KEY',    '.g>:QjEnR7baQ<oCuuk7ub+Az{]$.Z*moy!A)OB_|<xDb<_03*M~</p,;vqB6SL ' );
define( 'NONCE_KEY',        '@9r gI7J-60*LAI{g.jo^5}4e1.S[}:!z<YP3~*g/@N8XA=q6|A;m+W5nSSu.W9v' );
define( 'AUTH_SALT',        '1r~ViIaEUdB~M#fsS;Ik}l{=oE[a&pIEK~RaoURR=?u#(!F>&WM5Fzq}Qg>1/XXe' );
define( 'SECURE_AUTH_SALT', 'FVb@jFe<K4R%9J%;8x@a7^8W`MH^V@S??%,LBOT,fQL6?bD=zzX!k%Z%*@F/LK@k' );
define( 'LOGGED_IN_SALT',   'O-]1%cF4kPW(Ksx& W5chQv;KCZ:21Fx@Dgf ckILUy|$iO96hF@cjiD=oy_EP9w' );
define( 'NONCE_SALT',       '4?_-deeR}*CP0gf2LDJ%{I)SpH/WM*MSiGL!(s(]$~:To!)CSPj0m|hdA3%?rVL6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpks_';

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

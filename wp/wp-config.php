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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '(CwHss~>#&>LxVe]+5?mJ^DP!+>U_.K5db?6kFGTJHbrLhuF%w)rrRSqI_}nzus{' );
define( 'SECURE_AUTH_KEY',   'p0$12|I7#+.j.foG!T9^wQB+8Ti%2OQ@|JG/dwZ@-Kn%6Ks0`#XU7+<IOgYUcsF$' );
define( 'LOGGED_IN_KEY',     'vCl4$^./2,[T#.N_D`;69e?e+F#6XPnt3;c_Wt:%>p(hE,i<ECHv==Zh2lqCH{3b' );
define( 'NONCE_KEY',         '6#P%hjP9EyFw%,b|/%s@.hcTY ?eqj=_ZBs=^D@vCQlNY7s}zscC8+x$|miY3n5R' );
define( 'AUTH_SALT',         'VexR$@_RP8n[R|wo&UXZbX#SU$@vcJa;?lXx_qp3#)sm3U7cGIa$M[k)o2BKym)7' );
define( 'SECURE_AUTH_SALT',  '(qNkVSS0|YE-V}U_Ntw=,55E`U<)]Q|xT:7Qc;^&u`_x%~rE8Dc6KdP?e})Ug/.2' );
define( 'LOGGED_IN_SALT',    'J!V1b~zaS%},}wzJ&gds+Ams7T,9i/iBL`^crQJ@A:8*(=pi:)Hkpo;15p@#}lUV' );
define( 'NONCE_SALT',        'lV!WG+Vg*V=5tdPjx[{~V#aZgBkL/J!mO{c{jZ MtibRGQJq@q]*zmPt?Ta{2eGa' );
define( 'WP_CACHE_KEY_SALT', '5g)TI&N4:ZM0 AO]XaJVGweDwJ%%(j3 M=B#[n_a1^]<vq gT:T^^XT$y!%UVvV^' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

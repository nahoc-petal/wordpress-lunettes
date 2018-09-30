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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',          'X)#@{nie4U;=P[}D,>HN2)v0i3~NnEQ-/64-weRi*eEE!JCf7UL*]@HwW:E]u%Hh' );
define( 'SECURE_AUTH_KEY',   '4ddnQ3W(Kk0,A>{>,k;40Aij)Rq1gN-:6i[[Olq^@tI6Z~ %&?9)z+H[e~ZlXMY@' );
define( 'LOGGED_IN_KEY',     'bTLX&V~xW+<<*Ek&bml35P]Aj|S+9n.G-^<jtDn^<XSE[5l esp$xqM,s-.}~= T' );
define( 'NONCE_KEY',         'S-ojFwmMFH9l=}v .wxf29ij7U`3yu_V~$l1@HK8UMcQo1py4;}&1O$7KpdVKH#H' );
define( 'AUTH_SALT',         'fBlez}iXQ?J@].AHw}*D_@ YVSozE2~4*^y,TQ{sVTSZ3RFLe*B)t_5QUbA[Bz,?' );
define( 'SECURE_AUTH_SALT',  'KfQMD26C^ZNh+je~@kBXw-w^m[c{HG|)Om|5Zzbo@~GE-#RYEvpEq(s_ufLFT,qc' );
define( 'LOGGED_IN_SALT',    'baVFu+?o.n?;Z]~sVWSw@Do&5^pvNcK]Hb%$D<c5ba+S9kg3Wu$3]ND{J.B&~2! ' );
define( 'NONCE_SALT',        ')eX]yQd-,.DP[GUD5k~K;3,Bwso~j1{]^8u.,Aw?`CEEp~EVgC}imqIT&R@I$AgL' );
define( 'WP_CACHE_KEY_SALT', 'jq8jpapt!(XuU>#[{oR%vhK%I.E2}[T{g~wBxeNvp#L$r1RPN)B|PXC{*)UzYUv{' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

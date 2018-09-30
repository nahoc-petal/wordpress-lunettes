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
define( 'AUTH_KEY',          '[)#kT24TQMicW[qpv_4:Wa7H0I6zWrE^T_~9dkEDv?kX->>h %Y8iQnmZ4>(x>7(' );
define( 'SECURE_AUTH_KEY',   '.F%BD)=c]%sQqH!hXUhO]k3Y#lAIV&khXy/S,eI^l^_NWiApF-v0>s?J=Y<OUOpT' );
define( 'LOGGED_IN_KEY',     'J}2WV,Z$GQ 7 W{]FRd:AEY}ZDP{M,5w`8x-4k0~FK{t&{J3 3f_VB/.>,N,.vvV' );
define( 'NONCE_KEY',         '&^9+49).fpo_P(_YsJBvq)[*$R dGrgrCfbTFT7`~CiGOKUy+*|WDm!vLBIPFymM' );
define( 'AUTH_SALT',         '0<nPhOh@mjlN  4h(c3aj=-z4LC][O;&K8hzB^+`~C8 TIx#BX[>_54~/4Ht(d#W' );
define( 'SECURE_AUTH_SALT',  '=1eP7J5qbXw&Z2PUz;#mFI!?gpFscg[!ZRd0xM#vF/ZX_wGQXceOWcGgPk0 t}]x' );
define( 'LOGGED_IN_SALT',    'QT#xm[ZSdj/WVMLaXmMf G_a>{up,A^]&RxX;#08_v+^D1T(cUW&4:jl;qO{G+Rb' );
define( 'NONCE_SALT',        'xcnz8$2^M)U%;N0_&cUyB@o~Mc<UUOHFc?qzVUf8z=!EJ_I;#?JSy x.Y;FM+`q.' );
define( 'WP_CACHE_KEY_SALT', '*hH-`<)q2[Vmrdfsju!yC]x];7}}_[0g!b}65/tGNn}uE*oiEVmGde/DqIz:(8-l' );

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

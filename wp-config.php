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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '/EBl/?:bHXwB W9!7I!^<]hvaUN:Iwhu7(R=>{G1,KtBsCss[14DRL#[Ce/Y_[ql' );
define( 'SECURE_AUTH_KEY',   'VVBD4>^3pp=36D}@zXVlfjG1d.K;DQWIpoc72 D-CvqOMT=BI&#<ng7gW<!uD!%A' );
define( 'LOGGED_IN_KEY',     'Ic-{%Vmx8E[:P}B8RQB*;CScqU<AU@yIc6+Fn`(6$Q/c_qs;rjU^$=pqmk|_v&e2' );
define( 'NONCE_KEY',         '2M[|t0ee|S`6_$] 8.<AOX2O^p1^<wp1S47zbAT=m%DhJG2<[)V7x<qR^:XKMx29' );
define( 'AUTH_SALT',         'VZElAX]0MV}<,&]r+Iid$!M]|Z~6ru(_fpQ?B%*&f.whA)]O;;V}BsVG j)Sb)9u' );
define( 'SECURE_AUTH_SALT',  '!-}D=:;O5 uh/L/eKAzwqXNB&bE*mG{?^v:d>r1XY+|<Ve8P 2t1V+o5l{?Jh_=M' );
define( 'LOGGED_IN_SALT',    'saI$jlmOkbl8|NQ$0%Ctk_She!Rh~IW]$~ZK<F!JOQG9q@8P#I|ANjQVS7?B7g$F' );
define( 'NONCE_SALT',        '_$GgZ-?7ELkqjh%U~ Y9:+6)lsUK]D)UwUMl~{vwg!|TN8Dza`E87l_m^wQ#0eW3' );
define( 'WP_CACHE_KEY_SALT', 'Zb5uz4wrpW+)3/*OKq<QN`GcL=2s=R[8Ao5%`Nc6}*/S6fh@ZWCjL1 R$a{B5P=s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'wp-paris' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'k h7gTJAltH4nE* IobO;Df_AV#WHTk!-VpfRmFD~IgNgw57=^Hg9ng-9Qos{&aY' );
define( 'SECURE_AUTH_KEY',   '}`G&NuTI5Oc/bzuWzEeW;_pF-#>`;;}KtG|$<``ul92 nTOe&hDF2WA>.2FYx^68' );
define( 'LOGGED_IN_KEY',     'oq^/([%-~D.fPGb)[)%vWe-6~_Fq!lywX=DOhoBt}Ar8^g(ifc_-+QHQQ&:q,cGE' );
define( 'NONCE_KEY',         'u?cD)c K4z.X+A|?AA+?&50baz:[*17@_DJpu~^Q}Bt9Ut(:W(_:LVz{;0GoJKy*' );
define( 'AUTH_SALT',         '`-h1BNDfe`){a8-tl2#q;z}$DyxSVQPQ]F.r30o=pK,^Yw7H[TfZYwT!v#L(m$*n' );
define( 'SECURE_AUTH_SALT',  'F|uV$,i!&*b/m/A:}C+YVg:a!HL/4Bz76[;h6:smB@p{V#U^HK<V%{z;dc]V@2Co' );
define( 'LOGGED_IN_SALT',    'txux{~A pjV,Bi,`4Au=pN{De^Ew&Ktnr8GG*owa>|Zhp(P }~E=9HZ.MdcL@4`,' );
define( 'NONCE_SALT',        'E]Ci{yC1csXZ/ak#{2GjzmlCsSw9p,SHLH Yc,#|MQVfP{1}3(wuz]O=U4.V<E35' );
define( 'WP_CACHE_KEY_SALT', 'F7M:oWiSP6tc(_SK5b5ObDNgjZg;}#7Jd5AyL=w)OsIl1$mj`<<~GNK5]zE-N^e~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xp_';




define( 'WP_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

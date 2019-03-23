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
define( 'DB_NAME', 'fieldbee' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f YcQdcJTKP8W9{/wSjnsz%ov/L `Wk826t4{_l;ZYDgM:L-:uo>%o`/?r~]8:(A' );
define( 'SECURE_AUTH_KEY',  ' |,a>ls/(+}7N esoDp{yP0<^acZ?u>:dvyQMDZ8nb#UX*s9+*ru]e;LB=NR|e-G' );
define( 'LOGGED_IN_KEY',    '1W*Y5*2n2dw!#?x2W&TYJSVPllckOvwU-`=P3YBgFG8sp4,LH5IF[3NB1}KPIH3e' );
define( 'NONCE_KEY',        '`6:~l[g?5)Ma| xfEp.Os6%1N9BglT,1>pJaMiiC4z[+)~~!Fs-7Lr]!NdX2K%&&' );
define( 'AUTH_SALT',        ',E=qBDS8Sa~gxG)w$B5~Eul6uo%>f@:=B|U<hMppjZy;*V#FV}lf*UR&q4GH2V`$' );
define( 'SECURE_AUTH_SALT', 'RF6:y8U]93FTsE|l)EkG%(f^;.Tuf?,f`~9em$q_kqR9PFfv`kA8I]4)Wr[lhtxI' );
define( 'LOGGED_IN_SALT',   'GXS[9_,M`ek(k/sns`<+SFFS]5#wx~sz-S2:Vh=&-Ce.;JZS,Pm]QJfK%vKmL5_.' );
define( 'NONCE_SALT',       '#/huf05UPWqD?NL/-1>3lye*{Xc< O/,|FO6w^2+/@t`|a3)9xzQOe7JxMRp]:_5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

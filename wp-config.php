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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digic_studio' );

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
define( 'AUTH_KEY',         '25Z4l?(u;FC;(8}F|8pH<ZzA(DB@[w@eRJ&Nqj38 5o!J/FL(oIvj{`2/!k>g!xh' );
define( 'SECURE_AUTH_KEY',  '|:y6%s.&n1=sx3~OBBdNADAI,BE RaBa&,X3~y-:]2,R{7Zm.y>9U}[_[S!mHR~9' );
define( 'LOGGED_IN_KEY',    'J7%((z[xQg]n-tq&BjdCB0+EFMi(8?`<-d1Zu4D xhkYcyvqPkx&~HlB4#7.ADyX' );
define( 'NONCE_KEY',        '}d.FC-l@V8G,XX?%SYw|r)1Bc!+(K6g(tz~#pR];9UpYKKMo#whDRpTn4%lOF}Qo' );
define( 'AUTH_SALT',        'Newn>p5Nph=C<FHTcAPNZ5[w#2v].x{/il|PJf$Fp@j,{}JB93O&Bzj]%E9uouub' );
define( 'SECURE_AUTH_SALT', 'xT_h?WGH$X5x0mH_i8H$O)Rw{`,`xN%pt|RI@^Q8i@Mtek/U2Rg+-!@x*s4/]gY]' );
define( 'LOGGED_IN_SALT',   'U+ ne]S~X/>/$rL/D(`,tZCn;fgu*P!ei=iOTH(Qx=kedPUUL4@=(R At}MArCd=' );
define( 'NONCE_SALT',       'H3e@#@K4(8Z$/P.xiV,<s^h.3<z/!tNI=!I6nU!djK:}8w x>zSMnt&_nJB<71N$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

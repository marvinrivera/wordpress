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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6B0q2b9F8e}`g5Cvo=ovQ!Le<Ddy{Qn<.Dul#`h?TsiqU ]@28`[isf+[B?/=Y#R' );
define( 'SECURE_AUTH_KEY',  '=K^GZh%9wRJw:S.tf:x-_Dv4_M}AcI]M8$fCRZ^U30Q82Hl1s-VAdd$IYsl_|XwO' );
define( 'LOGGED_IN_KEY',    'm;bPfT)na;2*@SZ/]@kFv n`a~3s;wyZ>3IIk+lw=1*~|rNMtP|mcB/mmsQ8z4#{' );
define( 'NONCE_KEY',        'j)5#|{2~<GE@eK13JTF*=2?1yo}jv=F6H3!-$mkq,.EwFat.-Z.6)3?5+!1LBe#t' );
define( 'AUTH_SALT',        '9G|C16b|{HJ_*P~Z:w]m6.8G6hr$B{s<06!q^%l$IY9To_xx.7:gPC=-sRw4v&_[' );
define( 'SECURE_AUTH_SALT', '(o]oZiEQ_YJ#@sV&Cjw%z8K55*2~ed+Gco24s-g]`vD0=RO9[e6I/;O;IO{EULIm' );
define( 'LOGGED_IN_SALT',   '_J>`r[CFMlh%s4 >5~bF?(7X9MwxWj&@iy+*<*KhAk9F+r#;xHX>Cc-qr28SS3z?' );
define( 'NONCE_SALT',       'C8 eeN7o|$Vh*/#(1AUk6$Tknsqo<:bf>l@(`BO  %}LO6ZuqM.CX=/OQ7%~R[ph' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'CONCATENATE_SCRIPTS', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

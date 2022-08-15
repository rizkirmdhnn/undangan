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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nikahan' );

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
define( 'AUTH_KEY',         '|lK3X$&7pW1Cj2yLZzIP9JMiXc(BC}nVZ79rw3GXq[#*r3KGAFJf}aXM9a#v5)Og' );
define( 'SECURE_AUTH_KEY',  'C&l$u`POHt,Vh*D}?l8wY=85e}I|ZdfqV8{Y+X*4Y?*`[/,^X6}sp0{TrL7R4W`4' );
define( 'LOGGED_IN_KEY',    '`lQgh2w^Lw_?H_$rT&M~A>h}oOJ`D[>|AvU-!6Ea;=UkND u1Ad>]4)peE8m#tX~' );
define( 'NONCE_KEY',        'a8VF|,=~#eaBn/nC] r7dzr_cV5&`i$=fd}YeoK,9K}<t9+B`iTKdH*>CP|>h;go' );
define( 'AUTH_SALT',        '9a!=01&B`n?rS:>Z5,|~e+~zr*<mf_enz/[nK<a?2BYEw3$$(T=9T0%7wbuNe-pX' );
define( 'SECURE_AUTH_SALT', '!3M8/Sj0KV{*{T4(uF$vWm0s#n8o@`6lR5NQBmD4uS.U-?0lJR%fL:I^-`) Zddg' );
define( 'LOGGED_IN_SALT',   '.LZMq2k*]Rd.o[:A]%>KT_K05IDAYDcKIgvg>y&a~k t|T*.:(ON^%nGU*{p%JxV' );
define( 'NONCE_SALT',       'gQ2iwG9Nd)MSeEz3Xpv7&yTkC^s+b.QE}p^cbxtW6PbdTfhlfUQl3ViMZk^X1-$;' );

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

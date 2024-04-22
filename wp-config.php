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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'H~zD^nV(CgSu0`KYgj;R#PTYY6Z?*qHSbxTTvG>kBBmyQ7SqzM.MV2s8lcLPH{8d' );
define( 'SECURE_AUTH_KEY',  '4>6fwLk3Tbr{-4`EKH(5%x3IKfpe=9YPa9h3 Y:KRC0tK+.a~%$RGtIrvoeTc8d1' );
define( 'LOGGED_IN_KEY',    '?0nZZKzuy~Nr{Yjn,2.yZKj{jEA*sIFIY}r2.efQfNhkX~@P{}|xY4%SFXx(BLVh' );
define( 'NONCE_KEY',        '+:ck67vza)gNTw9 nZq&;Cg;/.J@+p1u&ZA.Lk1AAn^|?6rZ+I|-({a%~l~?Ziy*' );
define( 'AUTH_SALT',        ')j@Q#pnp@8!66vkLcex^!b93uh(uHF!k,3,KTcQAUqH>o0:mw4wu:BQF/z&!xWo3' );
define( 'SECURE_AUTH_SALT', '1x6B]p}velLo/8(r6Sv6&Ei#uH^D}|q%K 32)VLFU U{InLXQDf,gAYF~Z*!&nFP' );
define( 'LOGGED_IN_SALT',   'SVp1D`T4dJUBp=w8voL;WeP]F!x$iV}lR]xCC;k3O,*Gt>LW0VE9g0$*m*x`w!@x' );
define( 'NONCE_SALT',       'qc9TLBS=1$Pssyxl#:|zT<Z^p*l(FYiX/^G-dWzxEFi/Rhqj7mj0wr1X#$c}NvrW' );

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
